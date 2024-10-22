<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/laragon/www/angahi/user/pages/05.France/09.module-readings/custompagetypes.md',
    'modified' => 1591043262,
    'data' => [
        'header' => [
            'title' => 'Module Readings',
            'published' => true,
            'child_type' => 'embedlycard',
            'visible' => true,
            'content' => [
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'items' => '@self.children',
                'limit' => 0
            ],
            'show_sidebar' => true,
            'display_child_page_titles' => true,
            'display_child_page_titles_link' => false,
            'display_content_title' => false,
            'display_content_titles_link' => false,
            'display_content_links' => false,
            'hide_git_sync_repo_link' => true
        ],
        'frontmatter' => 'title: \'Module Readings\'
published: true
child_type: embedlycard
visible: true
content:
    order:
        by: default
        dir: asc
    items: \'@self.children\'
    limit: 0
show_sidebar: true
display_child_page_titles: true
display_child_page_titles_link: false
display_content_title: false
display_content_titles_link: false
display_content_links: false
hide_git_sync_repo_link: true',
        'markdown' => ''
    ]
];
