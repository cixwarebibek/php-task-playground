<?php
  
  function add($num)
  {
    return $num+5;
  }
  function mul($num)
  {
      return add($num)*5;
  }
  function sub($num)
  {
      return mul($num)-10;
  }  
  $num=5;
  $output=sub($num);
  echo $output;
?>