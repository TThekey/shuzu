<html>  
  <head>      
      <title>奇数递增</title>  
      </head>  
  <body>
<?php
function arrsort($first,$length){

    $arr = array();
    for($i=$first;$i<=$length;$i++){

        $arr[] = $i*2-1;
    }
    return $arr;
}

$arr1 = arrsort(1,10);
print_r($arr1);
?>
</body>
</html>
