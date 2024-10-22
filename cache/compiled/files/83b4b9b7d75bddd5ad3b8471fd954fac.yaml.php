<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/config/plugins/admin.yaml',
    'modified' => 1590020794,
    'data' => [
        'enabled' => true,
        'route' => '/admin',
        'cache_enabled' => false,
        'theme' => 'grav',
        'logo_text' => 'Angahi',
        'body_classes' => NULL,
        'content_padding' => true,
        'twofa_enabled' => true,
        'log_viewer_files' => [
            0 => 'grav',
            1 => 'email'
        ],
        'sidebar' => [
            'activate' => 'tab',
            'hover_delay' => 100,
            'size' => 'auto'
        ],
        'dashboard' => [
            'days_of_stats' => 7
        ],
        'widgets' => [
            'dashboard-maintenance' => true,
            'dashboard-statistics' => true,
            'dashboard-notifications' => true,
            'dashboard-feed' => true,
            'dashboard-pages' => true
        ],
        'pages' => [
            'show_parents' => 'both',
            'show_modular' => true,
            'parents_levels' => NULL
        ],
        'session' => [
            'timeout' => 1800
        ],
        'warnings' => [
            'delete_page' => true,
            'secure_delete' => true
        ],
        'edit_mode' => 'normal',
        'frontend_preview_target' => 'inline',
        'show_github_msg' => true,
        'pages_list_display_field' => 'title',
        'google_fonts' => true,
        'admin_icons' => 'font-awesome',
        'enable_auto_updates_check' => true,
        'notifications' => [
            'feed' => true,
            'dashboard' => true,
            'plugins' => true,
            'themes' => true
        ],
        'popularity' => [
            'enabled' => true,
            'ignore' => [
                0 => '/test*',
                1 => '/modular'
            ],
            'history' => [
                'daily' => '30',
                'monthly' => '12',
                'visitors' => '20'
            ]
        ],
        'frontend_pages_target' => '_blank',
        'add_modals' => [
            0 => [
                'label' => 'Add Blog Item',
                'blueprint' => 'admin/pages/new_blog_item',
                'show_in' => 'bar'
            ],
            1 => [
                'label' => 'Add Page with Sidebar',
                'blueprint' => 'admin/pages/new_page',
                'show_in' => 'bar'
            ],
            2 => [
                'label' => 'Add Presentation',
                'blueprint' => 'admin/pages/new_presentation',
                'show_in' => 'dropdown'
            ],
            3 => [
                'label' => 'Add Presentations List',
                'blueprint' => 'admin/pages/new_presentation_list',
                'show_in' => 'dropdown'
            ],
            4 => [
                'label' => 'Add Course Subsite',
                'blueprint' => 'admin/pages/new_subsite',
                'show_in' => 'dropdown'
            ]
        ],
        'hide_page_types' => [
            0 => 'custompagetypes',
            1 => 'default',
            2 => 'error',
            3 => 'external',
            4 => 'flex-objects',
            5 => 'form',
            6 => 'formdata',
            7 => 'latestcustompagetype',
            8 => 'simplesearch_results',
            9 => 'wcstopnote'
        ],
        'show_beta_msg' => NULL,
        'hide_modular_page_types' => NULL,
        'pagemedia' => [
            'resize_width' => 0,
            'resize_height' => 0,
            'res_min_width' => 0,
            'res_min_height' => 0,
            'res_max_width' => 0,
            'res_max_height' => 0,
            'resize_quality' => 0.8
        ]
    ]
];
