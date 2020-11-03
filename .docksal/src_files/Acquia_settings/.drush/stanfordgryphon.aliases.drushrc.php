<?php

// Application 'stanfordgryphon', environment 'dev'.
$aliases['dev'] = array (
  'root' => '/var/www/html/stanfordgryphon.dev/docroot',
  'ac-site' => 'stanfordgryphon',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'stanfordgryphondev.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'dev.livedev' => 
  array (
    'parent' => '@stanfordgryphon.dev',
    'root' => '/mnt/gfs/stanfordgryphon.dev/livedev/docroot',
  ),
  'remote-host' => 'stanfordgryphondev.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordgryphon.dev',
);