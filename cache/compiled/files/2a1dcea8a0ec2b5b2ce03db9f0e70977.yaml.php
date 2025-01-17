<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/sitemap/blueprints.yaml',
    'modified' => 1590078960,
    'data' => [
        'name' => 'Sitemap',
        'slug' => 'sitemap',
        'type' => 'plugin',
        'version' => '1.9.5',
        'description' => 'Provide automatically generated **XML sitemaps** with this very useful, but simple to configure, Grav plugin.',
        'icon' => 'map-marker',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-sitemap',
        'keywords' => 'sitemap, plugin, xml, map, index',
        'bugs' => 'https://github.com/getgrav/grav-plugin-sitemap/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.1.6'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'changefreq' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_SITEMAP.CHANGEFREQ',
                    'default' => '',
                    'options' => [
                        '' => 'PLUGIN_SITEMAP.CHANGEFREQ_DEFAULT',
                        'always' => 'PLUGIN_SITEMAP.CHANGEFREQ_ALWAYS',
                        'hourly' => 'PLUGIN_SITEMAP.CHANGEFREQ_HOURLY',
                        'daily' => 'PLUGIN_SITEMAP.CHANGEFREQ_DAILY',
                        'weekly' => 'PLUGIN_SITEMAP.CHANGEFREQ_WEEKLY',
                        'monthly' => 'PLUGIN_SITEMAP.CHANGEFREQ_MONTHLY',
                        'yearly' => 'PLUGIN_SITEMAP.CHANGEFREQ_YEARLY',
                        'never' => 'PLUGIN_SITEMAP.CHANGEFREQ_NEVER'
                    ]
                ],
                'priority' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_SITEMAP.PRIORITY',
                    'default' => '',
                    'options' => [
                        '' => 'PLUGIN_SITEMAP.PRIORITY_USE_GLOBAL',
                        '0.1' => 0.1,
                        '0.2' => 0.2,
                        '0.3' => 0.3,
                        '0.4' => 0.4,
                        '0.5' => 0.5,
                        '0.6' => 0.6,
                        '0.7' => 0.7,
                        '0.8' => 0.8,
                        '0.9' => 0.9,
                        '1.0' => 1.0
                    ],
                    'validate' => [
                        'type' => 'float'
                    ]
                ],
                'route' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_SITEMAP.ROUTE',
                    'placeholder' => '/sitemap',
                    'validate' => [
                        'pattern' => '/([a-z\\-_]+/?)+'
                    ]
                ],
                'ignores' => [
                    'type' => 'array',
                    'label' => 'PLUGIN_SITEMAP.IGNORES',
                    'help' => 'PLUGIN_SITEMAP.IGNORES_HELP',
                    'value_only' => true,
                    'placeholder_value' => '/ignore-this-route'
                ],
                'additions' => [
                    'type' => 'list',
                    'label' => 'PLUGIN_SITEMAP.ADDITIONS',
                    'help' => 'PLUGIN_SITEMAP.ADDITIONS_HELP',
                    'fields' => [
                        '.location' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_SITEMAP.LOCATION',
                            'placeholder' => '/not-a-grav-url'
                        ],
                        '.lastmod' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_SITEMAP.LASTMOD',
                            'placeholder' => '2017-04-06'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
