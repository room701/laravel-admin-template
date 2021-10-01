<?php

namespace Dennykuo\AdminFerry\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Dennykuo\AdminFerry\Concerns\PackageSetting;

class AssetsPublishCommand extends Command
{
    use PackageSetting;

    protected $signature = 'laravel-admin-ferry:assets-publish';

    protected $description = 'Publish/update laravel-admin-ferry assets';

    public function handle()
    {
        $assetsLinkSrcPath = base_path(static::$assetsLinkSrcPath);
        $publishAssetsPath = base_path(static::$publishAssetsPath);

        // 創建目標目錄的上一層目錄 (ln 指令需要)
        $prependDir = \Str::beforeLast($publishAssetsPath, '/'); // ex: public/vendor

        if (! File::isDirectory($prependDir)) {
            File::makeDirectory($prependDir);
        }

        // 先刪除目錄 link (防止舊目錄存在，導致路徑錯誤)，因是 link 所以使用 delete file 而非 delete directory
        File::delete($publishAssetsPath);

        // 連結目錄
        system("ln -s {$assetsLinkSrcPath} {$publishAssetsPath}"); // ln -s {來源完整路徑} {目標路徑(以當前位置為基準)}

        $this->info('laravel-admin-ferry 的 assets 設定完成');
    }
}
