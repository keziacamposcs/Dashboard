<?php
include 'conexao/conexao.php';

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM usuario WHERE id='$id'";
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
