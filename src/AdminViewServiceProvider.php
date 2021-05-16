<?php

namespace Dennykuo\AdminView;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Blade;
use Dennykuo\AdminView\Commands;
use Dennykuo\AdminView\Concerns\PackageSetting;

class AdminViewServiceProvider extends ServiceProvider
{
    use PackageSetting;

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }

        // Load views
        $this->loadViewsFrom(__DIR__.'/../views', self::$viewNamespace);

        // 擴展 Collection
        \Illuminate\Support\Collection::macro('recursive', function () {
            return $this->map(function ($value) {
                if (is_array($value) || is_object($value)) {
                    return collect($value)->recursive();
                }

                return $value;
            });
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/admin-view.php', static::$publishConfigName);
        // Set assets publish config
        Config::set(static::$publishConfigName . '.assets-path', static::$publishAssetsPath);
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Artisan commands
        $this->commands([
            Commands\AssetsPublishCommand::class,
        ]);

        // Publish assets
        // 需要改成另外的資料夾位置，為使用者自己修改的資源了
        // $this->publishes([
        //     __DIR__.'/../assets' => public_path(static::$publishAssetsPath),
        // ], 'laravel-admin-view:assets');

        // Publish configs
        $this->publishes([
            __DIR__.'/config/admin-view.php' => config_path(static::$publishConfigName . '.php'),
        ], 'laravel-admin-view:config');
    }

}
