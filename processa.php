<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nomealuno', FILTER_SANITIZE_STRING);
$curso = filter_input(INPUT_POST, 'cursoaluno', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO aluno (nomealuno, cursoaluno) VALUES ('$nome', '$curso')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:white;<br><br>'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
