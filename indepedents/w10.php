<?php
function writeCSV($file, $data) {
    $fp = fopen($file, 'w');
    foreach ($data as $row) {
        fputcsv($fp, $row);
    }
    fclose($fp);
    print ("Данные успешно записаны в CSV-файл.");
}
$data = [
    ['name' => 'John', 'age' => 30],
    ['name' => 'Jane', 'age' => 25],
    ['name' => 'Bob', 'age' => 40]
];
writeCSV('ex10.csv', $data);