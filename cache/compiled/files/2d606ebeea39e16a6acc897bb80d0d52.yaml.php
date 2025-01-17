<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/presentation/blueprints.yaml',
    'modified' => 1590330996,
    'data' => [
        'name' => 'Presentation',
        'version' => '3.1.3',
        'description' => 'Responsive navigational slideshows with Reveal.js',
        'icon' => 'arrows-alt',
        'author' => [
            'name' => 'Ole Vik',
            'email' => 'git@olevik.net'
        ],
        'homepage' => 'https://github.com/OleVik/grav-plugin-presentation/',
        'demo' => 'https://olevik.me/staging/grav-skeleton-presentation/',
        'keywords' => 'presentation, fullscreen, slides, slideshow, reveal.js',
        'bugs' => 'https://github.com/OleVik/grav-plugin-presentation/issues',
        'docs' => 'https://github.com/OleVik/grav-plugin-presentation/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'options' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_PRESENTATION.ADMIN.TABS.OPTIONS',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Plugin status',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'theme' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.THEME.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.THEME.DESCRIPTION',
                                    'data-options@' => '\\Grav\\Plugin\\PresentationPlugin::getRevealThemes'
                                ],
                                'order.by' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.BY.LABEL',
                                    'options' => [
                                        'default' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.BY.OPTIONS.DEFAULT',
                                        'folder' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.BY.OPTIONS.FOLDER',
                                        'title' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.BY.OPTIONS.TITLE',
                                        'date' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.BY.OPTIONS.DATE'
                                    ]
                                ],
                                'order.dir' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.DIR.LABEL',
                                    'options' => [
                                        'asc' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.DIR.OPTIONS.ASC',
                                        'desc' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.ORDER.DIR.OPTIONS.DESC'
                                    ]
                                ],
                                'all_assets' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.ALL.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.ALL.DESCRIPTION',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'theme_css' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.THEME_CSS.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.THEME_CSS.DESCRIPTION',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'builtin_css' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.BUILTIN_CSS.LABEL',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'builtin_js' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.BUILTIN_JS.LABEL',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'plugin_css' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.PLUGIN_CSS.LABEL',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'plugin_js' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.ASSETS.PLUGIN_JS.LABEL',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'textsizing' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.TEXTSIZING.LABEL',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'breakpoints' => [
                                    'type' => 'array',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.BREAKPOINTS.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.BREAKPOINTS.DESCRIPTION',
                                    'placeholder_key' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.BREAKPOINTS.WIDTH.LABEL',
                                    'placeholder_value' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.BREAKPOINTS.FONT_SIZE.LABEL',
                                    'required' => true
                                ]
                            ]
                        ],
                        'defaults' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_PRESENTATION.ADMIN.DEFAULTS.TITLE',
                            'fields' => [
                                'textsize' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.TITLE',
                                    'underline' => true,
                                    'fields' => [
                                        'textsize.scale' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.SCALE.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.SCALE.DESCRIPTION',
                                            'data-options@' => '\\Grav\\Plugin\\PresentationPlugin::getModularScaleBlueprintOptions'
                                        ],
                                        'textsize.modifier' => [
                                            'type' => 'number',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.MODIFIER.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.TEXTSIZE.MODIFIER.DESCRIPTION',
                                            'default' => 1,
                                            'validate' => [
                                                'type' => 'int',
                                                'min' => 0,
                                                'max' => 100,
                                                'step' => 0.05
                                            ]
                                        ]
                                    ]
                                ],
                                'style' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.TITLE',
                                    'underline' => true,
                                    'fields' => [
                                        'style.header-font-family' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.HEADER.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.HEADER.DESCRIPTION'
                                        ],
                                        'style.header-color' => [
                                            'type' => 'colorpicker',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.HEADER_COLOR.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.HEADER_COLOR.DESCRIPTION'
                                        ],
                                        'style.block-font-family' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.BLOCK.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.BLOCK.DESCRIPTION'
                                        ],
                                        'style.block-color' => [
                                            'type' => 'colorpicker',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.BLOCK_COLOR.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.FONT.BLOCK_COLOR.DESCRIPTION'
                                        ],
                                        'style.background-color' => [
                                            'type' => 'colorpicker',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-COLOR.LABEL'
                                        ],
                                        'style.background-image' => [
                                            'type' => 'filepicker',
                                            'folder' => 'user/pages/images',
                                            'preview_images' => true,
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-IMAGE.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-IMAGE.DESCRIPTION',
                                            'accept' => [
                                                0 => '.png',
                                                1 => '.jpg',
                                                2 => '.gif',
                                                3 => 'image/*'
                                            ]
                                        ],
                                        'style.background-size' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.LABEL',
                                            'options' => [
                                                '' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.NONE',
                                                'auto' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.OPTIONS.AUTO',
                                                'cover' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.OPTIONS.COVER',
                                                'contain' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-SIZE.OPTIONS.CONTAIN',
                                                'initial' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INITIAL',
                                                'inherit' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INHERIT'
                                            ]
                                        ],
                                        'style.background-repeat' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.LABEL',
                                            'options' => [
                                                '' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.NONE',
                                                'no-repeat' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.NO-REPEAT',
                                                'repeat' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.REPEAT',
                                                'repeat-x' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.REPEAT-X',
                                                'repeat-y' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.REPEAT-Y',
                                                'space' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.SPACE',
                                                'round' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.BACKGROUND-REPEAT.OPTIONS.ROUND',
                                                'initial' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INITIAL',
                                                'inherit' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INHERIT'
                                            ]
                                        ],
                                        'style.justify-content' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.LABEL',
                                            'help' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.HELP',
                                            'options' => [
                                                '' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.NONE',
                                                'center' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.CENTER',
                                                'start' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.START',
                                                'end' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.END',
                                                'flex-start' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.FLEX-START',
                                                'flex-end' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.FLEX-END',
                                                'left' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.LEFT',
                                                'right' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.RIGHT',
                                                'normal' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.NORMAL',
                                                'space-between' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.SPACE-BETWEEN',
                                                'space-around' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.SPACE-AROUND',
                                                'space-evenly' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.SPACE-EVENLY',
                                                'stretch' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.JUSTIFY-CONTENT.OPTIONS.STRETCH',
                                                'initial' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INITIAL',
                                                'inherit' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INHERIT'
                                            ]
                                        ],
                                        'style.align-items' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.LABEL',
                                            'help' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.HELP',
                                            'options' => [
                                                '' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.NONE',
                                                'center' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.CENTER',
                                                'start' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.START',
                                                'end' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.END',
                                                'flex-start' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.FLEX-START',
                                                'flex-end' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.FLEX-END',
                                                'self-start' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.SELF-START',
                                                'self-end' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.SELF-END',
                                                'normal' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.NORMAL',
                                                'baseline' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.BASELINE',
                                                'first baseline' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.FIRST-BASELINE',
                                                'last baseline' => 'PLUGIN_PRESENTATION.ADMIN.STYLE.ALIGN-ITEMS.OPTIONS.LAST-BASELINE',
                                                'initial' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INITIAL',
                                                'inherit' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.INHERIT'
                                            ]
                                        ],
                                        'horizontal' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.HORIZONTAL.LABEL',
                                            'help' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.HORIZONTAL.HELP',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.HORIZONTAL.DESCRIPTION',
                                            'highlight' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.HORIZONTAL.OPTIONS.HORIZONTAL',
                                                0 => 'PLUGIN_PRESENTATION.ADMIN.OPTIONS.HORIZONTAL.OPTIONS.VERTICAL'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'advanced' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.TITLE',
                            'fields' => [
                                'admin_async_save' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SAVE.ASYNC.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SAVE.ASYNC.DESCRIPTION',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'admin_async_save_typing' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SAVE.TYPING.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SAVE.TYPING.DESCRIPTION',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'footer' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.FOOTER.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.FOOTER.DESCRIPTION'
                                ],
                                'shortcodes' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODES.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODES.DESCRIPTION',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'shortcode_classes' => [
                                    'type' => 'text',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODE_CLASSES.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODE_CLASSES.DESCRIPTION',
                                    'validate' => [
                                        'type' => 'string'
                                    ]
                                ],
                                'shortcode_parser' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODE_PARSER.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODE_PARSER.LABEL',
                                    'options' => [
                                        'RegularParser' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODE_PARSER.OPTIONS.REGULAR',
                                        'RegexParser' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODE_PARSER.OPTIONS.REGEX',
                                        'WordpressParser' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.SHORTCODE_PARSER.OPTIONS.WORDPRESS'
                                    ]
                                ],
                                'transition' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.TRANSITION.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.TRANSITION.DESCRIPTION',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'unwrap_images' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.UNWRAP_IMAGES.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.UNWRAP_IMAGES.DESCRIPTION',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'content' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.CONTENT.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.CONTENT.DESCRIPTION',
                                    'data-options@' => [
                                        0 => '\\Grav\\Plugin\\PresentationPlugin::getClassNamesBlueprintOptions',
                                        1 => 'Content'
                                    ]
                                ],
                                'parser' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.PARSER.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.PARSER.DESCRIPTION',
                                    'data-options@' => [
                                        0 => '\\Grav\\Plugin\\PresentationPlugin::getClassNamesBlueprintOptions',
                                        1 => 'Parser'
                                    ]
                                ],
                                'transport' => [
                                    'type' => 'select',
                                    'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.TRANSPORT.LABEL',
                                    'description' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.TRANSPORT.DESCRIPTION',
                                    'data-options@' => [
                                        0 => '\\Grav\\Plugin\\PresentationPlugin::getClassNamesBlueprintOptions',
                                        1 => 'Transport'
                                    ]
                                ],
                                'sync' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.TITLE',
                                    'fields' => [
                                        'sync' => [
                                            'type' => 'select',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.SYNC.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.SYNC.DESCRIPTION',
                                            'options' => [
                                                'none' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.SYNC.OPTIONS.NONE',
                                                'browser' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.SYNC.OPTIONS.BROWSER',
                                                'api' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.SYNC.OPTIONS.API'
                                            ]
                                        ],
                                        'api_route' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.API_ROUTE.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.API_ROUTE.DESCRIPTION',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'poll_timeout' => [
                                            'type' => 'range',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.POLL_TIMEOUT.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.POLL_TIMEOUT.DESCRIPTION',
                                            'validate' => [
                                                'type' => 'int',
                                                'min' => 1000,
                                                'max' => 10000,
                                                'step' => 1000
                                            ]
                                        ],
                                        'poll_retry_limit' => [
                                            'type' => 'number',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.POLL_RETRY_LIMIT.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.POLL_RETRY_LIMIT.DESCRIPTION',
                                            'validate' => [
                                                'type' => 'int',
                                                'min' => 1,
                                                'max' => 10,
                                                'step' => 1
                                            ]
                                        ],
                                        'token_auth' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.TOKEN_AUTH.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.TOKEN_AUTH.DESCRIPTION',
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'token' => [
                                            'type' => 'text',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.TOKEN.LABEL',
                                            'description' => 'PLUGIN_PRESENTATION.ADMIN.SYNC.TOKEN.DESCRIPTION',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ],
                                'options' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.REVEAL.TITLE',
                                    'underline' => true,
                                    'fields' => [
                                        'options' => [
                                            'type' => 'array',
                                            'label' => 'PLUGIN_PRESENTATION.ADMIN.ADVANCED.REVEAL.LABEL',
                                            'placeholder_key' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.KEY',
                                            'placeholder_value' => 'PLUGIN_PRESENTATION.ADMIN.COMMON.VALUE',
                                            'required' => false,
                                            'validate' => [
                                                'type' => 'array'
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
