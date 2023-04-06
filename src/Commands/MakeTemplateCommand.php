<?php

namespace Dennykuo\AdminFerry\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Dennykuo\AdminFerry\Concerns\PackageSetting;

class MakeTemplateCommand extends Command
{
    use PackageSetting;

    protected $signature = 'laravel-admin-ferry:make-template';

    protected $description = 'Make laravel-admin-ferry template file';

    public function handle()
    {
        // template 名稱
        $view = $this->choice(
            '想要哪一個 template',
            static::$templateList
        );

        // 產出位置 (resources/views/{$outputDir})
        $outputDir = $this->anticipate(
            '產出的 view dir 位置 (於 resources/views/ 下)',
            ['', 'admin']
        );

        // 產出檔案名 (不需 blade.php 副檔名)
        $outputViewName = $this->ask(
            '產出的檔案名 (不需 blade.php 副檔名)'
        );

        $templateSourcePath = base_path(static::$templateSourcePath); // 相對於 base path
        $templateOutputPath = base_path(static::$templateOutputPath) .'/'. $outputDir; // 相對於 base path

        $templateSourceFile = "{$templateSourcePath}/{$view}.blade.php";
        $templateOutputFile = "{$templateOutputPath}/{$outputViewName}.blade.php";

        // 如果已經有同名檔案，終止
        if (file_exists($templateOutputFile)) {
            return $this->error('已位置有此檔案，請重新設定');
        }

        // 若沒有資料夾，新增資料夾，權限為 0755
        if (! is_dir($templateOutputPath) && ! mkdir($templateOutputPath, 0755)) {
            return $this->error('資料夾新增錯誤，請檢查權限');
        }

        // 複製檔案
        copy($templateSourceFile, $templateOutputFile);

        $this->info('laravel-admin-ferry template 產出完成');
    }
}
