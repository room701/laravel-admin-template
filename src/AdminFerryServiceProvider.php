<?php

namespace Dennykuo\AdminFerry;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Collection;
use Dennykuo\AdminFerry\Commands;
use Dennykuo\AdminFerry\Concerns\PackageSetting;

class AdminFerryServiceProvider extends ServiceProvider
{
    use PackageSetting;

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }

        // Load views with new namespace
        $this->loadViewsFrom(__DIR__.'/../views', self::$viewNamespace);

        // Add view components namespace
        Blade::componentNamespace(__NAMESPACE__.'\\View\\Components', self::$viewNamespace);

        // 擴展 Collection
        Collection::macro('recursive', function () {
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
        $this->mergeConfigFrom(__DIR__.'/config/admin-ferry.php', static::$publishConfigName);
        // Set assets publish config
        Config::set(static::$publishConfigName . '.assets-path', static::$publishAssetsPath);
    }

    /**
     * Console booting.
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
        // ], 'laravel-admin-ferry:assets');

        // Publish configs
        $output = config_path(static::$publishConfigName . '.php');
        $this->publishes([
            __DIR__.'/config/admin-ferry.php' => $output,
        ], 'laravel-admin-ferry:config');
    }

}