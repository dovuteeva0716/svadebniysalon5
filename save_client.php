<?php
include 'db.php';

// Получаем данные из формы
$name = $_POST['Name'] ?? '';
$email = $_POST['Email'] ?? '';
$password = $_POST['Password'] ?? '';
$telephone = $_POST['Telephone'] ?? '';
$role = $_POST['Role'] ?? 'Клиент';
$date = date('Y-m-d');


// Подготавливаем SQL-запрос
$stmt = $conn->prepare("INSERT INTO clients (Name, Email, Password, Telephone, Role, Registration_date) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $password, $telephone, $role, $date);

if ($stmt->execute()) {
    header("Location: admin.php?table=clients");
    exit();
} else {
    echo "Ошибка при добавлении клиента: " . $stmt->error;
}
