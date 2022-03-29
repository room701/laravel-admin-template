<?php

namespace Dennykuo\AdminFerry\Concerns;

trait PackageSetting
{
    private static $viewNamespace = 'admin-ferry';
    private static $publishConfigName = 'admin-ferry';

    private static $assetsLinkSrcPath = 'vendor/dennykuo/laravel-admin-ferry/assets'; // base path 下
    private static $publishAssetsPath = 'vendor/laravel-admin-ferry'; // public path 下
}
