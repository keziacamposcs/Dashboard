<?php
    include 'menu.php';


    $empresa_fatura = $_GET['empresa_fatura'];
    $mes_fatura= $_GET['mes_fatura'];
    $valor_fatura = $_GET['valor_fatura'];
    $centro_custo_fatura = $_GET['centro_custo_fatura'];
    $obs_fatura = $_GET['obs_fatura'];

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
                $sql = "INSERT INTO fatura (empresa_fatura, mes_fatura, valor_fatura, centro_custo_fatura, obs_fatura) VALUES ('$empresa_fatura', '$mes_fatura', '$valor_fatura', '$centro_custo_fatura', '$obs_fatura')";
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