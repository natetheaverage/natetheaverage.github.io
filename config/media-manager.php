<?php

return [
    'routes' => [
        'middleware' => [],
        'prefix'     => env('MEDIA_MANAGER_ROUTE_PREFIX', '/'),
    ],

    'disk' => env('MEDIA_MANAGER_STORAGE_DISK', 'public'),
];