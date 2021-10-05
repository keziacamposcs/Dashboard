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
              <h3 class="mb-0">Cadastro da empresa</h3> 
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px">

        <form action = "empresa_inserir.php" method ="get">

                <div class="row">


                    <!--EMPRESA-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Nome da empresa</label>
                                <input type="text" class="form-control form-control-alternative" placeholder="Nome da Empresa" name="empresa_nome" required="">
                        </div>
                    </div>

                    <!--CNPJ-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">CNPJ da empresa</label>
                                <input type="text" class="form-control form-control-alternative" placeholder="CNPJ" name="empresa_cnpj" required="">
                        </div>
                    </div>

                    <!--EMAIL-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">E-mail da empresa</label>
                                <input type="text" class="form-control form-control-alternative" placeholder="E-mail" name="empresa_mail" required="">
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