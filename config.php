<?php
return [
  'db' => [
    'host' => 'localhost',
    'port' => '3306',
    'username' => 'root',
    'password' => 'Admin@1234',
    'dbname' => 'crgsa',
  ],
  'csrfProtection' => [
    'frontend' => false,
    'backend' => false
  ],
  'phpsettings' => [
    'error_reporting' => E_ALL & ~E_USER_DEPRECATED,
    'display_errors' => 1,
    'date.timezone' => 'Europe/Berlin',
  ],
  /* 'snippet' => [
    'readFromDb' => true,
    'writeToDb' => true,
    'readFromIni' => false,
    'writeToIni' => false,
    'showSnippetPlaceholder' => true,

  ], */
  'mail' => [
    'type' => 'smtp',
    'host' => 'localhost',
    'port' => 1025,
  ],
  'front' => [
    'noErrorHandler' => true,
    'throwExceptions' => true,
    'showException' => true
  ],
  'httpcache' => [
    'enabled' => false,
    'debug' => true,
    'default_ttl' => 0,
    'private_headers' => ['Authorization', 'Cookie'],
    'allow_reload' => false,
    'allow_revalidate' => false,
    'stale_while_revalidate' => 2,
    'stale_if_error' => false,
    'cache_cookies' => ['shop', 'currency', 'x-cache-context-hash'],
  ],
  'phpsettings' => [
    'display_errors' => 1
  ],
  'trustedProxies' => ['127.0.0.1'],
  'template' => [
    'forceCompile' => true
  ],
  'session' => [
    'locking' => false,
  ],
  'es' => [
    'prefix' => 'sw_shop', // set a prefix for the ES indices
    'enabled' => false, // enable ES
    'write_backlog' => true, // enable backlog
    'number_of_replicas' => 0, // set the number of replicase (e.g. 0 for development environments)
    'number_of_shards' => 1, // set the number of shards 
    'wait_for_status' => 'green', // wait until cluster is in the specified state
    'client' => [
      'hosts' => [
        'localhost:9200', // set the ES host
      ],
    ],
  ],
];
