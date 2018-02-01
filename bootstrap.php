<?php
// Includes vendor libraries
require "vendor/autoload.php";

use Xupopter\System\App as Xupopter;

define('APP_ROOT', __DIR__ . DIRECTORY_SEPARATOR);
date_default_timezone_set("Europe/Madrid");

// Include configurations and global constants
Xupopter::$config = require "conf.php";