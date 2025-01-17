<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/persistent-data/blueprints.yaml',
    'modified' => 1590067920,
    'data' => [
        'name' => 'Persistent Data Plugin',
        'version' => '1.2.1',
        'description' => 'Store user related information persistently in site',
        'icon' => 'plug',
        'author' => [
            'name' => 'Richard Hainsworth',
            'email' => 'rnhainsworth@gmail.com'
        ],
        'homepage' => 'https://github.com/finanalyst/grav-plugin-persistent-data',
        'keywords' => 'grav, plugin, persistent, data',
        'bugs' => 'https://github.com/finanalyst/grav-plugin-persistent-data/issues',
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
                ],
                'forget_on_logout' => [
                    'type' => 'toggle',
                    'label' => 'Forget persistent data when user logs out',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        0 => 'No',
                        1 => 'Yes'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
