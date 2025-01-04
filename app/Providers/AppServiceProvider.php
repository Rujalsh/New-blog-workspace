<?php

namespace App\Providers;

use App\Services\Newsletter;
use MailchimpMarketing\ApiClient;
use App\Services\MailChimpNewsletter;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\MustBeAdministrator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(Newsletter::class, function(){

            $client=(new ApiClient)->setConfig([
	            'apiKey' => config('services.mailchimp.key'),
	            'server' => 'us11',
        ]); 
        
            return new MailChimpNewsletter($client);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
        // Route::aliasMiddleware('admin', MustBeAdministrator::class);
    }
}
