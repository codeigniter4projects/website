<?php

namespace App\Entities\GitHub;

use CodeIgniter\Entity\Entity;
use CodeIgniter\HTTP\URI;

/**
 * Contributor Entity
 *
 * Represents a contributor to
 * a GitHub repo.
 *
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
     *
     * @return string
     */
    protected function getStars(): string
    {
        $result         = self::STAR;
        $$contributions = (int) $this->attributes['contributions'];

        while ($contributions > 9)
        {
            $result .= $this->astar;

            $contributions /= 10;
        }

        return $result;
    }
}
