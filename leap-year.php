<?php
    $year = 1700;
        if ($year%4==0 && $year%100!=0)
        {
            echo "$year is leap year";
        }
        elseif ($year%400 == 0)
        {
            echo "$year is leap year";
        }
        else 
        {
            echo "$year is not leap year";
        }
        echo "<br/>";
    $text = (($year%4===0 && $year%100!==0) || $year%400 === 0)?"$year is leap year":"$year is not leap year";
    echo $text;
?>