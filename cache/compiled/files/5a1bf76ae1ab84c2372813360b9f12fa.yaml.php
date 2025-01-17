<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/presentation-deckset/blueprints.yaml',
    'modified' => 1583505690,
    'data' => [
        'name' => 'Presentation Deckset',
        'version' => '1.3.4',
        'description' => 'Use Deckset Syntax with the Presentation-plugin',
        'icon' => 'plug',
        'author' => [
            'name' => 'Ole Vik',
            'email' => 'git@olevik.net'
        ],
        'homepage' => 'https://github.com/OleVik/grav-plugin-presentation-deckset',
        'keywords' => 'grav, plugin, etc',
        'bugs' => 'https://github.com/OleVik/grav-plugin-presentation-deckset/issues',
        'docs' => 'https://github.com/OleVik/grav-plugin-presentation-deckset/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6'
            ],
            1 => [
                'name' => 'presentation',
                'version' => '>=3.0.0'
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
                ]
            ]
        ]
    ]
];
