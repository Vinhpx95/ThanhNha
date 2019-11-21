<?php namespace Thanhnha\Shop\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Infors Back-end Controller
 */
class Infors extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Thanhnha.Shop', 'shop', 'infors');
    }
}
