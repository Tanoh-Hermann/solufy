<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://mytheme/mytheme.yaml',
    'modified' => 1590350462,
    'data' => [
        'navbar_style' => 'navbar-light',
        'NavBar_Background_Color' => 'transparent',
        'navbar_position' => 'top',
        'navbar_breakpoint' => 'md',
        'git_sync.edit_theme_link_location' => 'none',
        'dropdown' => [
            'enabled' => true
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'user/themes/mytheme',
                            1 => 'user/themes/bootstrap4-open-matter',
                            2 => 'user/themes/bootstrap4'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
