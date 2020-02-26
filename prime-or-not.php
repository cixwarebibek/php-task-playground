<?php
    $num=12;
    $reminder=0;
    for($i=2; $i<$num; $i++){
        if($num % $i == 0)
        {
            $reminder=1;
            break;
        }
    }
    if($reminder==0)
        echo "$num is  prime number";
    else
        echo "$num is not prime number";
        echo "<br/>";
    
?>