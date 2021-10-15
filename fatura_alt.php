<?php
include 'conexao/conexao.php';

    if(isset($_POST['updatedata']))
    {   
        $id_fatura = $_POST['id_fatura'];
        
        $empresa_fatura = $_POST['empresa_fatura'];
        $centro_custo_fatura = $_POST['centro_custo_fatura'];
        $mes_fatura = $_POST['mes_fatura'];
        $valor_fatura = $_POST['valor_fatura'];
        $obs_fatura = $_POST['obs_fatura'];



        $query = "UPDATE fatura SET empresa_fatura = '$empresa_fatura', centro_custo_fatura = '$centro_custo_fatura', mes_fatura = '$mes_fatura',valor_fatura = '$valor_fatura', obs_fatura = '$obs_fatura' WHERE id_fatura='$id_fatura'  ";
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
