<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[AASHRO] Christmas TYPO3 Template',
    'description' => 'Christmas theme is a modern and responsive TYPO3 template designed for Christmas, perfect for holiday promotions, events, and seasonal websites.',
    'category' => 'templates',
    'author' => 'Team AASHRO',
    'author_email' => 'info@aashro.com',
    'author_company' => 'AASHRO Tech',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-12.5.99',
            'mask' => '8.3.11-9.0.4'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];