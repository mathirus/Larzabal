<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	
<?php
$destino= "hernan@tucontadorpublico.com.ar";
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$consulta = $_POST['consulta'];
$asunto = "Has recibido una nueva consulta";
$contenido = "Nombre: " .$nombre ."<br>correo: " . $email . "<br>telefono: " . $telefono . "Ha escrito: " . $consulta;



$enviarmail=mail($destino,$asunto,$contenido);




if($enviarmail==true){
echo "Gracias por su consulta ".$nombre." nos estaremos comunicando a la brevedad";}else{
 echo "Hubo un error"; };




?>

</body>
</html>
