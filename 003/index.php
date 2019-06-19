<?php
/**
 * 常量 :
 *     定义 :
 *     常量是一个简单值的标识符（名字）。
 *          注意：
 *          常量值被定义后，在脚本的其他任何地方都不能被改变,而且,此时的常量在整个脚本中都可以使用
 *          一个常量由英文字母、下划线、和数字组成,但数字不能作为首字母出现。 (常量名不需要加 $ 修饰符)
 *     设置自定义常量 :
 *          使用 define() 函数，函数语法如下：
 *          define ( name,value,case_insensitive )
 *          该函数有三个参数:
 *          name：必选参数，常量名称，即标志符 为了区分,一般常量我们用全部大写表示
 *          value：必选参数，常量的值 常量值均为标量即 整型/浮点型/布尔型/字符串 这四大类
 *          case_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。
 *     判断常量是否被定义过 :
 *          defined(x) 如果被定义过 返回 true 反之 如果未定义过 返回 false
 *     系统常量 :
 *          __FILE__ :     获取当前文件的文件名
 *          __LINE__ :     获取当前代码的行数
 *          PHP_VERSION :  获取当前php的版本号
 *          __DIR__ :      获取当前文件的父级目录
 *          __FUNCTION__ : 获取当前文件的函数名
 *          PHP_OS :       获取系统信息
 *          M_PI :         获取圆周率
 *          __TRAIT__ :    获取当前TRALT名字
 *          __CLASS__ :    获取当前类名
 */

// 设置自定义常量
define('NAME','jscyl');
var_dump(NAME); // 输出结果为 : string 'jscyl' (length=5)

// 判断常量是否被定义过
var_dump(defined('NAME')); // 输出结果为 : boolean true

// 获取当前文件的文件名
var_dump(__FILE__); // 输出结果为 : string 'C:\wamp\www\php\003\index.php' (length=29)

// 获取当前代码的行数
var_dump(__LINE__); // 输出结果为 : int 33

// 获取当前php的版本号
var_dump(PHP_VERSION); // 输出结果为 : string '5.5.12' (length=6)

// 获取当前文件的父级目录
var_dump(__DIR__); // 输出结果为 : string 'C:\wamp\www\php\003' (length=19)

// 获取当前文件的函数名
var_dump(__FUNCTION__); // 输出结果为 : string '' (length=0)

// 获取系统信息
var_dump(PHP_OS); // 输出结果为 : string 'WINNT' (length=5)

// 获取圆周率
var_dump(M_PI); // 输出结果为 : float 3.1415926535898

// 获取当前TRALT名字
var_dump(__TRAIT__);// 输出结果为 : string '' (length=0)

// 获取当前类名
var_dump(__CLASS__); // 输出结果为 : string '' (length=0)