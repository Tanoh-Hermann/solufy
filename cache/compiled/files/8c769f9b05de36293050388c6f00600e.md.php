<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/laragon/www/angahi/user/pages/06.start/video/sequence.md',
    'modified' => 1590331806,
    'data' => [
        'header' => [
            'title' => 'Safety Video',
            'sequence' => [
                'banner' => true,
                'name' => 'collect-data-sq',
                'content' => 'below'
            ],
            'form' => [
                'fields' => [
                    0 => [
                        'name' => 'tool',
                        'type' => 'text',
                        'Label' => 'Tool'
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'Watched Safety Video'
                    ],
                    1 => [
                        'type' => 'submit',
                        'value' => 'Did Not Watch',
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
        'frontmatter' => 'title: Safety Video
sequence:
    banner: true
    name: collect-data-sq
    content: below
form:
    fields:
        - name: tool
          type: text
          Label: Tool
    buttons:
        - type: submit
          value: Watched Safety Video
        - type: submit
          value: \'Did Not Watch\'
          task: sequence_reset
    process:
        - next_page: true',
        'markdown' => '# Safety Video
A safety video
'
    ]
];
