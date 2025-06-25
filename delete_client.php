<?php
include 'db.php';

$id = intval($_GET['id']);

$stmt = $conn->prepare("DELETE FROM clients WHERE ID_clients = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: admin.php?table=clients");
} else {
    echo "Ошибка при удалении клиента: " . $stmt->error;
}
