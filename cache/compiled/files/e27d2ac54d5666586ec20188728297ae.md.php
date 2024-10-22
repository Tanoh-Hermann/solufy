<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/laragon/www/angahi/user/pages/09.Canada/all-web-picks-of-the-week/custompagetypes.md',
    'modified' => 1583505714,
    'data' => [
        'header' => [
            'title' => 'All Web Picks of the Week',
            'published' => true,
            'visible' => false,
            'child_type' => 'embedlycard',
            'content' => [
                'order' => [
                    'by' => 'date',
                    'dir' => 'asc'
                ],
                'items' => '@self.children.visible',
                'filter' => [
                    'visible' => true
                ],
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
        'frontmatter' => 'title: \'All Web Picks of the Week\'
published: true
visible: false
child_type: embedlycard
content:
    order:
        by: date
        dir: asc
    items: \'@self.children.visible\'
    filter:
      visible: true
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
