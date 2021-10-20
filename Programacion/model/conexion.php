<?php

try{

   $db= new PDO('mysql:host=localhost; dbname=db_chatmate','root','');
   echo 'Conexión realizada con éxito.';

}catch(Exception $e){

   die('Error: ' . $e->getMessage());

}

