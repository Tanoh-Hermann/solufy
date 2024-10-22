<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/config/plugins/presentation.yaml',
    'modified' => 1590020622,
    'data' => [
        'enabled' => true,
        'theme' => 'black',
        'order' => [
            'by' => 'folder',
            'dir' => 'asc'
        ],
        'all_assets' => false,
        'theme_css' => true,
        'builtin_css' => true,
        'builtin_js' => true,
        'plugin_css' => true,
        'plugin_js' => true,
        'textsizing' => true,
        'sync' => 'none',
        'api_route' => 'presentationapi',
        'poll_timeout' => 2000,
        'poll_retry_limit' => 10,
        'token_auth' => false,
        'token' => 'Hd4HFdPvbpKzTqz',
        'admin_async_save' => true,
        'admin_async_save_typing' => true,
        'footer' => NULL,
        'transition' => true,
        'shortcodes' => true,
        'shortcode_classes' => 'presentation-iframe',
        'unwrap_images' => true,
        'content' => 'Content',
        'parser' => 'DecksetParser',
        'transport' => 'Transport',
        'shortcode_parser' => 'RegularParser',
        'breakpoints' => [
            240 => '8',
            320 => '10',
            576 => '18',
            768 => '24',
            992 => '32',
            1200 => '36',
            1600 => '40'
        ],
        'options' => [
            'width' => '100%',
            'height' => '100%',
            'margin' => '0',
            'minScale' => '1',
            'maxScale' => '1',
            'transition' => 'fade',
            'controlsTutorial' => 'false',
            'history' => 'true',
            'display' => 'flex',
            'pdfSeparateFragments' => ''
        ],
        'style' => [
            'header-font-family' => 'GillSans,\'Gill Sans MT\',Arial',
            'header-color' => '#ffffff',
            'block-font-family' => 'GillSans,\'Gill Sans MT\',Arial',
            'block-color' => '#ffffff',
            'background-color' => '#16161d',
            'justify-content' => 'center',
            'background-image' => NULL,
            'background-size' => NULL,
            'background-repeat' => NULL,
            'align-items' => NULL
        ],
        'textsize' => [
            'modifier' => 1,
            'scale' => '1.125'
        ],
        'horizontal' => true
    ]
];
