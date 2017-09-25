<?php
/**
 * Created by PhpStorm.
 * User: vital
 * Date: 2017/9/25
 * Time: 15:15
 */

namespace Vital\Jpush\Providers;


use Illuminate\Support\ServiceProvider;
use JPush\Client as JPush;

class JpushServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '\..\Config/laravel-jpush.php' => config_path('laravel-jpush.php'),
        ]);
    }

    public function register()
    {
        $this->app->singleton('jpush', function(){
            return new JPush(config('laravel-jpush.app-key'), config('laravel-jpush.app-secret'));
        });
    }
}