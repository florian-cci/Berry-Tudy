<?php

return [
    'default' => [
        'site_id' => env('SITE_ID'),
        'key'     => env('SYSTEMPAY_SITE_KEY'),
        'env'     => env('SYSTEMPAY_ENV'),
        'algo'    => 'sha1',
        'params'  => [
            'vads_page_action' => 'PAYMENT',
            'vads_action_mode' => 'INTERACTIVE',
            'vads_payment_config' => 'SINGLE',
            'vads_page_action' => 'PAYMENT',
            'vads_version' => 'V2',
            'vads_currency' => '978'
        ]
    ],
];
