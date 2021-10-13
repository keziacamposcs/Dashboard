<?php
    include 'menu.php';

    $usuario_nome = $_GET['usuario_nome'];
    $usuario_senha= $_GET['usuario_senha'];
    $usuario_nivel = $_GET['usuario_nivel'];
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
              <h3 class="mb-0">Cadastro de Usuário</h3>
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px" style= "text-align: center">
            <?php

                include 'conexao/conexao.php';
                $sql = "INSERT INTO usuario (usuario_nome, usuario_senha, usuario_nivel) VALUES ('$usuario_nome', '$usuario_senha', '$usuario_nivel')";
                $inserir = mysqli_query($conexao, $sql);

                if($sql )
                        {
                    ?>


                    <div class="container"  style= "text-align: center">
                        <h4>Cadastro realizado com sucesso!</h4>
                    </div>
                <?php
                        }
                    else 
                        {
                ?>

                    <div class="container"  style= "text-align: center">
                        <h4>Falha ao cadastrar!</h4>
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