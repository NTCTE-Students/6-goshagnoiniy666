<?php
function appendToFile($filename, $data) {
    $file = fopen($filename, 'a+');
    fwrite($file, $data . PHP_EOL);
    fclose($file);
}
appendToFile("../ex3.txt", "Hello, world!");