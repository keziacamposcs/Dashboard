<!DOCTYPE html>
<html>

<head>
</head>

<body>
<!-- DataTales -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>Suprimento</th>
                    <th>Budget</th>
                    <th>Gasto Base</th>
                    <th>Gasto ETJ</th>
                    <th>Diferença</th>
                </thead>
                <tbody>
                    <tr>
                                                                        
                    <?php
                                                                                            
                    include 'conexao/conexao.php';

                    $sql = 'SELECT *  FROM suprimento';
                    $buscar = mysqli_query($conexao, $sql);
                    
                    $sql2 =  'SELECT `valor_fatura`FROM `fatura` WHERE `centro_custo_fatura` = "Base"';
                    $buscar2 = mysqli_query($conexao, $sql2);

                    while ($dados = mysqli_fetch_array( $buscar,  $buscar2))
                    {
                    $suprimento = $dados['suprimento'];
                    $valor_sup = $dados['valor_sup'];

                    $valor_base = $dados['valor_base'];
                    $valor_etj = $dados['valor_etj'];
                    $diferenca = $dados['diferenca'];
                    ?>
                    <td><?php echo $suprimento; ?></td>
                    <td>R$ <?php echo number_format($valor_sup,2, ',', '.');?></td>
                    <td>R$ <?php echo number_format($valor_base,2, ',', '.');?></td>
                    <td>R$ <?php echo number_format($valor_etj,2, ',', '.');?></td>
                    <td>R$ <?php echo number_format($diferenca,2, ',', '.');?></td>
                    </tr>

                    <?php   }   ?>                                     

                    </tbody>
                    </table>
        </div>
    </div>
</div>
</body>
</html>