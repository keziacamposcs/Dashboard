<?php
include 'conexao/conexao.php';

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $usuario = $_POST['usuario'];
        $usuario_senha = $_POST['usuario_senha'];
        $usuario_nivel = $_POST['usuario_nivel'];


        $query = "UPDATE usuario SET usuario='$usuario', usuario_senha='$usuario_senha', usuario_nivel='$usuario_nivel' WHERE id='$id'  ";
        $query_run = mysqli_query($conexao, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
