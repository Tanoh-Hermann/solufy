<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/relatedpages/blueprints.yaml',
    'modified' => 1590068482,
    'data' => [
        'name' => 'Related Pages',
        'version' => '1.2.2',
        'description' => 'A highly sophisticated and configurable plugin that calculates related pages in relation to the current page.',
        'icon' => 'newspaper-o',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-relatedpages',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'related, plugin',
        'bugs' => 'https://github.com/getgrav/grav-plugin-relatedpages/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.5.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
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
                'basics_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_REL_PAGES.BASICS',
                    'underline' => true
                ],
                'limit' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'PLUGIN_REL_PAGES.LIMIT',
                    'help' => 'PLUGIN_REL_PAGES.LIMIT_HELP',
                    'validate' => [
                        'type' => 'int',
                        'min' => 0,
                        'max' => 65536
                    ]
                ],
                'show_score' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_REL_PAGES.SHOW_SCORE',
                    'help' => 'PLUGIN_REL_PAGES.SHOW_SCORE_HELP',
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
                'filter.items' => [
                    'type' => 'multilevel',
                    'label' => 'PLUGIN_REL_PAGES.ITEMS',
                    'value_only' => true,
                    'validate' => [
                        'type' => 'array'
                    ]
                ],
                'filter.order.by' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_REL_PAGES.ORDER_BY',
                    'default' => 'date',
                    'options' => [
                        'folder' => 'Folder',
                        'title' => 'Title',
                        'date' => 'Date',
                        'default' => 'Default'
                    ]
                ],
                'filter.order.dir' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_REL_PAGES.ORDER',
                    'default' => 'desc',
                    'options' => [
                        'asc' => 'Ascending',
                        'desc' => 'Descending'
                    ]
                ],
                'page_in_filter' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_REL_PAGES.PAGE_IN_FILTER',
                    'help' => 'PLUGIN_REL_PAGES.PAGE_IN_FILTER_HELP',
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
                'explicit_pages.process' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_REL_PAGES.EXPLICIT_PROCESS',
                    'help' => 'PLUGIN_REL_PAGES.EXPLICIT_PROCESS_HELP',
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
                'explicit_pages.score' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'PLUGIN_REL_PAGES.EXPLICIT_SCORE',
                    'help' => 'PLUGIN_REL_PAGES.EXPLICIT_SCORE_HELP',
                    'validate' => [
                        'type' => 'int',
                        'min' => 0,
                        'max' => 100
                    ]
                ],
                'taxonomy_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_REL_PAGES.TAXONOMY_MATCH',
                    'underline' => true
                ],
                'taxonomy_match.taxonomy' => [
                    'type' => 'textarea',
                    'yaml' => true,
                    'size' => 'medium',
                    'label' => 'PLUGIN_REL_PAGES.TAXONOMY',
                    'help' => 'PLUGIN_REL_PAGES.TAXONOMY_HELP',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'taxonomy_match.taxonomy_taxonomy.process' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_REL_PAGES.TAXONOMY_TAXONOMY_PROCESS',
                    'help' => 'PLUGIN_REL_PAGES.TAXONOMY_TAXONOMY_PROCESS_HELP',
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
                'taxonomy_match.taxonomy_content.process' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_REL_PAGES.TAXONOMY_CONTENT_PROCESS',
                    'help' => 'PLUGIN_REL_PAGES.TAXONOMY_CONTENT_PROCESS_HELP',
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
                'content_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_REL_PAGES.CONTENT_MATCH',
                    'underline' => true
                ],
                'content_match.process' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_REL_PAGES.CONTENT_PROCESS',
                    'help' => 'PLUGIN_REL_PAGES.CONTENT_PROCESS_HELP',
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
                'advanced_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_REL_PAGES.ADVANCED',
                    'underline' => true
                ],
                'taxonomy_match.taxonomy_taxonomy.score_scale' => [
                    'type' => 'array',
                    'label' => 'PLUGIN_REL_PAGES.TAXONOMY_SCORE_SCALE',
                    'size' => 'large',
                    'default' => [
                        0 => 50,
                        1 => 75,
                        2 => 100
                    ],
                    'value_only' => true,
                    'placeholder_value' => 50
                ],
                'taxonomy_match.taxonomy_content.score_scale' => [
                    'type' => 'array',
                    'label' => 'PLUGIN_REL_PAGES.CONTENT_SCORE_SCALE',
                    'size' => 'large',
                    'default' => [
                        0 => 50,
                        1 => 75,
                        2 => 100
                    ],
                    'value_only' => true,
                    'placeholder_value' => 50
                ]
            ]
        ]
    ]
];
