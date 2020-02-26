<?php
    $num =5;
    $fact =1;
     

    for ($i=1;$i<=$num;$i++){
        $fact*=$i;
        
        echo $fact."<br/>";  // this line gives the factorial pyramid.
    }

    echo 'The factorial of given number is :'. $fact; //this line shows only the total value of factorial 
?>