<?php

namespace App\Services;
use MailchimpMarketing\ApiClient;

class MailChimpNewsletter implements Newsletter{

    public function __construct(protected ApiClient $client){



    }

    public function subscribe ($email, $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client->lists->addListMember($list,[
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }

}
