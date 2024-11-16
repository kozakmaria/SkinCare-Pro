// Função para checar se o checkbox "agree-checkbox" está marcado
function checkBoxMarcado() {
    const checkbox = document.getElementById('agree-checkbox');
    if (!checkbox.checked) {
        document.getElementById('modal').style.display = 'flex';
    } else {
        window.location.href = "questionario.php";
    }
}

// Função para fechar o modal
function fecharModal() {
    document.getElementById('modal').style.display = 'none';
}

// Função para selecionar uma opção de tipo de pele (primeira etapa)
function selectOption(optionElement) {
    document.querySelectorAll('.skin-type-options .option').forEach(option => option.classList.remove("selected"));
    optionElement.classList.add("selected");

    // Exibe o botão "Próximo" ao selecionar uma opção
    document.querySelector('.next-button').style.display = 'block';
}

// Função para exibir a segunda etapa (formulário de sensibilidade)
function showSensitivityForm() {
    document.querySelector(".questionnaire").style.display = "none";
    document.getElementById("sensitivity-form").style.display = "block";
}

// Função para verificar seleção de "sensibilidade" e "necessidade" na segunda etapa
function checkSensibilityAndNecessity() {
    const sensibilidadeSelected = document.querySelector('input[name="sensibilidade"]:checked');
    const necessidadeSelected = document.querySelector('input[name="necessidade"]:checked');
    const nextButton = document.querySelector('#sensitivity-form .next-button');
    
    // Exibe o botão "Próximo" se ambas as seleções estiverem preenchidas
    if (sensibilidadeSelected && necessidadeSelected) {
        nextButton.style.display = 'block';
    } else {
        nextButton.style.display = 'none';
    }
}

// Funções para mostrar ou esconder informações adicionais na etapa final
function mostrarInformacoes() {
    document.getElementById("informacoes-adicionais").style.display = "block";
}

function esconderInformacoes() {
    document.getElementById("informacoes-adicionais").style.display = "none";
}
