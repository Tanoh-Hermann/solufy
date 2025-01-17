<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/sequential-form/blueprints.yaml',
    'modified' => 1590069622,
    'data' => [
        'name' => 'Sequential Form',
        'version' => '1.0.7',
        'description' => 'A sequence of pages, each with a form is linked, with all form data processed according to the final process',
        'icon' => 'link',
        'author' => [
            'name' => 'Richard Hainsworth',
            'email' => 'rnhainsworth@gmail.com'
        ],
        'homepage' => 'https://github.com/finanalyst/grav-plugin-sequential-form',
        'keywords' => 'grav, plugin, form, sequence',
        'bugs' => 'https://github.com/finanalyst/grav-plugin-sequential-form/issues',
        'docs' => 'https://github.com/finanalyst/grav-plugin-sequential-form/blob/develop/README.md',
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
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in css',
                    'highlight' => 1,
                    'default' => 1,
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
