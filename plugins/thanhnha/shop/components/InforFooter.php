<?php namespace Thanhnha\Shop\Components;

use Cms\Classes\ComponentBase;
use Thanhnha\Shop\Models\Infor;

class InforFooter extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'infor Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun(){
        $infor = Infor::first();
        $this->page['infor'] = $infor;
    }
}
