<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'teeest',
    'description' => 'testextension',
    'category' => 'plugin',
    'author' => 'Bene',
    'author_email' => 'ben@pixel-ink.de',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0 - 7.9.99',
            'femanager' => '',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
);