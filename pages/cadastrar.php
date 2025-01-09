<?php
session_start();

include('../includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    if (!empty($nome) && !empty($email) && !empty($senha)) {
        $sql_check_email = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = $conn->query($sql_check_email);

        if ($result->num_rows > 0) {
            $_SESSION['erro'] = 'Este e-mail já está cadastrado!';
            header('Location: ../public/cadastro.php');
            exit();
        } else {
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            
            if ($conn->query($sql) === TRUE) {
                header('Location: ../public/listar.php');
                exit();
            } else {
                $_SESSION['erro'] = 'Erro ao cadastrar!';
                header('Location: ../public/cadastro.php');
                exit();
            }
        }
    } else {
        $_SESSION['erro'] = 'Todos os campos são obrigatórios!';
        header('Location: ../public/cadastro.php');
        exit();
    }
}
?>
