<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/lightslider/blueprints.yaml',
    'modified' => 1590065290,
    'data' => [
        'name' => 'LightSlider',
        'version' => '1.5.3',
        'description' => 'This plugin wraps the [Lightslider](http://sachinchoolur.github.io/lightslider/) jQuery plugin and let\'s you add nice content sliders.',
        'icon' => 'bolt',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-lightslider',
        'demo' => 'http://demo.getgrav.org/shop-skeleton',
        'keywords' => 'lightslider, plugin, slider, images, carousel',
        'bugs' => 'https://lightslider.com/getgrav/grav-plugin-lightslider/issues',
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
                    'label' => 'Use built in CSS',
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
                'slider_type' => [
                    'type' => 'toggle',
                    'label' => 'Slider Type',
                    'highlight' => 1,
                    'default' => 'text',
                    'options' => [
                        'text' => 'Text',
                        'image' => 'Image'
                    ]
                ],
                'type_text_height' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Type Text Height',
                    'default' => 'auto',
                    'help' => 'CSS attribute for height. Defaults to `auto` but could be `300px`'
                ],
                'type_text_vertical_padding' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Type Text Vertical Padding',
                    'default' => '80px',
                    'help' => 'CSS attribute for vertical padding. Defaults to `80px`'
                ],
                'type_text_horizontal_padding' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Type Text Horizontal Padding',
                    'default' => '50px',
                    'help' => 'CSS attribute for horizontal padding. Defaults to `50px`'
                ],
                'type_text_brightness' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Type Text Brightness',
                    'default' => 0,
                    'help' => 'Optional brightness value ranging from daker `-255` to  lighter `255` where `0` is no change'
                ],
                'item' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Item',
                    'default' => 1,
                    'help' => 'The number of slides to show at a time'
                ],
                'slideMove' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Slide Move',
                    'default' => 1,
                    'help' => 'This option sets the number of slides moved at a time. The default setting is `1`'
                ],
                'slideMargin' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Slide Margin',
                    'default' => 0,
                    'help' => 'This option sets the spacing between each slide.'
                ],
                'loop' => [
                    'type' => 'toggle',
                    'label' => 'Loop',
                    'highlight' => true,
                    'default' => 'false',
                    'options' => [
                        'true' => 'Enabled',
                        'false' => 'Disabled'
                    ],
                    'help' => 'Sets whether or not to loop the slides or stop at the last slide'
                ],
                'mode' => [
                    'type' => 'toggle',
                    'label' => 'Loop',
                    'highlight' => 'fade',
                    'default' => 'fade',
                    'options' => [
                        'fade' => 'Fade',
                        'slide' => 'Slide'
                    ],
                    'help' => 'Sets the transition mode'
                ],
                'controls' => [
                    'type' => 'toggle',
                    'label' => 'Controls',
                    'highlight' => true,
                    'default' => 'true',
                    'options' => [
                        'true' => 'Enabled',
                        'false' => 'Disabled'
                    ],
                    'help' => 'Enables the front-end controls, giving visitors the ability to switch between slides'
                ],
                'keyPress' => [
                    'type' => 'toggle',
                    'label' => 'Key Press',
                    'highlight' => true,
                    'default' => 'true',
                    'options' => [
                        'true' => 'Enabled',
                        'false' => 'Disabled'
                    ],
                    'help' => 'Enables keyboard navigation between slides'
                ],
                'auto' => [
                    'type' => 'toggle',
                    'label' => 'Auto',
                    'highlight' => true,
                    'default' => 'true',
                    'options' => [
                        'true' => 'Enabled',
                        'false' => 'Disabled'
                    ],
                    'help' => 'Sets whether or not automatic transitions is enabled'
                ],
                'pause' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Pause',
                    'default' => 2000,
                    'help' => 'Sets the time (in milliseconds) between automatic transitions'
                ],
                'pauseOnHover' => [
                    'type' => 'toggle',
                    'label' => 'Pause on Hover',
                    'highlight' => true,
                    'default' => 'false',
                    'options' => [
                        'true' => 'Enabled',
                        'false' => 'Disabled'
                    ],
                    'help' => 'Sets whether or not it should pause the transitions on hover'
                ],
                'speed' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Speed',
                    'default' => 1000,
                    'help' => 'Sets the time (in milliseconds) of the transition between slides'
                ],
                'pager' => [
                    'type' => 'toggle',
                    'label' => 'Pager',
                    'highlight' => true,
                    'default' => 'true',
                    'options' => [
                        'true' => 'Enabled',
                        'false' => 'Disabled'
                    ],
                    'help' => 'Toggles the pagination that appears along with the lightSlider'
                ],
                'gallery' => [
                    'type' => 'toggle',
                    'label' => 'Gallery',
                    'highlight' => true,
                    'default' => 'false',
                    'options' => [
                        'true' => 'Enabled',
                        'false' => 'Disabled'
                    ],
                    'help' => 'Enables gallery style thumbnail pager (will disable standard pager)'
                ],
                'gallery_thumb_width' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Gallery Thumb Width',
                    'default' => 100,
                    'help' => 'Sets the gallery thumb image width'
                ],
                'gallery_thumb_height' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Gallery Thumb Height',
                    'default' => 100,
                    'help' => 'Sets the gallery thumb image height'
                ],
                'gallery_margin' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Gallery Margin',
                    'default' => 15,
                    'help' => 'Vertical space between the bottom of the slider and the gallery'
                ],
                'gallery_thumb_margin' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Gallery Thumb Margin',
                    'default' => 5,
                    'help' => 'Horizontal space between the gallery thumbnails'
                ],
                'enableTouch' => [
                    'type' => 'toggle',
                    'label' => 'Enable Touch',
                    'highlight' => true,
                    'default' => 'true',
                    'options' => [
                        'true' => 'Enabled',
                        'false' => 'Disabled'
                    ],
                    'help' => 'Enables touch support for touch-enabled devices'
                ],
                'enableDrag' => [
                    'type' => 'toggle',
                    'label' => 'Enable Drag',
                    'highlight' => true,
                    'default' => 'true',
                    'options' => [
                        'true' => 'Enabled',
                        'false' => 'Disabled'
                    ],
                    'help' => 'Enables desktop mouse drag support'
                ]
            ]
        ]
    ]
];
