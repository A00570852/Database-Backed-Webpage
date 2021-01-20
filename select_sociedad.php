<?php

$sql = "SELECT * FROM Sociedad";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
  echo "SociedadID: " . $row["SociedadID"]. " - SociedadNombre: " . $row["SociedadNombre"]. "<br>";
}
} else {
echo "0 results";
}

?>
