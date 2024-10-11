<?php
require_once "../config/App.php";

class Conexion{

  /* 
    * Retorna una conexion activa al servidor y BD
  */
  protected static function getConexion(){
    try{
      $pdo = new PDO(SGDB, USER, PASS);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
      error_log($e->getMessage());
    }
  }

  public function encryption($string){

  }

  public function decryption($string){

  }

  public function getAll($storeProcedure){

  }

  public function search($data = []){

  }
}