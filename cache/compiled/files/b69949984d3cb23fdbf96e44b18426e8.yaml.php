<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/image-captions/blueprints.yaml',
    'modified' => 1583505684,
    'data' => [
        'name' => 'Image Captions',
        'version' => '2.0.1',
        'description' => 'Looks for images with defined title attribute and converts them to figcaptions.',
        'icon' => 'image',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'devs@trilby.media'
        ],
        'homepage' => 'https://github.com/trilbymedia/grav-plugin-image-captions',
        'keywords' => 'image, caption, figure, figcaption, grav, plugin',
        'bugs' => 'https://github.com/trilbymedia/grav-plugin-image-captions/issues',
        'docs' => 'https://github.com/trilbymedia/grav-plugin-image-captions/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Built-in CSS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'entire_page' => [
                    'type' => 'toggle',
                    'label' => 'Scan the entire page',
                    'help' => 'With this disabled, only the content is scanned',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'scope' => [
                    'type' => 'text',
                    'label' => 'Scope',
                    'placeholder' => 'img.caption',
                    'help' => 'img.caption will search for <img> tags with class=\'caption\''
                ],
                'figure_class' => [
                    'type' => 'text',
                    'label' => 'Figure class',
                    'placeholder' => 'image-caption'
                ],
                'figcaption_class' => [
                    'type' => 'text',
                    'label' => 'Figcaption class'
                ]
            ]
        ]
    ]
];
