<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/youtube/blueprints.yaml',
    'modified' => 1590021012,
    'data' => [
        'name' => 'YouTube',
        'version' => '3.1.0',
        'description' => '**YouTube** is a simple plugin that converts markdown links or shortcodes into responsive embeds.',
        'icon' => 'youtube',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-youtube',
        'keywords' => 'youtube, markdown',
        'bugs' => 'https://github.com/getgrav/grav-plugin-youtube/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use built in CSS',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_js' => [
                    'type' => 'toggle',
                    'label' => 'Use built in JS',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'add_editor_button' => [
                    'type' => 'toggle',
                    'label' => 'Add editor button',
                    'help' => 'The editor button allows you to easily enter YouTube videos in the page content',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'privacy_enhanced_mode' => [
                    'type' => 'toggle',
                    'label' => 'Privacy-enhanced mode',
                    'help' => 'If enabled, YouTube won’t store information about visitors on your web page unless they play the video.',
                    'highlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'lazy_load' => [
                    'type' => 'toggle',
                    'label' => 'Lazy load iframes',
                    'help' => 'If enabled, only the preview thumbnail will be loaded. When clicked, the iframe will be loaded. Improves page load speed.',
                    'hightlight' => 0,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'player_parameters' => [
                    'type' => 'section',
                    'title' => 'Player parameters',
                    'underline' => true,
                    'fields' => [
                        'player_parameters.vq' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'label' => 'Preferred video quality',
                            'help' => 'Specifies the preferred video quality to display. This may be overridden by YouTube to improve playback quality based on the user\'s screen resolution, bandwidth etc.',
                            'default' => 'default',
                            'options' => [
                                'default' => 'Default',
                                'small' => 'Small',
                                'medium' => 'Medium',
                                'large' => 'Large',
                                'highres' => 'High resolution',
                                'hd1080' => 'High definition (1080)',
                                'hd720' => 'High definition (720)'
                            ],
                            'validate' => [
                                'type' => 'string'
                            ]
                        ],
                        'player_parameters.autoplay' => [
                            'type' => 'toggle',
                            'label' => 'Autoplay',
                            'help' => 'Specifies whether the initial video will automatically start to play when the player loads.',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'int'
                            ]
                        ],
                        'player_parameters.loop' => [
                            'type' => 'toggle',
                            'label' => 'Loop',
                            'help' => 'If enabled, the player will play the initial video again and again.',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'int'
                            ]
                        ],
                        'player_parameters.showinfo' => [
                            'type' => 'toggle',
                            'label' => 'Show information',
                            'help' => 'If enabled, the player will display information like the video title and uploader before the video starts playing.',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'int'
                            ]
                        ],
                        'player_parameters.rel' => [
                            'type' => 'toggle',
                            'label' => 'Related videos',
                            'help' => 'If enabled, the player will show related videos when playback of the initial video ends.',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'int'
                            ]
                        ],
                        'player_parameters.modestbranding' => [
                            'type' => 'toggle',
                            'label' => 'Modest branding',
                            'help' => 'If enabled, the YouTube logo won\'t be displayed in the control bar. Note that a small YouTube text label will still display in the upper-right corner of a paused video when the user\'s mouse pointer hovers over the player.',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'int'
                            ]
                        ],
                        'player_parameters.color' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'label' => 'Color',
                            'help' => 'Specifies the color that will be used in the player\'s video progress bar to highlight the amount of the video that the viewer has already seen. Setting this to white will disable the modest branding option.',
                            'default' => 'red',
                            'options' => [
                                'red' => 'Red',
                                'white' => 'White'
                            ],
                            'validate' => [
                                'type' => 'string'
                            ]
                        ],
                        'player_parameters.cc_load_policy' => [
                            'type' => 'toggle',
                            'label' => 'Show closed captions by default',
                            'help' => 'If enabled, this causes closed captions to be shown by default, even if the user has turned captions off. The default behavior is based on user preference.',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'int'
                            ]
                        ],
                        'player_parameters.iv_load_policy' => [
                            'type' => 'select',
                            'size' => 'medium',
                            'label' => 'Video annotations',
                            'help' => 'Specifies whether video annotatins should be displayed.',
                            'default' => 1,
                            'options' => [
                                1 => 'Displayed by default',
                                3 => 'Hidden by default'
                            ],
                            'validate' => [
                                'type' => 'int'
                            ]
                        ],
                        'player_parameters.controls' => [
                            'type' => 'toggle',
                            'label' => 'Controls',
                            'help' => 'Indicates whether the video player controls are displayed.',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'int'
                            ]
                        ],
                        'player_parameters.disablekb' => [
                            'type' => 'toggle',
                            'label' => 'Keyboard controls',
                            'help' => 'If enabled, the player responds to supported keyboard controls.',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'int'
                            ]
                        ],
                        'player_parameters.fs' => [
                            'type' => 'toggle',
                            'label' => 'Fullscreen button',
                            'help' => 'If enabled, the player displays the fullscreen button.',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'int'
                            ]
                        ],
                        'player_parameters.hl' => [
                            'type' => 'text',
                            'label' => 'Language',
                            'placeholder' => 'e.g. en or en-us',
                            'help' => 'Specifies the player\'s interface language. This has to be an ISO 639-1 two-letter language code or a fully specified locale. The interface language is used for tooltips in the player and also affects the default caption track. Note that YouTube might select a different caption track language for a particular user based on the user\'s individual language preferences and the availability of caption tracks.',
                            'default' => '',
                            'validate' => [
                                'type' => 'string'
                            ]
                        ],
                        'player_parameters.enablejsapi' => [
                            'type' => 'toggle',
                            'label' => 'JavaScript API',
                            'help' => 'If enabled, the player may be controlled via IFrame or JavaScript Player API calls.',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ],
                            'validate' => [
                                'type' => 'int'
                            ]
                        ],
                        'player_parameters.origin' => [
                            'type' => 'text',
                            'label' => 'Origin',
                            'placeholder' => 'e.g. example.com',
                            'help' => 'If using the IFrame API, specify your domain name. This provides an extra security measure for the IFrame API and is only supported for IFrame embeds.',
                            'default' => '',
                            'validate' => [
                                'type' => 'string'
                            ]
                        ],
                        'player_parameters.playsinline' => [
                            'type' => 'toggle',
                            'label' => 'iOS playback behavior',
                            'help' => 'Specifies whether videos play inline or fullscreen in an HTML5 player on iOS.',
                            'highlight' => 0,
                            'default' => 0,
                            'options' => [
                                0 => 'Fullscreen',
                                1 => 'Inline'
                            ],
                            'validate' => [
                                'type' => 'int'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
