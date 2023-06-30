<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css/style.css?ver=<?php echo filemtime('css/style.css'); ?>"> 
    <script src="js/wow.min.js"></script>
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
        history.pushState({param: 'Value'}, '', 'https://iamnikolay.ru')
        
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
                <a href="#about" class="header__link">Skills</a>
                <a href="#works" class="header__link">Works</a>
                <a href="#contact" class="header__link">Contact</a>
                <a href="#prices" class="header__link">Prices</a>
            </div>
            <div class="header__language">
                <span>ENG</span>
                <div class="header__language-img"></div>
            </div>
        </div>
    </header>
    <section class="main">
        <div class="container">
            <div class="main__text-block">
                <h1>Nikolay Malyshev</h1>
                <h3 id="specialize"><span>—</span> web-designer, web-developer</h3>
                <p>Hello, I'm Nikolay Malyshev.<br><br>
                I specialize in web design and web development.<br>
                If you want to get a dream site from scratch, then I will help you realize it.</p>
                <div class="main__links">
                    <div class="main__btns">
                        <button id="hireMeBtn">Hire me</button>
                        <button id="myWorksBtn">My works</button>
                    </div>
                    <div class="main__social">
                        <div class="round vk"><img src="icons/vk.png" alt="vk"></div>
                        <div class="round tg"><img src="icons/tg.png" alt="tg"></div>
                    </div>
                </div>
            </div>
            <img src="img/face.png" id="faceImg" alt="face">
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <img src="icons/html.png" alt="html" class="html wow animate__animated animate__lightSpeedInLeft">
            <img src="icons/css.png" alt="css" class="css wow animate__animated animate__fadeInRight">
            <img src="icons/js.png" alt="js" class="js wow animate__animated animate__fadeInBottomRight">
            <div class="about__block-1">
                <h2>About me</h2>
                <p>My name is Nikolay, I am <span>19 years old</span> and I am from the city of <span>Krasnoyarsk</span>. Since 2022 I have been engaged in web development, since 2023 I have taken up web design. I mainly <span>focus on Frontend and web design</span>. Now I am a 2nd year student at the <span>Siberian Federal University</span> with a degree in <span>«software engineering»</span>.</p>
            </div>
            <div class="about__block-2">
                <h2>My skills</h2>
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
            <h2>My works</h2>
            <div class="works__wrapper">
                <img src="icons/clickStart.png" alt="click" class="works__click-start wow animate__animated animate__fadeInLeft">
                <?php 
                    require_once "php/connect.php";
                    $result = $connect->query("SELECT * FROM `works`");
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
                                <img src="img/' . $row['img'] . '" alt="work" class="works__img">
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
                                    <img src="icons/click.png" alt="click" class="works__click">
                                </div>
                            </div>
                        ');
                        $count += 1;
                    }
                ?>
            </div>
            <h3 class="works__more">More works</h3>
        </div>
    </section>
    <section class="prices" id="prices">
        <div class="container">
            <h2>Prices</h2>
            <div class="prices__settings">
                <div class="prices__setting">
                    <h3 class="prices__subtitle">Website design</h3>
                    <button class="prices__btn"><div>Not needed</div></button>
                </div>
                <div class="prices__setting">
                    <h3 class="prices__subtitle">Number of pages</h3>
                    <div class="prices__plus"><img id="minus" src="icons/minus.png" alt="minus"><button class="prices__btn prices__btn_middle">1</button><img id="plus" src="icons/plus.png" alt="plus"></div>
                </div>
                <div class="prices__setting">
                    <h3 class="prices__subtitle">WordPress</h3>
                    <button class="prices__btn"><div>Not needed</div></button>
                </div>
            </div>
            <div class="prices__wrapper">
                <div class="prices__total">
                    <h3>Total price</h3>
                    <h2 id="total">1000 RUB</h2>
                </div>
                <div class="prices__warning">
                    <div class="prices__warning-title">
                        <img src="icons/warning.png" alt="warning">
                        <h2>warning!</h2>
                    </div>
                    <p>The price is made up of many factors and this calculator cannot accurately calculate the final price, but it can show an approximate price. To clarify the final price, please <br><a href="#contact">contact me.</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="container">
            <img src="icons/contact.png" alt="contact" id="book" class="wow animate__animated animate__fadeInLeft">
            <h2>Contact me</h2>
            <p>Please contact me on <a href="https://vk.com/konyasharin">social networks.</a> Or fill out this form and I will contact you.</p>
            <form action="php/contact.php" method="get">
                <input type="text" placeholder="Your name" name="name">
                <input type="tel" id="tel" placeholder="Your phone number" name="telephone">
                <input type="email" placeholder="Your email" name="email">
                <button type="submit">Submit</button>
            </form>
        </div>
    </section>
    <footer class="footer">
        <hr>
        <div class="container">
            <p>© 2023 Nikolay Malyshev</p>
            <div class="footer__social">
                <div class="round vk"><img src="icons/vk.png" alt="vk"></div>
                <div class="round tg"><img src="icons/tg.png" alt="tg"></div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/imask"></script>
    <script src="js/script.js?ver=<?php echo filemtime('js/script.js');?>"></script>
    <script src="js/scriptENG.js?ver=<?php echo filemtime('js/scriptENG.js');?>"></script>
</body>
</html>