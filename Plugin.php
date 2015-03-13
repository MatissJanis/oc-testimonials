<?php namespace Mja\Testimonies;

use Backend;
use System\Classes\PluginBase;

/**
 * Testimony Plugin Information File
 */
class Plugin extends PluginBase
{

    public $require = ['RainLab.Translate'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Testimonies',
            'description' => 'Create and manage testimonies about You project or product.',
            'author'      => 'Matiss Janis Aboltins',
            'icon'        => 'icon-thumbs-o-up'
        ];
    }

    public function registerComponents()
    {
        return [
            'Mja\Testimonies\Components\Testimonies' => 'testimonies',
        ];
    }

	public function registerPermissions()
	{
		return [
            'mja.testimonies.access_testimonies' => [
                'tab' => 'mja.testimonies::lang.permissions.tab',
                'label' => 'mja.testimonies::lang.permissions.testimonies'
            ],
        ];
	}

    public function registerNavigation()
    {
        return [
            'testimonies' => [
                'label'       => 'Testimonies',
                'url'         => Backend::url('mja/testimonies/testimonies'),
                'icon'        => 'icon-thumbs-o-up',
                'permissions' => ['mja.testimonies.*'],
            ]
        ];
    }
}
