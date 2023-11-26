<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'passport' => [
        'login_endpoint'          => env('PASSPORT_LOGIN_ENDPOINT'),
        'login_client_id'         => env('PASSPORT_LOGIN_CLIENT_ID'),
        'login_client_secret'     => env('PASSPORT_LOGIN_CLIENT_SECRET'),
        'oauth_endpoint'          => env('PASSPORT_OAUTH_ENDPOINT'),
        'oauth_client_id'         => env('PASSPORT_OAUTH_CLIENT_ID'),
        'oauth_client_secret'     => env('PASSPORT_OAUTH_CLIENT_SECRET'),
        'oauth_authorization_url' => env('PASSPORT_OAUTH_AUTHORIZATION_URL'),
        'oauth_callback_url'      => env('PASSPORT_OAUTH_CALLBACK_URL'),
    ],

];
