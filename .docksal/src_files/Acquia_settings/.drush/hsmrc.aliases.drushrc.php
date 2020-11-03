<?php

// Application 'hsmrc', environment 'dev'.
$aliases['dev'] = array (
  'root' => '/var/www/html/hsmrc.dev/docroot',
  'ac-site' => 'hsmrc',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'hsmrcdev.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'dev.livedev' => 
  array (
    'parent' => '@hsmrc.dev',
    'root' => '/mnt/gfs/hsmrc.dev/livedev/docroot',
  ),
  'remote-host' => 'hsmrcdev.ssh.prod.acquia-sites.com',
  'remote-user' => 'hsmrc.dev',
);
