<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/widget/blueprints/widget_widgets.yaml',
    'modified' => 1590098806,
    'data' => [
        'form' => [
            'name' => 'widget',
            'type' => 'list',
            'label' => 'PLUGIN_WIDGET.WIDGETS',
            'style' => 'vertical',
            'btnLabel' => 'PLUGIN_WIDGET.ADD_WIDGET',
            'fields' => [
                '.load' => [
                    'type' => 'select',
                    'size' => 'large',
                    'classes' => 'fancy',
                    'label' => 'PLUGIN_WIDGET.WIDGET',
                    'show_all' => false,
                    'show_modular' => true,
                    'show_root' => false,
                    'show_slug' => true,
                    'help' => 'PLUGIN_WIDGET.WIDGET',
                    '@data-options' => '\\Grav\\Plugin\\WidgetPlugin::widgetTypes',
                    'options' => [
                        '' => 'PLUGIN_WIDGET.SELECT'
                    ]
                ],
                '.enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_WIDGET.STATUS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
