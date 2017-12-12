<?php

  //Función que llama al controlador y su respectiva acción, que son pasados como parámetros
use src\Controller\appController;

function call($controller, $action){
    //importa el controlador desde la carpeta Controllers
    require_once('Controller/' . $controller . 'Controller.php');
    //Crea el controlador
    switch($controller){
      case 'app':
        $controller = new appController();
        break;

    }
    //llama a la acción del controlador
    $controller->{$action }();
  }

  //Array con los controladores y sus respectivas acciones.
  $controllers = [
    'app'=>['index']
  ];
  //Verifica que el controlador enviado desde index.php esté dentro del array controllers
  if (array_key_exists($controller, $controllers)) {
    //Verifica que el array controllers con la clave que es la variable controller del index exista la acción
    if (in_array($action, $controllers[$controller])) {
      //Llama  la función call y le pasa el controlador a llamar y la acción (método) que está dentro del controlador
      call($controller, $action);
    }else{
      call('app', 'error');
    }
  }else{// le pasa el nombre del controlador y la pagina de error
    call('app', 'error');
  }