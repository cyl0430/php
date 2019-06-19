<?php
/**
 * 超全局变量
 * $GLOBALS
 *      是PHP的一个超级全局变量组，在一个PHP脚本的全部作用域中都可以访问
 *      是一个包含了全部变量的全局组合数组。
 *      变量的名字就是数组的键
 * $_SERVER
 *      $_SERVER 是一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组。
 *      这个数组中的项目由 Web 服务器创建
 * $_REQUEST
 *      用于收集HTML表单提交的数据
 * $_POST
 *      被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="post"
 * $_GET
 *      同样被广泛应用于收集表单数据，在HTML form标签的指定该属性："method="get"
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 */

/**
 * $GLOBALS
 * 输出结果为 :
 * int 3
 */
$x = 1;
$y = 2;

function add(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
add();
var_dump($z);

/**
 * $_REQUEST
 * 注意 :
 * 此处不能直接访问,需要先前往 index.html ,进行提交数据的操作,然后会自动跳转至本文件,得到表单的数据,否则报错
 * 输出结果为 :
 * string 'qq' (length=2) -- 其中 qq 为 html输入框的输入内容
 * $_POST 和 $_GET 同理
 */
//$name = $_REQUEST['username'];
//var_dump($name);

//$name = $_POST['username'];
//var_dump($name);

//$name = $_GET['username'];
//var_dump($name);