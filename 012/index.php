<?php
/**
 * PHP链接数据库 :
 * 1.链接数据库
 * 2.判断是否连接成功
 * 3.设置字符集
 * 4.选择数据库
 * 5.准备sql语句
 * 6.发送sql语句
 * 7.处理返回结果
 * 8.关闭数据库(释放资源)
 */

/**
 * 1.链接mysql数据库
 * mysqli_connect(参数一,参数二,参数三)
 * 参数一 : 数据库地址
 * 参数二 : mysql用户名  注意 : 初始状态下的用户名默认为 root
 * 参数三 : mysql密码    注意 : 初始状态下的密码默认为空
 * 输出结果为 : 一大串对象
 */
$sql = mysqli_connect('localhost','root','');
var_dump($sql);

/**
 * 2.判断是否连接成功
 * 通过判断连接数据库的返回值是否存在来判断是否连接成功
 */
if(!$sql){
    echo '数据库连接失败'.'<br>';
}else{
    echo '数据库连接成功'.'<br>';
}

/**
 * 3.设置字符集
 * mysqli_set_charset(参数一,'utf8');
 */
mysqli_set_charset($sql,'utf8');

/**
 * 4.选择数据库
 * mysqli_select_db($sql,库名);
 */
mysqli_select_db($sql,'jscyl');

/**
 * 5.准备sql语句
 */
$sql_listen = 'select * from user';

/**
 * 6.发送sql语句
 */
$res = mysqli_query($sql,$sql_listen);

/**
 * 7.处理结果集
 * mysqli_fetch_assoc($res) 只返回结果
 * mysqli_fetch_row($res) 只返回索引
 * mysqli_fetch_array($res) 同时返回结果和索引
 * mysqli_num_rows($res) 返回长度,即 共有几条数据
 *      还有一种获取数据条数的方法 :
 *      mysqli_affected_rows($sql)
 *      注意 : 此时传递的参数就不是sql语句了,而是第一步数据库的返回结果$sql
 */
$result = mysqli_affected_rows($sql);
var_dump($result);

/**
 * 8.关闭数据库(释放资源)
 */
mysqli_close($sql);