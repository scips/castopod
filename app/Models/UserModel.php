<?php

/**
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Models;

class UserModel extends \Myth\Auth\Models\UserModel
{
    protected $returnType = \App\Entities\User::class;

    public function getPodcastContributors($podcastId)
    {
        if (!($found = cache("podcast{$podcastId}_contributors"))) {
            $found = $this->select('users.*, auth_groups.name as podcast_role')
                ->join('users_podcasts', 'users_podcasts.user_id = users.id')
                ->join(
                    'auth_groups',
                    'auth_groups.id = users_podcasts.group_id'
                )
                ->where('users_podcasts.podcast_id', $podcastId)
                ->findAll();

            cache()->save("podcast{$podcastId}_contributors", $found, DECADE);
        }

        return $found;
    }

    public function getPodcastContributor($user_id, $podcast_id)
    {
        return $this->select(
            'users.*, users_podcasts.podcast_id as podcast_id, auth_groups.name as podcast_role'
        )
            ->join('users_podcasts', 'users_podcasts.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = users_podcasts.group_id')
            ->where([
                'users.id' => $user_id,
                'podcast_id' => $podcast_id,
            ])
            ->first();
    }
}