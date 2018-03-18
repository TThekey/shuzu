<html>  
  <head>      
      <title>最大值-最小值</title>  
      </head>  
  <body>
<?php
function arrsub($arr){

    sort($arr);
    $min = $arr[0];

    rsort($arr);
    $max = $arr[0];

    $sub = $max - $min;

    return $sub;
}

$arr = array(1,2,3,4,5);

echo arrsub($arr);

?>
</body>
</html>
