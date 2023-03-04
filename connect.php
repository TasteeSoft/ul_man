<?php
  $pdo = new PDO("mysql:host=localhost;dbname=mydb","root","");
  
  $sql = "SELECT * FROM users";

  foreach ($pdo->query($sql) as $row) {
    echo $row["email"] . "<br>";
    echo $row["vorname"] . "<br>";
    echo $row["nachname"] . "<br>";
  }
  
?>