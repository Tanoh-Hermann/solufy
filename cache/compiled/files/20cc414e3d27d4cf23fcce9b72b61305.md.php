<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/laragon/www/angahi/user/pages/09.Canada/02.shop/02.geek-toys/snipcart_category.md',
    'modified' => 1590673404,
    'data' => [
        'header' => [
            'title' => 'Geek Toys',
            'category' => 'Geek Toys',
            'content' => [
                'items' => '@self.children',
                'order' => [
                    'by' => 'title',
                    'dir' => 'asc'
                ]
            ]
        ],
        'frontmatter' => 'title: \'Geek Toys\'
category: \'Geek Toys\'
content:
    items: \'@self.children\'
    order:
        by: title
        dir: asc',
        'markdown' => '# Geek Toys
## Anime, Gaming, Movies, Comics, we have **all your toys**
'
    ]
];
