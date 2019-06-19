<?php
/**
 * 构造方法和this关键字
 */
class Person
{
    public $name;
    public $age;
    public function test1(){
        echo '我是test1<br><br>';
    }
    public function test2(){
        // 如果在test2之前调用test1,则 :
        $this -> test1();
        echo '我是test2';
    }
    public function __construct($name,$age)
    {
        /*
         * 此处为构造方法
         * 在类中如何访问自己的属性或方法
         * $this 代表的就是当前对象
         * */
        $this -> name = $name;
        $this -> age = $age;
    }
}

// 在构造方法中,此时的 $this 代表的是 $obj_1
$obj_1 = new Person('jscyl_1',18);
// 在构造方法中,此时的 $this 代表的是 $obj_2
$obj_2 = new Person('jscyl_2',20);

// 在类中的方法中调用该类中其他的方法
$obj_3 = new Person('jscyl_2',20);
$obj_3 -> test2();