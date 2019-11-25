<?php 


$name = $_POST['nombre'];
$email = $_POST['email'];
$sector = $_POST['sector'];
$comentario = $_POST['comentarios'];
$estadoCivil = $_POST['estado'];

$mensaje = "
<strong> Nombre: </strong>  $nombre <br /> <br />
<strong> Email: </strong>  $email <br /> <br />
<strong> Sector: </strong>  $sector <br /> <br />
<strong> Comentario: </strong>  $comentario <br /> <br />
<strong> EstadoCivil: </strong>  $estado <br /> <br />
";

mail("ivanreimer1@gmail.com", "Consulta Web", $mensaje, "From: $nombre <$mail>\nReply-To:$mail\nContent-Type: text/html; charset=utf-8\n");


header("Location: http://");



?>
 ?>