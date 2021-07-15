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
        return __DIR__.'/../'. ltrim($path, '/');
    }
}

if (! function_exists('admin_asset')) {
    function admin_asset($path = null)
    {
        return '/'. config('admin-ferry.assets-path') .'/'. ltrim($path, '/');
    }
}

if (! function_exists('admin_asset_mix')) {
    function admin_asset_mix($path = null)
    {
        $manifestDirectory = rtrim(admin_asset(), '/');
        return mix(ltrim($path, '/'), $manifestDirectory);
    }
}
