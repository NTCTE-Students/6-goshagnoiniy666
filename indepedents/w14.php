<?php
function backupFiles($sourceDir, $backupDir) {
    $files = glob($sourceDir . '/*');
    if (!file_exists($backupDir)) {
        mkdir($backupDir);
    }
    foreach ($files as $file) {
        $fileName = basename($file);
        $backupFile = $backupDir . '/' . $fileName . '_' . date('Y-m-d') . '.' . pathinfo($file, PATHINFO_EXTENSION);
        copy($file, $backupFile);
    }
    
    print('Резервная копия успешно создана.<br>');
}
backupFiles('../independents', '/independents/copy');