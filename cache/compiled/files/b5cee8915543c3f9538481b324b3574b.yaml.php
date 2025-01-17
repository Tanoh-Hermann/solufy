<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/system/blueprints/flex/shared/configure.yaml',
    'modified' => 1590626436,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'fields' => [
                        'cache' => [
                            'type' => 'tab',
                            'title' => 'Caching',
                            'fields' => [
                                'object.cache.index.enabled' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'PLUGIN_ADMIN.FLEX_INDEX_CACHE_ENABLED',
                                    'highlight' => 1,
                                    'config-default@' => 'system.flex.cache.index.enabled',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'object.cache.index.lifetime' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'PLUGIN_ADMIN.FLEX_INDEX_CACHE_LIFETIME',
                                    'config-default@' => 'system.flex.cache.index.lifetime',
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'object.cache.object.enabled' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'PLUGIN_ADMIN.FLEX_OBJECT_CACHE_ENABLED',
                                    'highlight' => 1,
                                    'config-default@' => 'system.flex.cache.object.enabled',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'object.cache.object.lifetime' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'PLUGIN_ADMIN.FLEX_OBJECT_CACHE_LIFETIME',
                                    'config-default@' => 'system.flex.cache.object.lifetime',
                                    'validate' => [
                                        'type' => 'int'
                                    ]
                                ],
                                'object.cache.render.enabled' => [
                                    'type' => 'toggle',
                                    'toggleable' => true,
                                    'label' => 'PLUGIN_ADMIN.FLEX_RENDER_CACHE_ENABLED',
                                    'highlight' => 1,
                                    'config-default@' => 'system.flex.cache.render.enabled',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'object.cache.render.lifetime' => [
                                    'type' => 'text',
                                    'toggleable' => true,
                                    'label' => 'PLUGIN_ADMIN.FLEX_RENDER_CACHE_LIFETIME',
                                    'config-default@' => 'system.flex.cache.render.lifetime',
                                    'validate' => [
                                        'type' => 'int'
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
