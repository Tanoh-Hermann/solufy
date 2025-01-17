<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/iplocate/blueprints.yaml',
    'modified' => 1590026776,
    'data' => [
        'name' => 'IPLocate',
        'version' => '1.0.3',
        'description' => 'Attempts to geolocate your visitor using various services',
        'icon' => 'globe',
        'author' => [
            'name' => 'Aaron Dalton',
            'email' => 'aaron@daltons.ca'
        ],
        'homepage' => 'https://github.com/Perlkonig/grav-plugin-iplocate',
        'keywords' => 'grav, plugin, geoip, geolocation, location',
        'bugs' => 'https://github.com/Perlkonig/grav-plugin-iplocate/issues',
        'readme' => 'https://github.com/Perlkonig/grav-plugin-iplocate/blob/master/README.md',
        'demo' => 'https://perlkonig.com/demos/iplocate',
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
