## Install

``` composer require dennykuo/laravel-admin-ferry:dev-master ```

若要連結本地 package，composer.json 中新增，路徑可能會有修改，options.symlink 為 link dir 方式

```
"repositories": {
    "dennykuo/laravel-admin-ferry": {
        "type": "path",
        "url": "~/Dropbox/02-個人專案/laravel-admin-template/packages/dennykuo/laravel-ferry-view",
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

## Icon font

- eva icons：
https://akveo.github.io/eva-icons
分為 js、css 形式，目前使用 css 形式
