<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8">
                <div class="card card-raised shadow-10 mt-5 mt-xl-10 mb-4">
                    <div class="card-body p-5">
                        <?php 
                            if(!isset($_GET['id']))
                            {
                                switch($_GET['id'])
                                {
                                    case 1:?>
                                        <div class="alert alert-dark" role="alert">
                                            Sua senha está errada.Tente novamente.
                                        </div>
                                <?php   break;
                                    
                                    case 2:?>
                                        <div class="alert alert-danger" role="alert">
                                            Usuário não cadastrado
                                        </div>
                                <?php   break;
                                }
                            }
                        ?>

                        <!-- Formulario de login-->
                        <form class="user" action="verifica_usuario.php" method="post">
                            <div class="form-group">
                                <label>Login</label>
                                <input name="usuario" type="text" class="form-control form-control-user"id="exampleInputEmail" aria-describedby="emailHelp"placeholder="E-mail">
                            </div>
                            
                            <div class="form-group">
                                <label>Senha</label>
                                <input name ="usuario_senha" type="password" class="form-control form-control-user"id="exampleInputPassword" placeholder="Senha">
                            </div>
                            
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Continuar Conectado</label>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </div>
                        
                        </form>
                        <!-- Fim do formulario de login-->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>