<?php

  require_once APP_PATH.'/Model/Categoria.php';
  $db_conn = new \src\db_conexion();

  $categoria = new \src\Model\Categoria();

  $idcategoria = isset($_POST['idcategoria']) ? $db_conn->filter($_POST['idcategoria']) : "";
  $nombre = isset($_POST['nombre']) ? $db_conn->filter($_POST['nombre']) : "";
  $descripcion = isset($_POST['descripcion']) ? $db_conn->filter($_POST['descripcion']) : "";

  switch ($_GET['op']) {
    case 'guardaryeditar':
      if (empty($idcategoria)) {
        $response = $categoria->insertar($nombre, $descripcion);
        echo $response ? '<p>Categoría registrada.</p>' : '<p>No se ha podido registrar la categoría.</p>';
      } else {
        $response = $categoria->editar($idcategoria, $nombre, $descripcion);
        echo $response ? '<p>Categoría actualizada.</p>' : '<p>No se ha podido actualizar la categoría.</p>';
      }
      break;

    case 'desactivar':
      $response = $categoria->desactivar($idcategoria);
      echo $response ? "<p>Categoría $idcategoria desactivada.</p>" : "<p>No se ha podido desactivar la categoría $idcategoria.</p>";
      break;

    case 'activar':
      $response = $categoria->activar($idcategoria);
      echo $response ? "<p>Categoría $idcategoria desactivada.</p>" : "<p>No se ha podido desactivar la categoría $idcategoria.</p>";
      break;

    case 'mostrar':
      $response = $categoria->mostrar($idcategoria);
      echo json_encode($response);
      break;

    case 'listar':
      $data = $categoria->listar(); //Quizas haya que poner a false la petición del resultado como objeto

      //Información para DataTables
      $results = [
        'sEcho' => 1,
        'iTotalRecords' => count($data),
        'iTotalDisplayRecords' => count($data),
        'aaData' => $data,
      ];

      echo json_encode($results);

      break;
  }

