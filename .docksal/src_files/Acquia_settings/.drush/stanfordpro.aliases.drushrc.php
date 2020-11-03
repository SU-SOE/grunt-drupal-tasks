<?php

// Application 'stanfordpro', environment 'dev'.
$aliases['dev'] = array (
  'root' => '/var/www/html/stanfordpro.dev/docroot',
  'ac-site' => 'stanfordpro',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'stanfordprodev.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'dev.livedev' => 
  array (
    'parent' => '@stanfordpro.dev',
    'root' => '/mnt/gfs/stanfordpro.dev/livedev/docroot',
  ),
  'remote-host' => 'stanfordprodev.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordpro.dev',
);
