<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/grava11y/blueprints.yaml',
    'modified' => 1583505682,
    'data' => [
        'name' => 'Grava11y (Acccessibility for Grav)',
        'version' => '1.1.0',
        'description' => 'An accessibility testing plugin for your Grav theme',
        'icon' => 'wheelchair',
        'author' => [
            'name' => 'Lawrence Meckan',
            'email' => 'media@absalom.biz',
            'url' => 'https://www.absalom.biz'
        ],
        'homepage' => 'https://github.com/absalomedia/grav-plugin-grava11y',
        'keywords' => 'plugin, frontend, accessibility, khan',
        'bugs' => 'https://github.com/absalomedia/grav-plugin-grava11y/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'offsite' => [
                    'type' => 'toggle',
                    'label' => 'Use local JS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'help' => 'Switches between local JS file and latest build on Github'
                ]
            ]
        ]
    ]
];
