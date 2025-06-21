<?php

namespace Barbosa\EasyBlog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Barbosa\EasyBlog\EasyBlog
 */
class EasyBlog extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Barbosa\EasyBlog\EasyBlog::class;
    }
}
