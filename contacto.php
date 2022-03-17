<?php
  $destino="contacto@stoneagebarberia.cl";
  $nombre=$_POST["nombre"];
  $email=$_POST["correo"];
  $asunto=$_POST["asunto"];
  $mensaje=$_POST["mensaje"];

  $contenido = "nombre: " . $nombre . "\n correo: " . $email . "\n asunto: " . $asunto . "\n mensaje: " . $mensaje ;

  mail($destino,"contacto", $contenido);


  echo '<script language="javascript">alert("Mensaje enviado correctamente");
		window.location.href="index.html";
		</script>';

 ?>
