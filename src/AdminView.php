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
        $viewParsed = self::parseView($viewHTML);
        $viewParams = collect($viewParsed->params)->recursive(); // AdminViewServiceProvider 中有設定 Collection 擴展
        $viewContent = $viewParsed->content;
        $viewFile = request()->ajax() ? 'admin::carrier-ajax' : 'admin::carrier';

        return view($viewFile, compact('viewContent', 'viewParams'), $mergeData);
    }

    protected static function parseView($viewHTML)
    {
        $viewParsed = YamlFrontMatter::parse($viewHTML);

        return (object) [
            'content' => $viewParsed->body(),
            'params' => $viewParsed->matter(),
        ];
    }
}
