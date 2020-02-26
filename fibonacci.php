<?php
    $a=0;
    $b=1;

    // echo $a ."<br/>".$b ."<br/>";
    

    echo $a."<br/>".$b ."<br/>";
    while($a+$b<150) {
        $c =$a+$b;
        echo $c."<br/>";
        $a=$b;
        $b=$c;
    } ;
?>