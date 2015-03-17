<?php namespace Mja\Testimonials;

use Backend;
use System\Classes\PluginBase;

/**
 * Testimonial Plugin Information File
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
            'name'        => 'Testimonials',
            'description' => 'Create and manage testimonials about You project or product.',
            'author'      => 'Matiss Janis Aboltins',
            'homepage'    => '',
            'icon'        => 'icon-thumbs-o-up'
        ];
    }

    public function registerComponents()
    {
        return [
            'Mja\Testimonials\Components\Testimonials' => 'testimonials',
        ];
    }

	public function registerPermissions()
	{
		return [
            'mja.testimonials.access_testimonials' => [
                'tab' => 'mja.testimonials::lang.permissions.tab',
                'label' => 'mja.testimonials::lang.permissions.testimonials'
            ],
        ];
	}

    public function registerNavigation()
    {
        return [
            'testimonials' => [
                'label'       => 'Testimonials',
                'url'         => Backend::url('mja/testimonials/testimonials'),
                'icon'        => 'icon-thumbs-o-up',
                'permissions' => ['mja.testimonials.*'],
            ]
        ];
    }
}
