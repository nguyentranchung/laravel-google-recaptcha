<?php

namespace NguyenTranChung\GoogleRecaptcha;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class GoogleRecaptchaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/google-recaptcha.php' => config_path('google-recaptcha.php'),
        ], 'config');
        Validator::extend('recaptcha', 'Rules\ValidRecaptcha@passes');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/google-recaptcha.php', 'google-recaptcha');
    }
}
