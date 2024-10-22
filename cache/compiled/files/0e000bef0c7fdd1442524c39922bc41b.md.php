<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/laragon/www/angahi/user/pages/09.Canada/03.trainings/01.training-catalog/accordion.md',
    'modified' => 1591053224,
    'data' => [
        'header' => [
            'title' => 'Training catalog',
            'hide_page_title' => false,
            'show_sidebar' => true,
            'hide_git_sync_repo_link' => false,
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ],
                'limit' => 0
            ]
        ],
        'frontmatter' => 'title: \'Training catalog\'
hide_page_title: false
show_sidebar: true
hide_git_sync_repo_link: false
content:
    items: \'@self.children\'
    order:
        by: folder
        dir: asc
    limit: 0',
        'markdown' => 'Your page content goes here.
'
    ]
];
