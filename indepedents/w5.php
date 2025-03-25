<?php
function searchWord($filename, $word) {
    $count = 0;
    $file = fopen($filename, 'r');
    while (!feof($file)) {
        $line = fgets($file);
        if (strpos($line, $word) !== false) {
            $count++;
        }
    }
    fclose($file);
    return $count;
}
$filename = "ex1.txt";
$word = "CS:GO";
$count = searchWord($filename, $word);
print("Количество вхождений слова \"$word\": $count");