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

// Application 'stanfordgryphon', environment 'prod'.
$aliases['prod'] = array (
  'root' => '/var/www/html/stanfordgryphon.prod/docroot',
  'ac-site' => 'stanfordgryphon',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'stanfordgryphon.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'prod.livedev' => 
  array (
    'parent' => '@stanfordgryphon.prod',
    'root' => '/mnt/gfs/stanfordgryphon.prod/livedev/docroot',
  ),
  'remote-host' => 'stanfordgryphon.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordgryphon.prod',
);

// Application 'stanfordgryphon', environment 'ra'.
$aliases['ra'] = array (
  'root' => '/var/www/html/stanfordgryphon.ra/docroot',
  'ac-site' => 'stanfordgryphon',
  'ac-env' => 'ra',
  'ac-realm' => 'prod',
  'uri' => 'stanfordgryphonra.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'ra.livedev' => 
  array (
    'parent' => '@stanfordgryphon.ra',
    'root' => '/mnt/gfs/stanfordgryphon.ra/livedev/docroot',
  ),
  'remote-host' => 'stanfordgryphonra.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordgryphon.ra',
);

// Application 'stanfordgryphon', environment 'test'.
$aliases['test'] = array (
  'root' => '/var/www/html/stanfordgryphon.test/docroot',
  'ac-site' => 'stanfordgryphon',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'stanfordgryphonstg.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'test.livedev' => 
  array (
    'parent' => '@stanfordgryphon.test',
    'root' => '/mnt/gfs/stanfordgryphon.test/livedev/docroot',
  ),
  'remote-host' => 'stanfordgryphonstg.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordgryphon.test',
);

