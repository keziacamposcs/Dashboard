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
                    <h3 class="mb-0">Cadastro do Centro de Custo</h3> 
                </div>
                   <!-- DataTales Example -->
                   <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                            <th>ID Centro de Custo</th>
                                            <th>Centro de Custo</th>
                                            <th>Ação</th>
                                    </thead>

                                            <?php
                                                include 'conexao/conexao.php';
                                                $sql = 'SELECT *  FROM centro_custo';
                                                $buscar = mysqli_query($conexao, $sql);

                                            
                                                while ($dados = mysqli_fetch_array($buscar)){
                                                    $id_centro_custo = $dados['id_centro_custo'];
                                                    $centro_custo = $dados['centro_custo'];
                                                ?>

                                                <tr>
                                                    <td><?php echo $id_centro_custo ?></td>
                                                    <td><?php echo $centro_custo ?></td>
                                                    <td><a href = "centro_custo_alt.php?id=<?php echo $id_centro_custo?>" role=button class="btn btn-primary">Editar<td>
                                                </tr>

                                            <?php   }   ?>

                                </table>
                            </div>
                        </div>
                    </div>



				</div>
            </div>
        </div>
    </div>  
</div>

</body>
</html>