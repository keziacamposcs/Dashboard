<?php

    include 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Atualizar </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="usuario_alt.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">
                        
                        <div class="form-group">
                            <label> Usuário </label>
                            <input type="text" name="empresa_nome" id="empresa_nome" class="form-control"
                                placeholder="Usuário">
                        </div>
                        <div class="form-group">
                            <label> CNPJ </label>
                            <input type="text" name="empresa_cnpj" id="empresa_cnpj" class="form-control"
                                placeholder="Usuário">
                        </div>
                        <div class="form-group">
                            <label> E-mail </label>
                            <input type="text" name="empresa_mail" id="empresa_mail" class="form-control"
                                placeholder="Usuário">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Atualizar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Deletar? </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="usuario_del.php" method="POST">
                    <input type="hidden" name="delete_id" id="delete_id">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> Não </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Sim </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="container-fluid mt--7 " style= "top">
      <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-1">
                        <h3 class="mb-0">Empresas</h3> 
                    </div>

                    <div class="container" style="margin-top:10px">

                        <?php
                            include 'conexao/conexao.php';

                            $query = "SELECT * FROM empresa";
                            $query_run = mysqli_query($conexao, $query);
                        ?>
                        
                        <table id="datatableid" class="table table-hover table">
                        
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"> ID</th>
                                    <th scope="col">Empresa</th>
                                    <th scope="col">CNPJ</th>
                                    <th scope="col"> E-mail </th>
                                    <th scope="col">  </th>
                                    <th scope="col">  </th>
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
                                    <td> <?php echo $row['id_empresa']; ?> </td>
                                    <td> <?php echo $row['empresa_nome']; ?> </td>
                                    <td> <?php echo $row['empresa_cnpj']; ?> </td>
                                    <td> <?php echo $row['empresa_mail']; ?> </td>
                                    <td>
                                        <button type="button" class="btn btn-success editbtn"> Editar </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger deletebtn"> Deletar </button>
                                    </td>
                                </tr>
                            </tbody>
                            <?php           
                                    }
                                }
                                else 
                                {
                                    echo "No Record Found";
                                }
                            ?>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        </div>
    </div>
    <?php include 'rodape.php'; ?>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {
                $('#viewmodal').modal('show');
                $.ajax({ //create an ajax request to display.php
                    type: "GET",
                    url: "display.php",
                    dataType: "html", //expect html to be returned                
                    success: function (response) {
                        $("#responsecontainer").html(response);
                        //alert(response);
                    }
                });
            });

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#empresa_nome').val(data[1]);
                $('#empresa_cnpj').val(data[2]);
                $('#empresa_mail').val(data[3]);
            });
        });
    </script>

</body>
</html>
