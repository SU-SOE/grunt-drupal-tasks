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

// Application 'stanfordhr', environment 'prod'.
$aliases['prod'] = array (
  'root' => '/var/www/html/stanfordhr.prod/docroot',
  'ac-site' => 'stanfordhr',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'stanfordhr.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'prod.livedev' => 
  array (
    'parent' => '@stanfordhr.prod',
    'root' => '/mnt/gfs/stanfordhr.prod/livedev/docroot',
  ),
  'remote-host' => 'stanfordhr.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordhr.prod',
);

// Application 'stanfordhr', environment 'ra'.
$aliases['ra'] = array (
  'root' => '/var/www/html/stanfordhr.ra/docroot',
  'ac-site' => 'stanfordhr',
  'ac-env' => 'ra',
  'ac-realm' => 'prod',
  'uri' => 'stanfordhrra.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'ra.livedev' => 
  array (
    'parent' => '@stanfordhr.ra',
    'root' => '/mnt/gfs/stanfordhr.ra/livedev/docroot',
  ),
  'remote-host' => 'stanfordhrra.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordhr.ra',
);

// Application 'stanfordhr', environment 'test'.
$aliases['test'] = array (
  'root' => '/var/www/html/stanfordhr.test/docroot',
  'ac-site' => 'stanfordhr',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'stanfordhrstg.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'test.livedev' => 
  array (
    'parent' => '@stanfordhr.test',
    'root' => '/mnt/gfs/stanfordhr.test/livedev/docroot',
  ),
  'remote-host' => 'stanfordhrstg.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordhr.test',
);

