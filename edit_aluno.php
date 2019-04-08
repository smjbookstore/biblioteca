
<?php
session_start();
include_once 'conexao.php';
$id = filter_input(INPUT_GET, 'idaluno', FILTER_SANITIZE_NUMBER_INT);
$result_usuario= "SELECT * FROM aluno WHERE idaluno = '$id'";
$resultado_usuario= mysqli_query($conn, $result_usuario);
$row_aluno = mysqli_fetch_assoc($resultado_usuario);
?>
<html>
    <head>
        <title>editar administrador</title>
        <meta charset="utf-8">
    </head>
    <body>
        <a href="processa.php">Cadastrar</a><br>
        <a href="Listar_aluno.php">Listar</a><br>
		<h1>Editar ADM</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
                <form method="POST" action="proc_edit_aluno.php">
			<input type="hidden" name="idaluno" value="<?php echo $row_aluno['idaluno']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nomealuno" placeholder="Digite seu nome" value="<?php echo $row_aluno['nomealuno']; ?>"><br><br>
			
			<label>Curso: </label>
			<input type="text" name="cursoaluno" placeholder="Digite o seu curso" value="<?php echo $row_aluno['cursoaluno']; ?>"><br><br>
			
			<input type="submit" value="Editar">
		</form>

</html>
