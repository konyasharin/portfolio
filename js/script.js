document.addEventListener("DOMContentLoaded", () => {
    const languageBlock = document.querySelector(".header__language"),
          scalesYellow = document.querySelectorAll('.statistic__scale_yellow'),
          workBlocks = document.querySelectorAll('.works__block'),
          workClick = document.querySelectorAll('.works__click'),
          workClickStart = document.querySelector('.works__click-start'),
          priceBtns = document.querySelectorAll('.prices__btn'),
          plus = document.querySelector('#plus'),
          minus = document.querySelector('#minus'),
          total = document.querySelector('#total'),
          inputPhone = document.querySelector('#tel'),
          workBtn = document.querySelector('.works__more'),
          mask = new IMask(inputPhone, {
            mask: '{+7}(000)000-00-00'
          }),
          mediaQuery = window.matchMedia('(min-width: 1200px)'),
          mediaQueryMobile = window.matchMedia('(max-width: 767px)'),
          burger = document.querySelector('.burger'),
          headerMenu = document.querySelector('.header__menu'),
          headerLinks = document.querySelectorAll('.header__link'),
          specialize = document.querySelector('#specialize'),
          form = document.querySelector('form'),
          hireBtn = document.querySelector('#hireMeBtn'),
          worksBtn = document.querySelector('#myWorksBtn'),
          vkLinks = document.querySelectorAll('.vk');
          tgLinks = document.querySelectorAll('.tg');
    let countPlus = 1,
        totalPrice = 1000,
        workCountFour = 1;
    languageBlock.addEventListener('mouseover', () => {
        languageBlock.childNodes[1].classList.toggle('header__language-text_active');
        languageBlock.childNodes[3].classList.toggle('header__language-img_active');
    })
    languageBlock.addEventListener('mouseout', () => {
        languageBlock.childNodes[1].classList.toggle('header__language-text_active');
        languageBlock.childNodes[3].classList.toggle('header__language-img_active');
    })
    scalesYellow[0].style.width = '90%';
    scalesYellow[1].style.width = '100%';
    scalesYellow[2].style.width = '100%';
    scalesYellow[3].style.width = '90%';
    scalesYellow[4].style.width = '80%';

    workBlocks.forEach((item, i) => {
        if(mediaQuery.matches){
            item.addEventListener('mouseover', () => {
                workClickStart.style.display = 'none';
                item.lastElementChild.classList.toggle('works__block-background_active');
            })
            item.addEventListener('mouseout', () => {
                item.lastElementChild.classList.toggle('works__block-background_active');
            })
            if(window.location.href == 'https://iamnikolay.ru/'){
                item.addEventListener('click', () => {
                    window.location.replace(`https://iamnikolay.ru/work.php?id=${i + 1}`);
                })
            }else{
                item.addEventListener('click', () => {
                    window.location.replace(`https://iamnikolay.ru/RU/work.php?id=${i + 1}`);
                })
            }
        }else{
            item.addEventListener('click', () => {
                if(!item.lastElementChild.classList.contains('works__block-background_active')){
                    workClickStart.style.display = 'none';
                    item.lastElementChild.classList.toggle('works__block-background_active');
                }else{
                    if(window.location.href == 'https://iamnikolay.ru/'){
                        window.location.replace(`https://iamnikolay.ru/work.php?id=${i + 1}`);
                    }else{
                        window.location.replace(`https://iamnikolay.ru/RU/work.php?id=${i + 1}`);
                    }

                }
                
            })
        }
    })

    workBlocks.forEach((item, i) => {
        if(i >= 4){
            item.style.display = 'none'
        }
    })
    
    workClick.forEach((item) => {
        animation = setInterval(() => [
            item.classList.toggle('works__click_Up')
        ], 300)
    })

    workBtn.addEventListener('click', () => {
        workCountFour += 1;
        console.log(workBlocks.length / 4, workCountFour)
        if(workBlocks.length / 4 <= workCountFour){
            workBtn.style.display = 'none';
        }
        workBlocks.forEach((item, i) => {
            if((i + 1) / 4 <= workCountFour && (i + 1) / 4 > workCountFour - 1){
                item.style.display = 'block';
            }
        })
    })


    function animateIn(btn, text){
        btn.firstElementChild.classList.add('animate__animated');
        btn.firstElementChild.classList.add('animate__fadeOutLeft');
        btn.firstElementChild.classList.add('animate__faster');
        if(text == 'Needed' || text == 'Нужен'){
            btn.classList.add('prices__btn_green');
        }else{
            btn.classList.remove('prices__btn_green');
        }
        return new Promise(resolve => setTimeout(resolve, 500));
    }

    function animateOut(btn, text){
        btn.innerHTML = `<div class="animate__animated animate__fadeInRight animate__faster">${text}</div>`;
    }

    priceBtns.forEach((btn, i) => {
        if(i % 2 != 1){
            btn.addEventListener('click', async () => {
                let height = btn.offsetHeight,
                    width = btn.offsetWidth,
                    text = '';
                btn.style.width = width + 1 + 'px';
                btn.style.height = height + 'px';
                if(btn.textContent == 'Not needed'){
                    text = 'Needed';
                }else if(btn.textContent == 'Не нужен'){
                    text = 'Нужен';
                }else if(btn.textContent == 'Needed'){
                    text = 'No needed';
                }else{
                    text = 'Не нужен'
                }
                await animateIn(btn, text);
                animateOut(btn, text);
                mathTotalPrice();
            })
        }
    })

    plus.addEventListener('click', () => {
        if(countPlus < 15){
            countPlus += 1
            priceBtns[1].textContent = `${countPlus}`
            mathTotalPrice();
        }
    })
    minus.addEventListener('click', () => {
        if(countPlus > 1){
            countPlus -= 1
            priceBtns[1].textContent = `${countPlus}`
            mathTotalPrice();
        }
    })
    function mathTotalPrice(){
        totalPrice = 1000*countPlus
        if(priceBtns[0].textContent == 'Needed' || priceBtns[0].textContent == 'Нужен'){
            totalPrice *= 1.5
        }
        if(priceBtns[2].textContent == 'Needed' || priceBtns[2].textContent == 'Нужен'){
            totalPrice = totalPrice + totalPrice*0.2
        }
        total.textContent = `${totalPrice} RUB`
    }

    inputPhone.addEventListener('focus', () => {
        if(inputPhone.value.length < 2){
            inputPhone.value = "+7"
        }
    })
    inputPhone.addEventListener('keydown', () => {
        if(inputPhone.value.length <= 3){
            inputPhone.value = "+7"
        }
    })

    burger.addEventListener('click', () => {
        headerMenu.classList.toggle('header__menu_active');
    })
    headerLinks.forEach(link => {
        link.addEventListener('click', () => {
            headerMenu.classList.toggle('header__menu_active');
        })
    })

    if(mediaQueryMobile.matches){
        specialize.innerHTML = '<span>—</span> web-designer<br><span>—</span> web-developer'
    }
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(form);
        const name = formData.get('name'),
              telephoneNumber = formData.get('telephone'),
              email = formData.get('email');
        if(name.length === 0 || telephoneNumber.length === 0 || email.length === 0){
            alert('Заполните пожалуйста все поля!')
        }else if(telephoneNumber.length < 16){
            alert('Впишите свой номер телефона полностью!');
        }else{
            form.submit();
        }
    })

    hireBtn.addEventListener('click', () => {
        if(window.location.href == 'https://iamnikolay.ru/'){
            window.location.href = 'https://iamnikolay.ru/#contact';
        }else{
            window.location.href = 'https://iamnikolay.ru/RU#contact';
        }
    })
    worksBtn.addEventListener('click', () => {
        if(window.location.href == 'https://iamnikolay.ru/'){
            window.location.href = 'https://iamnikolay.ru/#works';
        }else{
            window.location.href = 'https://iamnikolay.ru/RU#works';
        }
    })
    vkLinks.forEach(link => {
        link.addEventListener('click', () => {
            window.location.href = 'https://vk.com/konyasharin'
        })
    })
    tgLinks.forEach(link => {
        link.addEventListener('click', () => {
            window.location.href = 'https://t.me/Konyasharin'
        })
    })
})