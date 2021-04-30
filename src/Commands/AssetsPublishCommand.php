<?php

namespace Dennykuo\AdminView\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class AssetsPublishCommand extends Command
{
    protected $signature = 'laravel-admin-template:assets-publish';

    protected $description = '上傳 laravel-admin-template 的 assets';

    public function handle()
    {
        $params = [
            '--tag' => 'laravel-admin-template',
            '--force' => true,
        ];

        $this->call('vendor:publish', $params);
    }
}
