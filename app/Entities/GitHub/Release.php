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
 * @property int|string $id
 * @property string $name
 * @property string $tag
 * @property string $author
 * @property bool $prerelease
 * @property URI $url
 * @property URI $download_url
 * @property Time $created_at
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
