<?php
namespace App\Services;
use App\Services\Newsletter;
use MailchimpMarketing\ApiClient;

class ConvertKitNewsletter implements Newsletter
{

    public function subscribe($email, $list = null){

            $list ??= config('services.convertkit.lists.subscribers');

            $response = $this->client->addSubscriber([
                'email' => $email,
                'first_name' => '',
                'tags' => ['newsletter'],
                'api_key' => config('services.convertkit.key')
            ]);

            return $response;
    }
}
