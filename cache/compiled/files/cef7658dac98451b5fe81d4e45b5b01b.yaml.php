<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://admin-addon-revisions/admin-addon-revisions.yaml',
    'modified' => 1590022112,
    'data' => [
        'enabled' => true,
        'debug' => false,
        'directory' => '.revs',
        'limit' => [
            'maximum' => 50,
            'older' => '1 year'
        ]
    ]
];
