<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить клиента</title>
    <link rel="stylesheet" href="admin.css">
     <link rel="stylesheet" href="main5.css">
</head>

<body>
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

        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Свадебный салон</h2>
            </div>
            <ul class="sidebar-menu">
                <li><a href="index.php">Главная</a></li>
                <li><a href="add_client.php" class="active">Добавить клиента</a></li>
                <li><a href="admin.php?table=clients">Список клиентов</a></li>
            </ul>
        </div>
    </header>


    <div class="main-content">
        <div class="containerr">
            <div class="form-container">
                <h2>Добавить нового клиента</h2>
                <form action="save_client.php" method="post" class="form">
                    <div class="form-group">
                        <label for="Name">Имя:</label>
                        <input type="text" id="Name" name="Name" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email:</label>
                        <input type="email" id="Email" name="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Email:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="Telephone">Телефон:</label>
                        <input type="tel" id="Telephone" name="Telephone" required>
                    </div>
                    <div class="form-group">
                        <label for="Role">Роль:</label>
                        <select name="Role">
                            <option value="Клиент">Клиент</option>
                            <option value="Администратор">Администратор</option>
                        </select>
                    </div>
                    <button type="submit" class="submit-btn">Добавить клиента</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>