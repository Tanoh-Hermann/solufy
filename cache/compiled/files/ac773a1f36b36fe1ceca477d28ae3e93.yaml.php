<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/themes/bootstrap4-open-matter/blueprints/subsite.yaml',
    'modified' => 1590617408,
    'data' => [
        'title' => 'Subsite Options',
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
                        'content' => [
                            'fields' => [
                                'header.title' => [
                                    'replace@' => true,
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Subsite Title'
                                ],
                                'header.subsite_list_title' => [
                                    'ordering@' => 2,
                                    'replace@' => true,
                                    'type' => 'text',
                                    'size' => 'medium',
                                    'label' => 'Subsite List Title',
                                    'description' => 'If empty, Subsite Title is displayed.'
                                ],
                                'header.subsite_list_description' => [
                                    'ordering@' => 3,
                                    'replace@' => true,
                                    'type' => 'text',
                                    'size' => 'long',
                                    'label' => 'Subsite List Description'
                                ],
                                'header.hide_from_subsite_list' => [
                                    'ordering@' => 4,
                                    'type' => 'toggle',
                                    'label' => 'Display this Item in Subsite List',
                                    'help' => 'Determines if this page (i.e. subsite) will appear in the subsite list',
                                    'default' => 0,
                                    'highlight' => 0,
                                    'options' => [
                                        0 => 'Yes',
                                        1 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header.subsite_home' => [
                                    'ordering@' => 5,
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Subsite Home Page',
                                    'description' => 'For example, \'home\'.',
                                    'validate' => [
                                        'required' => true
                                    ]
                                ],
                                'header.navbar_bg_color' => [
                                    'ordering@' => 6,
                                    'type' => 'colorpicker',
                                    'label' => 'Subsite NavBar Background Color',
                                    'description' => 'If set, will be used for Subsite\'s NavBar Background.',
                                    'size' => 'small'
                                ]
                            ]
                        ],
                        'options' => [
                            'fields' => [
                                'publishing' => [
                                    'fields' => [
                                        'header.published' => [
                                            'default' => 1
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.visible' => [
                                            'default' => 0
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
