<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/themer/blueprints/themer.yaml',
    'modified' => 1590080750,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.theme' => [
                                            'type' => 'themeselect',
                                            'label' => 'PLUGINS.THEMER.THEME',
                                            'help' => 'PLUGINS.THEMER.THEME_HELP',
                                            'config-default@' => 'system.pages.theme',
                                            'toggleable' => true,
                                            'selectize' => [
                                                'create' => true
                                            ],
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
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
