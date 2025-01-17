<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/hax/blueprints.yaml',
    'modified' => 1590619800,
    'data' => [
        'name' => 'HAX',
        'version' => '3.9.0',
        'description' => 'HAX Headless authoring eXperience made available to GravCMS',
        'icon' => 'google',
        'author' => [
            'name' => 'Bryan Ollendyke',
            'email' => 'bto108@psu.edu',
            'url' => 'https://www.elmsln.org/'
        ],
        'homepage' => 'https://github.com/elmsln/grav-plugin-hax',
        'keywords' => 'webcomponents,hax,polymer,plugin',
        'bugs' => 'https://github.com/elmsln/grav-plugin-hax/issues',
        'license' => 'Apache 2.0',
        'dependencies' => [
            0 => 'admin',
            1 => 'atools',
            2 => 'webcomponents'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
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
                'location' => [
                    'type' => 'hidden',
                    'label' => 'Web components location',
                    'highlight' => 1,
                    'default' => 'https://cdn.webcomponents.psu.edu/cdn/',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'other' => [
                    'type' => 'hidden',
                    'label' => 'Other location',
                    'highlight' => 1,
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'pk' => [
                    'type' => 'hidden',
                    'label' => 'Public Key',
                    'highlight' => 1,
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'stax' => [
                    'type' => 'hidden',
                    'label' => 'Stax JSON',
                    'highlight' => 1,
                    'default' => '[]',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'blox' => [
                    'type' => 'hidden',
                    'label' => 'Blox JSON',
                    'highlight' => 1,
                    'default' => '[]',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'autoload_element_list' => [
                    'type' => 'hidden',
                    'label' => 'Elements to autoload',
                    'highlight' => 1,
                    'default' => '{"video-player": "@lrnwebcomponents/video-player/video-player.js","grid-plate": "@lrnwebcomponents/grid-plate/grid-plate.js","license-element": "@lrnwebcomponents/license-element/license-element.js","md-block": "@lrnwebcomponents/md-block/md-block.js","meme-maker": "@lrnwebcomponents/meme-maker/meme-maker.js","stop-note": "@lrnwebcomponents/stop-note/stop-note.js","wikipedia-query": "@lrnwebcomponents/wikipedia-query/wikipedia-query.js","cms-token": "@lrnwebcomponents/cms-hax/lib/cms-token.js","lrn-math-controller": "@lrnwebcomponents/lrn-math/lrn-math.js","retro-card": "@lrnwebcomponents/retro-card/retro-card.js","rss-items": "@lrnwebcomponents/rss-items/rss-items.js","self-check": "@lrnwebcomponents/self-check/self-check.js","team-member": "@lrnwebcomponents/team-member/team-member.js"}',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'youtube_key' => [
                    'type' => 'hidden',
                    'label' => 'Youtube API Key',
                    'highlight' => 1,
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'googlepoly_key' => [
                    'type' => 'hidden',
                    'label' => 'Google poly API Key',
                    'highlight' => 1,
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'memegenerator_key' => [
                    'type' => 'hidden',
                    'label' => 'Meme Generator API Key',
                    'highlight' => 1,
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'vimeo_key' => [
                    'type' => 'hidden',
                    'label' => 'Vimeo API Key',
                    'highlight' => 1,
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'giphy_key' => [
                    'type' => 'hidden',
                    'label' => 'Giphy API Key',
                    'highlight' => 1,
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'unsplash_key' => [
                    'type' => 'hidden',
                    'label' => 'Unsplash API Key',
                    'highlight' => 1,
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'flickr_key' => [
                    'type' => 'hidden',
                    'label' => 'Flickr API Key',
                    'highlight' => 1,
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ],
                'pixabay_key' => [
                    'type' => 'hidden',
                    'label' => 'Pixabay API Key',
                    'highlight' => 1,
                    'default' => '',
                    'validate' => [
                        'type' => 'string'
                    ]
                ]
            ]
        ]
    ]
];
