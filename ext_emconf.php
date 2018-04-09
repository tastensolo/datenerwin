<?php

/**
 * Extension Manager/Repository config file for ext "datenerwin".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Datenerwin',
    'description' => 'FluidStyledContent - Sitepackebuilder.com',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Jesmar\\Datenerwin\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Marco Grahl',
    'author_email' => 'datenerwin@jesmar.de',
    'author_company' => 'jesmar',
    'version' => '1.0.0',
];
