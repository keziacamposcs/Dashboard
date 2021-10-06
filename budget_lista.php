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
                    <h3 class="mb-0">Lista dos Suprimentos</h3> 
                </div>
                   <!-- DataTales -->
                   <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                            <th>ID</th>
                                            <th>Suprimento</th>
                                            <th>Empresa 1</th>
                                            <th>Empresa 2</th>
                                            <th>Empresa 3</th>
                                            <th>Empresa 4</th>
                                            <th>Valor</th>
                                            <th>Ação</th>
                                    </thead>

                                            <?php
                                                include 'conexao/conexao.php';
                                                $sql = 'SELECT *  FROM suprimento';
                                                $buscar = mysqli_query($conexao, $sql);

                                            
                                                while ($dados = mysqli_fetch_array($buscar)){
                                                    $id_suprimento = $dados['id_suprimento'];
                                                    $suprimento = $dados['suprimento'];

                                                    $empresa_sup1 = $dados['empresa_sup1'];
                                                    $empresa_sup2 = $dados['empresa_sup2'];
                                                    $empresa_sup3 = $dados['empresa_sup3'];
                                                    $empresa_sup4 = $dados['empresa_sup4'];

                                                    $valor_sup = $dados['valor_sup'];

                                                ?>

                                                <tr>
                                                    <td><?php echo $id_suprimento ?></td>
                                                    <td><?php echo $suprimento ?></td>
                                                    <td><?php echo $empresa_sup1 ?></td>
                                                    <td><?php echo $empresa_sup2 ?></td>
                                                    <td><?php echo $empresa_sup3 ?></td>
                                                    <td><?php echo $empresa_sup4 ?></td>
                                                    <td><?php echo number_format($valor_sup,2, ',', '.')?></td>
                                                    <td><a href = "budget_alt.php?id=<?php echo $id_suprimento?>" role=button class="btn btn-primary">Editar</td>
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