<?php
include 'conexao/conexao.php';

    if(isset($_POST['updatedata']))
    {   
        $id_empresa = $_POST['id_empresa'];
        
        $empresa_nome = $_POST['empresa_nome'];
        $empresa_cnpj = $_POST['empresa_cnpj'];
        $empresa_mail = $_POST['empresa_mail'];


        $query = "UPDATE empresa SET empresa_nome = '$empresa_nome', empresa_cnpj = '$empresa_cnpj', empresa_mail = '$empresa_mail' WHERE id_empresa='$id_empresa'  ";
        $query_run = mysqli_query($conexao, $query);

        if($query_run)
        {
            echo '<script> alert("Atualizado"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Falha ao atualizar"); </script>';
        }
    }
?>
