<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Admin' => $baseDir . '/plugins/Admin/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Flat' => $baseDir . '/plugins/Flat/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/'
    ]
];
