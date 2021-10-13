<?php
    include 'menu.php';
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	$id_usuario = $_POST['id_usuario'];
    $usuario_senha= $_POST['usuario_senha'];
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div class="container-fluid mt--7 " style= "top">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-1">
              <h3 class="mb-0">Atualização do Usuário</h3>
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px" style= "text-align: center">
            <?php

            include 'conexao/conexao.php';

			echo	$sql = "UPDATE usuario SET usuario_senha = '$usuario_senha' WHERE id = '$id'";
			$atualizar = mysqli_query($conexao, $sql);


                if($sql )
                        {
                    ?>


                    <div class="container"  style= "text-align: center">
                        <h4>Atualização realizada com sucesso!</h4>
                    </div>
                <?php
                        }
                    else 
                        {
                ?>

                    <div class="container"  style= "text-align: center">
                        <h4>Falha ao atualizar!</h4>
                    </div>

                <?php
                    }
                ?> 

        </div>

        </div>
      </div>
    </div>  

</div>

</body>
</html> 