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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyAi0qh4lxpSKQ-DSDrTb5RPar8G6gm_FbM',
        'auth_domain' => 'crud-34327.firebaseapp.com',
        'database_url' => 'https://crud-34327-default-rtdb.firebaseio.com',
        'project_id' => 'crud-34327',
        'storage_bucket' => 'crud-34327.appspot.com',
        'messaging_sender_id' => '19390201175',
        'app_id' => '1:19390201175:web:4e74d17e679d0770cfd212',
        'measurement_id' => 'G-JBMTSSW2G6',
        
    ],

];
