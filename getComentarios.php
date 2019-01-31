<?php
header("Content-type: application/json; charset=utf-8");
if($_GET['key'] == "i30kOMB2eE4C"){
	include 'connect.php';

	$sqlCom = "SELECT * FROM foro_comentarios ORDER BY id ASC";

    mysqli_set_charset($conn, "utf8"); 
    if(!$resultCom = mysqli_query($conn, $sqlCom)) die();
    $x=0;
    while($rowCom = mysqli_fetch_assoc($resultCom))
    {
    	$id_comentario = $rowCom['id'];
    	$sqlRes = "SELECT * FROM foro_respuestas WHERE id_comentario = '$id_comentario' ORDER BY id ASC";
        $comentarios['data'][$x] = $rowCom;

        if(!$resultRes = mysqli_query($conn, $sqlRes)) die();
 			$y=0;
    		while($rowRes = mysqli_fetch_assoc($resultRes))
    		{
    			$comentarios['data'][$x]['respuestas'][$y] = $rowRes;
    			$y++;
    		}
        $x++;
    }

	echo json_encode($comentarios);
	mysqli_close($conn);
}
?>