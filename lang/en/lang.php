<?php

return [
    'plugin' => [
        'name' => 'Testimonials',
        'description' => 'Create and manage testimonials about You project or product.',
    ],
    'permissions' => [
        'tab' => 'Testimonials',
        'testimonials' => 'Manage testimonials',
    ],
    'navigation' => [
        'label' => 'Testimonials',
    ],
    'components' => [
        'testimonials' => [
            'label' => 'Testimonials',
            'description' => 'Create a list of testimonials',
        ],
    ],
    'controller' => [
        'view' => [
            'new' => 'New Testimony',
            'breadcrumb_label' => 'Testimonials',
            'return' => 'Return to testimonial list',
        ],
        'list' => [
            'title' => 'Manage Testimonials'
        ],
        'form' => [
            'title' => 'Testimonials',
            'update_title' => 'Update Testimonial',
            'create_title' => 'Create Testimonial',
            'testimony' => 'testimony',
        ],
    ],
    'fields' => [
        'id' => 'ID',
        'author' => 'Author',
        'is_public' => 'Is this testimonial public?',
        'private' => 'Private',
        'public' => 'Public',
    ],
];
