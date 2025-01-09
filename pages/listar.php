<?php 
    include('../includes/db.php');

    $sql = 'SELECT * FROM usuarios';
    $usuarios = $conn->query($sql);

    if ($usuarios->num_rows > 0) {
        echo"<table border='1'>";
        echo "<tr><th>Nome:</th><th>E-mail</th><th>Ações</th></tr>";
    
        foreach($usuarios as $usuario) {
            echo "
                <tr>
                    <td>{$usuario['nome']}</td>
                    <td>{$usuario['email']}</td>
                    <td>
                        <a href='../pages/editar.php?id={$usuario['id']}'><i class='fas fa-edit'></i></a>
                        <a href='../pages/excluir.php?id={$usuario['id']}'><i class='fas fa-trash'></i></a>
                    </td>
                </tr>
            ";
        };
    } else {
        header('Location: ../public/cadastro.php'); 
        exit(); 
    }
?>