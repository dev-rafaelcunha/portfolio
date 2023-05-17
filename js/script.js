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