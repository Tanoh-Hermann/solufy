<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/translator/translator.yaml',
    'modified' => 1590097398,
    'data' => [
        'enabled' => true,
        'base_route' => '/translator',
        'fields' => [
            0 => 'text',
            1 => 'textarea',
            2 => 'editor',
            3 => 'ckeditor',
            4 => 'markdown'
        ],
        'slack' => [
            'enabled' => false,
            'webhook' => '',
            'channel' => '#general'
        ],
        'style' => [
            'color' => '#39CCCC',
            'logo' => [
                'user/plugins/translator/images/grav-logo.png' => [
                    'name' => 'grav-logo.png',
                    'type' => 'image/png',
                    'size' => 14215,
                    'path' => 'user/plugins/translator/images/grav-logo.png'
                ]
            ]
        ],
        'g_translate' => [
            'type' => 'json',
            'key' => 'user-data://key.json'
        ]
    ]
];
