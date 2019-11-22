<?php namespace Thanhnha\Shop\Components;

use Cms\Classes\ComponentBase;
use Thanhnha\Shop\Models\Infor;

class Phonering extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'phonering Component',
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
