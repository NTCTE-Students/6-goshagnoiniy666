<?php
function writeFile($filename, $data) {
$filename = '../ex2.txt';
$data = 'Hello, world!';
$result = file_put_contents($filename, $data);
if ($result !== false) {
    print('Данные успешно записаны в файл ex2.txt.');
} else {
    print('Ошибка при записи в файл ex2.txt.');
}
}
writeFile("../ex2.txt", "Hello, world!");