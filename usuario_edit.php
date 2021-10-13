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
              <h3 class="mb-0">Atualização de Usuário</h3> 
            </div>


<!--INICIO DO FORMULARIO -->
        <div class="container" style="margin-top:10px">

        <form action = "usuario_alt.php" method ="post">
                <div class="row">
                <?php
                    include 'conexao/conexao.php';
                    echo $sql = "SELECT * FROM usuario WHERE id = $id";
                    $buscar = mysqli_query($conexao, $sql);

                    while($dados = mysqli_fetch_array($buscar))
                    {
                        $id = $dados['id'];
                        $usuario_nome = $dados['usuario_nome'];

                    }
                ?>

                    <!--nome usuario-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Usuário</label>
                                <input type="text" class="form-control form-control-alternative" value = "<?php echo $id_usuario; ?>"name="id_usuario" readonly="true">
                        </div>
                    </div>

                    <!--nome usuario-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Usuário</label>
                                <input type="text" class="form-control form-control-alternative" value = "<?php echo $usuario_nome; ?>"name="usuario_nome" readonly="true">
                        </div>
                    </div>

                    <!--senha-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="mb-0">Senha</label>
                                <input type="password" class="form-control form-control-alternative" placeholder="Minímo 8 digitos"name="usuario_senha" required="">
                        </div>
                    </div>

<!--BOTÃO -->

        <div class="card-body py-4">
            <div style= "text-align: right">
                <button type="submit" class="btn btn-primary">Atualizar</button>
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