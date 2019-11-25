<?php
// captura de variables
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$consulta=$_POST['consulta'];

// cuerpo del email
$mensaje="
<strong>Nombre:</strong> $nombre<br /><br />
<strong>email:</strong> $email<br /><br />
<strong>tel:</strong> $tel <br /><br /> 
<strong>consulta:</strong> $consulta<br /><br />
";

// envío del email
mail("micorreo@midominio.com", "Consulta Web", $mensaje, "From: $nombre <$mail>\nReply-To:$mail\nContent-Type: text/html; charset=utf-8\n");

header ("Location: http://");
?>
?>
