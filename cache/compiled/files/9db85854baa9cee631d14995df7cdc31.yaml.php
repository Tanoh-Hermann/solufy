<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/webpush/blueprints.yaml',
    'modified' => 1590098518,
    'data' => [
        'name' => 'Web Push Notifications',
        'version' => '1.0.1',
        'description' => 'Add web push notifications based on OneSignal service for your grav project.',
        'icon' => 'bell',
        'author' => [
            'name' => 'Devlom',
            'email' => 'info@devlom.com',
            'url' => 'https://devlom.com'
        ],
        'homepage' => 'https://devlom.com/en/blog/grav-webpush-notifications-onesignal',
        'keywords' => 'grav, plugin, onesignal, web push notifications, notifications, push',
        'bugs' => 'https://github.com/devlom/grav-plugin-webpush/issues',
        'docs' => 'https://github.com/devlom/grav-plugin-webpush/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'general' => [
                    'type' => 'section',
                    'title' => 'General',
                    'underline' => true,
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
                        ]
                    ]
                ],
                'account' => [
                    'type' => 'section',
                    'title' => 'Account Settings',
                    'underline' => true,
                    'fields' => [
                        'app_id' => [
                            'type' => 'text',
                            'label' => 'App ID',
                            'help' => 'Your 36 character alphanumeric app ID. You can find this in App Settings > Keys & IDs.'
                        ],
                        'rest_id' => [
                            'type' => 'text',
                            'label' => 'REST API Key',
                            'help' => 'Your 48 character alphanumeric REST API Key. You can find this in App Settings > Keys & IDs.'
                        ],
                        'safari_id' => [
                            'type' => 'text',
                            'label' => 'Safari Web ID',
                            'help' => 'Your Safari Web ID. You can find this on Setup > Safari Push > Step 5.'
                        ],
                        'notification_title' => [
                            'type' => 'text',
                            'label' => 'Notification Title',
                            'help' => 'The notification title to use for all outgoing notifications. Defaults to your site\'s title.'
                        ]
                    ]
                ],
                'prompt' => [
                    'type' => 'section',
                    'title' => 'Prompt Settings & Subscription Bell',
                    'underline' => true,
                    'fields' => [
                        'auto_prompt' => [
                            'type' => 'toggle',
                            'label' => 'Automatically prompt new site visitors to subscribe to push notifications',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ]
                        ],
                        'bell' => [
                            'type' => 'toggle',
                            'label' => 'Enable the Subscription Bell',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ]
                        ],
                        'bell_unread' => [
                            'type' => 'toggle',
                            'label' => 'Show first-time site visitors an unread message icon',
                            'highlight' => 1,
                            'default' => 1,
                            'options' => [
                                1 => 'Enabled',
                                0 => 'Disabled'
                            ]
                        ],
                        'bell_size' => [
                            'type' => 'select',
                            'label' => 'Bell Size',
                            'highlight' => 'small',
                            'default' => 'small',
                            'options' => [
                                'small' => 'Small',
                                'medium' => 'Medium',
                                'large' => 'Large'
                            ]
                        ],
                        'bell_position' => [
                            'type' => 'select',
                            'label' => 'Bell Position',
                            'highlight' => 'small',
                            'default' => 'small',
                            'options' => [
                                'bottom-left' => 'Bottom Left',
                                'bottom-right' => 'Bottom Right'
                            ]
                        ],
                        'bell_theme' => [
                            'type' => 'select',
                            'label' => 'Bell Theme',
                            'highlight' => 'default',
                            'default' => 'default',
                            'options' => [
                                'default' => 'Red-White',
                                'inverse' => 'White-Red'
                            ]
                        ],
                        'bottom_offset' => [
                            'type' => 'text',
                            'label' => 'Bell Bottom Offset',
                            'help' => 'The distance to offset the Subscription Bell from the bottom of the page. For example, <code>20px</code> is the default value.',
                            'default' => '20px'
                        ],
                        'left_offset' => [
                            'type' => 'text',
                            'label' => 'Bell Left Offset',
                            'help' => 'The distance to offset the Subscription Bell from the left of the page. For example, <code>20px</code> is the default value.',
                            'default' => '20px'
                        ],
                        'right_offset' => [
                            'type' => 'text',
                            'label' => 'Bell Right Offset',
                            'help' => 'The distance to offset the Subscription Bell from the right of the page. For example, <code>20px</code> is the default value.',
                            'default' => '20px'
                        ],
                        'firsttime' => [
                            'type' => 'text',
                            'label' => 'First-time visitor message',
                            'help' => 'First-time visitor message (on Subscription Bell hover)',
                            'default' => 'Click to subscribe to notifications'
                        ],
                        'unsubscribed' => [
                            'type' => 'text',
                            'label' => 'Tip when unsubscribed',
                            'help' => 'Tip when unsubscribed',
                            'default' => 'Subscribe to notifications'
                        ],
                        'subscribed' => [
                            'type' => 'text',
                            'label' => 'Tip when subscribed',
                            'help' => 'Tip when subscribed',
                            'default' => 'You\'re subscribed to notifications'
                        ],
                        'blocked' => [
                            'type' => 'text',
                            'label' => 'Tip when blocked',
                            'help' => 'Tip when blocked',
                            'default' => 'You\'ve blocked notifications'
                        ],
                        'message_subscribed' => [
                            'type' => 'text',
                            'label' => 'Message on subscribed',
                            'help' => 'Message on subscribed',
                            'default' => 'Thanks for subscribing!'
                        ],
                        'message_resubscribed' => [
                            'type' => 'text',
                            'label' => 'Message on re-subscribed',
                            'help' => 'Message on re-subscribed (after first unsubscribing)',
                            'default' => 'You\'re subscribed to notifications'
                        ],
                        'message_unsubscribed' => [
                            'type' => 'text',
                            'label' => 'Message on unsubscribed',
                            'help' => 'Message on unsubscribed',
                            'default' => 'You won\'t receive notifications again'
                        ],
                        'main_dialog' => [
                            'type' => 'text',
                            'label' => 'Main dialog title',
                            'help' => 'Main dialog title',
                            'default' => 'Manage Site Notifications'
                        ],
                        'main_dialog_subscribe' => [
                            'type' => 'text',
                            'label' => 'Main dialog subscribe button',
                            'help' => 'Main dialog subscribe button',
                            'default' => 'SUBSCRIBE'
                        ],
                        'main_dialog_unsubscribe' => [
                            'type' => 'text',
                            'label' => 'Main dialog unsubscribe button',
                            'help' => 'Main dialog unsubscribe button',
                            'default' => 'UNSUBSCRIBE'
                        ],
                        'blocked_dialog_title' => [
                            'type' => 'text',
                            'label' => 'Blocked dialog title',
                            'help' => 'Blocked dialog title',
                            'default' => 'Unblock Notifications'
                        ],
                        'blocked_dialog_message' => [
                            'type' => 'text',
                            'label' => 'Blocked dialog message',
                            'help' => 'Blocked dialog message',
                            'default' => 'Follow these instructions to allow notifications'
                        ]
                    ]
                ],
                'http-prompt' => [
                    'type' => 'section',
                    'title' => 'HTTP Pop-Up Settings',
                    'underline' => true,
                    'fields' => [
                        'action_message' => [
                            'type' => 'text',
                            'label' => 'Action Message',
                            'help' => 'Action Message',
                            'default' => 'wants to show notifications'
                        ],
                        'auto_accept' => [
                            'type' => 'text',
                            'label' => 'Auto Accept Title (Click Allow)',
                            'help' => 'Auto Accept Title (Click Allow)',
                            'default' => 'Click Allow'
                        ],
                        'sitename' => [
                            'type' => 'text',
                            'label' => 'Site Name',
                            'help' => 'Site Name',
                            'default' => 'http://yoursite.com'
                        ],
                        'example_title' => [
                            'type' => 'text',
                            'label' => 'Example Notification Title',
                            'help' => 'Example Notification Title',
                            'default' => 'This is an example notification'
                        ],
                        'example_message' => [
                            'type' => 'text',
                            'label' => 'Example Notification Message',
                            'help' => 'Example Notification Message',
                            'default' => 'Notifications will appear on your desktop'
                        ],
                        'example_caption' => [
                            'type' => 'text',
                            'label' => 'Example Notification Caption',
                            'help' => 'Example Notification Caption',
                            'default' => '(you can unsubscribe anytime)'
                        ],
                        'accept' => [
                            'type' => 'text',
                            'label' => 'Accept Button Text',
                            'help' => 'Accept Button Text',
                            'default' => 'CONTINUE'
                        ],
                        'cancel' => [
                            'type' => 'text',
                            'label' => 'Cancel Button Text',
                            'help' => 'Cancel Button Text',
                            'default' => 'NO THANKS'
                        ]
                    ]
                ],
                'welcome' => [
                    'type' => 'section',
                    'title' => 'Welcome Notification Settings',
                    'underline' => true,
                    'fields' => [
                        'welcome_title' => [
                            'type' => 'text',
                            'label' => 'Title',
                            'help' => 'Title',
                            'default' => 'Hello There'
                        ],
                        'welcome_message' => [
                            'type' => 'text',
                            'label' => 'Message',
                            'help' => 'Message',
                            'default' => 'Thanks for subscribing!'
                        ],
                        'welcome_url' => [
                            'type' => 'text',
                            'label' => 'URL',
                            'help' => 'URL',
                            'default' => 'http://yoursite.com'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
