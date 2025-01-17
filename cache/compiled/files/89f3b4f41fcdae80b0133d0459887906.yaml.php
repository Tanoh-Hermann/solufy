<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/widget/blueprints.yaml',
    'modified' => 1590098806,
    'data' => [
        'name' => 'Widget',
        'version' => '1.4.2',
        'description' => '**Widget** is a plugin that lets you embed reusable modular components into pages using a simple header configuration',
        'icon' => 'trello',
        'author' => [
            'name' => 'Oluwasoji Ojo',
            'email' => 'itwizardy@gmail.com'
        ],
        'homepage' => 'https://github.com/sojimaxi/grav-plugin-widget',
        'keywords' => 'widget, modular, inject, embed, markdown, twig, grav',
        'bugs' => 'https://github.com/sojimaxi/grav-plugin-widget/issues',
        'docs' => 'https://github.com/sojimaxi/grav-plugin-widget/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'parent' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.PARENT',
                    'default' => 'widgets',
                    'validate' => [
                        'type' => 'slug',
                        'required' => true
                    ],
                    'help' => 'PLUGIN_ADMIN.PARENT_HELP'
                ],
                'extras' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.WIDGET_EXTRA',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        2 => 'PLUGIN_ADMIN.WIDGET_EXTRA_ENABLED_ALL_PAGES',
                        1 => 'PLUGIN_ADMIN.WIDGET_EXTRA_ENABLED_WIDGET_ONLY',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'number'
                    ],
                    'help' => 'PLUGIN_ADMIN.WIDGET_EXTRA_HELP'
                ],
                'widgets_in_widget' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.WIDGETS_IN_WIDGET',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool',
                        'required' => true
                    ],
                    'help' => 'PLUGIN_ADMIN.WIDGETS_IN_WIDGET_HELP'
                ],
                'enable_twig' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.ENABLE_TWIG',
                    'highlight' => 1,
                    'default' => 1,
                    'disabled' => true,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool',
                        'required' => true
                    ],
                    'help' => 'PLUGIN_ADMIN.ENABLE_TWIG_HELP'
                ],
                'enable_shortcode' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.ENABLE_SHORTCODE',
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool',
                        'required' => true
                    ],
                    'help' => 'PLUGIN_ADMIN.ENABLE_SHORTCODE_HELP'
                ],
                'append_area_name' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.APPEND_AREA_NAME',
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool',
                        'required' => true
                    ],
                    'help' => 'PLUGIN_ADMIN.APPEND_AREA_NAME_HELP'
                ],
                'subpage_inherit' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_WIDGET.SUBPAGE_INHERIT',
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool',
                        'required' => true
                    ],
                    'help' => 'PLUGIN_WIDGET.SUBPAGE_INHERIT_HELP'
                ]
            ]
        ]
    ]
];
