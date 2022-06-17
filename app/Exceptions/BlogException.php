<?php

namespace App\Exceptions;

use Exception;

class BlogException extends Exception
{
    public static function forInvalidContent()
    {
        return new static(lang('Blog.invalidContent'));
    }
}
