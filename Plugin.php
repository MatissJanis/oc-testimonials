<?php namespace Mja\Testimonials;

use Backend;
use System\Classes\PluginBase;

/**
 * Testimonial Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'mja.testimonials::lang.plugin.name',
            'description' => 'mja.testimonials::lang.plugin.description',
            'author'      => 'Matiss Janis Aboltins',
            'homepage'    => 'https://github.com/MatissJanis/oc-testimonials',
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
                'label'       => 'mja.testimonials::lang.navigation.label',
                'url'         => Backend::url('mja/testimonials/testimonials'),
                'icon'        => 'icon-thumbs-o-up',
                'permissions' => ['mja.testimonials.*'],
            ]
        ];
    }
}
