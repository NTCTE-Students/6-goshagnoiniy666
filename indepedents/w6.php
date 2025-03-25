<?php
function copyFile($source, $destination) {
    if (file_exists($source)) {
        if (!file_exists($destination)) {
            copy($source, $destination);
        } else {
            print("Ошибка: Файл назначения уже существует!");
        }
    } else {
        print("Ошибка: Исходный файл не найден!");
    }
}
copyFile("ex1.txt", "ex6.txt");