<?php
function writeJSON($file, $data) {
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
}
$data = [
    ['name' => 'Lada', 'year' => 2013],
    ['name' => 'BMW', 'year' => 2024],
    ['name' => 'Chevrolet', 'year' => 2007]
];
writeJSON('ex13.json', $data);