<?php

namespace Dennykuo\AdminFerry\Concerns;

trait PackageSetting
{
    private static $viewNamespace = 'admin-ferry';
    private static $publishConfigName = 'admin-ferry';

    private static $assetsLinkSrcPath = 'vendor/dennykuo/laravel-admin-ferry/assets'; // 相對於 base path
    private static $publishAssetsPath = 'vendor/laravel-admin-ferry'; // 相對於  public path
}
