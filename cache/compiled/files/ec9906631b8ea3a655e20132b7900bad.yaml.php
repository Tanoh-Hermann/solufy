<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/blueprints/admin/pages/new_subsite.yaml',
    'modified' => 1583505600,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'Add Subsite'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'Subsite Title',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'hidden',
                    'default' => '@slugify-title'
                ],
                'route' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.PARENT_PAGE',
                    'classes' => 'fancy',
                    '@data-options' => '\\Grav\\Common\\Page\\Pages::parents',
                    'default' => '/',
                    'options' => [
                        '/' => 'PLUGIN_ADMIN.DEFAULT_OPTION_ROOT'
                    ]
                ],
                'name' => [
                    'type' => 'hidden',
                    'default' => 'subsite'
                ],
                'visible' => [
                    'type' => 'hidden',
                    'default' => ''
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
