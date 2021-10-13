<?php
    include 'menu.php';

    $suprimento = $_GET['suprimento'];
    $empresa_sup1 = $_GET['empresa_sup1'];
    $empresa_sup2 = $_GET['empresa_sup2'];
    $empresa_sup3 = $_GET['empresa_sup3'];
    $empresa_sup4 = $_GET['empresa_sup4'];
    $valor_sup = $_GET['valor_sup'];
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
                <h3 class="mb-0">Cadastro de Budget</h3> 
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px" style= "text-align: center">
            <?php

                include 'conexao/conexao.php';
                $sql = "INSERT INTO suprimento (suprimento, empresa_sup1, empresa_sup2, empresa_sup3, empresa_sup4, valor_sup ) VALUES ('$suprimento', '$empresa_sup1', '$empresa_sup2', '$empresa_sup3', '$empresa_sup4', '$valor_sup')";
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