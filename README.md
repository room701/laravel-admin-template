# 開發備註

使用 Vite (非 Laravel Vite 集成) 作為資源編譯，因此使用套件的主程式可以自由使用 Vite 或 Laravel Vite。

考量使用套件的主程式可能也會使用 TailwindCSS 或 WindiCSS，為防止樣式衝突，
套件的 TailwindCSS 樣式都不寫在 tag class 上，只做 CSS class 命名。

----------------------------------------------------------

# V1 版本依賴

- Frontend
    - Builder: Vite or Laravel Vite | Vite
    - Framework: Vue or Alpine
    - CSS Framework: WindyCSS or Tailwind | Tailwind
    - AJAX: HTMX or Inertia or livewire | livewire
    - ICON: Fontawasome or eva-icons or css.gg | Fontawasome
- PHP:
    - yaml: spatie/yaml-front-matter
    - form: laravelcollective/html or protonemedia/laravel-form-components

考量 components 要使用 blade 還是 Vue

----------------------------------------------------------

## Install

``` composer require dennykuo/laravel-admin-ferry:dev-master ```

若要連結本地 package 做開發及測試時，在 composer.json 中新增下列 repositories 設定，
options.symlink 為 true 表示 link dir 的方式引入

```
"repositories": {
    "dennykuo/laravel-admin-ferry": {
        "type": "path",
        "url": "~/{path}/dennykuo/laravel-ferry-view",
        "options": {
            "symlink": true
        }
    }
},
```

## Publish Config

第一次運行時執行

``` php artisan vendor:publish --tag=laravel-admin-ferry:config ```

## Publish/update assets

套件的 assets 有更新都要再次發佈做更新

``` php artisan laravel-admin-ferry:assets-publish ```

## view 使用方式

controller 中

```
$data = 'foo';
$view = view('admin.index', compact('data'));
return adminView($view);
```

每個 view 都可藉由 yaml 做相關設定
目前有以下參數

```
page:
  name: {$pageName}
breadcrumb:
  {$name}: {$url}
```

view 中引用 blade components 的 nameapsce 為 x-admin，如下

<x-admin-ferry::foo.bar />

## TODO

publish 範本

## 套件名稱參考

- skeleton
- shell
- outline
- ferry
- broker

## 套件參考
- https://github.com/turbolinks/turbolinks
- htmx

## 日期選擇器套件參考
- https://mymth.github.io/vanillajs-datepicker
- https://icehaunter.github.io/vue3-datepicker/
- https://vcalendar.io
- https://github.com/chronotruck/vue-ctk-date-time-picker
- https://github.com/weifeiyue/vue-datepicker-local
- https://github.com/mengxiong10/vue2-datepicker
- https://github.com/t1m0n/air-datepicker
    日期範圍需要輸入 js Date 格式，稍不便，作者很久沒維護了
- https://github.com/uxsolutions/bootstrap-datepicker
- https://github.com/qiuyaofan/datepicker
- https://mcdatepicker.netlify.app
- https://github.com/livelybone/vue-datepicker
