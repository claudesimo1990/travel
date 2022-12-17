<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        URL::forceScheme('https');

        $currentLocale = \session()->get('myLocale') ?? App::currentLocale();

        $lang = request()->get('lang', $currentLocale);

        if(in_array($lang,['en','fr', 'de'])){
            session()->put('myLocale', $lang);
        }

        setlocale(LC_TIME, $currentLocale);

        App::setLocale($currentLocale);

    }
}
