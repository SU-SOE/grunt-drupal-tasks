<?php

// Application 'stanfordfsh', environment 'dev'.
$aliases['dev'] = array (
  'root' => '/var/www/html/stanfordfsh.dev/docroot',
  'ac-site' => 'stanfordfsh',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'stanfordfshdev.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'dev.livedev' => 
  array (
    'parent' => '@stanfordfsh.dev',
    'root' => '/mnt/gfs/stanfordfsh.dev/livedev/docroot',
  ),
  'remote-host' => 'stanfordfshdev.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordfsh.dev',
);
