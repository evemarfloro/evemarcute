<?php
function factorial($number) {
    $fact = 1;
    
    for ($i = $number; $i > 0; $i--) {
        $fact *= $i;
    }
    
    return $fact;
}

function isStrongNumber($number) {
    $originalNumber = $number;
    $sum = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $sum += factorial($digit);
        $number = (int)($number / 10);
    }
    return $sum == $originalNumber;
}

$number = 141;
if (isStrongNumber($number)) {
    echo "$number is a strong number.";
} else {
    echo "$number is not a strong number.";
}
?>
