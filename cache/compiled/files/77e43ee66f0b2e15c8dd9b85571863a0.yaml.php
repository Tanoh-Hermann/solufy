<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/presentation/languages.yaml',
    'modified' => 1590330996,
    'data' => [
        'en' => [
            'PLUGIN_PRESENTATION' => [
                'ADMIN' => [
                    'COMMON' => [
                        'TITLE' => 'Presentation',
                        'INITIAL' => 'Initial',
                        'INHERIT' => 'Inherit',
                        'NONE' => 'None',
                        'KEY' => 'Key',
                        'VALUE' => 'Value',
                        'ORDER' => [
                            'BY' => [
                                'LABEL' => 'Order By',
                                'HELP' => 'Type to order pages by',
                                'OPTIONS' => [
                                    'DEFAULT' => 'Default - based on folder name',
                                    'FOLDER' => 'Folder - based on prefix-less folder name',
                                    'TITLE' => 'Title - based on title field in header',
                                    'DATE' => 'Date - based on date field in header'
                                ]
                            ],
                            'DIR' => [
                                'LABEL' => 'Order Direction',
                                'HELP' => 'Direction to order pages',
                                'OPTIONS' => [
                                    'ASC' => 'Ascending',
                                    'DESC' => 'Descending'
                                ]
                            ]
                        ]
                    ],
                    'TABS' => [
                        'OPTIONS' => 'Options'
                    ],
                    'LINKS' => [
                        'VIEW' => 'Present',
                        'VIEW_NOTES' => 'Present with Notes',
                        'SPEAKER' => 'Speaker View',
                        'SPEAKER_NOTES' => 'Speaker View with Notes',
                        'PRINT' => 'Print',
                        'PRINT_NOTES' => 'Print with Notes',
                        'PRINT_STYLED' => 'Print with Theme',
                        'PRINT_STYLED_NOTES' => 'Print with Theme and Notes'
                    ],
                    'OPTIONS' => [
                        'CLASS' => [
                            'LABEL' => 'Class(es)',
                            'HELP' => 'Classes to add to the Slide'
                        ],
                        'HORIZONTAL' => [
                            'LABEL' => 'Stack slides',
                            'HELP' => 'Transform slides from vertical to horizontal layout',
                            'DESCRIPTION' => 'Stack slides horizontally or vertically (default), on thematic breaks.',
                            'OPTIONS' => [
                                'HORIZONTAL' => 'Horizontally',
                                'VERTICAL' => 'Vertically'
                            ]
                        ],
                        'ASSETS' => [
                            'ALL' => [
                                'LABEL' => 'Load all assets',
                                'DESCRIPTION' => 'Load all registered CSS and JS from Grav into presentation.html.twig\'s assets'
                            ],
                            'THEME' => [
                                'LABEL' => 'Theme',
                                'DESCRIPTION' => 'Reveal.js theme to use.'
                            ],
                            'THEME_CSS' => [
                                'LABEL' => 'Use Theme\'s CSS',
                                'DESCRIPTION' => 'Import current theme\'s /css/custom.css into presentation.html.twig\'s assets'
                            ],
                            'BUILTIN_CSS' => [
                                'LABEL' => 'Use Reveal.js CSS'
                            ],
                            'BUILTIN_JS' => [
                                'LABEL' => 'Use Reveal.js JS'
                            ],
                            'PLUGIN_CSS' => [
                                'LABEL' => 'Use Plugin\'s CSS'
                            ],
                            'PLUGIN_JS' => [
                                'LABEL' => 'Use Plugin\'s JS'
                            ]
                        ],
                        'TEXTSIZE' => [
                            'TITLE' => 'Font Sizing',
                            'SCALE' => [
                                'LABEL' => 'Font scale',
                                'DESCRIPTION' => 'Use a modular, harmonious, scale to proportionally determine the size of header elements from the calculated base font size (derived from breakpoints).'
                            ],
                            'MODIFIER' => [
                                'LABEL' => 'Font size modifier',
                                'DESCRIPTION' => 'Multiplies the calculated font size by this amount, lower numbers yield smaller base font sizes, and vice versa.'
                            ]
                        ]
                    ],
                    'DEFAULTS' => [
                        'TITLE' => 'Style Defaults'
                    ],
                    'SYNC' => [
                        'TITLE' => 'Synchronization',
                        'SYNC' => [
                            'LABEL' => 'Sync',
                            'DESCRIPTION' => 'Sync locally using browser, or remotely using API.',
                            'OPTIONS' => [
                                'NONE' => 'None (disabled)',
                                'BROWSER' => 'Locally (Browser)',
                                'API' => 'Remotely (API)'
                            ]
                        ],
                        'API_ROUTE' => [
                            'LABEL' => 'API Route',
                            'DESCRIPTION' => 'Route for API-access.'
                        ],
                        'POLL_TIMEOUT' => [
                            'LABEL' => 'Poll Timeout',
                            'DESCRIPTION' => 'Milliseconds to wait between each API-query.'
                        ],
                        'POLL_RETRY_LIMIT' => [
                            'LABEL' => 'Poll Retry Limit',
                            'DESCRIPTION' => 'Number of times to retry on error before cancelling API-querying.'
                        ],
                        'TOKEN_AUTH' => [
                            'LABEL' => 'Token Auth',
                            'DESCRIPTION' => 'Require a token for Admin-access.'
                        ],
                        'TOKEN' => [
                            'LABEL' => 'Token',
                            'DESCRIPTION' => 'Token to use for authorization.'
                        ]
                    ],
                    'STYLE' => [
                        'TITLE' => 'Design',
                        'FONT' => [
                            'HEADER' => [
                                'LABEL' => 'Heading Font-Family',
                                'DESCRIPTION' => 'CSS Font-Family to use for headings.'
                            ],
                            'HEADER_COLOR' => [
                                'LABEL' => 'Heading Text Color',
                                'DESCRIPTION' => 'CSS Color to use for headings.'
                            ],
                            'BLOCK' => [
                                'LABEL' => 'Block Font-Family',
                                'DESCRIPTION' => 'CSS Font-Family to use for block-text.'
                            ],
                            'BLOCK_COLOR' => [
                                'LABEL' => 'Block Text Color',
                                'DESCRIPTION' => 'CSS Color to use for block-text.'
                            ]
                        ],
                        'BACKGROUND-COLOR' => [
                            'LABEL' => 'Background Color'
                        ],
                        'BACKGROUND-IMAGE' => [
                            'LABEL' => 'Background Image',
                            'DESCRIPTION' => 'Image from user/pages/images to use as default.'
                        ],
                        'BACKGROUND-SIZE' => [
                            'LABEL' => 'Background Size',
                            'OPTIONS' => [
                                'AUTO' => 'Auto',
                                'COVER' => 'Cover',
                                'CONTAIN' => 'Contain'
                            ]
                        ],
                        'BACKGROUND-REPEAT' => [
                            'LABEL' => 'Background Repeat',
                            'OPTIONS' => [
                                'NO-REPEAT' => 'No repeat',
                                'REPEAT' => 'Repeat both',
                                'REPEAT-X' => 'Repeat horizontally',
                                'REPEAT-Y' => 'Repeat vertically',
                                'SPACE' => 'Repeat without clipping',
                                'ROUND' => 'Repeat and stretch'
                            ]
                        ],
                        'JUSTIFY-CONTENT' => [
                            'LABEL' => 'Vertical Alignment',
                            'HELP' => 'Vertical alignment of elements in slide (using justify-content)',
                            'OPTIONS' => [
                                'CENTER' => 'Center',
                                'START' => 'Start',
                                'END' => 'End',
                                'FLEX-START' => 'Flex-start',
                                'FLEX-END' => 'Flex-end',
                                'LEFT' => 'Left',
                                'RIGHT' => 'Right',
                                'NORMAL' => 'Normal',
                                'SPACE-BETWEEN' => 'Space-between',
                                'SPACE-AROUND' => 'Space-around',
                                'SPACE-EVENLY' => 'Space-evenly',
                                'STRETCH' => 'Stretch'
                            ]
                        ],
                        'ALIGN-ITEMS' => [
                            'LABEL' => 'Horizontal Alignment',
                            'HELP' => 'Horizontal alignment of elements in slide (using align-items)',
                            'OPTIONS' => [
                                'CENTER' => 'Center',
                                'START' => 'Start',
                                'END' => 'End',
                                'FLEX-START' => 'Flex-start',
                                'FLEX-END' => 'Flex-end',
                                'SELF-START' => 'Self-start',
                                'SELF-END' => 'Self-end',
                                'NORMAL' => 'Normal',
                                'BASELINE' => 'Baseline',
                                'FIRST-BASELINE' => 'First Baseline',
                                'LAST-BASELINE' => 'Last Baseline'
                            ]
                        ]
                    ],
                    'ADVANCED' => [
                        'TITLE' => 'Advanced',
                        'TAB_TITLE' => 'Presentation Plugin API Options',
                        'SAVE' => [
                            'PREFIX' => 'Last Saved',
                            'ASYNC' => [
                                'LABEL' => 'Save Presentation',
                                'DESCRIPTION' => 'Enable Save Presentation button.'
                            ],
                            'TYPING' => [
                                'LABEL' => 'Save Content while typing',
                                'DESCRIPTION' => 'Automatically save Presentation when typing.'
                            ]
                        ],
                        'FOOTER' => [
                            'LABEL' => 'Inject Twig-footer',
                            'DESCRIPTION' => 'Render a theme\'s Twig-template and append it to each section, eg. \'partials/presentation_footer.html.twig\'.'
                        ],
                        'TEXTSIZING' => [
                            'LABEL' => 'Enable Textsizing'
                        ],
                        'BREAKPOINTS' => [
                            'LABEL' => 'Breakpoints',
                            'DESCRIPTION' => 'Each breakpoint has an associated Width, at which the Font Size is applied to the Slide.',
                            'WIDTH' => [
                                'LABEL' => 'Width'
                            ],
                            'FONT_SIZE' => [
                                'LABEL' => 'Font Size'
                            ]
                        ],
                        'SHORTCODES' => [
                            'LABEL' => 'Shortcodes',
                            'DESCRIPTION' => 'Enables internal shortcode-processing.'
                        ],
                        'SHORTCODE_CLASSES' => [
                            'LABEL' => 'Shortcode Classes',
                            'DESCRIPTION' => 'Default Classes to use with Presentation-shortcodes, each separated by a space.'
                        ],
                        'SHORTCODE_PARSER' => [
                            'LABEL' => 'Shortcode Parser',
                            'DESCRIPTION' => 'Processor to use for Shortcode parsing: RegularParser, RegexParser, or WordpressParser',
                            'OPTIONS' => [
                                'REGULAR' => 'RegularParser',
                                'REGEX' => 'RegexParser',
                                'WORDPRESS' => 'WordpressParser'
                            ]
                        ],
                        'TRANSITION' => [
                            'LABEL' => 'OnLoad Transition',
                            'DESCRIPTION' => 'Fade in from white when page (DOM-structure) is ready.'
                        ],
                        'UNWRAP_IMAGES' => [
                            'LABEL' => 'Unwrap Images',
                            'DESCRIPTION' => 'Unwrap images from paragraphs.'
                        ],
                        'CONTENT' => [
                            'LABEL' => 'Content',
                            'DESCRIPTION' => 'Use a custom aggregator for content.'
                        ],
                        'PARSER' => [
                            'LABEL' => 'Parser',
                            'DESCRIPTION' => 'Use a custom parser for content.'
                        ],
                        'TRANSPORT' => [
                            'LABEL' => 'Transport',
                            'DESCRIPTION' => 'Use a custom getter/setter for transporting data.'
                        ],
                        'REVEAL' => [
                            'TITLE' => 'Reveal.js Options',
                            'LABEL' => 'Settings to pass to Reveal.js.'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
