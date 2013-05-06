<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
    'default' => array
    (
        'type' => 'postgresql',
        'connection' => array(
            'database' => 'magog',
            'hostname' => 'localhost',
            'username' => 'magog',
            'password' => 'magog',
            'persistent' => FALSE
        ),
        /**
         * The following extra options are available for PDO:
         *
         * string   identifier  set the escaping identifier
         */ // Column to return from INSERT queries, see #2188 and #2273
        'primary_key' => '',
        'table_prefix' => '',
        'charset' => 'utf8',
        'caching' => FALSE,
        'profiling' => TRUE,
    ),
);
