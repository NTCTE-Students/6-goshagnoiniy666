<?php
function searchAndReplace($file, $searchWord, $replaceWord) {
    $content = file_get_contents($file);
    $newContent = str_replace($searchWord, $replaceWord, $content);
    file_put_contents($file, $newContent);
}
$file = 'ex15.txt';
$searchWord = 'Bmw';
$replaceWord = 'Lada';
searchAndReplace($file, $searchWord, $replaceWord);