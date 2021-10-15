<?php
include 'conexao/conexao.php';

    if(isset($_POST['updatedata']))
    {   
        $id_suprimento = $_POST['update_id'];
        
        $suprimento = $_POST['suprimento'];
        $empresa_sup1 = $_POST['empresa_sup1'];
        $empresa_sup2 = $_POST['empresa_sup2'];
        $empresa_sup3 = $_POST['empresa_sup3'];
        $empresa_sup4 = $_POST['empresa_sup4'];
        $valor_sup = $_POST['valor_sup'];



        $query = "UPDATE suprimento SET suprimento ='$suprimento',empresa_sup1 ='$empresa_sup1', empresa_sup2 ='$empresa_sup2',empresa_sup3 ='$empresa_sup3', empresa_sup4 ='$empresa_sup4', valor_sup ='$valor_sup'  WHERE id_suprimento='$id_suprimento'  ";
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
