<?php
  $pdo = new PDO("mysql:host=localhost;dbname=mydb","root","");
  
  $sql = "SELECT * FROM users";

//für html grundgerüst -> shift+1

    echo "<table border='1px'>";
    echo "<thead>"; //erste zeile
        echo "<tr>";    
            echo "<th>id</th>";
            echo "<th>anrede</th>";
            echo "<th>vorname</th>";
            echo "<th>nachname</th>";
            echo "<th>email</th>";
        echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
  foreach ($pdo->query($sql) as $row) {
    echo "<tr>";
    echo "<td>" . $row["idusers"] . "</td>"; //td = zelle
    echo "<td>" . $row["anrede"] . "</td>";
    echo "<td>" . $row["vorname"] . "</td>";
    echo "<td>" . $row["nachname"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
?>