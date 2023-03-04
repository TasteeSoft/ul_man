<?php
  $pdo = new PDO("mysql:host=localhost;dbname=mydb","root","");

  $sql = "INSERT INTO users(idusers, email, vorname, nachname, anrede) VALUES (?,?,?,?,?)";

  $idusers = 4;
  $email = "ferdinand@fuchs.at";
  $vorname = "ferdinand";
  $nachname = "fuchs";
  $anrede = "Herr";

  $statement = $pdo->prepare($sql);
  $statement->execute(array($idusers, $email, $vorname, $nachname, $anrede));

  ?>