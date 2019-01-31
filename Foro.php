<?php
include 'connect.php';

$fecha = "Enero 30, 2019";
$usuario = $_POST['usuario'];
$comentario = $_POST['comentario'];

if($_POST['option'] == 'comentario'){
	$tema = $_POST['tema'];
	$sqlCom = "INSERT INTO foro_comentarios (id, fecha, usuario, tema, comentario) VALUES (NULL,'$fecha','$usuario','$tema','$comentario')";
	$conn ->query($sqlCom);
	$conn ->close();
}else{
	$id_comentario = $_POST['option'];
	$sqlRes = "INSERT INTO foro_respuestas (id, id_comentario, fecha, usuario, comentario) VALUES (NULL,'$id_comentario','$fecha','$usuario','$comentario')";
	$conn ->query($sqlRes);
	$conn ->close();
}

header("Location: Pantalla_foro.php");
?>