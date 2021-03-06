<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
// deze lijn aanpassen bij online plaatsen, de site root vragen aan je hosting
// C:\wamp64\www\port
//define('SITE_ROOT', DS . 'wamp64' . DS . 'www' . DS . 'port');
define('SITE_ROOT', DS . 'wamp64' . DS . 'www' . DS . 'port');
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');
defined('IMAGES_PATH') ? null : define('IMAGES_PATH', SITE_ROOT . DS . 'admin' . DS . 'images');


require_once (INCLUDES_PATH . DS . 'functions.php');
require_once (INCLUDES_PATH . DS . 'config.php');
require_once (INCLUDES_PATH . DS . 'Database.php');
require_once (INCLUDES_PATH . DS . 'Db_object.php');
require_once (INCLUDES_PATH . DS . 'User.php');
require_once (INCLUDES_PATH . DS . 'Photo.php');
require_once (INCLUDES_PATH . DS . 'Session.php');
?>
