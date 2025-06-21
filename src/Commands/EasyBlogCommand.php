<?php

namespace Barbosa\EasyBlog\Commands;

use Illuminate\Console\Command;

class EasyBlogCommand extends Command
{
    public $signature = 'easy-blog';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
