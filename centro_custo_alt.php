<?php
    include 'menu.php';

    $centro_custo = $_GET['centro_custo'];

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
                <h3 class="mb-0">Cadastro do Centro de Custo</h3> 
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px" style= "text-align: center">
            <form action="dash/centro_custo_cad.php" method ="get">
                <div class="col-md-6">
                    <?php

                        include 'conexao/conexao.php';

                        $sql = "UPDATE centro_custo SET centro_custo = '$centro_custo' WHERE id_centro_custo = $id_centro_custo";
                        $buscar = mysqli_query($conexao, $sql);
        

                        //$sql = "INSERT INTO centro_custo(centro_custo) VALUES (centro_custo)";
                    ?>

                <div class="form-group">
                    <label>
                        Atualização do Centro de Custo
                    </label>

                    <input type="text" placeholder="Centro de custo" class="form-control form-control-alternative" value="<?php echo $centro_custo?>" name="centro_custo">
                </div>

<!--BOTÃO -->
                    <div class="card-body py-4">
                        <div style= "text-align: right">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
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