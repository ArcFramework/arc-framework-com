<?php

namespace ArcFramework\Providers;

use Arc\Admin\AdminMenus;
use Arc\Hooks\Actions;
use Arc\Hooks\Filters;
use Arc\Shortcodes\Shortcodes;
use Illuminate\Support\ServiceProvider;

class WordpressServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(
        Actions $actions,
        AdminMenus $adminMenus,
        Filters $filters,
        Shortcodes $shortcodes
    ) {
        // Register admin menus
        include $this->app->basePath().'/wordpress/admin_menus.php';

        // Register actions
        include $this->app->basePath().'/wordpress/actions.php';

        // Register filters
        include $this->app->basePath().'/wordpress/filters.php';

        // Register shortcodes
        include $this->app->basePath().'/wordpress/shortcodes.php';
        $shortcodes->register();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
