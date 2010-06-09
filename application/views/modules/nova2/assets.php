<?php

$module = $this->router->fetch_module();

/* set up the link tag parameters */
$css_main = array(
	'href'	=> 	APPFOLDER . '/views/modules/'. $module .'/css/main.css',
	'rel'	=> 	'stylesheet',
	'type'	=> 	'text/css',
	'media'		=> 'screen',
	'charset'	=> 'utf-8'
);

$logo = array(
	'src'	=> APPFOLDER .'/views/modules/'. $module .'/images/head-logo.png',
	'alt'	=> 'Anodyne Productions',
	'class' => 'float-right head-logo',
	'border' => 0
);

$images = array(
	'home' => array(
		'src' => APPFOLDER .'/views/modules/'. $module .'/images/nav/home.png',
		'alt' => '',
		'class' => 'nav-icon-7'),
	'pages' => array(
		'src' => APPFOLDER .'/views/modules/'. $module .'/images/nav/documents-text.png',
		'alt' => '',
		'class' => 'nav-icon-8'),
	'helpers' => array(
		'src' => APPFOLDER .'/views/modules/'. $module .'/images/nav/block.png',
		'alt' => '',
		'class' => 'nav-icon-8'),
	'developers' => array(
		'src' => APPFOLDER .'/views/modules/'. $module .'/images/nav/hammer.png',
		'alt' => '',
		'class' => 'nav-icon-7'),
	'models' => array(
		'src' => APPFOLDER .'/views/modules/'. $module .'/images/nav/databases.png',
		'alt' => '',
		'class' => 'nav-icon-8'),
	'tutorials' => array(
		'src' => APPFOLDER .'/views/modules/'. $module .'/images/nav/flask.png',
		'alt' => '',
		'class' => 'nav-icon-8'),
	'libraries' => array(
		'src' => APPFOLDER .'/views/modules/'. $module .'/images/nav/scripts-text.png',
		'alt' => '',
		'class' => 'nav-icon-8'),
	'tour' => array(
		'src' => APPFOLDER .'/views/modules/'. $module .'/images/nav/binocular.png',
		'alt' => '',
		'class' => 'nav-icon-8'),
);