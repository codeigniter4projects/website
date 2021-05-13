<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class GitHub extends BaseConfig
{
	/**
	 * Cache expiration time for GitHub data
	 *
	 * @var int
	 */
	public $expires = HOUR * 4;
}
