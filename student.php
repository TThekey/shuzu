<?php

class student{
    private $number;
    private $name;
    private $sex;
    private $class;

    function __construct($m,$n,$s,$c)
    {
        echo"构造函数开始执行";
        echo"<br>";
        $this->number=$m;
        $this->name=$n;
        $this->sex=$s;
        $this->class=$c;
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

    function getinfo(){
        echo "学号:".$this->number."<br>";
        echo "姓名:".$this->name."<br>";
        echo "性别:".$this->sex."<br>";
        echo "班级:".$this->class."<br>";
    }

    function __call($name, $arguments)
    {
        echo "Calling object method '$name' "
            . implode(', ', $arguments). "<br>";
    }
}

$stu= new student(1234,"张三","男","一班");
$stu->number=1235;
$stu->name="张三";
$stu->sex="男";
$stu->class="一班";
$stu->getinfo();
$stu->run("contest");




















?>