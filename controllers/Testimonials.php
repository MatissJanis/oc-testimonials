<?php namespace Mja\Testimonials\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Flash;
use Lang;
use Mja\Testimonials\Models\Testimonial;

/**
 * Testimonials Back-end Controller
 */
class Testimonials extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['mja.testimonials.access_testimonials'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mja.Testimonials', 'testimonials', 'testimonials');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if (!$post = Testimonial::find($postId))
                    continue;

                $post->delete();
            }

            Flash::success(Lang::get('backend::lang.form.delete_success', ['name' => Lang::get('mja.testimonials::lang.controller.form.testimony')]));
        }

        return $this->listRefresh();
    }
}
