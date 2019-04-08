<?php
session_start();
include_once ("conexao.php");
?>

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
<body>
    <h1>listar aluno</h1>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NOME</td>
            <td>CURSO</td>
            <td>EDITAR</td>
            <td>DELETAR</td>
        </tr>
    <?php
            
             if(isset($_SESSION['msg'])){
             echo $_SESSION['msg'];
             unset ($_SESSION['msg']);
             }
             
           $result_usuario = "SELECT * FROM aluno";
           $resultado_usuario = mysqli_query($conn, $result_usuario);
           while ($row_aluno = mysqli_fetch_assoc($resultado_usuario)) {
               ?>
              <tr>
                  <td> <?php echo $row_aluno['idaluno'];?> </td>
                  <td> <?php echo $row_aluno['nomealuno'];?></td>
                  <td> <?php echo $row_aluno['cursoaluno'];?></td>
                  <td> <?php echo "<a href='edit_aluno.php?idaluno=" . $row_aluno['idaluno'] ."'>Editar</a>";?></td>
                  <td> <?php echo "<a href='proc_apaga_aluno.php?idaluno=" . $row_aluno['idaluno'] ."'>Deletar</a>";?></td>
                  </tr>
		<?php
           }
                ?>

       
   </table>
</body>
</html>