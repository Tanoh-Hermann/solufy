<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/frontend-edit-button/blueprints.yaml',
    'modified' => 1590025608,
    'data' => [
        'name' => 'Frontend Edit Button',
        'version' => '1.2.2',
        'description' => 'Adds an \'edit this page\' on the frontend when logged in as administrator',
        'icon' => 'newspaper-o',
        'author' => [
            'name' => 'Johan van de Merwe',
            'email' => 'j.vd.merwe@enovision.net',
            'url' => 'https://github.com/enovision'
        ],
        'homepage' => 'https://github.com/enovision/grav-frontend-edit-button',
        'keywords' => 'grav, plugin, frontend',
        'bugs' => 'https://github.com/enovision/grav-frontend-edit-button/issues',
        'docs' => 'https://github.com/enovision/grav-frontend-edit-button/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_FRONTEND_EDIT_BUTTON.ENABLED',
                        0 => 'PLUGIN_FRONTEND_EDIT_BUTTON.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'position' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_FRONTEND_EDIT_BUTTON.POSITION_LABEL',
                    'help' => 'PLUGIN_FRONTEND_EDIT_BUTTON.POSITION_LABEL_HELP',
                    'size' => 'medium',
                    'highlight' => 'tr',
                    'options' => [
                        'tl' => 'PLUGIN_FRONTEND_EDIT_BUTTON.TOP_LEFT',
                        'tr' => 'PLUGIN_FRONTEND_EDIT_BUTTON.TOP_RIGHT',
                        'bl' => 'PLUGIN_FRONTEND_EDIT_BUTTON.BOTTOM_LEFT',
                        'br' => 'PLUGIN_FRONTEND_EDIT_BUTTON.BOTTOM_RIGHT'
                    ]
                ],
                'showLabel' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_FRONTEND_EDIT_BUTTON.SHOW_LABEL',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_FRONTEND_EDIT_BUTTON.ENABLED',
                        0 => 'PLUGIN_FRONTEND_EDIT_BUTTON.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'showIcon' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_FRONTEND_EDIT_BUTTON.SHOW_ICON',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_FRONTEND_EDIT_BUTTON.ENABLED',
                        0 => 'PLUGIN_FRONTEND_EDIT_BUTTON.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'requiresAuth' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_FRONTEND_EDIT_BUTTON.REQUIRES_AUTH_LABEL',
                    'help' => 'PLUGIN_FRONTEND_EDIT_BUTTON.REQUIRES_AUTH_LABEL_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_FRONTEND_EDIT_BUTTON.ENABLED',
                        0 => 'PLUGIN_FRONTEND_EDIT_BUTTON.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'autoRefresh' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_FRONTEND_EDIT_BUTTON.AUTO_REFRESH_LABEL',
                    'help' => 'PLUGIN_FRONTEND_EDIT_BUTTON.AUTO_REFRESH_LABEL_HELP',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_FRONTEND_EDIT_BUTTON.ENABLED',
                        0 => 'PLUGIN_FRONTEND_EDIT_BUTTON.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
