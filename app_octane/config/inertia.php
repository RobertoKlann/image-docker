<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Inertia SSR Configuration
    |--------------------------------------------------------------------------
    |
    | Here you can configure the settings related to SSR (Server Side Rendering).
    | You can enable SSR, define the SSR URL, and provide the path to your SSR
    | entry point (the main JavaScript file that will handle server-side rendering).
    |
    */

    'ssr' => [
        'enabled' => true, // Set to false if you don't want SSR enabled
        'url' => env('SSR_URL', 'http://localhost:13714'), // URL for the SSR server (you can change the port here if needed)
        'entry' => base_path('resources/js/ssr.js'), // Path to your SSR entry point
    ],

];