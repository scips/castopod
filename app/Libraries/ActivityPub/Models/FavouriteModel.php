<?php

declare(strict_types=1);

/**
 * @copyright  2021 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace ActivityPub\Models;

use ActivityPub\Activities\LikeActivity;
use ActivityPub\Activities\UndoActivity;
use ActivityPub\Entities\Actor;
use ActivityPub\Entities\Favourite;
use ActivityPub\Entities\Note;
use CodeIgniter\Events\Events;
use Michalsn\Uuid\UuidModel;

class FavouriteModel extends UuidModel
{
    /**
     * @var string
     */
    protected $table = 'activitypub_favourites';

    /**
     * @var string[]
     */
    protected $uuidFields = ['note_id'];

    /**
     * @var string[]
     */
    protected $allowedFields = ['actor_id', 'note_id'];

    /**
     * @var string
     */
    protected $returnType = Favourite::class;

    /**
     * @var bool
     */
    protected $useTimestamps = true;

    protected $updatedField;

    public function addFavourite(Actor $actor, Note $note, bool $registerActivity = true): void
    {
        $this->db->transStart();

        $this->insert([
            'actor_id' => $actor->id,
            'note_id' => $note->id,
        ]);

        model('NoteModel')
            ->where('id', service('uuid') ->fromString($note->id) ->getBytes(),)
            ->increment('favourites_count');

        if ($registerActivity) {
            $likeActivity = new LikeActivity();
            $likeActivity->set('actor', $actor->uri)
                ->set('object', $note->uri);

            $activityId = model('ActivityModel')
                ->newActivity(
                    'Like',
                    $actor->id,
                    null,
                    $note->id,
                    $likeActivity->toJSON(),
                    $note->published_at,
                    'queued',
                );

            $likeActivity->set('id', url_to('activity', $actor->username, $activityId));

            model('ActivityModel')
                ->update($activityId, [
                    'payload' => $likeActivity->toJSON(),
                ]);
        }

        Events::trigger('on_note_favourite', $actor, $note);

        model('NoteModel')
            ->clearCache($note);

        $this->db->transComplete();
    }

    public function removeFavourite(Actor $actor, Note $note, bool $registerActivity = true): void
    {
        $this->db->transStart();

        model('NoteModel')
            ->where('id', service('uuid') ->fromString($note->id) ->getBytes(),)
            ->decrement('favourites_count');

        $this->db
            ->table('activitypub_favourites')
            ->where([
                'actor_id' => $actor->id,
                'note_id' => service('uuid')
                    ->fromString($note->id)
                    ->getBytes(),
            ])
            ->delete();

        if ($registerActivity) {
            $undoActivity = new UndoActivity();
            // get like activity
            $activity = model('ActivityModel')
                ->where([
                    'type' => 'Like',
                    'actor_id' => $actor->id,
                    'note_id' => service('uuid')
                        ->fromString($note->id)
                        ->getBytes(),
                ])
                ->first();

            $likeActivity = new LikeActivity();
            $likeActivity
                ->set('id', base_url(route_to('activity', $actor->username, $activity->id),),)
                ->set('actor', $actor->uri)
                ->set('object', $note->uri);

            $undoActivity
                ->set('actor', $actor->uri)
                ->set('object', $likeActivity);

            $activityId = model('ActivityModel')
                ->newActivity(
                    'Undo',
                    $actor->id,
                    null,
                    $note->id,
                    $undoActivity->toJSON(),
                    $note->published_at,
                    'queued',
                );

            $undoActivity->set('id', url_to('activity', $actor->username, $activityId));

            model('ActivityModel')
                ->update($activityId, [
                    'payload' => $undoActivity->toJSON(),
                ]);
        }

        Events::trigger('on_note_undo_favourite', $actor, $note);

        model('NoteModel')
            ->clearCache($note);

        $this->db->transComplete();
    }

    /**
     * Adds or removes favourite from database and increments count
     */
    public function toggleFavourite(Actor $actor, Note $note): void
    {
        if (
            $this->where([
                'actor_id' => $actor->id,
                'note_id' => service('uuid')
                    ->fromString($note->id)
                    ->getBytes(),
            ])->first()
        ) {
            $this->removeFavourite($actor, $note);
        } else {
            $this->addFavourite($actor, $note);
        }
    }
}
