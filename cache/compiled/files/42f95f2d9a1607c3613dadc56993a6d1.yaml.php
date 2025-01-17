<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/archive_plus/blueprints.yaml',
    'modified' => 1590023314,
    'data' => [
        'name' => 'Archive Plus',
        'version' => '1.3.2',
        'description' => 'The **Archive Plus** plugin is an enhanced version of the [Grav Archives plugin](https://github.com/getgrav/grav-plugin-archives) with more configuration options and the ability to show a blogger like hierarchical archive menu for links grouped by month and/or year.',
        'icon' => 'university',
        'author' => [
            'name' => 'Sommerregen',
            'email' => 'sommerregen@benjamin-regler.de'
        ],
        'homepage' => 'https://github.com/sommerregen/grav-plugin-archive-plus',
        'docs' => 'https://github.com/sommerregen/grav-plugin-archive-plus/blob/master/README.md',
        'keywords' => [
            0 => 'archive',
            1 => 'plugin',
            2 => 'blog',
            3 => 'month',
            4 => 'year',
            5 => 'date',
            6 => 'navigation',
            7 => 'history'
        ],
        'bugs' => 'https://github.com/sommerregen/grav-plugin-archive-plus/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'global' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.ARCHIVE_PLUS.GLOBAL_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'enabled' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.PLUGIN_STATUS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.ENABLED',
                                0 => 'PLUGIN_ADMIN.DISABLED'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'built_in_css' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.BUILTIN_CSS',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ],
                'default' => [
                    'type' => 'section',
                    'title' => 'PLUGINS.ARCHIVE_PLUS.DEFAULT_CONFIG',
                    'underline' => 1,
                    'fields' => [
                        'show.counter' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.SHOW_NUMBER_OF_POSTS',
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'show.year' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.SHOW_YEAR',
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'show.month' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.SHOW_MONTH',
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'show.items' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.SHOW_POSTS',
                            'default' => 1,
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        'limit.year' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.YEAR_LIMIT',
                            'default' => 2,
                            'help' => 'PLUGINS.ARCHIVE_PLUS.YEAR_LIMIT_HELP',
                            'validate' => [
                                'type' => 'number',
                                'min' => 0
                            ]
                        ],
                        'limit.month' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.MONTH_LIMIT',
                            'default' => 12,
                            'help' => 'PLUGINS.ARCHIVE_PLUS.MONTH_LIMIT_HELP',
                            'validate' => [
                                'type' => 'number',
                                'min' => 0
                            ]
                        ],
                        'limit.items' => [
                            'type' => 'text',
                            'size' => 'x-small',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.POST_ITEM_LIMIT',
                            'default' => 40,
                            'help' => 'PLUGINS.ARCHIVE_PLUS.POST_ITEM_LIMIT_HELP',
                            'validate' => [
                                'type' => 'number',
                                'min' => 0
                            ]
                        ],
                        'order.dir' => [
                            'type' => 'toggle',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.ORDER_DIRECTION',
                            'highlight' => 'asc',
                            'default' => 'desc',
                            'options' => [
                                'asc' => 'PLUGIN_ADMIN.ASCENDING',
                                'desc' => 'PLUGIN_ADMIN.DESCENDING'
                            ]
                        ],
                        'order.by' => [
                            'type' => 'select',
                            'size' => 'large',
                            'classes' => 'fancy',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.ORDER_TYPE',
                            'options' => [
                                'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                                'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                                'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                                'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                            ]
                        ],
                        'filters' => [
                            'type' => 'array',
                            'size' => 'large',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.FILTER',
                            'help' => 'PLUGINS.ARCHIVE_PLUS.FILTER_HELP',
                            'placeholder_key' => 'PLUGINS.ARCHIVE_PLUS.FILTER_PLACEHOLDER_KEY',
                            'placeholder_value' => 'PLUGINS.ARCHIVE_PLUS.FILTER_PLACEHOLDER_VALUE'
                        ],
                        'filter_combinator' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'classes' => 'fancy',
                            'label' => 'PLUGINS.ARCHIVE_PLUS.FILTER_COMBINATOR',
                            'default' => 'and',
                            'options' => [
                                'and' => 'PLUGINS.ARCHIVE_PLUS.FILTER_COMBINATOR_AND',
                                'or' => 'PLUGINS.ARCHIVE_PLUS.FILTER_COMBINATOR_OR'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
