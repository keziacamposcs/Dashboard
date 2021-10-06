<?php
    include 'menu.php';
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
                    <h3 class="mb-0">Atualização do Centro de Custo</h3> 
                </div>


                <!--INICIO DO FORMULARIO -->
                <div class="container" style="margin-top:10px">
                    <form action = "centro_custo_inserir.php" method ="get">
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                    include "conexao/conexao.php";
                                    $sql = "SELECT * FROM centro_custo where id_centro_custo = $id_centro_custo";
                                    $buscar = mysqli_query($conexao, $sql);
                                    while($dados = mysqli_fetch_array($buscar))
                                    {
                                        $id_centro_custo = $dados['id_centro_custo'];                                   
                                    }
                                ?>
            
                                <!--ID CENTRO DE CUSTO -->
                                <div class="form-group">
                                    <label class="mb-0">ID Centro de Custo</label>
                                        <input type="text" class="form-control form-control-alternative" value="<?php echo $id_centro_custo?>" name="id_centro_custo" readonly>
                                </div>

                                <!--CENTRO DE CUSTO -->
                                <div class="form-group">
                                    <label class="mb-0">Centro de Custo</label>
                                        <input type="text" class="form-control form-control-alternative" placeholder="Centro de Custo" name="centro_custo" required="">
                                </div>
                            </div>
                        </div>



                        <!--BOTÃO -->
                        <div class="card-body py-4">
                            <div style= "text-align: right">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
                            </div>
                        </div>
                        <!-- FIM BOTÃO -->



                    </form>
                </div>
            </div>
        </div>
    </div>  
</div>

</body>
</html>