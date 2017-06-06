<?php

/*
Plugin Name: ArcFramework.com
Plugin URI: http://arc-framework.com
Description: 
Version: 0.0
Author: 
Author URI: 
*/

/*
 * If this file is called directly, abort.
 */
if (!defined('WPINC')) {
    die;
}

/*
 * Include dependencies
 */
require __DIR__.'/vendor/autoload.php';

/*
 *  Boot Plugin
 */
$plugin = new \ArcFramework\Plugin(__FILE__);
$plugin->start();
