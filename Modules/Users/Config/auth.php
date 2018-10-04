<?php

return [
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        //Seller password broker
        'sellers' => [
            //user provider for seller
            'provider' => 'sellers',
            //table to store password reset tokens for seller
            'table' => 'password_resets',
            //expire time for these tokens in minutes
            'expire' => 60,
        ],
    ],
];