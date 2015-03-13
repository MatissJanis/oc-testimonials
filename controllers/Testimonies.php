<?php namespace Mja\Testimonies\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Mja\Testimonies\Models\Testimony;

/**
 * Testimonies Back-end Controller
 */
class Testimonies extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $requiredPermissions = ['mja.testimonies.access_testimonies'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mja.Testimonies', 'testimonies', 'testimonies');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if (!$post = Testimony::find($postId))
                    continue;

                $post->delete();
            }

            Flash::success('Successfully deleted those testimonies.');
        }

        return $this->listRefresh();
    }
}
