<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/themes/bootstrap4-open-matter/blueprints/subsitelist.yaml',
    'modified' => 1590617408,
    'data' => [
        'title' => 'Subsite List Page Options',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'subsitelistoptions' => [
                            'type' => 'tab',
                            'title' => 'Subsite List',
                            'fields' => [
                                'blogpostappearance' => [
                                    'type' => 'section',
                                    'title' => 'Appearance',
                                    'underline' => true
                                ],
                                'header.card_width' => [
                                    'type' => 'select',
                                    'label' => 'Subsite List Card Width (in columns)',
                                    'default' => 'none',
                                    'size' => 'medium',
                                    'options' => [
                                        3 => '3 Cards per Row (without Sidebar)',
                                        5 => '2 Cards per Row',
                                        12 => '1 Card per Row'
                                    ]
                                ],
                                'header.content.order.by' => [
                                    'type' => 'select',
                                    'label' => 'Order By',
                                    'default' => 'date',
                                    'size' => 'small',
                                    'options' => [
                                        'folder' => 'Folder',
                                        'title' => 'Title',
                                        'date' => 'Date',
                                        'default' => 'Folder'
                                    ]
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'select',
                                    'label' => 'Order',
                                    'default' => 'asc',
                                    'size' => 'small',
                                    'options' => [
                                        'asc' => 'Ascending',
                                        'desc' => 'Descending'
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
