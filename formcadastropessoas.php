<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include "incs/cabecalho.php"; ?> <br> <br> <br>
    <div class="registration-container">
        <div class="registration-box">
            <h1>Cadastro</h1> 
            <form id="registrationForm" action="cadastroPessoa.php" method="post">
                <input type="text" name="nome" placeholder="Nome Completo" required>
                <input type="text" name="cpf" placeholder="CPF" required>
                <input type="date" name="data_nascimento" placeholder="dd/mm/aaaa" required>
                <input type="text" name="estado" placeholder="Estado" required>
                <input type="text" name="cidade" placeholder="Cidade" required>
                <input type="text" name="endereco" placeholder="Endereço" required>
                <input type="text" name="telefone" placeholder="Telefone" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" required>
                <div class="login-link"> 
        <p>Já possui login? <a href="login.php">Clique aqui para entrar</a></p>
    </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="termo" required>
                    <label for="termo">Aceitação do termo e condições de serviço</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="consentimento" required>
                    <label for="consentimento">TERMO DE CONSENTIMENTO</label>
                </div>
                
                <button type="submit" id="registerButton" class="inactive">Cadastrar</button>
            </form>
        </div>
    </div>
    
    <script>
        const termoCheckbox = document.getElementById('termo');
        const consentimentoCheckbox = document.getElementById('consentimento');
        const registerButton = document.getElementById('registerButton');

        function updateButtonState() {
            if (termoCheckbox.checked && consentimentoCheckbox.checked) {
                registerButton.classList.add('active');
                registerButton.disabled = false;
            } else {
                registerButton.classList.remove('active');
                registerButton.disabled = true;
            }
        }

        termoCheckbox.addEventListener('change', updateButtonState);
        consentimentoCheckbox.addEventListener('change', updateButtonState);
    </script>

    <?php include "incs/rodape.php"; ?>
</body>
</html>
