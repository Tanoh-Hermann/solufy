<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/editable-simplemde/blueprints.yaml',
    'modified' => 1590024790,
    'data' => [
        'name' => 'Editable With SimpleMDE',
        'version' => '1.1.2',
        'testing' => false,
        'description' => 'Edit page content in the frontend using the SimpleMDE markdown editor',
        'icon' => 'edit',
        'author' => [
            'name' => 'Ron Wardenier',
            'email' => 'ron@rwgc.nl'
        ],
        'homepage' => 'https://github.com/bleutzinn/grav-plugin-editable-simplemde',
        'demo' => NULL,
        'keywords' => 'plugin, editor, wysiwyg, markdown, editing, editable, front-end',
        'bugs' => 'https://github.com/bleutzinn/grav-plugin-editable-simplemde/issues',
        'docs' => 'https://github.com/bleutzinn/grav-plugin-editable-simplemde/blob/master/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
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
                ]
            ]
        ]
    ]
];
