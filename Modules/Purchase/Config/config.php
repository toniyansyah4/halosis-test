<?php

return [
    'name' => 'Purchase',

    'gateway' => [

        /**
         * Pay Gateway
         */

        'pay' => [
            'api' => 'test',
            'redirect' => 'http://localhost/halosis-test/public/payment/verify',
        ],

        /**
         * Zarinpal Gateway
         */
        'zarinpal' => [
            ''
        ]
    ]
];
