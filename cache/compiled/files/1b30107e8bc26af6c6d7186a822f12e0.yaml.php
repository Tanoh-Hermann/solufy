<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/admin-addon-media-rename/languages/en.yaml',
    'modified' => 1590021982,
    'data' => [
        'PLUGIN_ADMIN_ADDON_MEDIA_RENAME' => [
            'RENAME_MEDIA' => 'Rename media',
            'ORIGINAL_NAME' => 'Original name',
            'ORIGINAL_EXTENSION' => 'Original extension',
            'NEW_NAME' => 'New name',
            'NEW_EXTENSION' => 'New extension',
            'REPLACE_EXISTING' => 'Update links on this page',
            'REPLACE_EXISTING_ALL' => 'Update links on all pages',
            'RENAMING' => 'Renaming',
            'RENAME_FAILED' => 'Failed to rename media',
            'PAGE_MEDIA_INFO' => 'Please don\'t forget to save the page, otherwise the links won\'t be updated for this page and it can\'t be automatically reverted.',
            'NON_PAGE_MEDIA_INFO' => 'Please don\'t forget to save the page, otherwise the rename will fail and it can\'t be automatically reverted.',
            'ERROR' => [
                'INVALID_INPUT' => 'Invalid input',
                'FILE_NOT_FOUND' => 'File not found<br><br><strong>Original:</strong> %s',
                'RENAME_FAILED' => 'Rename failed<br><br><strong>Original:</strong> %s<br><strong>New:</strong> %s',
                'NO_CHANGES' => 'No changes',
                'NEW_FILE_EXISTS' => 'A file already exists with that name in this folder<br><br><strong>Original:</strong> %s<br><strong>New:</strong> %s'
            ]
        ]
    ]
];
