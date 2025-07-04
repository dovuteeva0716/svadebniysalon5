<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Свадебный салон</title>
    <script src="scrip.js"></script>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container">
    <header>
        <nav>
            <ul>
                <li><a href="index.html">О нас</a></li>
                <li><a href="index2.html">Каталог платьев</a></li>
                <li class="logo-item">
                    <a href="index.html">
                        <img src="img/logo.png" alt="Say Yes Logo" class="nav-logo">
                    </a>
                </li>
                <li><a href="index4.html">Контакты</a></li>
                <li><a href="index5.php">Личный кабинет</a></li>
            </ul>
        </nav>
    </header>
</div>

<div class="photo">
    <img src="img/главная.jpg" alt="Главное изображение свадебного салона">
</div>

<div class="quotee">
    <h1>Say Yes - предлагает свадебные платья в стилях: романтичный винтаж, дерзкий рок, таинственная готика и уютный прованс – для невест, которые ценят индивидуальность.</h1>
</div>

<div class="onas">
    <h2>О нас</h2>
</div>

<div class="infonas"> 
    <div class="infonas-img">
        <img src="img/1.png" width="600" height="400" alt="Фото салона">
    </div> 
    <div class="infonas-txt">
        <h2>В нашем салоне работают только дипломированные специалисты которые регулярно повышают квалификацию и следят за последними трендами в индустрии красоты.</h2> 
    </div>
</div>

<div class="infonas2"> 
    <div class="infonas2-img">
        <img src="img/2.png" alt="Фото интерьера салона">
    </div> 
    <div class="infonas2-txt">
        <h2>Мы верим, что истинная красота начинается с внутреннего комфорта Наша миссия – помогать вам раскрывать свою природную привлекательность, подчеркивать достоинства и чувствовать себя неотразимо в любой ситуации. </h2>
       
    </div>
</div>

<div class="coffee">
    <img src="img/coffee.png" alt="Кофе в свадебном салоне">
</div>

<div class="zvyozdi">
    <h2>Звезды в наших платьях</h2>
</div>

<div class="brides-gallery">
    <div class="brides-container">
        <div class="bride-card">
            <div class="bride-image">
                <img src="img/каспарианс.jpg" alt="Карина Каспарианс">
            </div>
            <div class="bride-info">
                <h3>Карина Каспарианс</h3>
                <p>В роскошном, блестящем платье с длинным шлейфом.</p>
            </div>
        </div>
        
        <div class="bride-card">
            <div class="bride-image">
                <img src="img/самойлова.jpg" alt="Оксана Самойлова">
            </div>
            <div class="bride-info">
                <h3>Оксана Самойлова</h3>
                <p>В платье с длинным шлейфом, вес которого вместе с фатой составлял почти 15 килограммов</p>
            </div>
        </div>
        
        <div class="bride-card">
            <div class="bride-image">
                <img src="img/голден.png" alt="Катя Голден">
            </div>
            <div class="bride-info">
                <h3>Катя Голден</h3>
                <p>Белое мини-платье с большими рукавами-фонариками и глубоким декольте.</p>
            </div>
        </div>
    </div>
</div>

<div class="poplarietovari">
    <h2>Популярные товары</h2>
</div>

<div class="dresses-container">
    <!-- Карточка платья Хайли -->
    <a href="vintazh1.html" class="dress-link">
        <div class="dress-card">
            <div class="dress-badge">Популярное</div>
            <div class="dress-image">
                <img src="img/vin1.png" alt="Свадебное платье Хайли">
            </div>
            <div class="dress-info">
                <h3 class="dress-title">Свадебное платье Karen</h3>
                <p class="dress-price">80 800, 00 ₽</p>
            </div>
        </div>
    </a>

    <!-- Карточка платья Ульяна -->
    <a href="vintazh4.html" class="dress-link">
        <div class="dress-card">
            <div class="dress-badge">Популярное</div>
            <div class="dress-image">
                <img src="img/vin6.png" alt="Свадебное платье Ульяна">
            </div>
            <div class="dress-info">
                <h3 class="dress-title">Свадебное платье Jeeves</h3>
                <p class="dress-price">72 900, 00 ₽</p>
            </div>
        </div>
    </a>

    <!-- Карточка платья Веннеса -->
    <a href="card7.html" class="dress-link">
        <div class="dress-card">
            <div class="dress-badge">Популярное</div>
            <div class="dress-image">
                <img src="img/card7.2.png" alt="Свадебное платье Веннеса">
            </div>
            <div class="dress-info">
                <h3 class="dress-title">Свадебное платье Ruba</h3>
                <p class="dress-price">47, 500 ₽</p>
            </div>
        </div>
    </a>
</div>

<div class="quote">
    <h1>Say Yes - предлагает свадебные платья в стилях: романтичный винтаж, дерзкий рок, таинственная готика и уютный прованс – для невест, которые ценят индивидуальность.</h1>
</div>

<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-left">
                <div class="contact-email">
                    <a href="mailto:sayyes@gmail.com">sayyes@gmail.com</a>
                </div>
                
                <div class="footer-social">
                    <a href="#" class="social-icon"><img src="img/Instagram.png" alt="Instagram"></a>
                    <a href="#" class="social-icon"><img src="img/vk.png" alt="VK"></a>
                    <a href="#" class="social-icon"><img src="img/teleg.png" alt="Telegram"></a>
                </div>
            </div>
            
            <div class="footer-right">
                <div class="contact-address">
                    <p>ул. Малая Никитская, дом 2/1, стр. 1</p>
                    <p>метро Арбатская (Арбатско-Покровская линия)</p>
                </div>
                
                <div class="contact-hours">
                    <p>Ждём вас с 08:00 до 22:00</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>