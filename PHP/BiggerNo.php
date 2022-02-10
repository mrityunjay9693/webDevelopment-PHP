<?php

$a = readline("Enter 1st number");
$b = readline("Enter 2nd number");

if ($a>$b) {
    echo "Bigger number is $a.\n";
}
elseif($a==$b){
    echo "Both numbers are equals.\n";
}
else {
    echo "Bigger number is $b.\n";
}
