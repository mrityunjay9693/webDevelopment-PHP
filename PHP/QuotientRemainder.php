<?php

$divisor = readline("Enter Divisor: \n");
$dividend = readline("Enter dividend: \n");

if($divisor){
    $quotient = ($dividend)/($divisor);
    $remainder = ($dividend)%($divisor);
    echo "Quotient: $quotient\nRemainder: $remainder\n";
}
else {
    echo "Error: Divison by Zero(0) is not possible.\n";
}