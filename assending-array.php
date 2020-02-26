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
Sorting array in assending order -->

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

</body>
</html>
