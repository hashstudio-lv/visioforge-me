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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'openai' => [
        'api_key' => env('OPENAI_API_KEY', ''),
    ],

    'payment_gateway' => env('PAYMENT_GATEWAY', 'fyst'),

    'fyst' => [
        'base_url' => env('FYST_API_BASE_URL', 'https://api.fyst.com/v1'), // Base URL for API requests
        'merchant_id' => env('FYST_MERCHANT_ID', ''), // Your merchant ID from FYST
        'api_key' => env('FYST_API_KEY', ''), // Your API Key from FYST
        'redirect_url' => env('FYST_REDIRECT_URL', ''), // Your API Key from FYST
        'server_callback_url' => env('FYST_SERVER_CALLBACK_URL', ''), // Your API Key from FYST
    ],

    'decta' => [
        'api_key' => env('DECTA_API_KEY', ''),
        'base_url' => env('DECTA_BASE_URL', 'https://gate.decta.com/api/v1'),
        'success_redirect' => env('DECTA_SUCCESS_REDIRECT', ''),
        'failure_redirect' => env('DECTA_FAILURE_REDIRECT', ''),
    ],

    'imagine' => [
        'api_key' => env('IMAGINE_API_KEY', ''),
    ],
];
