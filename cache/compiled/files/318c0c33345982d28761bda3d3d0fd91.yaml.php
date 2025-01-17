<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/themes/bootstrap4-open-matter/blueprints/default.yaml',
    'modified' => 1590617408,
    'data' => [
        'title' => 'Git Sync Options',
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
                            'type' => 'tab',
                            'fields' => [
                                'content' => [
                                    'markdown' => true,
                                    'default' => 'Your page content goes here.'
                                ]
                            ]
                        ],
                        'options' => [
                            'type' => 'tab',
                            'fields' => [
                                'appearance' => [
                                    'type' => 'section',
                                    'title' => 'Appearance',
                                    'underline' => true
                                ],
                                'header.hide_page_title' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Title at top of Page',
                                    'help' => 'Determines if the page title is displayed at the top of a page',
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
                                'header.show_sidebar' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Sidebar on Page',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Yes',
                                        0 => 'No'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'gitsync' => [
                                    'type' => 'section',
                                    'title' => 'Git Sync Link',
                                    'underline' => true
                                ],
                                'header.hide_git_sync_repo_link' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Git Sync Link on Page',
                                    'help' => 'Determines if a Git Sync Link is displayed on this page',
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
                                'header.git_sync_repo_link_text' => [
                                    'type' => 'input.text',
                                    'size' => 'medium',
                                    'label' => 'Custom Git Sync Link Text',
                                    'description' => 'Link text, e.g. \'View Page on GitHub\'.',
                                    'validate' => [
                                        'type' => 'text'
                                    ]
                                ],
                                'header.git_sync_repo_link' => [
                                    'type' => 'text',
                                    'size' => 'large',
                                    'label' => 'Custom Git Repository File/Folder URL',
                                    'help' => 'Enter the URL for this Page in your Git Repository, to override the automatically calculated URL',
                                    'default' => NULL,
                                    'validate' => [
                                        'type' => 'URL'
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
