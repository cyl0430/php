<?php
/**
 * 变量 :
 * 命名规则
 *      1.变量以 $ 符号开始，后面跟着变量的名称
 *      2.变量名必须以字母或者下划线字符开始
 *      3.变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）
 *      4.变量名不能包含空格
 *      5.变量名是区分大小写的（$y 和 $Y 是两个不同的变量）
 * 有三种不同的变量作用域：
 * local（局部）
 *      函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。
 * global（全局）
 *      函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问。
 *      global 关键词用于在函数内访问全局变量
 *      要做到这一点，请在（函数内部）变量前面使用 global 关键词
 * static（静态）
 *      通常，当函数完成/执行后，会删除所有变量。
 *      不过，有时我需要不删除某个局部变量。
 *      要完成这一点，请在您首次声明变量时使用 static 关键词
*/

$x = 1;
$y = 2;

function localFun(){
    static $z = 0;
    $x = 2;
    var_dump($x);// 输出结果为 2 原因 : 此时的$x为局部变量,承接不了外部的$x的值
    global $y; // 此处通过添加关键词的方式调用函数体外部的值
    var_dump($x + $y);// 输出结果为 4 原因 : 此时通过在变量$y的前方添加了 global 关键词,使其可以调用函数体外部的值
    $z++;
    var_dump($z); // 输出结果为 1
}

localFun();
var_dump($x + $y);// 输出结果为 3