<?php

namespace App\Providers;

use App\Services\MailChimpNewsletter;
use App\Services\Newsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
            app()->bind(Newsletter::class,function (){
                $client = new ApiClient();

                $client= (new ApiClient)->setConfig([
                    'apiKey' => config('services.mailchimp.key'),
                    'server' => 'us13'
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

    }
}
