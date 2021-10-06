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
                    <h3 class="mb-0">Lista das Faturas</h3> 
                </div>
                   <!-- DataTales Example -->
                   <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                            <th>ID</th>
                                            <th>Empresa</th>
                                            <th>Mês</th>
                                            <th>Centro de Custo</th>
                                            <th>Valor</th>
                                            <th>Observação</th>

                                            <th>Ação</th>
                                    </thead>

                                            <?php
                                                include 'conexao/conexao.php';
                                                $sql = 'SELECT *  FROM fatura';
                                                $buscar = mysqli_query($conexao, $sql);

                                            
                                                while ($dados = mysqli_fetch_array($buscar)){
                                                    $id_fatura = $dados['id_fatura'];
                                                    $empresa_fatura = $dados['empresa_fatura'];
                                                    $mes_fatura = $dados['mes_fatura'];
                                                    $centro_custo_fatura = $dados['centro_custo_fatura'];
                                                    $valor_fatura = $dados['valor_fatura'];
                                                    $obs_fatura = $dados['obs_fatura'];

                                                ?>

                                                <tr>
                                                    <td><?php echo $id_fatura ?></td>
                                                    <td><?php echo $empresa_fatura ?></td>
                                                    <td><?php echo $mes_fatura ?></td>
                                                    <td><?php echo $centro_custo_fatura ?></td>
                                                    <td><?php echo number_format($valor_fatura,2, ',', '.')?></td>
                                                    <td><?php echo $obs_fatura ?></td>
                                                    <td><a href = "fatura_alt.php?id=<?php echo $id_fatura?>" role=button class="btn btn-primary">Editar</td>
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