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

// EFEITO DARK MODE
function toggleDarkMode() {
    // Seleciona o elemento body
    const body = document.querySelector('body');
    
    // Alterna entre as classes "light" e "dark"
    body.classList.toggle('light');
    body.classList.toggle('dark');
}