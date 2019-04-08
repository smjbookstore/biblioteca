<?php

session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'idaluno', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nomealuno', FILTER_SANITIZE_STRING);
$curso = filter_input(INPUT_POST, 'cursoaluno', FILTER_SANITIZE_STRING);



$result_usuario = "UPDATE aluno SET nomealuno='$nome', cursoaluno='$curso'  WHERE idaluno='$id'";
$resultado_usuario= mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuario editado com sucesso</p>";
	header("Location: edit_aluno.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuario nÃ£o foi editado com sucesso</p>";
	header("Location: edit_aluno.php?idadm=$id");
}
