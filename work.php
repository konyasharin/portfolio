<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikolay Malyshev</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/workpage.css?ver=<?php echo filemtime('css/workpage.css'); ?>">
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

    </script>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__menu_work">
                <a href="https://iamnikolay.ru" class="header__link">To main</a>
            </div>
            <div class="header__language">
                <span>ENG</span>
                <div class="header__language-img"></div>
            </div>
        </div>
    </header>
    <section class="work">
        <div class="container">
            <?php
                require_once "php/connect.php";
                $id = $_GET['id'];
                $result = $connect->query("SELECT * FROM `works` WHERE `id` = '$id'");
                $item = $result->fetch_assoc();
                echo('
                    <a href="' . $item['link'] . '">' . $item['name'] . '</a>
                    <div class="work__wrapper">
                        <img src="img/' . $item['img'] . '" alt="work">
                        <p>' . $item['text'] . '</p>
                    </div>
                ');
                $paragraphsList = explode("&", $item['paragraphs']);
                echo ('<div class="work__paragraphs">');
                foreach($paragraphsList as $paragraph){
                    echo('
                            <div class="works__paragraph"><div class="works__dot"><span></span></div><h3>' . $paragraph . '</h3></div>
                    ');
                }
                echo ('</div>');
                if($item['imgs'] != ''){
                    $imgList = explode("&", $item['imgs']);
                    echo ('<div class="work__imgs">');
                    $count = 0;
                    foreach ($imgList as $img){
                        if($count % 2 == 0) {
                            echo('
                            <img src="img/' . $img . '" alt="img" class="wow animate__animated animate__fadeInLeft">
                        ');
                        }else{
                            echo('
                            <img src="img/' . $img . '" alt="img" class="wow animate__animated animate__fadeInRight">
                        ');
                        }
                        $count += 1;
                    }
                    echo ('</div>');
                }

            ?>
        </div>
        <div class="container">
            <?php
                if($item['warning'] == 1){
                    echo('
                        <div class="work__warning">
                            <img src="icons/github.png" alt="github" id="github">
                            <div class="work__warning-title">
                                <img src="icons/warning.png" alt="warning">
                                <h2>warning!</h2>
                            </div>
                            <p>I am no longer in charge of maintaining this site. You can also check out the code for this project on <a href="' . $item['githubLink'] . '">github.</a></p>
                        </div>
                    ');
                }else{
                    echo('
                        <a href="'. $item['figmaLink'] .'">
                            <div class="work__warning warning__figma-wrapper" style="padding: 39px; margin-top: 70px; cursor: pointer">
                                <img src="icons/figma.png" alt="figma" id="figma">
                                <div class="work__warning-title" style="margin-bottom: 0px!important;">
                                    <h2 style="margin: 0 auto!important; font-size: 48px; position: relative; left: 20px" class="work__figma">link to layout</h2>
                                </div>
                            </div>
                        </a>
                    ');
                }
            ?>
        </div>
    </section>
    <footer class="footer work__footer">
        <hr>
        <div class="container">
            <p>© 2023 Nikolay Malyshev</p>
            <div class="footer__social">
                <div class="round"><img src="icons/vk.png" alt="vk"></div>
                <div class="round"><img src="icons/tg.png" alt="tg"></div>
            </div>
        </div>
    </footer>
    <script src="js/workPage.js?ver=<?php echo filemtime('js/WorkPage.js');?>"></script>
</body>
</html>