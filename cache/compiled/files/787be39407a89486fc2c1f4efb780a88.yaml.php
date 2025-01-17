<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:\\laragon\\www\\angahi\\user\\plugins\\jscomments/blueprints/jscomments.yaml',
    'modified' => 1590026952,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'options' => [
                            'type' => 'tab',
                            'fields' => [
                                'jscomments' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.JS_COMMENTS.PLUGIN_NAME',
                                    'underline' => true,
                                    'fields' => [
                                        'header.jscomments.active' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGINS.JS_COMMENTS.PLUGIN_ACTIVE',
                                            'help' => 'PLUGINS.JS_COMMENTS.PLUGIN_ACTIVE_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.jscomments.provider' => [
                                            'type' => 'select',
                                            'size' => 'medium',
                                            'toggleable' => true,
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.TITLE',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.HELP',
                                            'data-options@' => '\\Grav\\Plugin\\JSCommentsPlugin::getProviders',
                                            'options' => [
                                                '' => 'PLUGINS.JS_COMMENTS.USE_DEFAULT'
                                            ],
                                            'config-default@' => 'plugins.jscomments.provider',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'header.jscomments.title' => [
                                            'type' => 'text',
                                            'toggleable' => true,
                                            'label' => 'PLUGINS.JS_COMMENTS.OVERRIDE.PAGE_TITLE',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'header.jscomments.url' => [
                                            'type' => 'text',
                                            'toggleable' => true,
                                            'label' => 'PLUGINS.JS_COMMENTS.OVERRIDE.PAGE_URL',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'header.jscomments.id' => [
                                            'type' => 'text',
                                            'toggleable' => true,
                                            'label' => 'PLUGINS.JS_COMMENTS.OVERRIDE.PAGE_ID',
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
