<?php

/**
 * We need the global database object to get the database prefix.
 **/
global $wpdb;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => $app->env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [
        'mysql' => [
            'driver'      => 'mysql',
            'host'        => $app->env('DB_HOST', '127.0.0.1'),
            'port'        => $app->env('DB_PORT', '3306'),
            'database'    => $app->env('DB_DATABASE', defined('DB_NAME') ? DB_NAME : ''),
            'username'    => $app->env('DB_USERNAME', defined('DB_USER') ? DB_USER : ''),
            'password'    => $app->env('DB_PASSWORD', defined('DB_PASSWORD') ? DB_PASSWORD : ''),
            'unix_socket' => $app->env('DB_SOCKET', ''),
            'charset'     => 'utf8mb4',
            'collation'   => defined('DB_COLLATE') ?
                (empty(DB_COLLATE) ? 'utf8mb4_unicode_ci' : DB_COLLATE) : 'utf8mb4_unicode_ci',
            'prefix' => $wpdb->base_prefix ?? null,
            'strict' => false,
            'engine' => null,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',
];
