<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/twigpcre/blueprints.yaml',
    'modified' => 1583505696,
    'data' => [
        'name' => 'twigpcre',
        'version' => '1.8.0',
        'description' => 'twigpcre exposes php pcre to twig',
        'icon' => 'empire',
        'author' => [
            'name' => 'kesslernetworks',
            'email' => 'office@kesslernetworks.de',
            'url' => 'http://www.kesslernetworks.de'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-twigpcre',
        'keywords' => 'twigpcre, plugin',
        'bugs' => 'https://github.com/getgrav/grav-plugin-twigpcre/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
