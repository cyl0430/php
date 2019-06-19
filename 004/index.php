<?php
/**
 * 运算符
 * 算数运算符 + - * / %(php中这里叫模 不叫取余,实质上还是取余) -(取反) .(并置)
 * 赋值运算符 ++ -- = += -= *= /= %= .=(连接两个字符串)
 * 比较运算符 > < >= <= == === != !=== <>(不等于)
 * 逻辑运算符 and(与) or(或) &&(与) ||(或) !(非) aorb(异或)
 *      注意 : 非0即为真
 * 数组运算符 + == === != !=== <>
 * 三元运算符 x == true ? 'a' : 'b'
 */
$a = 1;
$b = 2;
$c = 3;
$d = 0;
$result = $a + $b;

// 算数运算符 加 +
var_dump($result); // 输出结果为 : int 3

// 算数运算符 取反 -
var_dump(-$a); // 输出结果为 : int -1

// 算数运算符 并置 . 即 连接两个字符串
var_dump($a . $b); // 输出结果为 : string '12' (length=2)

// 赋值运算符 .= 连接两个字符串
var_dump($a .= $c ); // 输出结果为 : string '13' (length=2)

// 比较运算符 <>  即 不等于 返回true或false
var_dump($a <> $b); // 输出结果为 : boolean true

/**
 * 逻辑运算符 and 即 与
 * 如果两侧的值同时为true,返回true 反之 只要有一个为false 就返回false
 * && 同理
 */
var_dump($a and $b); // 输出结果为 : boolean true

/**
 * 逻辑运算符 or 即 或
 * 如果两侧的值只要有一个true,就返回true 反之 如果都是false 则 返回false
 * || 同理
 * <> 同理
 */
var_dump($a or $d); // 输出结果为 : boolean true
var_dump($d or $d); // 输出结果为 : boolean false

/**
 * 三元运算符
 * x == true ? 'a' : 'b'
 * 如果 x 为 真 则 取 a 反之 则取 b
 */

$b == 2 ? $a = 2 : $a = 3;
var_dump($a); // 输出结果为 : int 2

/**
 * 值为负数的特殊情况
 * 1.非0即为真
 * 2.浮点型的0.0000 依旧返回false
 * 3.空字符串 '' 也返回false
 * 4.空字符串 '0' 也返回false,但是如果是 '0.00' 这种,则会返回true
 * 5.空数组
 * 6.null
 */
