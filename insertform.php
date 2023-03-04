<?php
  $pdo = new PDO("mysql:host=localhost;dbname=mydb","root","");

  $sql = "INSERT INTO users(idusers, email, vorname, nachname, anrede) VALUES (?,?,?,?,?)";

  $idusers = $_POST["idusers"];
  $email = $_POST["email"];
  $vorname = $_POST["vorname"];
  $nachname = $_POST["nachname"];
  $anrede = $_POST["anrede"];

  $statement = $pdo->prepare($sql);
  $statement->execute(array($idusers, $email, $vorname, $nachname, $anrede));

  ?>