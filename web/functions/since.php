<?php

function since($t){
// Current date
$currentDate = new DateTime();

// Date January 1, 1995
$date1995 = new DateTime($t);

// Calculate the interval
$interval = $date1995->diff($currentDate);

// Get the number of years
return $interval->y;

}
