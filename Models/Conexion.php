<?php

class Conexion{

  public function getConexion(){
// PHP Data Objects(PDO) Sample Code:
    try {
        //Conexion al Server y la BD
        $conn = new PDO("sqlsrv:server = tcp:server74136969.database.windows.net,1433; Database = DB1399488", "Alonsoxd74136969", "Alonso1807");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
 
    }
    catch (PDOException $e) {
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }
  }
}

?>