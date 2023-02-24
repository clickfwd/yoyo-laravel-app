<?php

return [
    /**
     * Used to automatically register the route used for all Yoyo requests
     */
    'route' => '/yoyo',
    
    /**
     * Location, relative to the public directory, where yoyo.js will be loaded from
     * you need to place yoyo.js in this location yourself. You will find the file
     * in the Yoyo package in the vendors directory
     */
    'scripts_path' => 'assets/scripts',
    
    /**
     * The namespace used to automatically find Yoyo dynamic component classes
     */
    'namespace' => 'App\\Http\Yoyo\\',

    /**
     * Location, relative to the resources directory, for Yoyo blade templates
     */
    'resources' => 'views/yoyo',
];