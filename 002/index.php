<?php
/**
 * 数据类型 : 共分为3大类7小类
 * 标量 :
 *      String（字符串）,
 *      Integer（整型）,
 *      Float（浮点型）,
 *      Boolean（布尔型）,
 * 混合类型 :
 *      Array（数组）,
 *      Object（对象）,
 *          在 PHP 中，对象必须声明。
 *          首先，你必须使用class关键字声明类对象--类是可以包含属性和方法的结构
 *          然后我们在类中定义数据类型
 *          然后在实例化的类中使用数据类型
 * 特殊类型 :
 *      NULL（空值）
 */

$str = 'jscyl_0'; // 字符串
$number = 24; // 整型
$float = '3.1415926'; //浮点型
$bool = 123; // 布尔型
$null = null; // 空值
$arr = ["Volvo","BMW","Toyota"]; // 数组

/**
 * 强制数据类型转换
 * gettype(x) 只返回数据类型 -- 一般不用
 * intval(x) 字符串转整型
 * floatval(x) 字符串转浮点型
 * strval(x) 数字转字符串
 * boolval(x) 数字转布尔类型
 * 空字符串转整型 ( 特殊 : 输出结果为0 数据类型为 integer-整型 )
 * 空字符串转浮点型 ( 特殊 : 输出结果为 0 数据类型为  double-双精度浮点型)
 * 空字符串转字符串 ( 特殊 : 输出结果为 空字符串 数据类型为  string-字符串)
 */

// 得到数据类型
echo gettype($str); // 输出结果为 : string

// 字符串转整型 -- 会默认干掉该字符串之中字符串,仅留下整数
var_dump(intval($str)); // 输出结果为 : int 0

// 字符串转浮点型 -- 会默认干掉该字符串之中字符串,仅留下小数
var_dump(floatval($float)); // 输出结果为 : float 3.1415926

// 数字转字符串
var_dump(strval($number)); // 输出结果为 : string '24' (length=2)

// 数字转布尔类型
var_dump(boolval($bool)); // 输出结果为 : boolean true

// 空字符串转整型 ( 特殊 : 输出结果为0 数据类型为 integer-整型 )
var_dump(intval($null)); // 输出结果为 : int 0

// 空字符串转浮点型 ( 特殊 : 输出结果为 0 数据类型为  double-浮点型)
var_dump(floatval($null)); // 输出结果为 : float 0

// 空字符串转字符串 ( 特殊 : 输出结果为 空字符串 数据类型为  string-字符串)
var_dump(strval($null)); // 输出结果为 : string '' (length=0)

/**
 * 判断数据类型
 * is_array(); 数组
 * is_string(); 字符串
 * is_bool(); 布尔
 * is_float(); 浮点型
 * is_object(); 对象
 * is_int(); 整型
 * is_numeric(); 数值
 * is_resource(); 资源
 * is_null(); 空
 * is_scalar(); 标量
 * */

var_dump(is_string($str)); // 输出结果为 boolean true


