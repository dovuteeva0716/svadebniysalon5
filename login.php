<?php
header('Content-Type: application/json');
include 'db.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// if (empty($email) || empty($password)) {
//     echo json_encode(['success' => false, 'error' => 'Заполните все поля']);
//     exit;
// }

$stmt = $conn->prepare("SELECT * FROM clients WHERE Email = ? AND Password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo json_encode(['success' => false, 'error' => 'Неверные данные']);
    exit;
} else {
    session_start();
    $_SESSION['user'] = $result->fetch_assoc();
    header('location: profile.php');
    echo json_encode(['success' => true]);
}
