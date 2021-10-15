<?php
include 'conexao/conexao.php';

if(isset($_POST['deletedata']))
{
    $id_fatura = $_POST['delete_id'];

    $query = "DELETE FROM fatura WHERE id_fatura='$id_fatura'";
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
