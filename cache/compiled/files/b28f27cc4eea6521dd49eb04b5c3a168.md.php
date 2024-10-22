<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/laragon/www/angahi/user/pages/04.Cote-d-Ivoire/03.trainings/02.presentation-list-1/presentations.md',
    'modified' => 1591143356,
    'data' => [
        'header' => [
            'title' => 'Presentation list 1',
            'hide_page_title' => false,
            'show_sidebar' => true,
            'hide_git_sync_repo_link' => false,
            'child_type' => 'presentation',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'title',
                    'dir' => 'asc'
                ]
            ],
            'visibility_requires_access' => true,
            'access' => [
                'site.login' => true
            ]
        ],
        'frontmatter' => 'title: \'Presentation list 1\'
hide_page_title: false
show_sidebar: true
hide_git_sync_repo_link: false
child_type: presentation
content:
    items: \'@self.children\'
    order:
        by: title
        dir: asc
visibility_requires_access: true
access:
    site.login: true',
        'markdown' => 'Your page content goes here.'
    ]
];
