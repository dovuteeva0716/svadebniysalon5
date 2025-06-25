<?php
include 'db.php'; // Подключение к БД
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Отчеты свадебного салона</title>
    <link rel="stylesheet" href="reports.css">
</head>

<body>

    <div class="page-container">
        <header>
            <h1>📊 Отчеты свадебного салона</h1>
            <p>Страница содержит данные по различным аспектам работы салона.</p>
        </header>

        <?php
        $queries = [
            1 => [
                'title' => 'Список всех свадебных платьев определенного производителя "Ардиди"',
                'sql' => "SELECT Tittle, Size, Price FROM wedding_dresess WHERE Tittle = 'Ардиди'"
            ],
            2 => [
                'title' => 'Список всех услуг, предоставляемых свадебным салоном',
                'sql' => "SELECT DISTINCT 'Примерка' AS Service FROM fitting UNION SELECT DISTINCT 'Заказ платья' AS Service FROM orderr"
            ],
            3 => [
                'title' => 'Список клиентов, сделавших заказ на свадебное платье',
                'sql' => "SELECT DISTINCT c.Name, c.Email FROM clients c JOIN orderr o ON c.ID_clients = o.ID_clients"
            ],
            4 => [
                'title' => 'Список клиентов, ожидающих примерку свадебного платья',
                'sql' => "SELECT c.Name, c.Email FROM clients c JOIN fitting f ON c.ID_clients = f.ID_clients WHERE f.Status = 'Подтверждено'"
            ],
            5 => [
                'title' => 'Статус примерки свадебного платья для клиента с ID = 1',
                'sql' => "SELECT f.Date, f.Time, f.Status, w.Tittle FROM fitting f JOIN wedding_dresess w ON f.ID_wedding_dresess = w.ID_wedding_dresess WHERE f.ID_clients = 1"
            ],
            6 => [
                'title' => 'Список всех доступных мест для проведения торжеств',
                'sql' => "SELECT Description, Date FROM venuavailability WHERE Available = 'Доступный'"
            ],
            7 => [
                'title' => 'Клиенты, выбравшие указанное место, стиль и дополнительные услуги',
                'sql' => "SELECT c.Name, va.Description AS Place, d.Винтаж AS Style
              FROM clients c
              JOIN venuavailability va ON c.ID_clients = va.ID_clients
              JOIN orderr o ON c.ID_clients = o.ID_clients
              JOIN wedding_dresess w ON o.ID_wedding_dresess = w.ID_wedding_dresess
              JOIN dres_catalog d ON w.ID_catalog = d.ID_catalog
              WHERE va.Available = 'Доступный' AND d.Винтаж > 0;"
            ],
            8 => [
                'title' => 'Клиенты с торжеством в одном месте в указанный период с тематикой оформления',
                'sql' => "SELECT c.Name, va.Description AS Place, va.Date 
              FROM clients c 
              JOIN venuavailability va ON c.ID_clients = va.ID_clients 
              WHERE va.Description = 'Банкетный зал Центральный' 
                AND va.Date BETWEEN '2025-06-01' AND '2025-06-30' 
                AND EXISTS (
                  SELECT 1 
                  FROM orderr o
                  JOIN wedding_dresess w ON o.ID_wedding_dresess = w.ID_wedding_dresess
                  JOIN dres_catalog d ON w.ID_catalog = d.ID_catalog
                  WHERE o.ID_clients = c.ID_clients AND d.Винтаж = 1
                );"
            ],
            9 => [
                'title' => 'Клиенты с общей суммой их заказов',
                'sql' => "SELECT c.Name, SUM(w.Price) AS TotalAmount FROM clients c JOIN orderr o ON c.ID_clients = o.ID_clients JOIN wedding_dresess w ON o.ID_wedding_dresess = w.ID_wedding_dresess GROUP BY c.ID_clients"
            ],
            10 => [
                'title' => 'Клиенты, у которых заказы ожидают оплаты',
                'sql' => "SELECT c.Name, c.Email FROM clients c JOIN orderr o ON c.ID_clients = o.ID_clients WHERE o.Status = 'Ожидает оплаты'"
            ]
        ];

        foreach ($queries as $number => $report) {
            echo "<section class='report-section'>";
            echo "<h2>{$number}. {$report['title']}</h2>";

            $result = $conn->query($report['sql']);

            if ($result && $result->num_rows > 0) {
                echo "<table><tr>";
                while ($field = $result->fetch_field()) {
                    echo "<th>" . htmlspecialchars($field->name) . "</th>";
                }
                echo "</tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    foreach ($row as $value) {
                        echo "<td>" . htmlspecialchars($value) . "</td>";
                    }
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "<p>Нет данных для отображения.</p>";
            }

            echo "</section>";
        }
        ?>
    </div>

</body>

</html>