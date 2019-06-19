<?php
/**
 * cookie
 * 存储在浏览器中
 */

/**
 * 设置cookie
 * 格式 :
 * setcookie('cookie名','cookie值',cookie的有效期,'cookie的作用域');
 * 作用域如果设置为 / 代表在当前目录下均可访问
 */
setcookie('name','jscyl',time()+60,'/');

/**
 * 删除cookie
 * 即 将有效期设置为过去的时间即可删除
 */
setcookie('name','jscyl',time()-1,'/');

/**
 * 获取cookie
 * $_COOKIE['cookie名']
 */
if(empty($_COOKIE['name']) == true){
    echo 'cookie名为name的数据已删除';
}else{
    echo 'name : ' . $_COOKIE['name'];
}