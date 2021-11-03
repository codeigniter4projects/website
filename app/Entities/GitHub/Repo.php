<?php

namespace App\Entities\GitHub;

use CodeIgniter\Entity\Entity;

/**
 * Repo Entity
 *
 * Represents a GitHub repo.
 */
class Repo extends Entity
{
    use URITrait;

    protected $dates = [
        'created_at',
        'updated_at',
        'pushed_at',
    ];
    protected $casts = [
        'id'           => 'int',
        'private'      => 'bool',
        'fork'         => 'bool',
        'owner'        => 'object',
        'license'      => 'object',
        'organization' => 'object',
    ];
}
