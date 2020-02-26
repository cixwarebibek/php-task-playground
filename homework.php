<!-- //factorial -->

<?php
    $num =5;
    $fact =1;
     

    for ($i=1;$i<=$num;$i++){
        $fact*=$i;
        
        echo $fact."<br/>";  // this line gives the factorial pyramid.
    }

    echo 'The factorial of given number is :'. $fact; //this line shows only the total value of factorial 
?>

<!-- fibonacci -->
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

<!-- greast number_format -->

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

<!-- leap year -->
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

<!-- multiplication table   -->
<?php
    $num = 5;

    for($i=1;$i<=10;$i++){
        $m = $num*$i;
        echo "$num * $i = $m". "<br/>";
        echo "\n";
    }
?>

<!-- odd even php_check_syntax -->

<?php 
    $testNum = 0;

    if($testNum%2==0)
    {
        echo "$testNum is an even number <br/>";
    }
    else 
    {
        echo "$testNum is an odd number <br/>";
    }
?>
<!-- prime or not -->
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

<!-- reverse php_check_syntax -->
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