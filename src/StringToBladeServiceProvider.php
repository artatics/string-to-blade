<?php

namespace artatics\StringToBlade;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use artatics\StringToBlade\interfaces\StringToBlade as IBladeToString;
use artatics\StringToBlade\services\StringToBlade;

class StringToBladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register() : void
    {
        $this->app->bind(IBladeToString::class, function () {
            return new StringToBlade(App::make('files'), App::make('path').'/storage/framework/views');
        });
    }
}
