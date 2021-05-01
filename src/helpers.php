<?php

use Dennykuo\AdminView\AdminView;


if (! function_exists('adminView')) {
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param  string|null  $view
     * @param  \Illuminate\Contracts\Support\Arrayable|array  $data
     * @param  array  $mergeData
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    function adminView($view = null, $data = [], $mergeData = [])
    {
        return AdminView::make($view, $data, $mergeData);
    }
}

