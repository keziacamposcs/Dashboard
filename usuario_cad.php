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
              <h3 class="mb-0">Cadastro de Usuário</h3> 
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px">

        <form action = "usuario_inserir.php" method ="get">

                <div class="row">


                    <!--nome usuario-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Usuário</label>
                                <input type="text" class="form-control form-control-alternative" placeholder="Nome do Usuário" name="usuario" required="">
                        </div>
                    </div>

                    <!--senha-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Senha</label>
                                <input type="password" class="form-control form-control-alternative" placeholder="Minímo 8 digitos" name="usuario_senha" required="">
                        </div>
                    </div>

                    <!--nivel-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Nível do usuario</label>

                            <select class="form-control" name = "usuario_nivel">
                            <option selected>Selecione o nível do usuario</option>
                            <option value = "Administrador">Administrador</option>
                            <option value = "Visitante">Visitante</option>
                            </select>

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