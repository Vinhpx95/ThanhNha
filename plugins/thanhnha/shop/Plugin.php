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
            'name'        => 'Shop',
            'description' => 'No description provided yet...',
            'author'      => 'thanhnha',
            'icon'        => 'icon-shopping-basket'
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

        return [
            'Thanhnha\Shop\Components\InforFooter' => 'inforFooter',
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
        //return []; // Remove this line to activate

        return [
            'shop' => [
                'label'       => 'Shop',
                'url'         => Backend::url('thanhnha/shop/products'),
                'icon'        => 'icon-shopping-basket',
                'permissions' => ['thanhnha.shop.*'],
                'order'       => 500,
                'sideMenu' => [
                    'orders' => [
                        'label'       => 'Hóa đơn',
                        'icon'        => 'icon-file-text-o',
                        'url'         => Backend::url('thanhnha/shop/orders'),
                        'permissions' => ['comchayhotay.shop.*'],
                    ],
                    'products' => [
                        'label'       => 'Sản phẩm',
                        'icon'        => 'icon-key',
                        'url'         => Backend::url('thanhnha/shop/products'),
                        'permissions' => ['comchayhotay.shop.*'],
                    ],
                    'infors' => [
                        'label'       => 'Thông tin',
                        'icon'        => 'icon-info-circle',
                        'url'         => Backend::url('thanhnha/shop/infors'),
                        'permissions' => ['comchayhotay.shop.*'],
                    ],
                ]
            ],
        ];
    }
}
