<?php
include 'conexao/conexao.php';

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $course = $_POST['course'];


        $query = "UPDATE usuario SET usuario_nome='$fname', usuario_senha='$lname', usuario_nivel='$course' WHERE usuario_id='$id'  ";
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
