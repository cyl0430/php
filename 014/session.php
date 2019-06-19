<?php
/**
 * session
 * 存储在服务器端
 */

/**
 * 1.开启session
 * 注意 : 不管是设置session还是获取session都必须先开始,才可继续操作
 */
session_start();

/**
 * 2.设置session
 * 格式 :
 * $_SESSION['session名'] = 'session值';
 */
$_SESSION['username'] = 'jsmdd';

/**
 * 3.释放session
 */
session_destroy();

/**
 * 4.获取session
 * 格式 :
 * $_SESSION['session名']
 */
echo 'username : ' . $_SESSION['username'] . '<br>';

/**
 * 5.删除session
 * 格式 :
 * unset($_SESSION['cookie名']);
 */
unset($_SESSION['username']);

if(empty($_SESSION['username']) == true){
    echo 'session名为name的数据已删除';
}else{
    echo 'username : ' . $_SESSION['username'];
}
