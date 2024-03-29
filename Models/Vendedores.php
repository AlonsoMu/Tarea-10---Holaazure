<?php

require_once 'Conexion.php';

class Vendedor extends Conexion
{
  private $conexion;

  public function __CONSTRUCT()
  {
    $this->conexion = parent::getConexion();
  }

  public function listar()
  {
    try {
      $consulta = $this->conexion->prepare("EXEC spu_listar_vendedores_general");
      $consulta->execute();
      return $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage()); //Desarrollo > Producción
    }
  }

  public function registrar($datos = [])
  {
    try {
      $consulta = $this->conexion->prepare("EXEC spu_registrar_vendedor ?, ?, ?, ?, ?");
      $consulta->execute(
        array(
          $datos['apellidos'],
          $datos['nombres'],
          $datos['dni'],
          $datos['telefono'],
          $datos['correo']
        )
      );
      return $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }
}
