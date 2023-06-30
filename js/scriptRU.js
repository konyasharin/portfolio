document.addEventListener('DOMContentLoaded', () => {
    const languageBlock = document.querySelector('.header__language'),
          specialize = document.querySelector('#specialize'),
          mediaQueryMobile = window.matchMedia('(max-width: 767px)');
    languageBlock.addEventListener('click', () => {
        window.location.href = 'https://iamnikolay.ru';
    })
    if(mediaQueryMobile.matches){
        specialize.innerHTML = '<span>—</span> Веб-дизайнер<br><span>—</span> Веб разработчик'
    }

})