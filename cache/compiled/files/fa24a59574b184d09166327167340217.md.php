<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/laragon/www/angahi/user/pages/03.cpt363-intermediate/presentations/presentations.md',
    'modified' => 1583505712,
    'data' => [
        'header' => [
            'title' => 'All Presentations',
            'published' => true,
            'child_type' => 'presentation',
            'visible' => false,
            'content' => [
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'items' => '@self.children'
            ],
            'hide_page_title' => false,
            'show_sidebar' => true,
            'hide_git_sync_repo_link' => false
        ],
        'frontmatter' => 'title: \'All Presentations\'
published: true
child_type: presentation
visible: false
content:
    order:
        by: default
        dir: asc
    items: \'@self.children\'
hide_page_title: false
show_sidebar: true
hide_git_sync_repo_link: false',
        'markdown' => ''
    ]
];
