<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/laragon/www/angahi/user/pages/06.start/terms/sequence.md',
    'modified' => 1590331892,
    'data' => [
        'header' => [
            'title' => 'Terms & Conditions',
            'sequence' => [
                'banner' => true,
                'name' => 'collect-data-sq',
                'content' => 'below'
            ],
            'form' => [
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Agree to Conditions'
                    ],
                    1 => [
                        'type' => 'submit',
                        'value' => 'Do not agree',
                        'task' => 'sequence_reset'
                    ]
                ],
                'process' => [
                    0 => [
                        'next_page' => true
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Terms & Conditions
sequence:
    banner: true
    name: collect-data-sq
    content: below
form:
    buttons:
        - type: submit
          value: Agree to Conditions
        - type: submit
          value: \'Do not agree\'
          task: sequence_reset
    process:
        - next_page: true',
        'markdown' => '** Text of the Contract **
'
    ]
];
