<?php

namespace src\Controller;

class appController {

  public function __construct(){}

  public function index(){
    require_once APP_PATH.'/Views/layout.php';
  }

  public function error(){
    require_once(APP_PATH.'/Views/error.php');
  }
}