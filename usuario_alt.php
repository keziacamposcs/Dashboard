<?php
include 'menu.php'
$usuario_nome= $_POST['usuario_senha'];
$usuario_senha= $_POST['usuario_senha'];
$usuario_nivel= $_POST['usuario_senha'];

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
              <h3 class="mb-0">Cadastro de Usuários</h3>
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px" style= "text-align: center">
            <?php

                include 'conexao/conexao.php';

                $atualizar  = "UPDATE usuario SET usuario_senha = '$usuario_senha' WHERE id_usuario = $id_usuario";
                $query  = mysqli_query($conexao, $atualizar);


                $sql = "INSERT INTO usuario (usuario_nome, usuario_senha, usuario_nivel) VALUES ('$usuario_nome', '$usuario_senha', '$usuario_nivel')";
                $inserir = mysqli_query($conexao, $sql);
                $teste = mysqli_fetch_array($conexao);

                if($teste == 1 ){
                ?>


                    <div class="container"  style= "text-align: center">
                        <h4>Atualizado com sucesso! </h4>
                    </div>
                <?php   } else {?>

                    <div class="container"  style= "text-align: center">
                        <h4>Falha ao atualizar!</h4>
                    </div>
                
                <?php   }
                ?> 

        </div>

        </div>
      </div>
    </div>  


</div>

<?php   include 'rodape.php'; ?>

</body>
</html>
