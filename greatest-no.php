<?php
    $firstNumber = 15;
    $secondNumber = 12;
    $thirdNumber = 10;

    if($firstNumber > $secondNumber)
    {
        if($firstNumber > $thirdNumber)
        {
            echo "$firstNumber is greatest among three";
        }
        else
        {
            echo "$thirdNumber is greatest among three";
        }
    }
    else if($secondNumber > $thirdNumber)
    {
        echo "$secondNumber is greatest among three";
    }
    else 
    {
        echo "$thirdNumber is greatest among three";
    }
//another approach of doing the same thing
    if($firstNumber>$secondNumber && $firstNumber>$thirdNumber)
    {
        echo "$firstNumber is greatest among three";
    }
    else if($secondNumber>$firstNumber && $secondNumber>$thirdNumber)
    {
        echo "$secondNumber is greatest among three";
    }
    else
    {
        echo "$thirdNumber is greatest among three";
    }

?>