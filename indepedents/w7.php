<?php
function deleteFile($file) {
    if (file_exists($file)) {
        unlink($file);
    } else {
        print("Ошибка: Файл не найден!\n");
    }
}
deleteFile("ex7.txt");