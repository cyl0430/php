<?php
/**
 * 执行查看操作
 */

/**
 * 1.获取url参数
 * 格式 :
 * $_GET['参数名']
 * 例如 :
 * 获取url中的id值 : $_GET['id']
 */
$id = $_GET['id'];

// 2.连接数据库
$link = mysqli_connect('localhost','root','');

// 3.判断是否连接成功
if(!$link){
    exit('数据库连接失败');
}

// 4.规定字符集
mysqli_set_charset($link,'utf8');

// 5.选择数据库
mysqli_select_db($link,'jscyl');

// 6.准备sql语句
$sql = "select * from user where id = ".$id;

// 7.处理返回结果 如果返回true 即为删除成功
$result = mysqli_query($link,$sql);
var_dump($result);

if($result == true){
    echo '查看成功'.' <a href="013.php">查看</a>';
}else{
    echo '查看失败';
}

// 8.关闭数据库
mysqli_close($link);
