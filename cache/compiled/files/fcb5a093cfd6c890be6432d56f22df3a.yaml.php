<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/smoochchat/blueprints.yaml',
    'modified' => 1590079302,
    'data' => [
        'name' => 'Smooch Chat',
        'version' => '1.0.0',
        'description' => 'Smooch.io live chat web messenger integration',
        'icon' => 'comments',
        'author' => [
            'name' => 'Matt Marsh',
            'email' => 'matt@crazedbytes.net'
        ],
        'homepage' => 'https://github.com/marshmn/grav-plugin-smoochchat',
        'demo' => 'https://demos.crazedbytes.net/smoochchat',
        'keywords' => 'grav, plugin, live chat, smooch',
        'bugs' => 'https://github.com/marshmn/grav-plugin-smoochchat/issues',
        'docs' => 'https://github.com/marshmn/grav-plugin-smoochchat/blob/master/README.md',
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
                'app_id' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_SMOOCHCHAT.APP_ID',
                    'help' => 'PLUGIN_SMOOCHCHAT.APP_ID_HELP'
                ]
            ]
        ]
    ]
];
