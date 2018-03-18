<html>  
  <head>      
      <title>数组逆序存放</title>  
      </head>  
  <body>
<?php
$arr = array("a","b","c",1,10);
$i = "";//要替换位置的数的下标
$j = "";//临时变量
$k = "";//被替换位置的数的下标

$len = count($arr);
$half_len = floor($len/2);//向下取整，取整的值是循环的次数

for($i=0;$i<$half_len;$i++){

    $j = $arr[$i];

    //判断数组个数奇偶
    if($len%2!=0){ //奇数

        $k = $half_len*2-$i;
    }else{

        //偶数
        $k = $half_len*2-$i-1;
    }

    $arr[$i] = $arr[$k];
    $arr[$k] = $j;
}

echo "<pre>";
print_r($arr);
echo "</pre>";



?>
</body>
</html>
