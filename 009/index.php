<?php
/**
 * 数组
 * 普通数组和关联数组的区别 :
 *      普通数组的下标为 : 0 1 2 3 ...
 *      关联数组的下标为 : 指定下标
 */

$arr  = ['www','baidu','com']; // 数组
$glArr = [ // 关联数组
    'html' => '页面',
    'JavaScript' => '动效',
    'php' => '数据库'
];
$twoArr = [ // 二维数组
    'html' => [
        'header','content','footer'
    ],
    'js' => [
        'jq','js','vue'
    ],
    'php' => [
        'mysql','mongodb'
    ]
];

/**
 * 数组
 * 输出结果为 :
 *  0 => string 'www' (length=3)
 *  1 => string 'baidu' (length=5)
 *  2 => string 'com' (length=3)
 *  其中 0 1 2 为下标,www baidu com 为下标对应的值
 */
var_dump($arr);

/**
 * 关联数组
 * 输出结果为 :
 *  'html' => string '页面' (length=6)
 *  'JavaScript' => string '动效' (length=6)
 *  'php' => string '数据库' (length=9)
 *  其中 html JavaScript php 为下标, 页面 动效 数据库 为下标对应的值
 */
var_dump($glArr);

/**
 * 二维数组
 * 输出结果为 :
 *  'html' =>
 *      0 => string 'header' (length=6)
 *      1 => string 'content' (length=7)
 *      2 => string 'footer' (length=6)
 *  'js' =>
 *      0 => string 'jq' (length=2)
 *      1 => string 'js' (length=2)
 *      2 => string 'vue' (length=3)
 *  'php' =>
 *      0 => string 'mysql' (length=5)
 *      1 => string 'mongodb' (length=7)
 */
var_dump($twoArr);

/**
 * 获取值
 * 通过下标的方式获取值
 * 输出结果为 :
 * string 'www' (length=3)
 */
var_dump($arr[0]);

/**
 * 删除数组中的一个元素
 * unset($arr[index])
 * 输出结果为 :
 *  1 => string 'baidu' (length=5)
 *  2 => string 'com' (length=3)
 */
unset($arr[0]);
var_dump($arr);

/**
 * 得到数组元素的个数 -- 一般用于for循环
 * count($arr)
 * 输出结果为 : 4
 */
$number = ['元素一','元素二','元素三','元素四'];
var_dump(count($number));

/**
 * 遍历
 * 输出结果为 :
 * 下标 : 0 -- 值 : 元素一
 * 下标 : 1 -- 值 : 元素二
 * 下标 : 2 -- 值 : 元素三
 * 下标 : 3 -- 值 : 元素四
 */
for ($i = 0; $i < count($number); $i++){
    echo '下标 : '.$i.' -- '.'值 : '.$number[$i].'<br/>';
}
foreach ($number as $key => $value){
    echo '下标 : '.$key.' -- '.'值 : '.$value.'<br/>';
}