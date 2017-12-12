<?php

namespace src\Model;

use src\db_conexion;

class Categoria {

  private $_table = 'categoria';
  private $db_conn = null;

  public function __construct() {

  }

  public function insertar($nombre, $descripcion) {
    $this->db_conn = new db_conexion();
    $variables = [
      'nombre' => $nombre,
      'descripcion' => $descripcion,
      'condicion'  => '1'
    ];

    return $this->db_conn->insert($this->_table,$variables);
  }

  public function editar($idcategoria, $nombre, $descripcion) {
    $this->db_conn = new db_conexion();
    $variables = [
      'nombre' => $nombre,
      'descripcion' => $descripcion,
    ];
    $where = [
      'idcategoria' => $idcategoria,
    ];

    return $this->db_conn->update($this->_table, $variables, $where);
  }

  // Función para desactivar una categoría
  public function desactivar ($idcategoria) {
    $this->db_conn = new db_conexion();
    $variables = [
      'condicion' => '0'
    ];
    $where = [
      'idcategoria' => $idcategoria,
    ];

    return $this->db_conn->update($this->_table, $variables, $where);
  }

  // Función para activar una categoría
  public function activar ($idcategoria) {
    $this->db_conn = new db_conexion();
    $variables = [
      'condicion' => '1'
    ];
    $where = [
      'idcategoria' => $idcategoria,
    ];

    return $this->db_conn->update($this->_table, $variables, $where);
  }

  public function mostrar ($idcategoria) {
    $this->db_conn = new db_conexion();
    $query = "SELECT * FROM $this->_table WHERE idcategoria = '$idcategoria'";
    return $this->db_conn->get_row($query, true);
  }

  public function listar () {
    $this->db_conn = new db_conexion();
    $query = "SELECT * FROM $this->_table";
    return $this->db_conn->get_results($query, true);
  }


}