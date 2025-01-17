<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/angahi/user/plugins/jscomments/blueprints.yaml',
    'modified' => 1590026952,
    'data' => [
        'name' => 'JSComments',
        'version' => '2.2.1',
        'description' => 'Add comments to your site with Discourse, Disqus, Facebook, Google+, HyperComments, IntenseDebate, Isso, and Muut comment systems.',
        'icon' => 'comments-o',
        'author' => [
            'name' => 'Sommerregen',
            'email' => 'sommerregen@benjamin-regler.de'
        ],
        'homepage' => 'https://github.com/sommerregen/grav-plugin-jscomments',
        'keywords' => [
            0 => 'jscomments',
            1 => 'plugin',
            2 => 'comments',
            3 => 'services',
            4 => 'discourse',
            5 => 'disqus',
            6 => 'facebook',
            7 => 'google',
            8 => 'hypercomments',
            9 => 'intensedebate',
            10 => 'muut'
        ],
        'docs' => 'https://github.com/sommerregen/grav-plugin-jscomments/blob/master/README.md',
        'bugs' => 'https://github.com/sommerregen/grav-plugin-jscomments/issues',
        'license' => 'MIT/GPL',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'class' => 'subtle',
                    'fields' => [
                        'jscomments' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.JS_COMMENTS.PLUGIN_NAME',
                            'fields' => [
                                'enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.JS_COMMENTS.PLUGIN_STATUS',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'active' => [
                                    'type' => 'toggle',
                                    'label' => 'PLUGINS.JS_COMMENTS.PLUGIN_ACTIVE',
                                    'help' => 'PLUGINS.JS_COMMENTS.PLUGIN_ACTIVE_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.YES',
                                        0 => 'PLUGIN_ADMIN.NO'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'provider' => [
                                    'type' => 'select',
                                    'size' => 'medium',
                                    'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.TITLE',
                                    'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.HELP',
                                    'data-options@' => '\\Grav\\Plugin\\JSCommentsPlugin::getProviders',
                                    'options' => [
                                        '' => 'PLUGINS.JS_COMMENTS.NONE_SELECTED'
                                    ],
                                    'default' => '',
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'string'
                                    ]
                                ]
                            ]
                        ],
                        'params' => [
                            'type' => 'tab',
                            'title' => 'PLUGINS.JS_COMMENTS.PROVIDERS.TITLE_SETTINGS',
                            'fields' => [
                                'discourse' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISCOURSE.TITLE',
                                    'fields' => [
                                        'providers.discourse.host' => [
                                            'type' => 'text',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISCOURSE.FIELDS.HOST',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISCOURSE.FIELDS.HOST_HELP',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISCOURSE.FIELDS.HOST_PLACEHOLDER',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ],
                                'disqus' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.TITLE',
                                    'fields' => [
                                        'providers.disqus.shortname' => [
                                            'type' => 'text',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.SHORTNAME',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.SHORTNAME_HELP',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.SHORTNAME_PLACEHOLDER',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.disqus.show_count' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.COUNT',
                                            'highlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.disqus.language' => [
                                            'type' => 'text',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.DEFAULT_LANGUAGE',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.DEFAULT_LANGUAGE_HELP',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.DISQUS.FIELDS.DEFAULT_LANGUAGE_PLACEHOLDER',
                                            'size' => 'x-small',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ],
                                'facebook' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.TITLE',
                                    'fields' => [
                                        'providers.facebook.app_id' => [
                                            'type' => 'text',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.APPID',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.APPID_HELP',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.APPID_PLACEHOLDER',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.facebook.num_posts' => [
                                            'type' => 'text',
                                            'size' => 'x-small',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.NUM_POSTS',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.NUM_POSTS_HELP',
                                            'append' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.NUM_POSTS_APPEND',
                                            'validate' => [
                                                'type' => 'int',
                                                'min' => 1
                                            ]
                                        ],
                                        'providers.facebook.colorscheme' => [
                                            'type' => 'select',
                                            'size' => 'medium',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.COLORSCHEME.TITLE',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.COLORSCHEME.HELP',
                                            'default' => 'light',
                                            'options' => [
                                                'light' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.COLORSCHEME.OPTIONS.LIGHT',
                                                'dark' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.COLORSCHEME.OPTIONS.DARK'
                                            ],
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.facebook.order_by' => [
                                            'type' => 'select',
                                            'size' => 'medium',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.TITLE',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.HELP',
                                            'default' => 'social',
                                            'options' => [
                                                'social' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.OPTIONS.SOCIAL',
                                                'reverse_time' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.OPTIONS.REVERSE_TIME',
                                                'time' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.ORDER_BY.OPTIONS.TIME'
                                            ],
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.facebook.language' => [
                                            'type' => 'text',
                                            'size' => 'x-small',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.LANGUAGE',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.LANGUAGE_HELP',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.LANGUAGE_PLACEHOLDER',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.facebook.width' => [
                                            'type' => 'text',
                                            'size' => 'x-small',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.WIDTH',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.FACEBOOK.FIELDS.WIDTH_HELP',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ],
                                'googleplus' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.TITLE',
                                    'fields' => [
                                        'providers.googleplus.show_count' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.FIELDS.COUNT',
                                            'highlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.googleplus.language' => [
                                            'type' => 'text',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.FIELDS.DEFAULT_LANGUAGE',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.FIELDS.DEFAULT_LANGUAGE_HELP',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.FIELDS.DEFAULT_LANGUAGE_PLACEHOLDER',
                                            'size' => 'x-small',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.googleplus.width' => [
                                            'type' => 'text',
                                            'size' => 'x-small',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.FIELDS.WIDTH',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.GOOGLEPLUS.FIELDS.WIDTH_HELP',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ],
                                'intensedebate' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.JS_COMMENTS.PROVIDERS.INTENSEDEBATE.TITLE',
                                    'fields' => [
                                        'providers.intensedebate.account_number' => [
                                            'type' => 'text',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.INTENSEDEBATE.FIELDS.ACCOUNT_NUMBER',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.INTENSEDEBATE.FIELDS.ACCOUNT_NUMBER_HELP',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ],
                                'isso' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.TITLE',
                                    'fields' => [
                                        'providers.isso.host' => [
                                            'type' => 'text',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.HOST',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.HOST_HELP',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.HOST_PLACEHOLDER',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.isso.builtin_css' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.BUILTIN_CSS',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.BUILTIN_CSS_HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.isso.language' => [
                                            'type' => 'text',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.DEFAULT_LANGUAGE',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.DEFAULT_LANGUAGE_HELP',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.DEFAULT_LANGUAGE_PLACEHOLDER',
                                            'size' => 'x-small',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.isso.reply_to_self' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REPLY_TO_SELF',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REPLY_TO_SELF_HELP',
                                            'highlight' => 1,
                                            'default' => 0,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.isso.require' => [
                                            'type' => 'checkboxes',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REQUIRE.LABEL',
                                            'options' => [
                                                'author' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REQUIRE.AUTHOR',
                                                'email' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.REQUIRE.EMAIL'
                                            ],
                                            'default' => [
                                                'author' => true,
                                                'email' => true
                                            ],
                                            'use' => 'keys'
                                        ],
                                        'providers.isso.comments.number' => [
                                            'type' => 'number',
                                            'size' => 'x-small',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.NUMBER_LABEL',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.NUMBER_HELP',
                                            'append' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.LABEL',
                                            'default' => 10,
                                            'validate' => [
                                                'min' => -1
                                            ]
                                        ],
                                        'providers.isso.comments.nested_number' => [
                                            'type' => 'number',
                                            'size' => 'x-small',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.NESTED_LABEL',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.NESTED_HELP',
                                            'append' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.LABEL',
                                            'default' => 5,
                                            'validate' => [
                                                'min' => -1
                                            ]
                                        ],
                                        'providers.isso.comments.reveal' => [
                                            'type' => 'number',
                                            'size' => 'x-small',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.REVEAL_LABEL',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.REVEAL_HELP',
                                            'append' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.COMMENTS.LABEL',
                                            'default' => 5,
                                            'validate' => [
                                                'min' => -1
                                            ]
                                        ],
                                        'providers.isso.avatar.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.AVATAR.LABEL',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.AVATAR.HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.isso.avatar.background' => [
                                            'type' => 'colorpicker',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.AVATAR.BG_COLOR',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.AVATAR.BG_COLOR_HELP',
                                            'placeholder' => '#f0f0f0',
                                            'default' => ''
                                        ],
                                        'providers.isso.avatar.foreground' => [
                                            'type' => 'colorpicker',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.AVATAR.FG_COLOR',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.AVATAR.FG_COLOR_HELP',
                                            'placeholder' => '#9abf88',
                                            'default' => ''
                                        ],
                                        'providers.isso.vote.enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.VOTE.LABEL',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.VOTE.HELP',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.isso.vote.levels' => [
                                            'type' => 'text',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.VOTE.LEVELS_LABEL',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.VOTE.LEVELS_HELP',
                                            'description' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.VOTE.LEVELS_DESCRIPTION',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.ISSO.FIELDS.VOTE.LEVELS_PLACEHOLDER',
                                            'default' => '',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ],
                                'muut' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.TITLE',
                                    'fields' => [
                                        'providers.muut.forum' => [
                                            'type' => 'text',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.FORUM',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.FORUM_PLACEHOLDER',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.muut.channel' => [
                                            'type' => 'text',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.CHANNEL',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.CHANNEL_PLACEHOLDER',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ],
                                        'providers.muut.widget' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.WIDGET',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.WIDGET_HELP',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.muut.show_online' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.SHOW_ONLINE',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.muut.show_title' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.SHOW_TITLE',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.muut.upload' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.UPLOAD',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.muut.share' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.SHARE',
                                            'highlight' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'providers.muut.language' => [
                                            'type' => 'text',
                                            'size' => 'x-small',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.LANGUAGE',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.MUUT.FIELDS.LANGUAGE_PLACEHOLDER',
                                            'validate' => [
                                                'type' => 'string'
                                            ]
                                        ]
                                    ]
                                ],
                                'hypercomments' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.JS_COMMENTS.PROVIDERS.HYPERCOMMENTS.TITLE',
                                    'fields' => [
                                        'providers.hypercomments.widget_id' => [
                                            'type' => 'text',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.HYPERCOMMENTS.FIELDS.WIDGET_ID',
                                            'size' => 'x-small',
                                            'validate' => [
                                                'type' => 'int'
                                            ]
                                        ],
                                        'providers.hypercomments.social' => [
                                            'type' => 'selectize',
                                            'label' => 'PLUGINS.JS_COMMENTS.PROVIDERS.HYPERCOMMENTS.FIELDS.SOCIAL',
                                            'help' => 'PLUGINS.JS_COMMENTS.PROVIDERS.HYPERCOMMENTS.FIELDS.SOCIAL_HELP',
                                            'placeholder' => 'PLUGINS.JS_COMMENTS.PROVIDERS.HYPERCOMMENTS.FIELDS.SOCIAL_PLACEHOLDER',
                                            'validate' => [
                                                'type' => 'commalist'
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
