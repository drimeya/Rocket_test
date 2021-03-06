<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&family=Roboto:wght@500;900&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <div class="header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="header__logo col-4 offset-2 col-md-1 offset-md-0 col-lg-1 g-md-0 d-flex justify-content-center order-1 order-md-0">
                        <img src="img/logo.svg" alt="logo" class="d-block" >
                    </div>
                    <div class="header__adress col-6 offset-6 col-md-3 offset-md-0 col-lg-2 text-md-center my-sm-auto order-3 order-md-0 text-end">
                        <img src="icons/location.svg" alt="" class="d-none d-md-inline">
                        Ростов-на-Дону <br>
                        <span class="text-secondary d-none d-md-inline">ул. Ленина, 2Б</span>
                    </div>
                    <div class="header__phone col-6 col-md-4 col-lg-3 offset-lg-3 offset-xl-4 my-md-auto order-2 order-md-0 d-md-flex justify-content-end">
                        <img src="icons/whatsapp 1.svg" alt="whatsapp logo" class="d-none d-md-inline">
                        <span class="d-block text-end d-md-inline">+7(863) 000 00 00</span>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-2 g-md-0 my-auto justify-content-end d-none d-md-flex">
                        <button class="btn button openModal">Записаться на прием</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="hamburger d-md-none">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <nav class="menu">
            <div class="container">
                <div class="row">
                    <ul class="nav col-md-12 col-lg-7 g-md-0 d-flex flex-md-row flex-column justify-content-between mb-0">
                        <li class="nav-item"><a href="#" class="nav-link">О клинике</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Услуги</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Специалисты</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Цены</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Контакты</a></li>
                    </ul>
                </div>
                <button class="d-block d-sm-none btn button openModal">Записаться на прием</button>
            </div>
        </nav>
    </header>
    <main class="main overflow-hidden">
        <img src="img/main.jpg" alt="main" class="d-md-none w-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 my-auto">
                    <h2 class="title"> Многопрофильная клиника для детей и взрослых </h2>
                    <p class="paragraph"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <div class="main__bg col-xl-6 offset-xl-2 col-md-4 offset-md-0 d-none d-md-block">
                    <img src="img/main.jpg" alt="main">
                </div>
            </div>
        </div>
    </main>
    <section class="carousel">
        <div class="container">
            <?php include 'php/carousel.php' ?>
        </div>
        <div class="container">
            <div class="carousel__nav d-flex justify-content-center">
                <img src="icons/arrow-l.svg" alt="left"  id='left' name="left">
                <div class="carousel__slide_num align-self-center"><span> 1</span>/4</div>
                <img src="icons/arrow-r.svg" alt="tight" id='right'>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-6 col-md-1 g-sm-0 d-flex">
                    <img src="img/logo_footer.svg" alt="logo" class="d-block align-self-center footer__logo" >
                </div>
                <ul class="navbar-nav col-lg-6 offset-lg-2 col-md-8 offset-md-1 d-md-flex flex-row justify-content-around d-none">
                    <li class="nav-item align-self-center"><a href="#" class="nav-link">О клинике</a></li>
                    <li class="nav-item align-self-center"><a href="#" class="nav-link">Услуги</a></li>
                    <li class="nav-item align-self-center"><a href="#" class="nav-link">Специалисты</a></li>
                    <li class="nav-item align-self-center"><a href="#" class="nav-link">Цены</a></li>
                    <li class="nav-item align-self-center"><a href="#" class="nav-link">Контакты</a></li>
                </ul>
                <div class="col-6 offset-md-1 col-md-1 col-lg-2  d-flex justify-content-end">
                    <img src="icons/instagram.svg" alt="instagram" class="footer__icon">
                    <img src="icons/whatsapp.svg" alt="whatsapp" class="footer__icon">
                    <img src="icons/telegram.svg" alt="telegram" class="footer__icon">
                </div>
            </div>
        </div>
    </footer>
    <div class="popup">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="forms">
                <div class="hamburger hamburger_active popup_btn">
                    <span></span>
                    <span></span>
                </div>
                <form class="popup_form">
                    <input name="name" type="text" class="forms__item" placeholder="Ваше имя" required>
                    <input name="surname" type="text" class="forms__item" placeholder="Ваша фамилия" required>
                    <input name='phone' type="tel" class="forms__item tel" placeholder="Ваш номер телефона" required>
                    <button type="submit" class="btn button button__form" id="sendBtn">Записаться на прием</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/js-inputmask.js"></script>
    <script src="js/script.js"></script>
</body>
</html>