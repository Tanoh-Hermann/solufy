<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/laragon/www/angahi/user/pages/09.Canada/h5p/custompagetypes.md',
    'modified' => 1583505714,
    'data' => [
        'header' => [
            'title' => 'H5P Content',
            'published' => true,
            'child_type' => 'h5p',
            'visible' => false,
            'content' => [
                'order' => [
                    'by' => 'default',
                    'dir' => 'asc'
                ],
                'items' => '@self.children',
                'limit' => 0
            ],
            'hide_sidebar' => true,
            'display_child_page_titles' => true,
            'display_child_page_titles_link' => true,
            'display_content_title' => false,
            'display_content_titles_link' => false,
            'display_content_links' => false,
            'hide_git_sync_repo_link' => true
        ],
        'frontmatter' => 'title: \'H5P Content\'
published: true
child_type: h5p
visible: false
content:
    order:
        by: default
        dir: asc
    items: \'@self.children\'
    limit: 0
hide_sidebar: true
display_child_page_titles: true
display_child_page_titles_link: true
display_content_title: false
display_content_titles_link: false
display_content_links: false
hide_git_sync_repo_link: true',
        'markdown' => ''
    ]
];
