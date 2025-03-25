<?php
function countLines($filename) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return count($lines);
}
$filename = "ex1.txt";
$lineCount = countLines($filename);
print("Количество строк в файле: $lineCount");