<?php
/**
 * 访问权限
 *  public     公共的
 *      1.可以在类的外部直接访问
 *      2.允许继承
 *  protected  受保护的
 *      1.不可以在类的外部直接访问
 *      2.允许继承
 *  private    私有的
 *     1.不可以在类的外部直接访问
 *     2.不允许继承
 */
class Father
{
    public $name;
    protected $age;
    private $sex;
    public function __construct($name,$age,$sex)
    {
        $this -> name = '姓名 : ' . $name . '<br><br>';
        $this -> age = '年龄 : ' . $age . '<br><br>';
        $this -> height = '性别 : ' . $sex . '<br><br>';
    }
}

class Son extends Father
{
    public function say()
    {
        echo '我的姓名 : ' . $this -> name . '<br><br>';
        echo '我的年龄 : ' . $this -> age . '<br><br>';
        //echo '我的性别 : ' . $this -> sex . '<br><br>'; // 此处会报错 -- Undefined property 即找不到该属性
    }
}

$obj = new Father('jscyl',18,'男');
echo $obj -> name;
// 以下两个输出会报错 -- Undefined property 即找不到该属性
//echo $obj -> age;
//echo $obj -> sex;

$obj_2 = new Son('jscyl',18,'男');
$obj_2 -> say();