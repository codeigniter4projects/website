<?php

namespace App\Entities\GitHub;

use CodeIgniter\Entity\Entity;
use CodeIgniter\HTTP\URI;

/**
 * Repo Entity
 *
 * Represents a GitHub repo.
 *
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

	/**
	 * Intercepts magic access to check for URLs.
	 *
	 * @param string $key
	 *
	 * @return mixed
	 */
	public function __get(string $key)
	{
		$result = parent::__get($key);

		return is_string($result) && is_int(strpos($key, 'url')) ? new URI($result) : $result;
	}
}
