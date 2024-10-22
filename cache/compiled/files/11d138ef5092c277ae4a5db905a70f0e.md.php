<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/laragon/www/angahi/user/pages/03.cpt363-intermediate/01.home/blog.md',
    'modified' => 1583505712,
    'data' => [
        'header' => [
            'title' => 'Home',
            'published' => true,
            'visible' => false,
            'hide_page_title' => true,
            'modular_content' => [
                'items' => '@self.modular',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'dsc'
                ]
            ],
            'content' => [
                'items' => '@self.children',
                'limit' => 7,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => '1'
            ],
            'hide_post_summary' => true,
            'post_icon' => 'calendar-o',
            'hide_post_date' => true,
            'hide_post_taxonomy' => true,
            'feed' => [
                'description' => 'Grav CMS Open Matter Course Hub Description',
                'limit' => 10
            ],
            'child_type' => 'item'
        ],
        'frontmatter' => 'title: Home
published: true
visible: false
hide_page_title: true
modular_content:
    items: \'@self.modular\'
    order:
        by: folder
        dir: dsc
content:
    items: \'@self.children\'
    limit: 7
    order:
        by: date
        dir: desc
    pagination: \'1\'
hide_post_summary: true
post_icon: calendar-o
hide_post_date: true
hide_post_taxonomy: true
feed:
    description: \'Grav CMS Open Matter Course Hub Description\'
    limit: 10
child_type: item',
        'markdown' => ''
    ]
];
