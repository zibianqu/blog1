<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Services\CommService;

class CommServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
    }
    
    public function register()
    {
        $this->app->singleton('Comm',function($app){
            return new CommService();
        });
    }
    
}