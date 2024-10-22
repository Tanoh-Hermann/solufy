<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/widget/blueprints/widget.yaml',
    'modified' => 1590098806,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'data-pattern@' => [
                    0 => '\\Grav\\Plugin\\WidgetPlugin::folderPattern'
                ],
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'widget_extra' => [
                                    'type' => 'section',
                                    'underline' => true,
                                    'data-type@' => [
                                        0 => '\\Grav\\Plugin\\WidgetPlugin::featureEnabled',
                                        1 => 'extras',
                                        2 => 'section'
                                    ],
                                    'ordering@' => 1000,
                                    'fields' => [
                                        'header.id' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_WIDGET.ID',
                                            'help' => 'PLUGIN_WIDGET.ID_HELP'
                                        ],
                                        'header.class' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_WIDGET.CLASS',
                                            'help' => 'PLUGIN_WIDGET.CLASS_HELP'
                                        ],
                                        'header.background_color' => [
                                            'type' => 'colorpicker',
                                            'label' => 'PLUGIN_WIDGET.BACKGROUND_COLOR',
                                            'help' => 'PLUGIN_WIDGET.BACKGROUND_COLOR_HELP'
                                        ],
                                        'header.background_image' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_WIDGET.BACKGROUND_IMAGE',
                                            'placeholder' => 'path | page@:path | theme@:path',
                                            'help' => 'PLUGIN_WIDGET.BACKGROUND_IMAGE_HELP'
                                        ],
                                        'header.image_align' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_WIDGET.IMAGE_ALIGN',
                                            'highlight' => '',
                                            'default' => '',
                                            'options' => [
                                                '' => 'None',
                                                'left' => 'left',
                                                'right' => 'right'
                                            ],
                                            'help' => 'PLUGIN_WIDGET.IMAGE_ALIGN_HELP'
                                        ],
                                        'header.link' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_WIDGET.LINK',
                                            'placeholder' => 'PLUGIN_WIDGET.LINK_PLACEHOLDER'
                                        ],
                                        'header.link_text' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_WIDGET.LINK_TEXT',
                                            'placeholder' => 'PLUGIN_WIDGET.LINK_TEXT_HELP'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'widget' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_WIDGET.WIDGET',
                            'data-type@' => [
                                0 => '\\Grav\\Plugin\\WidgetPlugin::featureEnabled',
                                1 => 'widget_tab',
                                2 => 'tab'
                            ],
                            'fields' => [
                                'header.widget.areas' => [
                                    'label' => 'PLUGIN_WIDGET.WIDGET_AERAS',
                                    'style' => 'vertical',
                                    'type' => 'list',
                                    'btnLabel' => 'PLUGIN_WIDGET.ADD_LOCATION',
                                    'fields' => [
                                        '.location' => [
                                            'import@' => [
                                                'type' => 'widget_location',
                                                'context' => 'blueprints://'
                                            ]
                                        ],
                                        '.widgets' => [
                                            'import@' => [
                                                'type' => 'widget_widgets',
                                                'context' => 'blueprints://'
                                            ]
                                        ]
                                    ]
                                ],
                                'header.widget.options' => [
                                    'type' => 'array',
                                    'label' => 'PLUGIN_WIDGET.WIDGET_OPTIONS',
                                    'help' => 'PLUGIN_WIDGET.WIDGET_OPTIONS_HELP',
                                    'placeholder_key' => 'PLUGIN_WIDGET.WIDGET_OPTION_NAME',
                                    'placeholder_value' => 'PLUGIN_WIDGET.WIDGET_OPTION_VALUE',
                                    'required' => false
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
