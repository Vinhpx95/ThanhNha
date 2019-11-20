<?php namespace Thanhnha\Shop;

use Backend;
use System\Classes\PluginBase;

/**
 * shop Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'shop',
            'description' => 'No description provided yet...',
            'author'      => 'thanhnha',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Thanhnha\Shop\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'thanhnha.shop.some_permission' => [
                'tab' => 'shop',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'shop' => [
                'label'       => 'shop',
                'url'         => Backend::url('thanhnha/shop/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['thanhnha.shop.*'],
                'order'       => 500,
            ],
        ];
    }
}
