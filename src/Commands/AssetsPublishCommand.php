<?php

namespace Dennykuo\AdminView\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Dennykuo\AdminView\Concerns\PackageSetting;

class AssetsPublishCommand extends Command
{
    use PackageSetting;

    protected $signature = 'laravel-admin-view:assets-publish';

    protected $description = 'Publish/update laravel-admin-view assets';

    public function handle()
    {
        $prependDirName = \Str::before(static::$publishAssetsPath, '/'); // ex: vendor
        if(! File::isDirectory(public_path($prependDirName))){
            File::makeDirectory(public_path($prependDirName, 0755, true, true));
        }

        $source = base_path(static::$assetsLinkSrcPath);
        $to = 'public/' . static::$publishAssetsPath;
        system("ln -s {$source} {$to}");

        $this->info('laravel-admin-view 的 assets 設定完成');
    }
}
