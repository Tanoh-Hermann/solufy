<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/page-inject/blueprints.yaml',
    'modified' => 1583505686,
    'data' => [
        'name' => 'Page Inject',
        'version' => '1.3.1',
        'description' => '**Page Inject** is a powerful plugin that lets you inject entire pages or page content into other pages using simple markdown syntax',
        'icon' => 'trello',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-page-inject',
        'keywords' => 'inject, embed, markdown',
        'bugs' => 'https://github.com/getgrav/grav-plugin-page-inject/issues',
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
                'active' => [
                    'type' => 'toggle',
                    'label' => 'Activate Site-Wide',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'This will ensure the plugin is activated site wide. You can override with page header options.'
                ],
                'processed_content' => [
                    'type' => 'toggle',
                    'label' => 'Processed Content',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ],
                    'help' => 'If enabled the page is pre-rendered before being injected, so relative paths work correctly'
                ]
            ]
        ]
    ]
];
