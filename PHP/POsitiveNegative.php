<?php

$number = readline("Enter your number: \n");

if ($number>0){
    echo "The number $number is Positive.\n";
}
elseif($number==0){
    echo "The number is Zero.\n";

}
else {
    echo "The number $number is Negative.\n ";
}