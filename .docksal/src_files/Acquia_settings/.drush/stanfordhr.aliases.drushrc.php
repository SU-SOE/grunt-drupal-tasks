<?php

// Application 'stanfordhr', environment 'dev'.
$aliases['dev'] = array (
  'root' => '/var/www/html/stanfordhr.dev/docroot',
  'ac-site' => 'stanfordhr',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'stanfordhrdev.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'dev.livedev' => 
  array (
    'parent' => '@stanfordhr.dev',
    'root' => '/mnt/gfs/stanfordhr.dev/livedev/docroot',
  ),
  'remote-host' => 'stanfordhrdev.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordhr.dev',
);
