<?php

use Dennykuo\AdminFerry\AdminFerry;

if (! function_exists('adminView')) {
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param  string|null  $view
     * @param  \Illuminate\Contracts\Support\Arrayable|array  $data
     * @param  array  $mergeData
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    function adminView(\Illuminate\View\View $view)
    {
        return AdminFerry::make($view);
    }
}

if (! function_exists('admin_base_path')) {
    function admin_base_path($path = null)
    {
        $basePath = __DIR__.'/../';

        if ($path === null) {
            return $basePath;
        }

        return $basePath . ltrim($path, '/');
    }
}

if (! function_exists('admin_asset')) {
    function admin_asset($path = null)
    {
        $assetsPath = config('admin-ferry.assets-path', public_path('vendor/laravel-admin-ferry'));
        $assetsPath = '/'. $assetsPath .'/';

        if ($path === null) {
            return $assetsPath;
        }

        return $assetsPath . ltrim($path, '/');
    }
}
