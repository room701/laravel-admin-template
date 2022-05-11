<?php

namespace Dennykuo\AdminFerry;

use Spatie\YamlFrontMatter\YamlFrontMatter;

class AdminFerry
{
    /**
     * 處理內容 view，分析頁面的 YAML 變數及內容。視請求是否為 ａjax 做不同頁面外圍包裹後回應
     *
     * @param \Illuminate\View\View $view
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public static function make(\Illuminate\View\View $view)
    {
        $viewHTML = $view->toHtml();
        $viewParsed = self::parseView($viewHTML);
        $viewParams = collect($viewParsed->params)->recursive(); // AdminFerryServiceProvider 中有設定 Collection 擴展
        $viewContent = $viewParsed->content;
        $viewWrapper = request()->ajax() ? 'admin-ferry::carrier-ajax' : 'admin-ferry::carrier';

        return view()->make($viewWrapper, compact('viewContent', 'viewParams'));
    }

    protected static function parseView(string $viewHTML)
    {
        $viewParsed = YamlFrontMatter::parse($viewHTML);

        return (object) [
            'content' => $viewParsed->body(),
            'params' => $viewParsed->matter(),
        ];
    }
}
