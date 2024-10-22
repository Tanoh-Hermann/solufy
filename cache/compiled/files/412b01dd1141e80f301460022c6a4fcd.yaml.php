<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/config/plugins/form.yaml',
    'modified' => 1590020362,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'inline_css' => true,
        'refresh_prevention' => true,
        'client_side_validation' => true,
        'inline_errors' => false,
        'files' => [
            'multiple' => false,
            'limit' => 10,
            'destination' => 'self@',
            'avoid_overwriting' => false,
            'random_name' => false,
            'filesize' => 0,
            'accept' => [
                0 => 'image/*'
            ]
        ],
        'recaptcha' => [
            'version' => '2-checkbox',
            'theme' => 'dark',
            'site_key' => NULL,
            'secret_key' => NULL
        ]
    ]
];
