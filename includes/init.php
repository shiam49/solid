<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

ini_set('display_error', 1);
error_reporting(E_ALL);

define('HOST', '127.0.0.1');
define('DB', 'test');
define('USER', 'shiam');
define('PASSWORD', '112233');

spl_autoload_register(function($className){
    include_once 'lib/'.$className.'.php';
});

// $_GLOBAL['config'] = ['host' =>'127.0.0.1', 'db' => 'shopping', 'user' => 'siam', 'password' => '112233'];

