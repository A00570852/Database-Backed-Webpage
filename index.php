<html>
<head>

</head>

<body>

  <h1> Promax Search Engine </h1>
  <?php

  include "connect.php";
  //include "select_sociedad.php";

  ?>

  <form action="search_sociedad.php">
    Escriba la clave de la sociedad:        <br>
    <input type="text"   name  = "keyword"> <br>
    <input type="submit" value = "Submit">
  </form>

  <hr>

  <form action="add_sociedad.php">
    Introduzca el nuevo id de la sociedad:        <br>
    <input type= "int"   name  = "newsociedadid"> <br>

    Introduzca el nuevo nombre de la sociedad:            <br>
    <input type="text"   name  = "newsociedadnombre">     <br>
    <input type="submit" value = "Submit" >
  </form>

  <?php
  /*if(isset($keyword)){
    echo '<p>Keyword: '.$keyword.'</p>';
  }*/
  include "search_sociedad.php";
  $mysqli->close();

  ?>

</body>
</html>
