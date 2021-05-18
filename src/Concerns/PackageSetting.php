<?php

namespace Dennykuo\AdminView\Concerns;

trait PackageSetting
{
    private static $viewNamespace = 'admin';
    private static $assetsLinkSrcPath = 'vendor/dennykuo/laravel-admin-view/assets';
    private static $publishAssetsPath = 'vendor/laravel-admin-view';
    private static $publishConfigName = 'admin-view';
}
