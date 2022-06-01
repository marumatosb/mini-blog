<?php

require 'application/bootstrap.php';
require 'application/MiniBlogApplication.php';

$app = new MiniBlogApplication(true);
$app->run();
