<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/config/plugins/flex-objects.yaml',
    'modified' => 1590627082,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'extra_admin_twig_path' => 'theme://admin/templates',
        'object' => [
            'cache' => [
                'index' => [
                    'enabled' => true,
                    'timeout' => 60
                ],
                'object' => [
                    'enabled' => true,
                    'timeout' => 60
                ],
                'render' => [
                    'enabled' => true,
                    'timeout' => 60
                ]
            ]
        ],
        'directories' => [
            0 => 'plugin://flex-objects/blueprints/flex-objects/contacts.yaml',
            1 => 'blueprints://flex-objects/pages.yaml',
            2 => 'blueprints://flex-objects/user-accounts.yaml',
            3 => 'blueprints://flex-objects/user-groups.yaml'
        ],
        'admin_list' => [
            'per_page' => 15,
            'order' => [
                'by' => 'updated_timestamp',
                'dir' => 'desc'
            ]
        ]
    ]
];
