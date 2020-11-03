<?php

// Application 'swssoe', environment 'dev'.
$aliases['dev'] = array (
  'root' => '/var/www/html/swssoe.dev/docroot',
  'ac-site' => 'swssoe',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'swssoedev.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'dev.livedev' => 
  array (
    'parent' => '@swssoe.dev',
    'root' => '/mnt/gfs/swssoe.dev/livedev/docroot',
  ),
  'remote-host' => 'swssoedev.ssh.prod.acquia-sites.com',
  'remote-user' => 'swssoe.dev',
);