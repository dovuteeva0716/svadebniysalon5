<?php
include 'db.php';

// Получаем значение параметра table из адресной строки
$table = $_GET['table'] ?? null;

// Сопоставление названий таблиц с русскими заголовками
$ru_headers = [
    'clients' => ['ID', 'Имя', 'Телефон', 'Email', 'Дата регистрации', 'Роль', 'Пароль'],
    'dres_catalog' => ['ID', 'Винтаж', 'Рок', 'Прованс', 'Готика'],
    'fitting' => ['ID', 'Дата', 'Время', 'Статус', 'ID платья', 'ID клиента'],
    'orderr' => ['ID заказа', 'Дата', 'Статус', 'ID платья', 'ID клиента'],
    'venuavailability' => ['ID', 'Доступность', 'Описание', 'Дата', 'ID клиента'],
    'wedding_dresess' => ['ID', 'Название', 'Размер', 'Цена', 'ID каталога']
];
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Свадебный салон</title>
    <link rel="stylesheet" href="admin.css">
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

            <div class="sidebar">
                <div class="sidebar-header">
                    <h2>Свадебный салон</h2>
                </div>
                <ul class="sidebar-menu">
                    <li><a href="?table=clients" class="<?= $table == 'clients' ? 'active' : '' ?>">Клиенты</a></li>
                    <li><a href="?table=dres_catalog" class="<?= $table == 'dres_catalog' ? 'active' : '' ?>">Примерки</a></li>
                    <li><a href="?table=wedding_dresess" class="<?= $table == 'wedding_dresess' ? 'active' : '' ?>">Свадебные платья</a></li>
                    <li><a href="?table=orderr" class="<?= $table == 'orderr' ? 'active' : '' ?>">Заказы</a></li>
                    <li><a href="?table=fitting" class="<?= $table == 'fitting' ? 'active' : '' ?>">Каталог платьев</a></li>
                    <li><a href="?table=venuavailability" class="<?= $table == 'venuavailability' ? 'active' : '' ?>">Доступные места</a></li>
                    <li><a href="add_client.php">Добавить пользователя</a></li>
                    <li><a href="reports.html"></a></li>
                </ul>
            </div>
        </header>

        <div class="main-content">
            <?php if ($table && array_key_exists($table, $ru_headers)): ?>
               

                <?php
                $result = $conn->query("SELECT * FROM $table");
                if ($result && $result->num_rows > 0): ?>

                    <table border="2" cellpadding="10" cellspacing="0">
                        <tr>
                            <?php foreach ($ru_headers[$table] as $header): ?>
                                <th><?= htmlspecialchars($header) ?></th>
                            <?php endforeach; ?>
                            <?php if ($table === 'clients'): ?>
                                <th>Действия</th>
                            <?php endif; ?>
                        </tr>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <?php foreach ($row as $value): ?>
                                    <td><?= htmlspecialchars($value) ?></td>
                                <?php endforeach; ?>
                                <?php if ($table === 'clients'): ?>
                                    <td class="actions">
                                        <button onclick="location.href='edit_client.php?id=<?= $row['ID_clients'] ?>'">Изменить</button>
                                        <button onclick="if(confirm('Удалить запись?')) location.href='delete_client.php?id=<?= $row['ID_clients'] ?>'">Удалить</button>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endwhile; ?>
                    </table>

                <?php else: ?>
                    <p>Нет данных для отображения.</p>
                <?php endif; ?>

            <?php elseif (!$table): ?>
                <h1>Добро пожаловать в систему свадебного салона</h1>
                <p>Выберите раздел в меню слева для работы с системой.</p>
            <?php else: ?>
                <h2>Ошибка</h2>
                <p>Таблица не найдена.</p>
            <?php endif; ?>
        </div>

    </div>
</body>

</html>