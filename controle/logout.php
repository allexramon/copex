<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
</html>

<?php
	session_start(); //iniciamos a sessão que foi aberta
	session_destroy(); //pei!!! destruimos a sessão ;) 
	session_unset(); //limpamos as variaveis globais das sessões	
	echo "<script>alert('Você saiu!'); top.location.href='../login.php';</script>";
function logount(){
	

}

function progresso(){

}
	
?>