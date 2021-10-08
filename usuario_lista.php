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
                    <h3 class="mb-0">Lista de Usuários</h3> 
                </div>
                   <!-- DataTales Example -->
                   <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                            <th>ID</th>
                                            <th>Usuário</th>
                                            <th>Nível</th>

                                            <th>Ação</th>
                                    </thead>

                                            <?php
                                                include 'conexao/conexao.php';
                                                $sql = 'SELECT *  FROM usuario';
                                                $buscar = mysqli_query($conexao, $sql);

                                            
                                                while ($dados = mysqli_fetch_array($buscar)){
                                                    $id_usuario = $dados['id_usuario'];
                                                    $usuario_nome = $dados['usuario_nome'];
                                                    $usuario_nivel = $dados['usuario_nivel'];


                                                ?>

                                                <tr>
                                                    <td><?php echo $id_usuario ?></td>
                                                    <td><?php echo $usuario_nome ?></td>
                                                    <td><?php echo $usuario_nivel ?></td>
                                                    <td><a href = "usuario_edit.php?id=<?php echo $id_usuario?>" role=button class="btn btn-primary">Editar</td>
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