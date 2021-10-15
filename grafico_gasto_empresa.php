<?php

include 'conexao/conexao.php';

?>

<!DOCTYPE html>
<html>

<head>
</head>

<body>
<!-- Card Body -->
<div class="card-body">

<div class="container-fluid mt--7 " style= "top">
      <!-- Table -->
        <div class="row">
            <div class="col">

                    <div class="container" style="margin-top:10px">

                        <?php
                            include 'conexao/conexao.php';

                            $query = "SELECT DISTINCT (empresa_fatura) FROM fatura";
                            $query_run = mysqli_query($conexao, $query);
                        ?>
                        
                        <table id="datatableid" class="table table-hover table">
                        
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Empresa</th>
                                    <th scope="col">Base</th>
                                    <th scope="col"> ETJ </th>
                                    <th scope="col">Total de Gastos</th>
                                </tr>
                            </thead>
                            <?php
                                if($query_run)
                                {
                                    foreach($query_run as $row)
                                    {
                            ?>
                                    <tbody>
                                        <tr>
                                            <td> <?php echo $row['empresa_fatura']; ?> </td>
                                            <td> <?php echo $row['centro_custo_fatura= Base']; ?> </td>
                                            <td> 0</td>
                                            <td> <?php echo number_format(0,2, ',', '.')?> </td>
                                        </tr>
                                    </tbody>
                            <?php           
                                    }
                                }
                                else 
                                {
                                    echo "Sem dados cadastrados";
                                }
                            ?>
                        </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</div>
                                

<?php   include'rodape.php';?>

</body>
</html>