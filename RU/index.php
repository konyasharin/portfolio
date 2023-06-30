<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikolay Malyshev</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="../css/style.css?ver=<?php echo filemtime('../css/style.css'); ?>">
    <link rel="stylesheet" href="../css/styleRU.css?ver=<?php echo filemtime('../css/styleRU.css'); ?>">
    <script src="../js/wow.min.js"></script>
    <style>
        .js{
            top: 1050px;
        }
        @media (max-width: 1470px){
            .js{
                top: 1070px;
            }
            .html{
                top: 435px;
            }
            .css{
                top: 45px;
            }
            .main__text-block{
                width: 773px;
            }
        }
        @media (max-width: 1199px){
            .prices__setting:nth-child(3){
                margin-left: 0;
            }
            .about .html{
                top: 435px;
            }
        }
        @media (max-width: 767px){
            .about .html{
                top: 330px;
                height: 40px;
                width: 40px;
                left: -4px;
            }
            .prices__warning-title h2{
                font-size: 32px;
            }
        }
    </style>
    <script>
        const mediaQuery = window.matchMedia('(min-width: 1200px)'),
              mediaQueryPhone =  window.matchMedia('(max-width: 767px)');
        if(mediaQuery.matches){
            new WOW({
                offset: 300
            }).init();
        }else if(mediaQueryPhone.matches){
            new WOW({
                offset: 75
            }).init();
        }else{
            new WOW({
                offset: 150
            }).init();

        }
        history.pushState({param: 'Value'}, '', 'https://iamnikolay.ru/RU')
        
    </script>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="burger">
                <span class="burger__stick"></span>
                <span class="burger__stick"></span>
                <span class="burger__stick"></span>
            </div>
            <div class="header__menu">
                <a href="#about" class="header__link">Навыки</a>
                <a href="#works" class="header__link">Работы</a>
                <a href="#contact" class="header__link">Связаться</a>
                <a href="#prices" class="header__link">Цены</a>
            </div>
            <div class="header__language">
                <span>RU</span>
                <div class="header__language-img"></div>
            </div>
        </div>
    </header>
    <section class="main">
        <div class="container">
            <div class="main__text-block">
                <h1>Николай Малышев</h1>
                <h3 id="specialize"><span>—</span> Веб-дизайнер, Веб-разработчик</h3>
                <p>Здравствуйте, я Николай Малышев.<br><br>
                Я специализируюсь на веб-дизайне и веб-разработке.<br>
                Если вы хотите получить сайт мечты с нуля, то я помогу вам это реализовать.</p>
                <div class="main__links">
                    <div class="main__btns">
                        <button id="hireMeBtn">Нанять</button>
                        <button id="myWorksBtn">Работы</button>
                    </div>
                    <div class="main__social">
                        <div class="round vk"><img src="../icons/vk.png" alt="vk"></div>
                        <div class="round tg"><img src="../icons/tg.png" alt="tg"></div>
                    </div>
                </div>
            </div>
            <img src="../img/face.png" id="faceImg" alt="face">
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <img src="../icons/html.png" alt="html" class="html wow animate__animated animate__lightSpeedInLeft">
            <img src="../icons/css.png" alt="css" class="css wow animate__animated animate__fadeInRight">
            <img src="../icons/js.png" alt="js" class="js wow animate__animated animate__fadeInBottomRight">
            <div class="about__block-1">
                <h2>Обо мне</h2>
                <p>Mеня зовут Николай, мне <span>19 лет</span>, я из города <span>Красноярск</span>. С 2022 года занимаюсь веб-разработкой, с 2023 годя начал заниматься еще и веб-дизайном. В данный момент я <span>сфокусирован на своем совершенствовании во фронтенд-разработке и в веб-дизайне</span>. Сейчас я студент 2 курса <span>Сибирского федерального университета</span> по специальности <span>«программная инженерия»</span>.</p>
            </div>
            <div class="about__block-2">
                <h2>Мои навыки</h2>
                <div class="statistic">
                    <h3>JavaScript</h3>
                    <div class="statistic__scale"><div class="statistic__scale_yellow wow animate__animated animate__slideInLeft"></div></div>
                </div>
                <div class="statistic">
                    <h3>HTML</h3>
                    <div class="statistic__scale"><div class="statistic__scale_yellow wow animate__animated animate__slideInLeft"></div></div>
                </div>
                <div class="statistic">
                    <h3>CSS</h3>
                    <div class="statistic__scale"><div class="statistic__scale_yellow wow animate__animated animate__slideInLeft"></div></div>
                </div>
                <div class="statistic">
                    <h3>Figma</h3>
                    <div class="statistic__scale"><div class="statistic__scale_yellow wow animate__animated animate__slideInLeft"></div></div>
                </div>
                <div class="statistic">
                    <h3>PHP</h3>
                    <div class="statistic__scale"><div class="statistic__scale_yellow wow animate__animated animate__slideInLeft"></div></div>
                </div>
                <div class="about__addition">
                    <h3>WordPress</h3>
                    <h3>SASS, SCSS, LESS</h3>
                    <h3>MySQL</h3>
                    <h3>Git</h3>
                    <h3>Ajax, Node.js</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="works" id="works">
        <div class="container">
            <h2>Мои работы</h2>
            <div class="works__wrapper">
                <img src="../icons/clickStart.png" alt="click" class="works__click-start wow animate__animated animate__fadeInLeft">
                <?php 
                    require_once "../php/connect.php";
                    $result = $connect->query("SELECT * FROM `worksRU`");
                    $count = 0;
                    while($row = $result->fetch_assoc()){
                        if($count % 2 == 0){
                            if($count < 4){
                                echo('<div class="works__block wow animate__animated animate__fadeInLeft">');
                            }else{
                                echo('<div class="works__block animate__animated animate__fadeInLeft">');
                            }
                        }else{
                            if($count < 4){
                                echo('<div class="works__block wow animate__animated animate__fadeInRight">');
                            }else{
                                echo('<div class="works__block animate__animated animate__fadeInRight">');
                            }
                        }
                        echo('
                                <img src="../img/' . $row['img'] . '" alt="work" class="works__img">
                                <div class="works__block-background">
                                    <h2 class="works__block-title">' . $row['name'] . '</h2>
                        ');
                        $paragraphsList = explode("&", $row['paragraphs']);
                        $paragraphsList = array_slice($paragraphsList, 0,2);
                        foreach($paragraphsList as $paragraph){
                            echo('
                                <div class="works__paragraph"><div class="works__dot"><span></span></div><h3>' . $paragraph . '</h3></div>
                            ');
                        }
                        echo('
                                    <img src="../icons/click.png" alt="click" class="works__click">
                                </div>
                            </div>
                        ');
                        $count += 1;
                    }
                ?>
            </div>
            <h3 class="works__more">Больше работ</h3>
        </div>
    </section>
    <section class="prices" id="prices">
        <div class="container">
            <h2>Цены</h2>
            <div class="prices__settings">
                <div class="prices__setting">
                    <h3 class="prices__subtitle">Веб-дизайн</h3>
                    <button class="prices__btn"><div>Не нужен</div></button>
                </div>
                <div class="prices__setting">
                    <h3 class="prices__subtitle">Количество страниц</h3>
                    <div class="prices__plus"><img id="minus" src="../icons/minus.png" alt="minus"><button class="prices__btn prices__btn_middle">1</button><img id="plus" src="../icons/plus.png" alt="plus"></div>
                </div>
                <div class="prices__setting">
                    <h3 class="prices__subtitle">WordPress</h3>
                    <button class="prices__btn"><div>Не нужен</div></button>
                </div>
            </div>
            <div class="prices__wrapper">
                <div class="prices__total">
                    <h3>Итоговая цена</h3>
                    <h2 id="total">1000 RUB</h2>
                </div>
                <div class="prices__warning">
                    <div class="prices__warning-title">
                        <img src="../icons/warning.png" alt="warning">
                        <h2>Внимание!</h2>
                    </div>
                    <p>Цена складывается из многих факторов, и этот калькулятор не может точно рассчитать окончательную цену, но может показать приблизительную цену. Для уточнения окончательной цены, пожалуйста <a href="#contact">свяжитесь со мной.</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="container">
            <img src="../icons/contact.png" alt="contact" id="book" class="wow animate__animated animate__fadeInLeft">
            <h2>Связаться</h2>
            <p>Пожалуйста связывайтесь со мной в <a href="https://vk.com/konyasharin">соцсетях.</a> Или заполните эту форму и я свяжусь с вами.</p>
            <form action="../php/contact.php" method="get">
                <input type="text" placeholder="Ваше имя" name="name">
                <input type="tel" id="tel" placeholder="Ваш номер телефона" name="telephone">
                <input type="email" placeholder="Ваша электронная почта" name="email">
                <button type="submit">Отправить</button>
            </form>
        </div>
    </section>
    <footer class="footer">
        <hr>
        <div class="container">
            <p>© 2023 Nikolay Malyshev</p>
            <div class="footer__social">
                <div class="round vk"><img src="../icons/vk.png" alt="vk"></div>
                <div class="round tg"><img src="../icons/tg.png" alt="tg"></div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/imask"></script>
    <script src="../js/script.js?ver=<?php echo filemtime('../js/script.js');?>"></script>
    <script src="../js/scriptRU.js?ver=<?php echo filemtime('../js/scriptRU.js');?>"></script>
</body>
</html>