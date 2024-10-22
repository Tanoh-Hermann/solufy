<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/widget/widget.yaml',
    'modified' => 1590098806,
    'data' => [
        'enabled' => true,
        'parent' => 'widgets',
        'enable_twig' => true,
        'enable_shortcode' => false,
        'enable_modal' => true,
        'add_modals' => [
            0 => [
                'label' => 'Create Widget',
                'blueprint' => 'admin/pages/widget_new',
                'show_in' => 'bar'
            ]
        ],
        'extras' => true,
        'widgets_in_widget' => false,
        'append_area_name' => false,
        'subpage_inherit' => false
    ]
];
