<?php
    include 'menu.php';

    $id = $_GET['id'];
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

        <form action = "usuario_alt.php" method ="post">
                <div class="row">
                <?php
                    include 'conexao/conexao.php';
                    $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
                    $buscar = mysqli_query($conexao, $sql);

                    while($dados = mysqli_fetch_array($buscar))
                    {
                        $id_usuario = $dados['id_usuario'];
                        $usuario_nome = $dados['usuario_nome'];
                    }
                ?>

                    <!--senha-->
                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="mb-0">Usuario</label>
                                <input type="text" class="form-control form-control-alternative" value = "<?php echo $usuario_nome; ?>"name="usuario_nome" readonly="true">
                        </div>

                        <div class="form-group">
                            <label class="mb-0">Senha</label>
                                <input type="password" class="form-control form-control-alternative" placeholder="Minímo 8 digitos" name="usuario_senha" required="">
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