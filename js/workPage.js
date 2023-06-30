document.addEventListener('DOMContentLoaded', () => {
    const languageBlock = document.querySelector(".header__language");
    languageBlock.addEventListener('mouseover', () => {
        languageBlock.childNodes[1].classList.toggle('header__language-text_active');
        languageBlock.childNodes[3].classList.toggle('header__language-img_active');
    })
    languageBlock.addEventListener('mouseout', () => {
        languageBlock.childNodes[1].classList.toggle('header__language-text_active');
        languageBlock.childNodes[3].classList.toggle('header__language-img_active');
    })
    languageBlock.addEventListener('click', () => {
        const pattern = /RU/,
              patternNumber = /\?/;
        const location = window.location.href;
        if(location.search(pattern) == -1){
            window.location.href = 'https://iamnikolay.ru/workRU.php' + location.slice(location.search(patternNumber));
        }else{
            window.location.href = 'https://iamnikolay.ru/work.php' + location.slice(location.search(patternNumber));
        }
    })
})