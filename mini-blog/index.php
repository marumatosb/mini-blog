<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'application/bootstrap.php';
require 'application/MiniBlogApplication.php';

$app = new MiniBlogApplication(false);
$app->run();
