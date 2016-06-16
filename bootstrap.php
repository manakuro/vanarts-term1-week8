<?php

// include PHP libraries
$loader = require 'vendor/autoload.php';
$loader->addPsr4('FS\\', __DIR__.'/partials/');

// include config file
include('partials/config.php');

// define curernt page
define('CURRENT_PAGE', pathinfo($_SERVER['REQUEST_URI'], PATHINFO_FILENAME));

// define host url
$url  = empty($_SERVER["HTTPS"]) ? "http://" : "https://";
$url .= $_SERVER["HTTP_HOST"];
define('BASE_URL', $url);

date_default_timezone_set ( 'Canada/Pacific' );

unset($url);