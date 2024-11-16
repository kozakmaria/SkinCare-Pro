<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include "incs/cabecalho.php"; ?>
    <div class="login-container">
        <div class="login-box">
        <a href="index.php">
            <img src="img/logo-sem-fundo.png" alt="Logo" class="logo">
        </a>
            
            <form action="efetua-login.php" method="GET">
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit" class="login-button">Entrar</button>
                <a href="formcadastropessoas.php"><button type="button" class="register-button">Criar Conta</button></a>
            </form>
        </div>
    </div>

    <?php include "incs/rodape.php"; ?>
</body>
</html>
