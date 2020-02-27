<?php
  $array = ['a', 'b','c','d','e'];
  function reverse($array){
    $reverse=[];
    $count = count($array);
   
    for($i=$count -1; $i>=0; $i--)
    {
      $reverse[]= $array[$i];
      
    }
    return $reverse;
  }
  $output=reverse($array);
//   print_r($output);
  var_dump($output);
  echo "<br>";
  
?>
<!-- 
Sorting array in assending order using predefined function-->

<!DOCTYPE html>
<html>
<body>

<?php
echo "<br>";
$array =['5','3','1','4','2'];
sort($array);

$arrlength=count($array);
for($i=0;$i<$arrlength;$i++)
  {
  echo $array[$i];
  echo "<br>";
  }
?>
<!-- sorting array using user defined funcrion -->

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<?php
echo "<br>";
$array =['5','3','1','4','2'];

function assending_array($array){
  // $sort=[];
  $count = count($array);
  for ($i = 0; $i < $count - 1; $i++)
 {
  for($i=0; $i<$count-1; $i++){
    for($j=0; $j<$count-1-$i; $j++)
    {
        if($array[$j] > $array[$j+1])
          {
              $temp = $array[$j];
              $array[$j]=$array[$j+1];
              $array[$j+1]=$temp;                
          }         
    }      
}
  return $array;
 }
 
} 
$assendingOrder=assending_array($array);
print_r($assendingOrder);
?>

</body>
</html>


