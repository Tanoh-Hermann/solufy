<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/webcomponents/blueprints.yaml',
    'modified' => 1590619798,
    'data' => [
        'name' => 'Web components loader',
        'version' => '3.9.0',
        'description' => 'Loads web components and associated polyfill so you can use custom elements in your site.',
        'icon' => 'google',
        'author' => [
            'name' => 'Bryan Ollendyke',
            'email' => 'bto108@psu.edu',
            'url' => 'https://www.elmsln.org/'
        ],
        'homepage' => 'https://github.com/elmsln/grav-plugin-webcomponents',
        'keywords' => 'webcomponents, polymer, plugin',
        'bugs' => 'https://github.com/elmsln/grav-plugin-webcomponents/issues',
        'license' => 'Apache 2.0',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
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
                'location' => [
                    'type' => 'select',
                    'label' => 'Web components location',
                    'highlight' => 1,
                    'default' => 'https://cdn.webcomponents.psu.edu/cdn/',
                    'options' => [
                        'https://cdn.webcomponents.psu.edu/cdn/' => 'Penn State CDN',
                        'https://cdn.waxam.io/' => 'Waxam CDN',
                        'user/data/webcomponents/' => 'Local libraries folder (user/data/webcomponents/)',
                        'other' => 'Other'
                    ],
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'other' => [
                    'type' => 'textfield',
                    'label' => 'Other location',
                    'highlight' => 1,
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ]
            ]
        ]
    ]
];
