<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <main>
        <div id="formCadastroContainer">
            <h1>Cadastro de Usuário</h1>

            <form action="../pages/cadastrar.php" method="post" id="formCadastro">
                <div class="input-container">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nome" placeholder="Nome" id="nome" required>
                </div>

                <div class="input-container">
                    <i class="fas fa-envelope"></i> <input type="email" name="email" placeholder="Seu melhor e-mail"
                        id="email" required>
                </div>

                <div class="input-container">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="senha" placeholder="Senha" id="senha" minlength="6" required>
                </div>

                <button type="button" onclick="validarFormulario()">Cadastrar</button>
                </form>
        </div>
    </main>

    <script src="../js/script.js"></script>

    <?php
    session_start();

    if (isset($_SESSION['erro'])): ?>
        <script>
            alert('<?php echo $_SESSION['erro']; ?>');
        </script>
        <?php unset($_SESSION['erro']);
    endif;
    ?>

</body>

</html>