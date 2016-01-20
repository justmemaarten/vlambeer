<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Psy\Exception\RuntimeException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ( session_status() === \PHP_SESSION_DISABLED )
        {
            throw new \RuntimeException( "Gij bent een koekje!" );
        }

        if ( session_status() !== \PHP_SESSION_ACTIVE )
        {
            session_start();
        }

        if ( !empty( $_COOKIE['PHPSESSID'] ) )
        {
            session_id( $_COOKIE['PHPSESSID'] );
        }
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
