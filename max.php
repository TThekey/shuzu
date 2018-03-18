<html>  
  <head>      
      <title>数组下标最大</title>  
      </head>  
  <body>
<?php
function maxkey($arr){
    $maxval = max($arr);
    foreach($arr as $key=>$val){

        if($maxval == $val){

            $maxkey = $key;
        }
    }
    return $maxkey;
}

$arr = array(1,2,3,4,5);
echo maxkey($arr);
?>
</body>
</html>