<?php
session_start();
include_once ("conexao.php");

$idaluno = filter_input(INPUT_GET, 'idaluno', FILTER_SANITIZE_NUMBER_INT);
if(empty($id)){
$result_usuario = "DELETE FROM aluno WHERE idaluno='$idaluno'";
mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuario apagado com sucesso</p>";
		header("Location: Listar_aluno.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuario não foi apagado com sucesso</p>";
		header("Location: Listar_aluno.php");
                
		$_SESSION['msg'] = "<p style='color:blue;'>Erro necessario selecionar um aluno</p>";
		header("Location: Listar_aluno.php");
	
}}