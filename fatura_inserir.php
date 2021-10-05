<?php
    include 'menu.php';


    $fatura_empresa = $_GET['empresa_despesa'];
    $mes_despesa= $_GET['mes_despesa'];
    $valor_despesa = $_GET['valor_despesa'];
    $centro_custo_despesa = $_GET['centro_custo_despesa'];
    $despesa_obs = $_GET['despesa_obs'];

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
              <h3 class="mb-0">Cadastro da Despesa</h3>
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px" style= "text-align: center">
            <?php

                include 'conexao/conexao.php';
                $sql = "INSERT INTO despesa (empresa_despesa , mes_despesa, valor_despesa, centro_custo_despesa, despesa_obs) VALUES ('$empresa_despesa', '$mes_despesa', '$valor_despesa', '$centro_custo_despesa', '$despesa_obs')";
                $inserir = mysqli_query($conexao, $sql);

                if($sql)    
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