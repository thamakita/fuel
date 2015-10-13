<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    'defaulte' => array(
        'type' => 'mysqli',
        'connection' => array(
            'persistent' => false,
        ),
        'identifier' => '`',
        'table_prefix' => 'cf_',
        'charset' => 'utf8',
        'enable_cache' => true,
        'profiling' => false,
    ),
);
