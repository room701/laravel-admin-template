<?php

namespace Dennykuo\AdminView;

use Spatie\YamlFrontMatter\YamlFrontMatter;

class AdminView
{
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param  string|null  $view
     * @param  \Illuminate\Contracts\Support\Arrayable|array  $data
     * @param  array  $mergeData
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public static function make($view = null, $data = [], $mergeData = [])
    {
        $viewHTML = view($view, $data, $mergeData)->toHtml();
        $viewParsed = YamlFrontMatter::parse($viewHTML);
        $content = $viewParsed->body();
        $viewParams = $viewParsed->matter();
        $viewParams = collect($viewParams)->recursive(); // AdminViewServiceProvider 中有設定 Collection 擴展
        $viewFile = request()->ajax() ? 'admin-view::carrier-ajax' : 'admin-view::carrier';

        return view($viewFile, compact('content', 'viewParams'), $mergeData);
    }
}
