<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/atools/blueprints.yaml',
    'modified' => 1590619796,
    'data' => [
        'name' => 'Atools',
        'version' => '0.1.1',
        'description' => 'Anarchy Tools extends additional functionality to both the grav cli and grav admin plugins.',
        'icon' => 'plug',
        'author' => [
            'name' => 'Jeremy Gonyea',
            'email' => 'jeremy.gonyea@gmail.com'
        ],
        'homepage' => 'https://github.com/jgonyea/grav-plugin-atools',
        'keywords' => 'grav, plugin, cli, tools',
        'bugs' => 'https://github.com/jgonyea/grav-plugin-atools/issues',
        'docs' => 'https://github.com/jgonyea/grav-plugin-atools/blob/develop/README.md',
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
