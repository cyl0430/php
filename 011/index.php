<?php
/**
 * 日期函数
 */

/**
 * 获取当前时间戳
 * time()
 * 输出结果为 :
 * int 1556257987
 */
var_dump(time());

/**
 * 将时间戳转化为年月日时分秒
 * data(format,timestamp)
 * format	必需。规定时间戳的格式,大小写不可变更
 *      年 : Y
 *      月 : m
 *      日 : d
 *      时 : H
 *      分 : i
 *      秒 : s
 * timestamp	可选。规定时间戳。默认是当前的日期和时间。
 * 输出结果为 :
 * string '2019-04-26 05:55:20' (length=19)
 * 注意 : 用此方法会与实际时间相差8小时
 * 解决方法 :
 * 法一 : (推荐)
 * 在 time() 之前设置时区,采用固定函数 date_default_timezone_set('PRC');
 * 法二 :
 * 自定义封装,强行让时间加8个小时
 * 法三 : 修改配置文件 (不推荐,了解即可)
 */

//法一 :
//date_default_timezone_set('PRC');
//var_dump(date('Y-m-d H:i:s',time()));

//法二 :
function getTime($time){
    $allDate = date('Y-m-d H:i:s',$time);// 根据时间戳得到时分秒
    $date_ymd = explode(' ',$allDate)[0];// 得到年月日
    $date_his = explode(' ',$allDate)[1];// 得到时分秒
    $nowTime = explode(':',$date_his)[0];// 得到时
    $date_is = ':'.explode(':',$date_his)[1].':'.explode(':',$date_his)[2];//得到分秒
    $nowTime = intval($nowTime) + 8;// 字符串转整型
    $endTime = $date_ymd.' '.$nowTime.$date_is;// 拼接字符串
    var_dump($endTime);
}
getTime(time());