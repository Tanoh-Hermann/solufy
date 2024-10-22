<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/admin-frontmatter-yaml/blueprints.yaml',
    'modified' => 1590022802,
    'data' => [
        'name' => 'Admin Frontmatter Yaml',
        'version' => '0.1.0',
        'description' => 'Support frontmatter.yaml files in Admin plugin',
        'icon' => 'plug',
        'author' => [
            'name' => 'Igor Kuznetsov',
            'email' => 'igk@igk.ru'
        ],
        'homepage' => 'https://github.com/igk1972/grav-plugin-admin-frontmatter-yaml',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, plugin, etc',
        'bugs' => 'https://github.com/igk1972/grav-plugin-admin-frontmatter-yaml/issues',
        'docs' => 'https://github.com/igk1972/grav-plugin-admin-frontmatter-yaml/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
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
                'blocks' => [
                    'type' => 'selectize',
                    'size' => 'large',
                    'label' => 'PLUGIN_ADMIN_FRONTMATTER_YAML.BLOCKS',
                    'classes' => 'fancy',
                    'help' => 'PLUGIN_ADMIN_FRONTMATTER_YAML.BLOCKS_HELP',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ]
            ]
        ]
    ]
];
