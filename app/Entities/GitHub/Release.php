<?php

namespace App\Entities\GitHub;

use CodeIgniter\Entity\Entity;
use CodeIgniter\HTTP\URI;
use CodeIgniter\I18n\Time;

/**
 * Release Entity
 *
 * Represents a GitHub release in a standardized
 * format from API releases and tags.
 *
 * @property string     $author
 * @property Time       $created_at
 * @property URI        $download_url
 * @property int|string $id
 * @property string     $name
 * @property bool       $prerelease
 * @property string     $tag
 * @property URI        $url
 */
class Release extends Entity
{
    use URITrait;

    protected $dates = [
        'created_at',
    ];
    protected $casts = [
        'version'    => 'string',
        'prerelease' => 'bool',
    ];
}
