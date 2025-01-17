<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/external_links/blueprints/external_links.yaml',
    'modified' => 1583505680,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'options' => [
                            'type' => 'tab',
                            'fields' => [
                                'external_links' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.EXTERNAL_LINKS.PLUGIN_NAME',
                                    'underline' => true,
                                    'fields' => [
                                        'header.external_links.process' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGINS.EXTERNAL_LINKS.PROCESS',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.external_links.title' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGINS.EXTERNAL_LINKS.TITLE',
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.external_links.no_follow' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGINS.EXTERNAL_LINKS.NO_FOLLOW',
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.external_links.target' => [
                                            'type' => 'select',
                                            'size' => 'large',
                                            'toggleable' => true,
                                            'label' => 'PLUGINS.EXTERNAL_LINKS.TARGET',
                                            '@config-default' => 'plugins.external_links.target',
                                            'placeholder' => '_blank',
                                            'selectize' => [
                                                'create' => true
                                            ],
                                            'options' => [
                                                '_blank' => 'PLUGINS.EXTERNAL_LINKS.TARGET_BLANK',
                                                '_self' => 'PLUGINS.EXTERNAL_LINKS.TARGET_SELF',
                                                '_parent' => 'PLUGINS.EXTERNAL_LINKS.TARGET_PARENT',
                                                '_top' => 'PLUGINS.EXTERNAL_LINKS.TARGET_TOP'
                                            ],
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'header.external_links.mode' => [
                                            'type' => 'select',
                                            'size' => 'large',
                                            'classes' => 'fancy',
                                            'toggleable' => true,
                                            'label' => 'PLUGINS.EXTERNAL_LINKS.MODE',
                                            'help' => 'PLUGINS.EXTERNAL_LINKS.MODE_HELP',
                                            '@config-default' => 'plugins.external_links.mode',
                                            'options' => [
                                                'active' => 'PLUGINS.EXTERNAL_LINKS.MODE_ACTIVE',
                                                'passive' => 'PLUGINS.EXTERNAL_LINKS.MODE_PASSIVE'
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
