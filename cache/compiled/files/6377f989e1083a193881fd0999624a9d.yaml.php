<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/editor-buttons/blueprints.yaml',
    'modified' => 1590024984,
    'data' => [
        'name' => 'Editor Buttons',
        'version' => '1.2.1',
        'description' => 'Adds additional editor button options',
        'icon' => 'edit',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-editor-buttons',
        'keywords' => 'admin, plugin, editor, buttons',
        'bugs' => 'https://github.com/getgrav/grav-plugin-editor-buttons/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'admin',
                'version' => '~1.1'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'buttons' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_EDITOR_BUTTONS.ENABLE_BUTTONS',
                    'underline' => true,
                    'fields' => [
                        'insert_table' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_EDITOR_BUTTONS.INSERT_TABLE_BUTTON',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'insert_notice' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_EDITOR_BUTTONS.INSERT_NOTICES',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'insert_shortcodes' => [
                            'type' => 'toggle',
                            'label' => 'PLUGIN_EDITOR_BUTTONS.INSERT_SHORTCODES',
                            'highlight' => 1,
                            'default' => 0,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
