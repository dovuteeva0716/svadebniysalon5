<?php
// profile.php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index5.php');
    exit;
}

$user = $_SESSION['user'];

// Проверяем, является ли пользователь администратором
if ($user['Role'] === 'Администратор') {
    header('Location: admin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="profile.css">
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
        <div class="profile-card">
            <h1>Добро пожаловать, <?php echo htmlspecialchars($user['Name']); ?>!</h1>
            
            <div class="profile-info">
                <div class="info-item">
                    <span class="info-label">Email:</span>
                    <span><?php echo htmlspecialchars($user['Email']); ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Статус:</span>
                    <span><?php echo htmlspecialchars($user['Role']); ?></span>
                </div>
            </div>
            
            <div class="fitting-card">
                <h2 class="fitting-title">Ближайшая примерка</h2>
                <div class="fitting-details">
                    <div class="detail-item">
                        <div class="detail-label">Платье</div>
                        <div>Хайли</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Дата</div>
                        <div>12.06.2025</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Время</div>
                        <div>15:30</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Статус</div>
                        <div>Подтверждено</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>