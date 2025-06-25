<?php
include 'db.php';

$id = intval($_GET['id']);
$result = $conn->query("SELECT * FROM clients WHERE ID_clients = $id");

if ($result->num_rows === 0) {
    die("Клиент не найден.");
}

$client = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main5.css">
    <title>Редактировать клиента</title>
</head>

<body>
    <div class="containerr">
        <div class="form-container">
            <h2>Редактировать клиента</h2>
            <form action="update_client.php" method="post" class="form">
                <input type="hidden" name="ID_clients" value="<?= $client['ID_clients'] ?>">
                <div class="form-group">
                    <label for="Name">Имя:</label>
                    <input type="text" id="Name" name="Name" value="<?= htmlspecialchars($client['Name']) ?>">
                </div>
                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="email" id="Email" name="Email" value="<?= htmlspecialchars($client['Email']) ?>">
                </div>
                <div class="form-group">
                    <label for="Telephone">Телефон:</label>
                    <input type="tel" id="Telephone" name="Telephone" value="<?= $client['Telephone'] ?>">
                </div>
                <div class="form-group">
                    <label for="Telephone">Роль:</label>
                    <select name="Role">
                        <option value="Клиент" <?= $client['Role'] === 'Клиент' ? 'selected' : '' ?>>Клиент</option>
                        <option value="Администратор" <?= $client['Role'] === 'Администратор' ? 'selected' : '' ?>>Администратор</option>
                    </select>
                </div>
                <button type="submit" class="submit-btn">Сохранить изменения</button>
            </form>
        </div>
    </div>
</body>

</html>