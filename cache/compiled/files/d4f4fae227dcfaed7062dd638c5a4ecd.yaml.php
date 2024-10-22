<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/pages/06.start/frontmatter.yaml',
    'modified' => 1590332794,
    'data' => [
        'hide_page_title' => false,
        'show_sidebar' => true,
        'hide_git_sync_repo_link' => false,
        'menu' => 'Sign up',
        'slug' => 'start',
        'routable' => true,
        'cache_enable' => false,
        'visible' => true,
        'twittercardoptions' => 'summary',
        'articleenabled' => false,
        'musiceventenabled' => false,
        'orgaenabled' => false,
        'orga' => [
            'ratingValue' => 2.5
        ],
        'orgaratingenabled' => false,
        'eventenabled' => false,
        'personenabled' => false,
        'productenabled' => false,
        'product' => [
            'ratingValue' => 2.5
        ],
        'restaurantenabled' => false,
        'restaurant' => [
            'acceptsReservations' => 'yes',
            'priceRange' => '$'
        ],
        'sequence' => [
            'banner' => true,
            'content' => 'above'
        ],
        'form' => [
            'name' => 'user-data',
            'fields' => [
                0 => [
                    'name' => 'location',
                    'type' => 'text',
                    'label' => 'Location'
                ],
                1 => [
                    'name' => 'mood',
                    'type' => 'text',
                    'label' => 'Mood'
                ],
                2 => [
                    'name' => 'tool',
                    'type' => 'hidden',
                    'label' => 'Tool'
                ]
            ],
            'buttons' => [
                0 => [
                    'type' => 'submit',
                    'value' => 'Start Registration'
                ]
            ],
            'process' => [
                0 => [
                    'sequence' => [
                        'name' => 'collect-data-sq',
                        'routes' => [
                            0 => 'video',
                            1 => 'terms'
                        ],
                        'icons' => [
                            0 => 'address-card',
                            1 => 'video-camera',
                            2 => 'thumbs-up'
                        ]
                    ]
                ],
                1 => [
                    'redirect' => 'start/final'
                ]
            ]
        ]
    ]
];
