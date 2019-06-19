<?php
/**
 * 继承
 */

/*
 * 父类
 * */
class Father
{
    public $name;
    public function eat()
    {
        echo '调用父类的方法<br>';
    }
    public function __construct($name)
    {
        $this -> name = $name;
    }
}

/*
 * 子类
 * 子类继承父类的语法格式 :
 * class 子类名 extends 父类名 {}
 * 注意 :
 * 子类继承了父类,就拥有父类的所有属性和方法
 * 同时还拥有自己的属性
 * */
class Son extends Father
{

}

$obj = new Son('子类');
echo $obj -> name;
$obj -> eat();

