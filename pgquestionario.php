<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionário de Pele</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/main.js" defer></script>

</head>
<body>
<?php include "incs/cabecalho.php"; ?>

    <!-- Main content -->
    <main>
        <section class="questionnaire">
            <h1>QUESTIONÁRIO</h1>
            <h2>O que a sua pele precisa?</h2>
            <div class="questionnaire-image">
                <img src="img/pele.png" alt="Imagem de Pele" style="width: 300px; border-radius: 10px;">
            </div>
            <p>Estou de acordo com esse quiz possuir caráter educativo e informativo, não substituindo eventuais necessidades de uma consulta médica dermatológica.</p>
            <label>
                <input type="checkbox" id="agree-checkbox">
                Concordo com os termos acima.
            </label>
            <br><br>
            <button class="start-button" onclick="checkBoxMarcado()">Começar agora</button>
        </section>
    </main>

    <!-- Modal for Alert -->
    <div class="modal" id="modal">
        <div class="modal-content">
            <h3>Aviso</h3>
            <p>Por favor, concorde com os termos para continuar.</p>
            <button onclick="fecharModal()">Fechar</button>
        </div>
    </div>

    <?php include "incs/rodape.php"; ?>

</body>
</html>
