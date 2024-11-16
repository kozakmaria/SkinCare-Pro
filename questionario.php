<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de Tipo de Pele</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/main.js" defer></script>
</head>

<body>
    <?php include "incs/cabecalho.php"; ?>

    <!-- Primeira Etapa: Seleção de Tipo de Pele -->
    <main>
        <section class="questionnaire">
            <form action="">
                <h2>Qual o seu tipo de pele?</h2>
                <div class="skin-type-options">
                    <div class="option" onclick="selectSkinTypeOption(this)">
                        <img src="img/mista.png" alt="Mista">
                        <p><strong>MISTA</strong><br>eu sinto ela com brilho na testa, nariz, queixo, e pode ser seca ou
                            normal em outras áreas</p>
                    </div>
                    <div class="option" onclick="selectSkinTypeOption(this)">
                        <img src="img/peleseca.png" alt="Pele Seca">
                        <p><strong>PELE SECA</strong><br>eu sinto ela sem brilho excessivo, repuxando e descamando em
                            algumas partes</p>
                    </div>
                    <div class="option" onclick="selectSkinTypeOption(this)">
                        <img src="img/normal.png" alt="Pele Normal">
                        <p><strong>PELE NORMAL</strong><br>sinto ela equilibrada, não está seca demais nem oleosa demais
                        </p>
                    </div>
                    <div class="option" onclick="selectSkinTypeOption(this)">
                        <img src="img/oleosa.png" alt="Pele Oleosa">
                        <p><strong>PELE OLEOSA</strong><br>eu sinto ela com brilho excessivo e está sempre produzindo
                            sebo nas diferentes regiões do rosto</p>
                    </div>
                </div>
            </form>
            <button class="next-button" onclick="showSensitivityForm()" style="display:none;">Próximo</button>
        </section>

        <!-- Segunda Etapa: Questionário de Sensibilidade -->
        <section id="sensitivity-form" class="questionnaire" style="display:none;">
            <h1>Sua pele é sensível?</h1>
            <p>Fica vermelha ou irritada com facilidade?</p>
            <form>
                <div class="necessidades">
                    <input type="radio" id="sim" name="sensibilidade" value="sim"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="sim">SIM</label>

                    <input type="radio" id="nao" name="sensibilidade" value="nao"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="nao">NÃO</label>
                </div>

                <p>Selecione a principal necessidade que gostaria de cuidar em sua pele:</p>
                <div class="necessidades">
                    <input type="radio" id="acnes" name="necessidade" value="acnes e espinhas"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="acnes">Acnes e espinhas</label>

                    <input type="radio" id="manchas" name="necessidade" value="manchas de acne e cicatrizes"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="manchas">Manchas de acne e cicatrizes</label>

                    <input type="radio" id="oleosidade" name="necessidade" value="oleosidade excessiva e cravos"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="oleosidade">Oleosidade excessiva e cravos</label>

                    <input type="radio" id="manchas_escurecidas" name="necessidade" value="manchas escurecidas"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="manchas_escurecidas">Manchas escurecidas</label>

                    <input type="radio" id="linhas_finas" name="necessidade" value="linhas finas"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="linhas_finas">Linhas finas</label>

                    <input type="radio" id="rugas" name="necessidade" value="rugas"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="rugas">Rugas</label>

                    <input type="radio" id="flacidez" name="necessidade" value="flacidez e perda de firmeza"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="flacidez">Flacidez e perda de firmeza</label>

                    <input type="radio" id="olheiras" name="necessidade" value="olheiras e bolsas"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="olheiras">Olheiras e bolsas</label>

                    <input type="radio" id="poros" name="necessidade" value="poros dilatados"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="poros">Poros dilatados</label>

                    <input type="radio" id="pele_ressecada" name="necessidade" value="pele ressecada"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="pele_ressecada">Pele ressecada</label>

                    <input type="radio" id="sensibilidade" name="necessidade" value="sensibilidade e vermelhidão"
                        onchange="checkSensibilityAndNecessity()">
                    <label for="sensibilidade">Sensibilidade e vermelhidão</label>
                </div>
            </form>
            <button class="next-button" onclick="showFormSection()" style="display:none;">Próximo</button>
        </section>

        <!-- Terceira Etapa: Formulário Final -->
        <section id="final-form" class="questionnaire" style="display:none;">
            <form  method="post">
                <h2>Você gostaria de cuidar de mais alguma coisa?</h2>
                <div class="sensibilidade">
                    <button class="button" id="sim" onclick="mostrarInformacoes()">SIM</button>
                    <button class="button" id="nao" onclick="esconderInformacoes()">NÃO</button>
                </div>

                <div id="informacoes-adicionais" class="formulario" style="display:none;">
                    <label for="informacoes">Adicione informações adicionais:</label>
                    <input type="text" id="informacoes" name="informacoes">
                </div>
                <br>
                <div class="formulario">
                    <h3>Gerar Formulário</h3>

                    <label for="nome">Adicione o seu nome:</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="email">Adicione o seu email:</label>
                    <input type="email" id="email" name="email" required>

                    <a href="index.php"><button class="button" type="submit">Cadastrar</button></a>
                </div>
            </form>
        </section>
    </main>

    <!-- Modal para Alerta -->
    <div class="modal" id="modal" style="display:none;">
        <div class="modal-content">
            <h3>Aviso</h3>
            <p>Por favor, selecione uma opção para continuar.</p>
            <button onclick="closeModal()">Fechar</button>
        </div>
    </div>

    <?php include "incs/rodape.php"; ?>

    <script>
        // Variável de controle para o botão "Próximo" da primeira etapa
        function selectSkinTypeOption(element) {
            document.querySelectorAll('.skin-type-options .option').forEach(option => option.classList.remove('selected'));
            element.classList.add('selected');
            document.querySelector('.next-button').style.display = 'block';
        }

        // Função para verificar seleção na segunda etapa e exibir botão "Próximo"
        function checkSensibilityAndNecessity() {
            const sensibilidadeSelected = document.querySelector('input[name="sensibilidade"]:checked');
            const necessidadeSelected = document.querySelector('input[name="necessidade"]:checked');
            const nextButton = document.querySelector('#sensitivity-form .next-button');

            if (sensibilidadeSelected && necessidadeSelected) {
                nextButton.style.display = 'block';
            } else {
                nextButton.style.display = 'none';
            }
        }

        // Função para avançar para a terceira etapa (formulário final)
        function showFormSection() {
            document.getElementById("sensitivity-form").style.display = "none";
            document.getElementById("final-form").style.display = "block";
        }
    </script>
</body>

</html>