
<?php
$array = [25,48,12,4,50];
$max = $array[0];
foreach($array as $key => $value)
{
    if ($max < $value)
    {
        $max = $value ;
    }
}
print 'the max num is:'.  $max;
echo"<br/>";
echo"<br/>";
?>


<?php
  $array = [19, 90, 4, 29, 1, 23, 5, 88, 73, 32, 42, 28, 91, 8, 52, 76, 82, 63, 33,
   20, 12, 9, 71, 53, 87, 69, 70, 41, 45, 2, 58, 61, 64, 18, 0, 7, 30, 86, 80, 75, 39, 56, 81, 51, 84, 83, 89, 50, 36, 77];
//   sort($array);
  $arr1=[];
  $arr2=[];
  $arr3=[];
  $arr4=[];
  $arr5=[];
  $arr6=[];
  $arr7=[];
  $arr8=[];
  $arr9=[];
  $arr10=[];
  $count = count($array);
  for($i=0; $i<$count-1; $i++)
  {
    if($array[$i]<=9)
    {
        $arr1[]=$array[$i];
    }
    elseif($array[$i]>9 && $array[$i]<=19)
    {
        $arr2[]=$array[$i];
    }
    elseif($array[$i]>19 && $array[$i]<=29)
    {
        $arr3[]=$array[$i];
    }
    elseif($array[$i]>29 && $array[$i]<=39)
    {
        $arr4[]=$array[$i];
    }
    elseif($array[$i]>39 && $array[$i]<=49)
    {
        $arr5[]=$array[$i];
    }
    elseif($array[$i]>49 && $array[$i]<=59)
    {
        $arr6[]=$array[$i];
    }
    elseif($array[$i]>59 && $array[$i]<=69)
    {
        $arr7[]=$array[$i];
    }
    elseif($array[$i]>69 && $array[$i]<=79)
    {
        $arr8[]=$array[$i];
    }
    elseif($array[$i]>79 && $array[$i]<=89)
    {
        $arr9[]=$array[$i];
    }
    elseif($array[$i]>89 && $array[$i]<=99)
    {
        $arr10[]=$array[$i];
    } 
 }
  print_r($arr1);
  echo "<br/>";
  echo "<br/>";
  print_r($arr2);
  echo "<br/>";
  echo "<br/>";
  print_r($arr3);
  echo "<br/>";
  echo "<br/>";
  print_r($arr4);
  echo "<br/>";
  echo "<br/>";
  print_r($arr5);
  echo "<br/>";
  echo "<br/>";
  print_r($arr6);
  echo "<br/>";
  echo "<br/>";
  print_r($arr7);
  echo "<br/>";
  echo "<br/>";
  print_r($arr8);
  echo "<br/>";
  echo "<br/>";
  print_r($arr9);
  echo "<br/>";
  echo "<br/>";
  print_r($arr10);
  

?>