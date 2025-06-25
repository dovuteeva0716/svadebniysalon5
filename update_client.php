<?php
include 'db.php';

$id = intval($_POST['ID_clients']);
$name = $_POST['Name'];
$email = $_POST['Email'];
$telephone = $_POST['Telephone'];
$role = $_POST['Role'];

$stmt = $conn->prepare("UPDATE clients SET Name = ?, Email = ?, Telephone = ?, Role = ? WHERE ID_clients = ?");
$stmt->bind_param("ssssi", $name, $email, $telephone, $role, $id);

if ($stmt->execute()) {
    header("Location: admin.php?table=clients");
} else {
    echo "Ошибка при обновлении клиента: " . $stmt->error;
}
