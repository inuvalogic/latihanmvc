<?php

define('DS', DIRECTORY_SEPARATOR);
define('CONTROLLER_PATH', __DIR__ . DS . 'controller' . DS);
define('MODEL_PATH', __DIR__ . DS . 'model' . DS);
define('VIEW_PATH', __DIR__ . DS . 'view' . DS);

define('BASE_URL', 'http://localhost/mvc/');

include "core/db.php";
include "core/app.php";