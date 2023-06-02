// EFEITO DARK MODE
// Seleciona o botão que irá ativar o modo escuro
const darkModeButton = document.querySelector('#dark-mode-button');

// Verifica se já existe um valor armazenado no localStorage
const isDarkMode = localStorage.getItem('darkMode');

// Se existir, aplica o valor armazenado
if (isDarkMode === 'true') {
    document.body.classList.add('dark');
} else {
    document.body.classList.add('light');
}

// Adiciona um evento de clique no botão do modo escuro
darkModeButton.addEventListener('click', () => {
    // Alterna a classe do body para aplicar o modo escuro
    document.body.classList.toggle('dark');

    // Armazena o estado atual do modo escuro/claro no localStorage
    localStorage.setItem('darkMode', document.body.classList.contains('dark', 'light'));
});

// EFEITO CARREGAR LETRAS
function activateLetter(element) {
    const arrText = element.innerHTML.split('');
    element.innerHTML = '';

    arrText.forEach((Letter, i) => {

        setTimeout(() => {
            element.innerHTML += Letter;
        }, 75 * i);
    });
}

const title = document.querySelector('.typing');
activateLetter(title);