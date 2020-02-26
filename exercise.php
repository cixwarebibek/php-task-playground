<?php
    $num1 = 10;
    $num2 = 15;
    $result;
    
    $result = $num1 + $num2;
    echo "Addition of $num1 and $num2 is $result"; 
    echo "\n";
    $result = $num1 - $num2;
    echo "Subtraction of $num1 and $num2 is $result";
    echo "\n";
    $result = $num1 * $num2;
    echo "Multiplication of $num1 and $num2 is $result";
    echo "\n";
    $result = $num1 / $num2;
    echo "Division of $num1 by $num2 is $result";
    echo "\n";

    //circle action
    $radius = 4;
    const PI = 3.141;
    echo "Area of circle is ". (PI*$radius*$radius);
    echo "\n";
    echo "Circumference of circle is ". (2*PI*$radius);
    echo "\n";
    $principle = 20000;
    $time = 2;
    $rate = 15;
    echo "simple interest of amount $principle in $time years with $rate % rate is ". ($principle * $time * $rate/100);
    echo "\n";
    $temperature = 95;
    echo "celsius temperature of $temperature degree Fahrenheit is ". (($temperature - 32) * 5/9) . " degree";
    echo "\n";

    //
    $sub1 = 35;
    $sub2 = 56;
    $sub3 = 67;
    $sub4 = 45;
    $sub5 = 78;
    $sub6 = 86;
    $sub7 = 82;
    $sub8 = 84;
    $total;
    
    
    $total = ($sub1+$sub2+$sub3+$sub4+$sub5+$sub6+$sub7+$sub8);
    echo "Total marks obtained is $total";
    echo "\n";
    echo "Total marks in percentage is ". ($total/800 * 100);

?>