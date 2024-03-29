<?php

function checkAndRedirectBannedIP() {
    // Get user's IP address
    $user_ip = $_SERVER['REMOTE_ADDR'];
    
    // Path to the banned IP file
    $banned_file = "../banned.txt";

    // Check if the file exists
    if (file_exists($banned_file)) {
        // Read banned IP addresses from the file into an array
        $banned_ips = file($banned_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        // Check if user's IP is in the banned list
        if (in_array($user_ip, $banned_ips)) {
            // Redirect user to banned page
            header("Location: banned.php?ip=".$user_ip);
            exit(); // Stop further execution
        }
    }
}

// Call the function to check and redirect if necessary
checkAndRedirectBannedIP();

?>

