<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/admin-addon-media-rename/blueprints.yaml',
    'modified' => 1590021982,
    'data' => [
        'name' => 'Admin Addon Media Rename',
        'version' => '1.6.3',
        'description' => 'A simple but powerful plugin which adds the option to rename media files in the admin panel',
        'icon' => 'plug',
        'author' => [
            'name' => 'Dávid Szabó',
            'email' => 'david.szabo97@gmail.com'
        ],
        'homepage' => 'https://github.com/david-szabo97/grav-plugin-admin-addon-media-rename',
        'keywords' => 'grav, plugin, admin, media',
        'bugs' => 'https://github.com/david-szabo97/grav-plugin-admin-addon-media-rename/issues',
        'docs' => 'https://github.com/david-szabo97/grav-plugin-admin-addon-media-rename/blob/master/README.md',
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
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
