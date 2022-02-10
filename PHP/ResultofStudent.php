<?php

echo "----------------------Report Card-----------------\n";

$Sub_001 = readline("Enter marks of Physics: \n");
$Sub_002 = readline("Enter marks of Chemistry: \n");
$Sub_003 = readline("Enter marks of Mathematics: \n");
$Sub_004 = readline("Enter marks of English(Language 1): \n");
$Sub_005 = readline("Enter marks of Hindi(Language 2): \n");

echo "----------------------RESULT----------------------\n";
$total_marks = $Sub_001 + $Sub_002 + $Sub_003 + $Sub_004 + $Sub_005;
$percentage = $total_marks / 5;

if ($percentage>=90) {
    echo "Percentage: $percentage\tResult: Pass\tDivision: First\nRemark: Very Good.\n";
}
else if ($percentage>=60) {
    echo "Percentage: $percentage\tResult: Pass\tDivision: First\nRemark: Good.\n";
}
else if ($percentage>=50) {
    echo "Percentage: $percentage\tResult: Pass\tDivision: Second\nRemark: Average.\n";
}
else if ($percentage>=35) {
    echo "Percentage: $percentage\tResult: Pass\tDivision: Third\nRemark: Below Average.\n";
}
else {
    echo "Percentage: $percentage\tResult: Faile\tDivision: -----\nRemark: Very Poor. Try Again.\nDo your best.\n";
}
