<?php namespace Mja\Testimonials\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Mja\Testimonials\Models\Testimonial;

class Testimonials extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'mja.testimonials::lang.components.testimonials.name',
            'description' => 'mja.testimonials::lang.components.testimonials.description'
        ];
    }

    public function onRun()
    {
        $this->page['testimonials'] = Testimonial::whereIsPublic(1)->get();
    }

}
