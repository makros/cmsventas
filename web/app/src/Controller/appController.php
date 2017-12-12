<?php

namespace src\Controller;

class appController {

  public function __construct(){}

  public function index(){
    echo 'Index desde appController';
  }

  public function error(){
    require_once(APP_PATH.'/Views/error.php');
  }
}