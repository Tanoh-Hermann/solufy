<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/subscriber/blueprints.yaml',
    'modified' => 1590080186,
    'data' => [
        'name' => 'Subscriber',
        'version' => '1.0.1',
        'description' => 'Let users simply (un)subscribe to a newsletter with a single click.',
        'icon' => 'envelope-o',
        'author' => [
            'name' => 'RobGnu',
            'email' => 'rob@gmx.de',
            'url' => 'https://github.com/robgnu/'
        ],
        'homepage' => 'https://github.com/robgnu/grav-plugin-subscriber',
        'keywords' => 'plugin, newsletter, subscribe, unsubscribe, singleclick',
        'bugs' => 'https://github.com/robgnu/grav-plugin-subscriber/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
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
                    'label' => 'Use built in CSS for user output on the site.',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'email_from' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Sender e-mail address.',
                    'help' => 'PLUGIN_ADMIN.DEFAULT_EMAIL_HELP',
                    'validate' => [
                        'type' => 'email'
                    ]
                ],
                'email_to' => [
                    'type' => 'text',
                    'size' => 'large',
                    'label' => 'Receiver e-mail address.',
                    'help' => 'PLUGIN_ADMIN.DEFAULT_EMAIL_HELP',
                    'validate' => [
                        'type' => 'email'
                    ]
                ]
            ]
        ]
    ]
];
