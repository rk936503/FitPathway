<?php
// $a = readline("Enter the length: ");
// $b = readline("Enter the breadth: ");
// echo "The area of rectangle is: ".$a*$b;
// echo "\n";

$c = readline("Enter Physics marks: ");
$d = readline("Enter MAths marks: ");
$e = readline("Enter Chemistry marks: ");
$f = (($c+$d+$e)/300)*100;
$f = round($f, 2);
echo "Percentage is: ".$f."\n";

switch ($f) {
    case $f>=90 && $f<=100:
        echo "Grade is: O";
        break;
    case $f>=80 && $f<90:
        echo "Grade is: A+";
        break;
    case $f>70 && $f< 80:
        echo "Grade is: A";
        break;
}
?>