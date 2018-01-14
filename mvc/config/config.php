<?php

Config::set('site_name', 'Your Site Name');
Config::set('language', array('en','fr'));

//route
Config::set('route',array(
    'default' => 'admin',
    'admin'   => 'admin',
));

Config::set('default_route','default');
Config::set('default_language','en');
Config::set('default_controller','pages');
Config::set('default_action','index');

Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', '');
Config::set('db.db_name', 'mvc');

Config::set('salt', 'asdfgh');
?>