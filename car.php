<?php
  class car
  {
      private $size;
      private $color;

      function __construct($s,$c)
      {
          echo"构造函数开始执行";
          echo"<br>";
          $this->size=$s;
          $this->color=$c;
      }
      function __toString()
      {
          return"自动调用toString"."<br>". $this->size."<br>".$this->color."<br>" ;
      }

      function __get($property_name)
      {
          echo "自动调用__get()";
          echo "<br>";
          if(isset($this->$property_name))
          {
              return($this->$property_name);
          }
          else
          {
              return(NULL);
          }
      }

      function __set($property_name, $value)
      {
          echo "自动调用__set()";
          echo "<br>";
          $this->$property_name = $value;
      }
  }

  class bus extends car{
      private $number;

      function __construct($s, $c,$n)
      {
          echo"子类构造函数开始执行";
          echo"<br>";
          $this->size=$s;
          $this->color=$c;
          $this->number=$n;
      }

      function __toString()
      {
          return "自动调用子类toString"."<br>".$this->size."<br>".$this->color."<br>".$this->number."<br>";
      }
  }




$aa=new car("small", "black");
$aa->size="small";
$aa->color="black";
  echo $aa;
  echo"型号：".$aa->size."<br>";
  echo"颜色：".$aa->color."<br>";

  $bb=new bus("big","white",20);
  echo $bb;

?>