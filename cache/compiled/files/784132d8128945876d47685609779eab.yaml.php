<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/widget/blueprints/config/site.yaml',
    'modified' => 1590098806,
    'data' => [
        '@extends' => '@parent',
        'form' => [
            'fields' => [
                'widget_section' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_WIDGET.GLOBAL_WIDGET',
                    'text' => 'PLUGIN_WIDGET.GLOBAL_WIDGET_HELP',
                    'underline' => true,
                    'fields' => [
                        'widget.areas' => [
                            'label' => 'PLUGIN_WIDGET.WIDGET_AERAS',
                            'type' => 'list',
                            'style' => 'vertical',
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
                        ]
                    ]
                ]
            ]
        ]
    ]
];
