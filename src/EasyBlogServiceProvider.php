<?php

namespace Barbosa\EasyBlog;

use Barbosa\EasyBlog\Commands\EasyBlogCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class EasyBlogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('easyblog')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_posts_table')
            ->hasRoute('web')
            ->hasCommand(EasyBlogCommand::class);
    }
}
