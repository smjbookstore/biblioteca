<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
                <link href="../css/import_fonts.css" rel="stylesheet" type="text/css" media="all" />
                <link rel="stylesheet" type="text/css" href="../css/estiloindex.css">
    
		<title>Cadastrar</title>		
	</head>
	<body>
		<h1>Cadastrar Aluno</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
                 
        
        ?>
        
            
                <a href="home.php"><img class="homim" src="../img/homin.png"></a>
        <div class="login">
		<form method="POST" action="processa.php">
			<label>Nome: </label>
                        <input type="text" name="nomealuno" placeholder="nome do aluno" > <br><br>
			
			<label>curso: </label>
                        <input type="text" name="cursoaluno" placeholder="curso do aluno" ><br><br>
			
                        <br><br><br><input type="submit" value="FINALIZAR">
		</form>
	</body>
</html>