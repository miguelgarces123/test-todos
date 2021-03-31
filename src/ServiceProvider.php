<?php
 
namespace MiguelGarces\Unicornio;
 
use Illuminate\Support\ServiceProvider as ProviderLaravel;

use MiguelGarces\Unicornio\Saludo;

 
class ServiceProvider extends ProviderLaravel
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('SaludoWilder', function () {
            return new Saludo();
        });
    }
 
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
 
    }
 
}