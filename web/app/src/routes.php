<?php

use src\Controller\appController;
use src\Controller\categoriaController;

// Default Controller an action
  $controller = 'categoria';
  $action = 'index';

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
  }

  /* **DEFINICIÓN DE CONTROLADORES Y ACCIONES DEL PROYECTO** */
  $controllers = [
    'app'=>['index'],
    'categoria' => ['index'],
  ];
  /* **FIN DEFINICIÓN DE CONTROLADORES Y ACCIONES DEL PROYECTO** */

  function call($controller, $action){
      //importa el controlador desde la carpeta Controllers
      require_once('Controller/' . $controller . 'Controller.php');

      switch($controller){
        case 'app':
          $controller = new appController();
          break;
        case 'categoria':
          $controller = new categoriaController();
      }
      //Llamada a la acción del controlador
      $controller->{$action}();
    }

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