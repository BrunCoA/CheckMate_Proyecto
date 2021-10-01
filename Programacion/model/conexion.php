<?php

try{

   $base= new PDO('mysql:host=localhost; dbname=db_chatmate','root','');
   echo 'Conexión realizada con éxito.';

}catch(Exception $e){

   die('Error: ' . $e->getMessage());

}


class Conexion extends PDO
{
   private const USER = "root";
   private const PASS = "";
   private const DB = "db_chatmate";
   private const PORT = "3306";
   private const HOST = "localhost" . ":" . self::PORT;
   private const DSN = "mysql:host=" . self::HOST . ";dbname=" . self::DB . ";charset=utf8";

   public function __CONSTRUCT()
   {
      try {
         if (isset($_SESSION['user_db']))
         parent::__CONSTRUCT(self::DSN, $_SESSION['user_db'], $_SESSION['pass_db']);
         else
         parent::__CONSTRUCT(self::DSN, self::USER, self::PASS);
           
      } catch (PDOException $e) {
         throw new Exception('Falló la conexión con la DB: ' . $e->getMessage());
      }
   }
   }

