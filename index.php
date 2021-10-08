<?php
    include 'menu.php';
?>

<html lang="en">

<head>
    <title>Sistema - Budget</title>

</head>

<body id="page-top">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>PDF</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!--Budget Total-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total do Budget
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <!--Count Budget-->
                                                <?php
                                                    include 'conexao/conexao.php';
                                                    $sql = "SELECT SUM(valor_sup) as totalbudget FROM suprimento";          
                                                    $busca = mysqli_query($conexao, $sql);                              
                                                    $dados = mysqli_fetch_array($busca);
                                                    $totalbudget = $dados['totalbudget'];
                                                ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">R$ <?php echo number_format($totalbudget,2, ',', '.')?></div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-funnel-dollar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Despesas Total-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total das Despesas
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <!--Count Budget-->
                                                <?php
                                                    include 'conexao/conexao.php';
                                                    $sql = "SELECT SUM(valor_fatura) as totaldespesas FROM fatura";          
                                                    $busca = mysqli_query($conexao, $sql);                              
                                                    $dados = mysqli_fetch_array($busca);
                                                    $totaldespesas = $dados['totaldespesas'];
                                                ?>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">R$ <?php echo number_format($totaldespesas,2, ',', '.')?></div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-coins fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Diferença -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Diferença
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$ 
                                                <?php
                                                        include 'conexao/conexao.php';
                                                        $sql3 = "SELECT SUM(valor_fatura) as tdespesas FROM fatura";          
                                                        $busca3 = mysqli_query($conexao, $sql3);                              
                                                        $dados3 = mysqli_fetch_array($busca3);
                                                        $tdespesas = $dados3['tdespesas'];

                                                        $sql4 = "SELECT SUM(valor_sup) as tbudget FROM suprimento";          
                                                        $busca4 = mysqli_query($conexao, $sql4);                              
                                                        $dados4 = mysqli_fetch_array($busca4);
                                                        $tbudget = $dados4['tbudget'];

                                                        $diferenca = ($tbudget - $tdespesas);

                                                        echo number_format($diferenca,2, ',', '.');
                                                            
                                                              
                                                ?>            
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Barra de Progresso -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Status
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                        <!--Conta para porcentagem do progresso da despesa vs budget-->
                                                        <?php
                                                            include 'conexao/conexao.php';
                                                            $sql = "SELECT SUM(valor_fatura) as totdespesas FROM fatura";          
                                                            $busca = mysqli_query($conexao, $sql);                              
                                                            $dados = mysqli_fetch_array($busca);
                                                            $totdespesas = $dados['totdespesas'];

                                                            $sql2 = "SELECT SUM(valor_sup) as totbudget FROM suprimento";          
                                                            $busca2 = mysqli_query($conexao, $sql2);                              
                                                            $dados2 = mysqli_fetch_array($busca2);
                                                            $totbudget = $dados2['totbudget'];

                                                            $width = (($totdespesas/$totbudget)*100);

                                                            echo '<span class="float-right">'.number_format($width,2, ',', '.').' %</span>';
                                                            
                                                            echo'<div class="progress progress-sm mr-2">
                                                                    <div class="progress-bar bg-info" role="progressbar" style="width: '.number_format($width,2, ',', '.').'" aria-valuenow="'.number_format($width,2, ',', '.').'" aria-valuemin="0" aria-valuemax="'.$totbudget.'"></div>
                                                                </div>'; 
                                                        ?>                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-piggy-bank fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Gráfico Mensal</h6>
                                </div>
                                <?php
                                    include 'grafico_mensal.php';
                                ?>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Centro de Custos</h6>
                                </div>

                                <!-- Card Body -->
                                <?php
                                    include 'grafico_centro_custo.php';
                                ?>

                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Gráfico das Empresas</h6>
                                </div>
                                <?php
                                    include 'grafico_gasto_empresa.php';
                                ?>
                            </div>
                        </div>


                        <!-- Table -->
                        <div class="row">
                            <div class="col">
                                    <div class="card-header border-1">
                                        <h3 class="mb-0">Tabela dos Gastos</h3> 
                                    </div>
                                    <!-- DataTales -->
                                    <?php include 'tabela_gastos.php';?>
                                </div>
                            </div>
                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->
                </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Etesco 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
