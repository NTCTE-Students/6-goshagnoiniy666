<?php
function writeLog($message) {
    $logFile = 'ex12.txt';
    $logMessage = date('Y-m-d H:i:s') . ' - ' . $message . "\n";
    file_put_contents($logFile, $logMessage, FILE_APPEND);
}
writeLog('Привет, мир!');