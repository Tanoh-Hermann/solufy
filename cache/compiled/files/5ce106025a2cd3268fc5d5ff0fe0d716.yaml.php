<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/config/site.yaml',
    'modified' => 1591048712,
    'data' => [
        'title' => 'ANGAHI',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Tanoh Hermann',
            'email' => 'tanoh_hermann@yahoo.fr'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'author',
            3 => 'continent',
            4 => 'country',
            5 => 'Service'
        ],
        'metadata' => [
            'description' => 'Service Platform'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/home'
        ]
    ]
];
