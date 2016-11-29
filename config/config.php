<?php 

Config::set('site_name', 'Your Site Name');

Config::set('languages', ['en', 'fr']);


// Routes . Route name => method prefix
Config::set('routes', [
	'default'	=> '',			//Default URI
	'admin'		=> 'admin_',		//Default Admin URI
]);

//Set Default Route
Config::set('default_route', 'default');
//Set default Language
Config::set('default_language', 'en');
//Set default Controller
Config::set('default_controller', 'pages');
//Set default Method
Config::set('default_action', 'index');