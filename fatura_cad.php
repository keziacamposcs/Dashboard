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
              <h3 class="mb-0">Cadastro da Fatura</h3>
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px">

        <form action = "fatura_inserir.php" method ="get">

                <div class="row">


                    <!--SELECIONA A EMPRESA DA FATURA -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Empresa</label>

                            <select class="form-control" name = "empresa_fatura">
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





                    <!--MES DA DESPESA -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Mês</label>

                            <select class="form-control" name = "mes_fatura">
                            <option selected>Selecione o mês</option>
                            <option>Jan</option>
                            <option>Fev</option>
                            <option>Mar</option>
                            <option>Abr</option>
                            <option>Mai</option>
                            <option>Jun</option>
                            <option>Jul</option>
                            <option>Ago</option>
                            <option>Set</option>
                            <option>Out</option>
                            <option>Nov</option>
                            <option>Dez</option>
                            </select>
                        </div>
                    </div>

                    <!--VALOR DA DESPESA -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Valor</label>
                                <input type="numeric" class="form-control form-control-alternative"  name="valor_fatura" required="" autocomplete="off">
                        </div>
                    </div>


                    <!--SELECIONA CUSTO DESPESA-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Centro de Custo</label>

                            <select class="form-control" name = "centro_custo_fatura">
                            <!--PHP -->
                            <?php
                                    include 'conexao/conexao.php';
                                    $sql = 'SELECT *  FROM centro_custo';
                                    $buscar = mysqli_query($conexao, $sql);

                                   
                                    while ($dados = mysqli_fetch_array($buscar))
                                    {
                                        $centro_custo = $dados['centro_custo'];
                            ?>

                            <option value="<?php echo $centro_custo  ?>"    ><?php  echo $centro_custo  ?></option>

                            <?php   }       ?>

                            </select>
                        </div>
                    </div>


                   <!--OBSERVAÇÃO -->
                <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Observação</label>
                                    <textarea class="form-control" name = "obs_fatura" rows="3">
                                    </textarea>                                   
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


</body>
</html>