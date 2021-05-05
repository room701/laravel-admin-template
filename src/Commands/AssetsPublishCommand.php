<?php

namespace Dennykuo\AdminView\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class AssetsPublishCommand extends Command
{
    protected $signature = 'laravel-admin-view:assets-publish';

    protected $description = 'Publish/update laravel-admin-view assets';

    public function handle()
    {
        $params = [
            '--tag' => 'laravel-admin-view:assets',
            '--force' => true,
        ];

        $this->call('vendor:publish', $params);
    }
}
