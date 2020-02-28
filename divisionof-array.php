
    <?php
        // $array =['5','3','1','4','2','8','6','15','50','25'];
        // $count = count($array);
        // $arr1=[];
        // $arr2=[];
        // function assending_array($array)
        // {
           
        //     $count = count($array);
           
        //     for($i=0; $i<$count-1; $i++)
        //     {
        //       for($j=0; $j<$count-1-$i; $j++)
        //         {
        //           if($array[$j] > $array[$j+1])
        //             {
        //                 $temp = $array[$j];
        //                 $array[$j]=$array[$j+1];
        //                 $array[$j+1]=$temp;                
        //             }         
        //         }      
        //     }
        //     return $array;
           
          

        // } 
        // $assendingOrder=assending_array($array);
        // print_r($assendingOrder);
       
        // echo '<br>';
        //  echo '<br>';
        //  for($i=0; $i<5; $i++)
        //  {
        //      $arr1[]= $output[$i];
   
        // }
        // print_r($arr1);
        // echo '<br>';
        // echo '<br>';
        // for($i=5; $i<10; $i++)
        // {
        //   $arr2[]= $output[$i];
   
        // }
        // print_r($arr2);
 
    ?>


<?php 
$array=['15','20','5','4','3','25','6','51','99','80'];
$arr1=[];
$arr2=[];

function sortArray($array)
{
    // sort($array);
    $count = count ($array)
    for($i=0; $i<$count-1; $i++)
        {
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

function sortAndFilter($array)
{
    //use the global variables
    global $arr1;
    global $arr2;

    $sorted = sortArray($array);

    //get array count and calculate the split size
    $arrSize = count ($sorted);
    $splitSize = (int) ($arrSize / 2)-1;

    //start populating the values

    foreach ($sorted as $key => $value)
    {
        if ($key <= $splitSize)
        {
            $arr1[] = $value;
        }
        else
        {
            $arr2[] = $value;
        }
    }

}

sortAndFilter($array); // function call

// print results


echo json_encode($arr1);
echo '<br/>';
echo json_encode($arr2);
?>