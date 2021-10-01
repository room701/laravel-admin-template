<?php

namespace Dennykuo\AdminFerry\Concerns;

trait PackageSetting
{
    private static $viewNamespace = 'admin-ferry';
    private static $publishConfigName = 'admin-ferry';

    private static $assetsLinkSrcPath = 'vendor/dennykuo/laravel-admin-ferry/assets';
    private static $publishAssetsPath = 'public/vendor/laravel-admin-ferry';
}
