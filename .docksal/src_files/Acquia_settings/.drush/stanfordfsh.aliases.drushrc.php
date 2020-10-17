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

// Application 'stanfordfsh', environment 'prod'.
$aliases['prod'] = array (
  'root' => '/var/www/html/stanfordfsh.prod/docroot',
  'ac-site' => 'stanfordfsh',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'stanfordfsh.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'prod.livedev' => 
  array (
    'parent' => '@stanfordfsh.prod',
    'root' => '/mnt/gfs/stanfordfsh.prod/livedev/docroot',
  ),
  'remote-host' => 'stanfordfsh.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordfsh.prod',
);

// Application 'stanfordfsh', environment 'ra'.
$aliases['ra'] = array (
  'root' => '/var/www/html/stanfordfsh.ra/docroot',
  'ac-site' => 'stanfordfsh',
  'ac-env' => 'ra',
  'ac-realm' => 'prod',
  'uri' => 'stanfordfshra.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'ra.livedev' => 
  array (
    'parent' => '@stanfordfsh.ra',
    'root' => '/mnt/gfs/stanfordfsh.ra/livedev/docroot',
  ),
  'remote-host' => 'stanfordfshra.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordfsh.ra',
);

// Application 'stanfordfsh', environment 'test'.
$aliases['test'] = array (
  'root' => '/var/www/html/stanfordfsh.test/docroot',
  'ac-site' => 'stanfordfsh',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'stanfordfshstg.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'test.livedev' => 
  array (
    'parent' => '@stanfordfsh.test',
    'root' => '/mnt/gfs/stanfordfsh.test/livedev/docroot',
  ),
  'remote-host' => 'stanfordfshstg.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordfsh.test',
);

