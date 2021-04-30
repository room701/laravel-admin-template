<?php

namespace Dennykuo\AdminView;

use Spatie\YamlFrontMatter\YamlFrontMatter;

class AdminView
{
    public static function make($view = null, $data = [], $mergeData = [])
    {
        $viewHTML = view($view, $data, $mergeData)->toHtml();
        $viewParsed = YamlFrontMatter::parse($viewHTML);
        $params = $viewParsed->matter();
        $content = $viewParsed->body();

        return view('admin-view::carrier', compact('content') + $params, $mergeData);
    }
}
