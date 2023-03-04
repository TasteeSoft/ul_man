<?php
  $pdo = new PDO("mysql:host=localhost;dbname=mydb","root","");

$nachname = $_POST["nachname"];
//Wegen String mit "'"
//Mit % -> zeigt alle Datensätze an, die es im namen tragen
$nachname = "'%" . $nachname ."%'";
//warum bei || Reihenfolge wichtig ist
$sql = "SELECT * FROM users WHERE vorname || nachname LIKE " .$nachname;

echo $sql;

foreach ($pdo->query($sql) as $row) {
    echo $row["email"] . "<br>";
    echo $row["vorname"] . "<br>";
    echo $row["nachname"] . "<br>";
  }

  ?>