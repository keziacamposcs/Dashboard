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
                                                $sql = 'SELECT *  FROM empresa';
                                                $buscar = mysqli_query($conexao, $sql);

                                            
                                                while ($dados = mysqli_fetch_array($buscar)){
                                                    $id_empresa = $dados['id_empresa'];
                                                    $empresa_nome = $dados['empresa_nome'];
                                                    $empresa_cnpj = $dados['empresa_cnpj'];
                                                    $empresa_mail = $dados['empresa_mail'];

                                                ?>

                                                <tr>
                                                    <td><?php echo $id_empresa ?></td>
                                                    <td><?php echo $empresa_nome ?></td>
                                                    <td><?php echo $empresa_cnpj ?></td>
                                                    <td><?php echo $empresa_mail ?></td>
                                                    <td><a href = "empresa_alt.php?id=<?php echo $id_empresa?>" role=button class="btn btn-primary">Editar<td>
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