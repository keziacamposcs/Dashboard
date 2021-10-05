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
                <h3 class="mb-0">Atualização da Empresa</h3> 
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px" style= "text-align: center">
            <form action="dash/centro_custo_cad.php" method ="get">
                <div class="col-md-6">
                    <?php

                        include 'conexao/conexao.php';

                        $sql = "UPDATE empresa SET empresa_mail = '$empresa_mail' WHERE id_empresa = $id_empresa";
                        $buscar = mysqli_query($conexao, $sql);
        

                        //$sql = "INSERT INTO centro_custo(centro_custo) VALUES (centro_custo)";
                    ?>

                    <!--Nome da Empresa-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0"> Nome da empresa</label>
                                <input type="text" class="form-control form-control-alternative"name="empresa_nome" required=""value="<?php echo $empresa_nome?>" name="empresa_nome" readonly="readonly">
                        </div>
                    </div>

                    <!--EMAIL-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">E-mail da empresa</label>
                                <input type="text" class="form-control form-control-alternative" placeholder="E-mail" name="empresa_mail" required=""value="<?php echo $empresa_mail?>" name="empresa_mail">
                        </div>
                    </div>
<!--BOTÃO -->
                    <div class="card-body py-4">
                        <div style= "text-align: right">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
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