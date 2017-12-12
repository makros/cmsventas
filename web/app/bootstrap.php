<?php

  require 'config/config.php';

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
  } else {
    $controller = 'app';
    $action = 'index';
  }

  require_once APP_PATH.'/routes.php';
  require_once APP_PATH.'/Views/layout.php';
  require_once APP_PATH.'/db_conexion.php';



