<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Свадебный салон</title>
    <link rel="stylesheet" href="main5.css">
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

    <div class="containerr">
        <div class="form-container">
            <form id="login-form" class="form" method="POST" action="login.php">
                <h2>Вход в систему</h2>
                <div class="form-group">
                    <label for="login-email">Email</label>
                    <input type="email" id="login-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="login-password">Пароль</label>
                    <input type="password" id="login-password" name="password" required>
                </div>
                <button type="submit" class="submit-btn">Войти</button>
                <button type="button" id="show-register" class="register-btn">Регистрация</button>
            </form>

            <form id="register-form" class="form hidden" method="POST" action="register.php">
                <h2>Регистрация</h2>
                <div class="form-group">
                    <label for="register-name">Имя</label>
                    <input type="text" id="register-name" name="NameC" required>
                </div>
                <div class="form-group">
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="register-password">Пароль</label>
                    <input type="password" id="register-password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="register-confirm-password">Подтвердите пароль</label>
                    <input type="password" id="register-confirm-password" name="confirm_password" required>
                </div>
                <button type="submit" class="submit-btn">Зарегистрироваться</button>
                <button type="button" id="show-login" class="login-btn">Уже есть аккаунт? Войти</button>
            </form>

            <div id="message" class="message"></div>
        </div>
    </div>
</body>

<script src="scrip.js"></script>

</html>