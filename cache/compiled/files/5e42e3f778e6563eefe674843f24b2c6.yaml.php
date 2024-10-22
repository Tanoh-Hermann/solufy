<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/pages/05.France/02.shop/frontmatter.yaml',
    'modified' => 1590406050,
    'data' => [
        'hide_page_title' => true,
        'show_sidebar' => false,
        'hide_git_sync_repo_link' => false,
        'body_classes' => 'fullwidth',
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
        'content' => [
            'items' => '@self.children',
            'order' => [
                'by' => 'title',
                'dir' => 'asc'
            ]
        ]
    ]
];
