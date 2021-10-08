<?php
    include 'menu.php';

    $empresa_nome = $_GET['empresa_nome'];
    $empresa_cnpj = $_GET['empresa_cnpj'];
    $empresa_mail = $_GET['empresa_mail'];
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
                <h3 class="mb-0">Cadastro da Empresa</h3> 
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px" style= "text-align: center">
            <?php

                include 'conexao/conexao.php';
                $sql = "INSERT INTO empresa (empresa_nome, empresa_cnpj, empresa_mail) VALUES ('$empresa_nome', '$empresa_cnpj', '$empresa_mail')";
                $inserir = mysqli_query($conexao, $sql);
                $teste = mysqli_fetch_array($conexao);


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

<!--BOTÃO VOLTAR-->
        <div class="card-body py-4">
            <div style= "text-align: right">
                <button class="btn btn-primary"  onclick="history.go(-1);">Voltar</button>
            </div>
        </div>
<!-- FIM BOTÃO -->

        </div>

        </div>
      </div>
    </div>  

</div>

</body>
</html>