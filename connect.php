<?php

  $host = "localhost";
  $username = "eduardo";
  $userpass = "lalitosan";
  $databaseinuse = "promax";

  $mysqli = new mysqli($host, $username, $userpass, $databaseinuse);
  if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  //  echo $mysqli->host_info . "\n";

?>
