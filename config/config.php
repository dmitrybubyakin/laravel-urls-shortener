<?php

return [

    /*
     * https://github.com/ivanakimov/hashids.php/blob/master/src/Hashids.php#L101
     */
    'hashids' => [
        'salt' => env('APP_KEY'),

        'min_hash_length' => 0,

        'alphabet' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890',
    ],

    'table' => 'short_urls',

    'route' => 'sh',
];
