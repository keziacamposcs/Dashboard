<?php
include 'conexao/conexao.php';

if(isset($_POST['deletedata']))
{
    $id_empresa = $_POST['delete_id'];

    $query = "DELETE FROM empresa WHERE id_empresa='$id_empresa'";
    $query_run = mysqli_query($conexao, $query);

    if($query_run)
    {
        echo '<script> alert("Deletado!"); </script>';
        header("Location:index.php");
    }
    else
    {
        echo '<script> alert("Falha ao deletar!"); </script>';
    }
}

?>
