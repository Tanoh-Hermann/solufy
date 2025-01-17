<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/twigfeeds/languages.yaml',
    'modified' => 1583505694,
    'data' => [
        'en' => [
            'PLUGIN_TWIGFEEDS' => [
                'ADMIN' => [
                    'TABS' => [
                        'OPTIONS' => 'Options',
                        'REQUEST' => 'Request Options'
                    ],
                    'OPTIONS' => [
                        'STATIC_CACHE' => [
                            'LABEL' => 'Static Cache',
                            'DESCRIPTION' => 'Saves feeds in /user/data rather than in /cache.'
                        ],
                        'DEBUG' => [
                            'LABEL' => 'Debug',
                            'DESCRIPTION' => 'Enables Debug-mode, which logs to Grav\'s Debugger and log-file.'
                        ],
                        'SILENCE_SECURITY' => [
                            'LABEL' => 'Silence security errors',
                            'DESCRIPTION' => 'Silently ignores security errors, such as missing certificates.'
                        ],
                        'TWIG_FEEDS' => [
                            'LABEL' => 'Feeds',
                            'SOURCE' => [
                                'LABEL' => 'Source',
                                'DESCRIPTION' => 'URL to RSS, Atom, or JSON feed.'
                            ],
                            'NAME' => [
                                'LABEL' => 'Name',
                                'DESCRIPTION' => 'Name of the feed.'
                            ],
                            'START' => [
                                'LABEL' => 'Item start',
                                'DESCRIPTION' => 'Start of feed results. Must be a number between 0 and 500.'
                            ],
                            'END' => [
                                'LABEL' => 'Item End',
                                'DESCRIPTION' => 'End of feed results. Must be a number between 0 and 500.'
                            ],
                            'CACHE_TIME' => [
                                'LABEL' => 'Cache Time',
                                'DESCRIPTION' => 'Time, in seconds, to wait before caching data again.'
                            ]
                        ]
                    ],
                    'REQUEST' => [
                        'ALLOW_REDIRECTS' => [
                            'LABEL' => 'Allow Redirects',
                            'DESCRIPTION' => 'Set to true (the default setting) to enable normal redirects with a maximum number of 5 redirects.'
                        ],
                        'CONNECT_TIMEOUT' => [
                            'LABEL' => 'Connect Timeout',
                            'DESCRIPTION' => 'Float describing the number of seconds to wait while trying to connect to a server. Use 0 to wait indefinitely (the default behavior).'
                        ],
                        'HTTP_ERRORS' => [
                            'LABEL' => 'HTTP Errors',
                            'DESCRIPTION' => 'Set to false to disable throwing exceptions on an HTTP protocol errors (i.e., 4xx and 5xx responses). Exceptions are thrown by default when HTTP protocol errors are encountered.'
                        ],
                        'TIMEOUT' => [
                            'LABEL' => 'Timeout',
                            'DESCRIPTION' => 'Float describing the timeout of the request in seconds. Use 0 to wait indefinitely (the default behavior).'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
