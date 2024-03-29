<?php

function messageSubmitCounter($ipAddress){
// Check if IP address has submitted more than 3 times in the last hour
$logFile = '../ip_logs.txt';
$bannedFile = '../banned.txt';
$currentTime = time();
$oneHourAgo = $currentTime - 3600; // 3600 seconds = 1 hour
$ipLogData = file_exists($logFile) ? file_get_contents($logFile) : '';
$ipLogArray = explode("\n", $ipLogData);
$ipCount = 0;

foreach ($ipLogArray as $logEntry) {
    $logParts = explode('|', $logEntry);
    $logIp = isset($logParts[0]) ? trim($logParts[0]) : '';
    $logTime = isset($logParts[1]) ? (int)$logParts[1] : 0;

    if ($logIp === $ipAddress && $logTime > $oneHourAgo) {
        $ipCount++;
    }
}

// If IP address has submitted more than 3 times in the last hour, add it to banned.txt
if ($ipCount > 3) {
    file_put_contents($bannedFile, $ipAddress . "\n", FILE_APPEND);
}

// Log the IP address and current time
$logEntry = $ipAddress . '|' . $currentTime . "\n";
file_put_contents($logFile, $logEntry, FILE_APPEND);
}
