<?php 
    include('../includes/db.php');

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM usuarios WHERE id = '$id' ";
        if ($conn->query($sql)==TRUE) {
             header('Location: ../public/listar.php'); 
             exit();
        } else {
            echo 'Erro: '. $conn->error;
        }
    }
?>