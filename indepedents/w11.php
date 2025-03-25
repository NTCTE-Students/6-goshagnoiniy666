<?php
// загружен ли файл
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $target_dir = __DIR__ . '/../uploads/';
    $target_file = $target_dir . basename($_FILES['file']['name']);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // является ли изображением
    $check = getimagesize($_FILES['file']['tmp_name']);
    if ($check !== false) {
        print("Файл является изображением - {$check['mime']}<br>");
        $uploadOk = 1;
    } else {
        print('Файл не является изображением.<br>');
        $uploadOk = 0;
    }
    // проверяем размер файла
    if ($_FILES['file']['size'] > 2000000) {
        print('Файл слишком большой.<br>');
        $uploadOk = 0;
    }
    // разрешаем только определенные форматы файлов
    if ( $fileType != 'png') {
        print('Разрешены только файлы  PNG.<br>');
        $uploadOk = 0;
    }
    // можно ли загружать файл
    if ($uploadOk == 0) {
        print('Файл не был загружен.<br>');
    } else {
        // пытаемся загрузить файл
        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
            print('Файл ' . basename($_FILES['file']['name']) . ' был успешно загружен.<br>');
        } else {
            print('Ошибка при загрузке файла.<br>');
        }
    }
} else {
    print('Ошибка: файл не был загружен.<br>');
}