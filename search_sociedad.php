<?php
  include "connect.php";
  $keywordfromform = $_GET["keyword"];

  $sql     = "SELECT SociedadNombre FROM Sociedad WHERE SociedadID LIKE '%" . $keywordfromform . "%'";
  $result  = $mysqli->query($sql);

  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Nombre de la sociedad: " . $row["SociedadNombre"]. "<br>";
  }
} else {
  echo "0 results";
}

 ?>
