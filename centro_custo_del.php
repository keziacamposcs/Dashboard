<?php
include 'conexao/conexao.php';

if(isset($_POST['deletedata']))
{
    $id_centro_custo = $_POST['delete_id'];

    $query = "DELETE FROM centro_custo WHERE id_centro_custo='$id_centro_custo'";
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
