<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/sitemap/blueprints/sitemap.yaml',
    'modified' => 1590078960,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'options' => [
                            'type' => 'tab',
                            'fields' => [
                                'sitemap' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_SITEMAP.SITEMAP',
                                    'underline' => true,
                                    'fields' => [
                                        'header.sitemap.ignore' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_SITEMAP.HEADER_IGNORE',
                                            'highlight' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool',
                                                'required' => false
                                            ]
                                        ],
                                        'header.sitemap.changefreq' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_SITEMAP.HEADER_CHANGEFREQ',
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
                                        'header.sitemap.priority' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_SITEMAP.HEADER_PRIORITY',
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
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
