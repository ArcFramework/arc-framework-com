#!/usr/bin/env php
<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/
require __DIR__.'/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Tell Arc to boot without depending on wordpress
|--------------------------------------------------------------------------
|
| In order that we can run Arc CLI out of the box without relying on a
| local instance of Wordpress we need to set this constant. Arc will
| know to bind in implementations of it's core classes which don't
| rely on any wordpress functions.
*/
define('BOOT_ARC_WITHOUT_WORDPRESS', true);

/*
|--------------------------------------------------------------------------
| Instantiate and boot the plugin class
|--------------------------------------------------------------------------
| The Plugin class serves as the centre of our application. It acts as
| the IoC container and stores all plugin constants
*/
$app = new \ArcFramework\Plugin(__DIR__.'/arc-framework-com.php');

/*
|--------------------------------------------------------------------------
| Run The Arc CLI Application
|--------------------------------------------------------------------------
|
| When we run the console application, the current CLI command will be
| executed in this console and the response sent back to a terminal
| or another output device for the developers. Here goes nothing!
|
*/

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

$status = $kernel->handle(
    $input = new Symfony\Component\Console\Input\ArgvInput,
    new Symfony\Component\Console\Output\ConsoleOutput
);

/*
|--------------------------------------------------------------------------
| Shutdown The Application
|--------------------------------------------------------------------------
|
| Once Arc CLI has finished running, we will fire off the shutdown events
| so that any final work may be done by the application before we shut
| down the process. This is the last thing to happen to the request.
|
*/

$kernel->terminate($input, $status);

exit($status);
