<?php
include 'config.php';
$file = fopen('dump.csv', 'w');
fputcsv($file, ['data']);
$res = $conn->query('SELECT * FROM logs');
while ($row = mysqli_fetch_assoc($res)) {
    fputcsv($file, [$row['log']]);
}
fclose($file);
echo "Data dumped to dump.csv";