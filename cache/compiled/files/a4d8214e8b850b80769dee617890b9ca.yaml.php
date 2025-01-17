<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/admin-addon-user-manager/blueprints.yaml',
    'modified' => 1590022562,
    'data' => [
        'name' => 'Admin Addon User Manager',
        'version' => '2.3.0',
        'description' => 'A simple admin panel extension which adds the option to manage users and groups',
        'icon' => 'plug',
        'author' => [
            'name' => 'Dávid Szabó',
            'email' => 'david.szabo97@gmail.com'
        ],
        'homepage' => 'https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager',
        'keywords' => 'grav, plugin, admin, media',
        'bugs' => 'https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager/issues',
        'docs' => 'https://github.com/david-szabo97/grav-plugin-admin-addon-user-manager/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.0.0'
            ],
            1 => [
                'name' => 'admin',
                'version' => '>=1.0.0'
            ]
        ],
        'form' => [
            'validation' => 'strict',
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
                'default_list_style' => [
                    'label' => 'PLUGIN_ADMIN_ADDON_USER_MANAGER.DEFAULT_LIST_STYLE',
                    'type' => 'select',
                    'options' => [
                        'grid' => 'PLUGIN_ADMIN_ADDON_USER_MANAGER.GRID',
                        'list' => 'PLUGIN_ADMIN_ADDON_USER_MANAGER.LIST'
                    ]
                ],
                'pagination.per_page' => [
                    'label' => 'PLUGIN_ADMIN_ADDON_USER_MANAGER.USERS_PER_PAGE',
                    'type' => 'select',
                    'options' => [
                        10 => 10,
                        20 => 20,
                        30 => 30,
                        40 => 40,
                        50 => 50,
                        60 => 60,
                        70 => 70,
                        80 => 80,
                        90 => 90,
                        100 => 100
                    ]
                ],
                'custom_permissions' => [
                    'label' => 'PLUGIN_ADMIN_ADDON_USER_MANAGER.CUSTOM_PERMISSIONS',
                    'type' => 'array',
                    'placeholder_value' => 'PLUGIN_ADMIN_ADDON_USER_MANAGER.CUSTOM_PERMISSIONS_PLACEHOLDER',
                    'value_only' => true
                ]
            ]
        ]
    ]
];
