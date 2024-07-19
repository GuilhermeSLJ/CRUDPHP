<?php 
Echo "Tamo no banco";

 class DatabaseConnection {

      public function getConnection(): mysqli {
      $severname = "localhost";
      $username = "root";
      $password = "";
      $dbname = "usuario";
      
      return $conn = new mysqli($severname, $username,$password, $dbname);

      if(!$conn){
        echo "Deu certo";
      }
      else{
        echo "Deu ruim";
      }

  }
}


?>