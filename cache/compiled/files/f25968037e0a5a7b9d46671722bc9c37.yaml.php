<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/snipcart/blueprints.yaml',
    'modified' => 1590079470,
    'data' => [
        'name' => 'Snipcart',
        'version' => '1.7.1',
        'description' => 'This plugin wraps the very good [Snipcart](https://snipcart.com/) application and let\'s you turn your Grav site into a shopping cart very easily.',
        'icon' => 'shopping-cart',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-snipcart',
        'demo' => 'http://demo.getgrav.org/shop-skeleton',
        'keywords' => 'snipcart, plugin, shop, cart',
        'bugs' => 'https://github.com/getgrav/grav-plugin-snipcart/issues',
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
                    'label' => 'Use built in CSS',
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
                'api_key' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'API Key',
                    'default' => 'YOUR_API_KEY'
                ]
            ]
        ]
    ]
];
