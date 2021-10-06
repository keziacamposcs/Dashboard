<?php
include 'menu.php'
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
              <h3 class="mb-0">Cadastro de Budget</h3>
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px">

        <form action = "budget_inserir.php" method ="get">
                <div class="row">

                    <!--NOME DO BUDGET -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Nome do Suprimento</label>
                                <input type="text" class="form-control form-control-alternative"  name="suprimento" required="" autocomplete="off">
                        </div>
                    </div>


                    <!--VALOR DO BUDGET -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Valor do Suprimento</label>
                                <input type="number" class="form-control form-control-alternative"  name="valor_sup" required="" autocomplete="off">
                        </div>
                    </div>

                    <!--SELECIONA A EMPRESA DA FATURA -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Empresa n°1</label>

                            <select class="form-control" name = "empresa_sup1">
                            <!--PHP -->
                            <?php
                                    include 'conexao/conexao.php';
                                    $sql = 'SELECT *  FROM empresa';
                                    $buscar = mysqli_query($conexao, $sql);

                                   
                                    while ($dados = mysqli_fetch_array($buscar))
                                    {
                                        $empresa_nome = $dados['empresa_nome'];
                            ?>

                            <option value="<?php echo $empresa_nome  ?>"    ><?php  echo $empresa_nome  ?></option>

                            <?php
                                }
                            ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label class="mb-0">Empresa n°2</label>

                            <select class="form-control" name = "empresa_sup2">
                            <!--PHP -->
                            <?php
                                    include 'conexao/conexao.php';
                                    $sql = 'SELECT *  FROM empresa';
                                    $buscar = mysqli_query($conexao, $sql);

                                   
                                    while ($dados = mysqli_fetch_array($buscar))
                                    {
                                        $empresa_nome = $dados['empresa_nome'];
                            ?>

                            <option value="<?php echo $empresa_nome  ?>"    ><?php  echo $empresa_nome  ?></option>

                            <?php
                                }
                            ?>

                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Empresa n°3</label>

                            <select class="form-control" name = "empresa_sup3">
                            <!--PHP -->
                            <?php
                                    include 'conexao/conexao.php';
                                    $sql = 'SELECT *  FROM empresa';
                                    $buscar = mysqli_query($conexao, $sql);

                                   
                                    while ($dados = mysqli_fetch_array($buscar))
                                    {
                                        $empresa_nome = $dados['empresa_nome'];
                            ?>

                            <option value="<?php echo $empresa_nome  ?>"    ><?php  echo $empresa_nome  ?></option>

                            <?php
                                }
                            ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label class="mb-0">Empresa n°4</label>

                            <select class="form-control" name = "empresa_sup4">
                            <!--PHP -->
                            <?php
                                    include 'conexao/conexao.php';
                                    $sql = 'SELECT *  FROM empresa';
                                    $buscar = mysqli_query($conexao, $sql);

                                   
                                    while ($dados = mysqli_fetch_array($buscar))
                                    {
                                        $empresa_nome = $dados['empresa_nome'];
                            ?>

                            <option value="<?php echo $empresa_nome  ?>"    ><?php  echo $empresa_nome  ?></option>

                            <?php
                                }
                            ?>

                            </select>
                        </div>
                    </div>

                   
                    

                </div>



<!--BOTÃO -->

        <div class="card-body py-4">
            <div style= "text-align: right">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>

<!-- FIM BOTÃO -->


            </form>
        </div>

        

        </div>
      </div>
    </div>  


</div>









<!--JAVA SCRIPT -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

<!--FIM JAVA SCRIPT -->


</body>
</html>