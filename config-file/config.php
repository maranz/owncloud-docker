<?php
$CONFIG = array (
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/owncloud/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/owncloud/custom',
      'url' => '/custom',
      'writable' => true,
    ),
  ),
  'trusted_domains' => 
  array (
    0 => 'localhost',
  ),
  'datadirectory' => '/mnt/data/files',
  'dbtype' => 'mysql',
  'dbhost' => 'db:3306',
  'dbname' => 'owncloud',
  'dbuser' => 'luca',
  'dbpassword' => 'G69BZXPCyiL',
  'dbtableprefix' => 'oc_',
  'log_type' => 'owncloud',
  'supportedDatabases' => 
  array (
    0 => 'sqlite',
    1 => 'mysql',
    2 => 'pgsql',
  ),
  'upgrade.disable-web' => true,
  'default_language' => 'en',
  'overwrite.cli.url' => 'http://localhost:9260/',
  'overwritewebroot' => '/owncloud',
  'htaccess.RewriteBase' => '/',
  'logfile' => '/mnt/data/files/owncloud.log',
  'loglevel' => 2,
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'mysql.utf8mb4' => true,
  'filelocking.enabled' => true,
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'port' => '6379',
  ),
  'passwordsalt' => 'NBDG7rQJ1WKZZwhWtky6YIpmCa/j8c',
  'secret' => '/5Zk0VsWhkAjw06BcP+fuoKkIF4TMpffBBg4UiEGt6h8GuLS',
  'version' => '10.6.0.5',
  'logtimezone' => 'UTC',
  'installed' => true,
  'instanceid' => 'oci8q1mzmemj',
);
