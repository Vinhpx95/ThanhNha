<?php namespace Thanhnha\Shop\Components;

use Cms\Classes\ComponentBase;
use Thanhnha\Shop\Models\Product;

class ProductShortInfo extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ProductShortInfo Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $cashew = Product::where("product_code", "cashew")->first();
        $this->page["cashew"] = $cashew;
    }
}
