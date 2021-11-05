<?php

class Conexion extends PDO
{
   private const USER = "bruno.correa";
   private const PASS = "51823293";
   private const DB = "db_chatmate";
   private const PORT = "3306";
   private const HOST = "192.168.5.50" . ":" . self::PORT;
   private const DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";charset=utf8";

   public function __CONSTRUCT()
   {
      try {
         if (isset($_SESSION['ci'])){
         parent::__CONSTRUCT(self::DSN, $_SESSION['ci'], $_SESSION['pass']);}
         else{
         parent::__CONSTRUCT(self::DSN, self::USER, self::PASS);}
      } catch (PDOException $e) {
         throw new Exception('Falló la conexión con la DB: ' . $e->getMessage());
      }
   }
}