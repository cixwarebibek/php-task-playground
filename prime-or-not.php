<?php
    $number = 0;
    
    if($number>3){
        $text = ($number%2==0 || $number%3==0)?"$number is not prime number":"$number is prime number";
        echo $text;
    }
    elseif ($number==1||$number==2||$number==3){
        echo "$number is prime number";
    }
    else{
        echo "$number is not in consideration";
    }
    
?>