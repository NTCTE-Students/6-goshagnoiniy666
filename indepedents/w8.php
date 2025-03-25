<?php
function renameFile($oldName, $newName) {
    if (file_exists($newName)) {
        print("Ошибка: Файл с новым именем уже существует!\n");
    } else {
        rename($oldName, $newName);
    }
}
renameFile("ex8.txt", "exx8.txt");