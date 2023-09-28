<?php
/**
 * @package  teenyPHP  
 */

//Start new or resume existing session
session_start();


//Import settings
require 'app/settings.php';


//Mininum php version
if(phpversion() < FRAMEWORK['MIN_PHP'])
	die('You need a minimum of PHP version '.FRAMEWORK['MIN_PHP'].' to run this app');

  
//Load core application files
require 'app'.DS.'config.php';
//require 'app'.DS.'init.php';

  /*
//Debug mode set
if (DEBUG) {
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
}else{
    error_reporting(0);
    ini_set('display_errors', 'off');
}

//Load the App
$app = new App;
$app->initialize();
*/