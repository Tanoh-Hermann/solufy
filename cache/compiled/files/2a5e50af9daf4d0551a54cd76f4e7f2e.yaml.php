<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/admin-addon-media-sort/blueprints.yaml',
    'modified' => 1590022362,
    'data' => [
        'name' => 'Admin Addon Media Sort',
        'version' => '0.1.0',
        'description' => 'A simple addon which adds the option to reorder media files in the admin panel per drag and drop.',
        'icon' => 'plug',
        'author' => [
            'name' => 'Alex Käfer',
            'email' => 'alex.kaefer@ui-designs.de'
        ],
        'homepage' => 'https://github.com/alka-dev/grav-plugin-admin-addon-media-sort.git',
        'keywords' => 'grav, plugin, admin, media',
        'bugs' => 'https://github.com/alka-dev/grav-plugin-admin-addon-media-sort/issues',
        'docs' => 'https://github.com/alka-dev/grav-plugin-admin-addon-media-sort/blob/master/README.md',
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
