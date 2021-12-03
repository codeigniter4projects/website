<?php

namespace App\Entities;

use CodeIgniter\Entity;
use CodeIgniter\I18n\Time;

/**
 * Class Post
 *
 * Represents a single blog post,
 * and provides utility methods to
 * simplify working with them in views.
 */
class Post extends Entity
{
    /**
     * Returns the link to the page.
     */
    public function link()
    {
        return site_url('/news/' . $this->slug);
    }

    /**
     * Returns all tags for this post.
     *
     * @return array|string[]
     */
    public function getTags(): array
    {
        if (empty($this->attributes['tags'])) {
            return [];
        }

        $tags = explode(',', $this->attributes['tags']);
        $tags = array_map(static function ($item) {
            return trim($item);
        }, $tags);

        return $tags;
    }

	/**
	 * Formats the post date.
	 *
	 * @param string $format
	 *
	 * @return string
	 * @throws \Exception
	 */
	public function formatDate(string $format = 'Y.m.d'): string
	{
		if (empty($this->date)) {
			return '';
		}

		return Time::parse($this->date)->format($format);
	}
}
