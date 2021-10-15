<?php
include 'conexao/conexao.php';

    if(isset($_POST['updatedata']))
    {   
        $id_centro_custo = $_POST['update_id'];
        
        $centro_custo = $_POST['centro_custo'];


        $query = "UPDATE centro_custo SET centro_custo ='$centro_custo' WHERE id_centro_custo='$id_centro_custo'  ";
        $query_run = mysqli_query($conexao, $query);

        if($query_run)
        {
            echo '<script> alert("Atualizado"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Falha ao atualizar!"); </script>';
        }
    }
?>
