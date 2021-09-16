<?php

namespace App\Entities\GitHub;

use CodeIgniter\Entity\Entity;

/**
 * Contributor Entity
 *
 * Represents a contributor to
 * a GitHub repo.
 */
class Contributor extends Entity
{
    use URITrait;

    public const STAR = '★';

    protected $casts = [
        'id'            => 'int',
        'site_admin'    => 'bool',
        'contributions' => 'int',
    ];

    /**
     * Return numbers of contributions
     * represetned as stars.
     */
    protected function getStars(): string
    {
        $length = strlen((string) $this->attributes['contributions']);

        return str_repeat(self::STAR, $length);
    }
}
