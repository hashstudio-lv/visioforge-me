<?php

/**
 * Key - count of tokens
 * Value - real money
 */
return [
    'options' => [
        'from_config' => false, // Take from this config. If false - will take from api
    ],

    'currencies_rates' => [
        'EUR' => [
            'one_token_price' => 0.05,

            'rate' => [
                10 => 0.50,
                50 => 2.50,
                100 => 5.00,
                200 => 10.00,
            ],
        ],

        'USD' => [
            'one_token_price' => 0.057,

            'rate' => [
                10 => 0.57,
                50 => 2.85,
                100 => 5.70,
                200 => 11.40,
            ],
        ],

        'GBP' => [
            'one_token_price' => 0.043,

            'rate' => [
                10 => 0.43,
                50 => 2.15,
                100 => 4.30,
                200 => 8.60,
            ],
        ],
    ],
];
