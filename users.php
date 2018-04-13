<?php


interface user{
    function price($p);
}

class noumaluser implements user{
       private  $count=1;
       function price($p)
       {
           return $p*$this->count;
       }
}

class vipuser implements user{
    private  $count=0.8;
    function price($p)
    {
        return $p*$this->count;
    }
}

class inneruser implements user{
    private  $count=0.5;
    function price($p)
    {
        return $p*$this->count;
    }
}

$price=1000;
$noumal=new noumaluser();
$vip=new vipuser();
$inner=new inneruser();

echo"原价1000"."<br>";
echo"noumal用户:".$noumal->price($price)."<br>";
echo"vip用户:".$vip->price($price)."<br>";
echo"inner用户:".$inner->price($price)."<br>";


















?>