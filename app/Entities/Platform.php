<?php

/**
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

namespace App\Entities;

use CodeIgniter\Entity;

class Platform extends Entity
{
    protected $casts = [
        'slug' => 'string',
        'type' => 'string',
        'label' => 'string',
        'home_url' => 'string',
        'submit_url' => '?string',
        'link_url' => '?string',
        'link_content' => '?string',
        'is_visible' => '?boolean',
        'is_on_embeddable_player' => '?boolean',
    ];
}
