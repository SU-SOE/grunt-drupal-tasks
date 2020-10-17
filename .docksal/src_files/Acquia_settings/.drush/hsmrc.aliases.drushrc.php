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

// Application 'hsmrc', environment 'prod'.
$aliases['prod'] = array (
  'root' => '/var/www/html/hsmrc.prod/docroot',
  'ac-site' => 'hsmrc',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'hsmrc.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'prod.livedev' => 
  array (
    'parent' => '@hsmrc.prod',
    'root' => '/mnt/gfs/hsmrc.prod/livedev/docroot',
  ),
  'remote-host' => 'hsmrc.ssh.prod.acquia-sites.com',
  'remote-user' => 'hsmrc.prod',
);

// Application 'hsmrc', environment 'ra'.
$aliases['ra'] = array (
  'root' => '/var/www/html/hsmrc.ra/docroot',
  'ac-site' => 'hsmrc',
  'ac-env' => 'ra',
  'ac-realm' => 'prod',
  'uri' => 'hsmrcra.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'ra.livedev' => 
  array (
    'parent' => '@hsmrc.ra',
    'root' => '/mnt/gfs/hsmrc.ra/livedev/docroot',
  ),
  'remote-host' => 'hsmrcra.ssh.prod.acquia-sites.com',
  'remote-user' => 'hsmrc.ra',
);

// Application 'hsmrc', environment 'test'.
$aliases['test'] = array (
  'root' => '/var/www/html/hsmrc.test/docroot',
  'ac-site' => 'hsmrc',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'hsmrcstg.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'test.livedev' => 
  array (
    'parent' => '@hsmrc.test',
    'root' => '/mnt/gfs/hsmrc.test/livedev/docroot',
  ),
  'remote-host' => 'hsmrcstg.ssh.prod.acquia-sites.com',
  'remote-user' => 'hsmrc.test',
);

