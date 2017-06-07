<?php

/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', '0.3');

/**
 * Convert some text to Markdown...
 */
function markdown($text)
{
    return (new ParsedownExtra)->text($text);
}

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider. Now create something
| adequate!
|
*/

$router->get('/', 'DocsController@showRootPage');

$router->get('docs', 'DocsController@showRootPage');
$router->get('docs/{version}/{page?}', 'DocsController@show');
