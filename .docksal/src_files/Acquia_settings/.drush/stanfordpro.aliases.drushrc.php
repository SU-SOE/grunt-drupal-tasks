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

// Application 'stanfordpro', environment 'ode10'.
$aliases['ode10'] = array (
  'root' => '/var/www/html/stanfordpro.ode10/docroot',
  'ac-site' => 'stanfordpro',
  'ac-env' => 'ode10',
  'ac-realm' => 'prod',
  'uri' => 'stanfordproode10.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'ode10.livedev' => 
  array (
    'parent' => '@stanfordpro.ode10',
    'root' => '/mnt/gfs/stanfordpro.ode10/livedev/docroot',
  ),
  'remote-host' => 'stanfordproode10.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordpro.ode10',
);

// Application 'stanfordpro', environment 'prod'.
$aliases['prod'] = array (
  'root' => '/var/www/html/stanfordpro.prod/docroot',
  'ac-site' => 'stanfordpro',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'stanfordpro.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'prod.livedev' => 
  array (
    'parent' => '@stanfordpro.prod',
    'root' => '/mnt/gfs/stanfordpro.prod/livedev/docroot',
  ),
  'remote-host' => 'stanfordpro.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordpro.prod',
);

// Application 'stanfordpro', environment 'ra'.
$aliases['ra'] = array (
  'root' => '/var/www/html/stanfordpro.ra/docroot',
  'ac-site' => 'stanfordpro',
  'ac-env' => 'ra',
  'ac-realm' => 'prod',
  'uri' => 'stanfordprora.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'ra.livedev' => 
  array (
    'parent' => '@stanfordpro.ra',
    'root' => '/mnt/gfs/stanfordpro.ra/livedev/docroot',
  ),
  'remote-host' => 'stanfordprora.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordpro.ra',
);

// Application 'stanfordpro', environment 'test'.
$aliases['test'] = array (
  'root' => '/var/www/html/stanfordpro.test/docroot',
  'ac-site' => 'stanfordpro',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'stanfordprostg.prod.acquia-sites.com',
  'path-aliases' => 
  array (
    '%drush-script' => 'drush8',
  ),
  'test.livedev' => 
  array (
    'parent' => '@stanfordpro.test',
    'root' => '/mnt/gfs/stanfordpro.test/livedev/docroot',
  ),
  'remote-host' => 'stanfordprostg.ssh.prod.acquia-sites.com',
  'remote-user' => 'stanfordpro.test',
);

