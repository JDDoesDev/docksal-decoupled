<?php

/**
 * @file
 * Docksal settings.
 */

// Docksal DB connection settings.
$databases['default']['default'] = [
  'database' => 'contenta',
  'username' => 'root',
  'password' => 'root',
  'host' => 'db',
  'driver' => 'mysql',
];
# Workaround for permission issues with NFS shares in Vagrant
$settings['file_chmod_directory'] = 0777;
$settings['file_chmod_file'] = 0666;
