<?php
/**
 * 重写
 * 分为 :
 * 1.完全重写
 * 2.部分重写,在原有功能的基础上添加新功能
 * 3.重写构造器
 * 注意 :
 * 如果 类 前有 final 关键字,代表该类不能被继承
 * 如果 类中的方法前 有 final 关键字,代表该方法不能被重写
 */
class Father
{
    public $name;
    public $age;
    public function jump()
    {
        echo '我可以跳3米<br><br>';
    }
    public function work()
    {
        echo '父亲勤勤恳恳的工作';
    }
    public function __construct($name,$age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
}

class Son extends Father
{
    public $weight;
    public $height;
    // 完全重写 jump 方法
    public function jump()
    {
        echo '我可以跳5米<br><br>';
    }
    // 部分重写,即 在原有的基础上添加功能
    public function work()
    {
        // 在添加新功能前,使用 parent:: xx 将原有的功能放入进来
        parent::work();
        echo '后,又掌握了新技能<br>';
    }
    public function __construct($name,$age,$weight,$height)
    {
        // 此处不需要重复的初始化 name 和 age,只需要用关键词即可
        parent::__construct($name,$age);
        $this -> weight = $weight;
        $this -> height = $height;
    }
}

$obj_father = new Father('jscyl_father',50);
$obj_father -> jump();

$obj_son = new Son('jscyl_son',18,100,180);
$obj_son -> jump();
$obj_son -> work();

echo '儿子的姓名为 : ' . $obj_son -> name . '<br>';
echo '儿子的年龄为 : ' . $obj_son -> age . '<br>';
echo '儿子的体重为 : ' . $obj_son -> weight . '<br>';
echo '儿子的身高为 : ' . $obj_son -> height . '<br>';