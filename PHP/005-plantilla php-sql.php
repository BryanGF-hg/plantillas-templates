<?php

  $host = "localhost";
  $user = "Usuario";
  $pass = "Contrasenya123$";
  $db   = "Bases_de_datos";

  $conexion = new mysqli($host, $user, $pass, $db);

  $sql = "SELECT * FROM Bases_de_datos";

  $resultado = $conexion->query($sql);

  while ($fila = $resultado->fetch_assoc()) {
    echo '
    	<article>
      	<h3>'.$fila['titulo'].'</h3>
        <time>'.$fila['fecha'].'</time>
        <p>'.$fila['autor'].'</p>
        <p>'.$fila['contenido'].'</p>
      </article>
    ';
  }

  $conexion->close();
  
?>
