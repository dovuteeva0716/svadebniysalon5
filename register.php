<?php
header('Content-Type: application/json');
include 'db.php';

$name = $_POST['NameC'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirm = $_POST['confirm_password'] ?? '';
$role = 'Клиент';

// if (empty($name) || empty($email) || empty($password) || empty($confirm)) {
//     echo json_encode(['success' => false, 'error' => 'Заполните все поля']);
//     exit;
// }

if ($password !== $confirm) {
    echo json_encode(['success' => false, 'error' => 'Пароли не совпадают']);
    echo 'Пароли не совпадают';
    exit;
}

$stmt = $conn->prepare("INSERT INTO clients (Name, Email, Password, Role) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $password, $role);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);

} else {
    echo json_encode(['success' => false, 'error' => 'Ошибка регистрации'. $stmt->error]);
    echo 'Ошибка регистрации';
}
