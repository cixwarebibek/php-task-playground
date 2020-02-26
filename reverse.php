<?php
    
    $originalNumber = 12345;  
    $reverseNumber = 0;  
    $num = $originalNumber;

    while ($num > 1)  {  
    $reminder = $num % 10;  
    $reverseNumber = ($reverseNumber * 10) + $reminder;  
    $num = ($num / 10);   }  
    echo "Reverse of $originalNumber is: $reverseNumber";  
?>