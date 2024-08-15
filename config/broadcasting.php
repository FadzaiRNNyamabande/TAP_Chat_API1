<?php

use Illuminate\Support\Str;

'connections' => [
    'pusher' => [
        'driver' => 'pusher',
        'key' => env('7ecf44d8fa309d5c6689'),
        'secret' => env('b04cdde03fccd74a812c'),
        'app_id' => env('1847160'),
        'options' => [
            'cluster' => env('eu'),
            'useTLS' => true,
        ],
    ],
],
 