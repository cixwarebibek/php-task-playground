<!-- gross salary -->
<?php
$sal=50000;
$bonos=($sal*15)/100;
$gross_salary=$sal+$bonos;
echo " The Gross Salary is $gross_salary";
echo "<br/>";
?>

<!-- //factorial -->

<?php
echo "<br/>";
    $num =10;
    $fact =1;
     

    for ($i=1;$i<=$num;$i++){
        $fact*=$i;
        
        echo $fact."<br/>";  // this line gives the factorial pyramid.
    }

    echo 'The factorial of given number is :'. $fact; //this line shows only the total value of factorial 
    echo "<br/>";
?>

<!-- fibonacci -->
<?php
    $a=0;
    $b=1;

    // echo $a ."<br/>".$b ."<br/>";
    echo "<br/>";
    echo "the fibonacci series is: <br/>";

    echo $a."<br/>".$b ."<br/>";
    while($a+$b<150) {
        $c =$a+$b;
        echo $c."<br/>";
        $a=$b;
        $b=$c;
    } ;
    echo "<br/>";
?>

<!-- greast number_format -->

<?php
    $firstNumber = 55;
    $secondNumber = 60;
    $thirdNumber = 20;

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
    // if($firstNumber>$secondNumber && $firstNumber>$thirdNumber)
    // {
    //     echo "$firstNumber is greatest among three";
    // }
    // else if($secondNumber>$firstNumber && $secondNumber>$thirdNumber)
    // {
    //     echo "$secondNumber is greatest among three";
    // }
    // else
    // {
    //     echo "$thirdNumber is greatest among three";
    // }
    echo "<br/>";

?>

<!-- leap year -->
<?php
 echo "<br/>";
    $year = 2020;
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
    echo "<br/>";
?>

<!-- multiplication table   -->
<?php
 echo "<br/>";
    $num = 7;

    for($i=1;$i<=10;$i++){
        $m = $num*$i;
        echo "$num * $i = $m". "<br/>";
        echo "\n";
    }
    echo "<br/>";
?>

<!-- odd even php_check_syntax -->

<?php 
 echo "<br/>";
    $testNum = 8;

    if($testNum%2==0)
    {
        echo "$testNum is an even number <br/>";
    }
    else 
    {
        echo "$testNum is an odd number <br/>";
    }
    echo "<br/>";
?>
<!-- prime or not -->

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

<!-- reverse php_check_syntax -->
<?php
     echo "<br/>";
    $originalNumber =12345;  
    $reverseNumber = 0;  
    $num = $originalNumber;

    while ($num > 1)  {  
    $reminder = $num % 10;  
    $reverseNumber = ($reverseNumber * 10) + $reminder;  
    $num = ($num / 10);   }  
    echo "Reverse of $originalNumber is: $reverseNumber";  
?>