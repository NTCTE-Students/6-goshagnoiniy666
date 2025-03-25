<?php
if (file_exists(filename: 'ex1.txt')) {
    $file = fopen(filename: 'ex1.txt', mode: "r");
}
while (($line = fgets(stream: $file)) !== false) {
    print("{$line}<br>");
}