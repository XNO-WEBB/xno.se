<?php

/*
 *---------------------------------------------------------------
 * CONFIGURE FILE
 *---------------------------------------------------------------
 */

$globalPage['info']['applicationName']	= 'Starter Template';

$globalPage['info']['title'] 			= 'Example.com | ';
$globalPage['info']['tags']				= 'Example, tags, for, project, ';
$globalPage['info']['desc']				= 'Example description. ';
$globalPage['info']['author']			= 'Example examplesson';
$globalPage['info']['htmlLanguage']		= 'en';


/*
 *---------------------------------------------------------------
 * PASSWORD CONFIGURATION
 *---------------------------------------------------------------
 */

$config['password']['salt'] = '7271041665409064caea8b38.54055612';


/*
 *-------------------------
 * MYSQL SETUP
 *-------------------------
 */

if ( $_SERVER['SERVER_NAME'] != 'localhost' ):


// Live server
$config['server']['status'] 	= 'live';
$config['mysqli']['address'] 	= 'localhost';
$config['mysqli']['username']	= '';
$config['mysqli']['password']	= '';
$config['mysqli']['database']	= '';

else:

// Localhost
$config['server']['status']		= 'localhost';
$config['mysqli']['address'] 	= 'localhost';
$config['mysqli']['username']	= 'root';
$config['mysqli']['password']	= 'root';
$config['mysqli']['database']	= 'startbox';

endif;
