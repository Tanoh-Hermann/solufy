<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/widget/blueprints/widget_location.yaml',
    'modified' => 1590098806,
    'data' => [
        'form' => [
            'name' => 'loc',
            'type' => 'select',
            'label' => 'PLUGIN_WIDGET.LOCATION',
            'classes' => 'fancy',
            '@data-options' => '\\Grav\\Plugin\\WidgetPlugin::definedWidgetAreas',
            '@data-help' => '\\Grav\\Plugin\\WidgetPlugin::locationHelp',
            'options' => [
                'default' => 'PLUGIN_WIDGET.DEFAULT'
            ]
        ]
    ]
];