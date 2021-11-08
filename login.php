<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                       <!-- Nested Row within Card Body -->
                            <div class="col-lg-5 col-md-7"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                      <form role="form" action="verificar_usuario.php" method="post">
                                        <?php
                                          if(isset($_GET['id']))
                                          {
                                            switch($_GET['id'])
                                            {
                                              case 1:?>
                                                <div class="alert alert-dark" role="alert"> Senha errada! </div>
                                              <?php 
                                              break;

                                              case 2:?>
                                                <div class="alert alert-danger" role="alert"> Seu usuário não está cadastrado. </div>
                                              <?php
                                              break;
                                            }
                                          }

                                        ?>
                                        <div class="form-group mb-3">
                                          <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Usuário" type="text" name="usuario" autocomplete="off" autofocus="on">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Senha" type="password" name="senha">
                                          </div>
                                        </div>
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                          <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                          
                                        </div>
                                        <div class="text-center">
                                          <button type="submit" class="btn btn-primary my-4">Entrar</button>
                                        </div>
                                      </form>

                                </div>
                            </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>