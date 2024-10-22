<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/widget/blueprints/admin/pages/widget_new.yaml',
    'modified' => 1590098806,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_WIDGET.CREATE_WIDGET'
                ],
                'title' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_WIDGET.WIDGET_TITLE',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'folder' => [
                    'type' => 'hidden',
                    'default' => '@slugify-title'
                ],
                'route' => [
                    'type' => 'hidden',
                    'label' => 'PLUGIN_ADMIN.PAGE',
                    'classes' => 'fancy',
                    'data-default@' => '\\Grav\\Plugin\\WidgetPlugin::rootDirectory',
                    'validate' => [
                        'required' => true
                    ]
                ],
                'name' => [
                    'type' => 'select',
                    'classes' => 'fancy',
                    'label' => 'PLUGIN_WIDGET.WIDGET_TEMPLATE',
                    'help' => 'Select a modular template to use',
                    'data-options@' => '\\Grav\\Common\\Page\\Pages::modularTypes',
                    'options' => [
                        '' => 'PLUGIN_WIDGET.SELECT'
                    ],
                    'validate' => [
                        'required' => true
                    ]
                ],
                'modular' => [
                    'type' => 'hidden',
                    'default' => 1,
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];
