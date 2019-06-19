<?php
/**
 * 类和对象
 */

/*
 * 创建类
 * 注意 : 类名必须是大写开头 + 驼峰命名
 * */
class PersonClass
{
    public $age = 18;
    public function eat()
    {
        echo '类中的方法';
    }
}

/**
 * 创建对象
 * 语法一 :
 * 第一步 : 先创建类
 * 第二步 : 再 new 对象名()
 */
$obj_1 = new PersonClass();
var_dump($obj_1);

/**
 * 创建对象
 * 语法二 :
 * 第一步 : 先创建类
 * 第二步 : 将类名当做字符串赋值给一个字符串
 * 第三步 : 再 new 赋值后的字符串名()
 */
$string = 'PersonClass';
$obj_2 = new $string();
var_dump($obj_2);

/*
 * 访问类中的属性或方法
 * 通过 -> 该符号可得到类中的属性或方法
 * 即 :
 * 对象名 -> 方法() / 属性
 * 注意 :
 * 1.此时获取类中的属性或方法,一定不要在属性或方法前添加 $
 * 2.方法名以 () 结尾
 * */
var_dump($obj_1 -> age);
$obj_1 -> eat();
