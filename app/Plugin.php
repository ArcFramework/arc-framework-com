<?php

namespace ArcFramework;

use Arc\Application;

class Plugin extends Application
{
    /**
     * Set the shared instance of the application.
     *
     * @param Application|null $container
     *
     * @return static
     */
    public static function setApplicationInstance(Application $application)
    {
        self::$instance = $application;
    }

    /**
     * Get the shared instance of the application.
     *
     * @return static
     */
    public static function app()
    {
        return self::$instance;
    }
}
