<?php namespace Mja\Testimonies\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Mja\Testimonies\Models\Testimony;

class Testimonies extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Testimonies',
            'description' => 'Create a list of testimonies'
        ];
    }

    public function onRun()
    {
        $this->page['testimonies'] = Testimony::whereIsPublic(1)->get();
    }

}
