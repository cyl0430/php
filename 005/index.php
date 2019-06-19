<?php
/**
 * 条件语句
 * 语句一 :
 * switch ($type){
 *      case type值1 :
 *          满足type值1的操作
 *          break;// 结尾
 *      case type值2 :
 *          满足type值2的操作
 *          break;// 结尾
 *      ...
 *      default :
 *          条件都不满足时执行此段代码
 *          break;
 * 语句二 :
 * if(条件){
 *      满足条件的操作
 * }else{
*       不满足条件的操作
 * }
 */
$type = 2;
switch ($type){
    case 1 :
        var_dump($type);
        break;
    case 2 :
        var_dump($type);
        break;
    default :
        var_dump('条件都不满足时执行此段代码');
        break;
}