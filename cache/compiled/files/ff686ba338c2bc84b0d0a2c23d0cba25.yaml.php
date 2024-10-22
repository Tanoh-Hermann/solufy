<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/config/plugins/twigfeeds.yaml',
    'modified' => 1583505600,
    'data' => [
        'enabled' => false,
        'cache' => true,
        'static_cache' => true,
        'debug' => false,
        'cache_time' => 900,
        'pass_headers' => false,
        'silence_security' => false,
        'twig_feeds' => [
            0 => [
                'source' => 'https://alistapart.com/main/feed/',
                'name' => 'A List Apart',
                'start' => 0,
                'end' => 3,
                'cache_time' => 3600
            ],
            1 => [
                'source' => 'http://uxmatters.com/index.xml',
                'name' => 'UX Matters',
                'start' => 0,
                'end' => 3,
                'cache_time' => 3600
            ],
            2 => [
                'source' => 'https://uxdesign.cc/feed',
                'name' => 'UX Design Collective',
                'start' => 0,
                'end' => 3,
                'cache_time' => 3600
            ]
        ]
    ]
];
