<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://bootstrap4-open-matter/bootstrap4-open-matter.yaml',
    'modified' => 1590617408,
    'data' => [
        'navbar_style' => 'navbar-dark',
        'navbar_position' => 'top',
        'navbar_breakpoint' => 'md',
        'git_sync_edit_theme_link_location' => 'none',
        'dropdown' => [
            'enabled' => false
        ],
        'streams' => [
            'schemes' => [
                'theme' => [
                    'type' => 'ReadOnlyStream',
                    'prefixes' => [
                        '' => [
                            0 => 'themes://bootstrap4-open-matter',
                            1 => 'themes://bootstrap4'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
