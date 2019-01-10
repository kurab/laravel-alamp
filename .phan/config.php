<?php

return [
    'directory_list' => [
        '.phan/stabs',
        'app',
        'routes',
        'vendor'
    ],

    'exclude_analysis_directory_list' => [
       '.phan',
       'vendor'
    ],
    'allow_missing_properties' => true,
    'null_casts_as_any_type' => true,
    'backward_compatibility_checks' => true,
    'quick_mode' => true,
];
