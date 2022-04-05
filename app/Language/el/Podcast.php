<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'feed' => 'Ροή RSS Podcast',
    'season' => 'Σεζόν {seasonNumber}',
    'list_of_episodes_year' => '{year} επεισόδια ({episodeCount})',
    'list_of_episodes_season' =>
        'Σεζόν {seasonNumber} επεισόδεια ({episodeCount})',
    'no_episode' => 'Δεν βρέθηκε επεισόδιο!',
    'follow' => 'Ακολουθήστε',
    'followTitle' => 'Ακολουθήστε το {actorDisplayName} στο fediverse!',
    'followers' => '{numberOfFollowers, plural,
        one {<span class="font-semibold">#</span> ακόλουθος}
        other {<span class="font-semibold">#</span> ακόλουθοι}
    }',
    'posts' => '{numberOfPosts, plural,
        one {<span class="font-semibold">#</span> δημοσίευση}
        other {<span class="font-semibold">#</span> δημοσιεύσεις}
    }',
    'activity' => 'Δραστηριότητα',
    'episodes' => 'Επεισόδια',
    'episodes_title' => 'Επεισόδια του {podcastTitle}',
    'about' => 'Σχετικά με',
    'stats' => [
        'title' => 'Στατιστικά',
        'number_of_seasons' => '{0, plural,
            one {<span class="font-semibold">#</span> σεζόν}
            other {<span class="font-semibold">#</span> σεζόνς}
        }',
        'number_of_episodes' => '{0, plural,
            one {<span class="font-semibold">#</span> επισόδειο}
            other {<span class="font-semibold">#</span> επισόδεια}
        }',
        'first_published_at' => 'Το πρώτο επεισόδιο δημοσιεύθηκε στις <span class="font-semibold">{0, date, medium}</span>',
    ],
    'sponsor' => 'Χορηγός',
    'funding_links' => 'Σύνδεσμοι χρηματοδότησης για το {podcastTitle}',
    'find_on' => 'Βρείτε το {podcastTitle} στο',
    'listen_on' => 'Ακούστε το',
    'persons' => '{personsCount, plural,
        one {# άτομο}
        other {# άτομα}
    }',
    'persons_list' => 'Άτομα',
];
