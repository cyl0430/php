<?php
/**
 * 循环语句 :
 *
 * 语句一 : for
 * for($i = 0; $i<n; $i++){
 *   循环操作
 * }
 *
 * 语句二 : while
 * 首先在外部先定义一个初始值 $i= 0
 * 其次再开始循环
 * white(循环条件--即临界值){
 *  循环操作
 * }
 *
 * 语句三 : do...while...
 * 首先在外部先定义一个初始值 $i= 0
 * 其次再开始循环
 * do{
 *   循环操作
 * }while(临界值);
 *
 * 语句四 : foreach -- 循环数组
 * 首先在外部定义一个数组 $arr = ['a','b','c']
 * foreach($arr as $item){
 *  循环操作 $item 就是对应的 a b c
 * }
 */

for($i = 0; $i< 5; $i++){
    /**
     * 输出结果为 :
     * int 0
     * int 1
     * int 2
     * int 3
     * int 4
     */
    var_dump($i);
}

$i = 0;
while ($i < 3){
    /**
     * 输出结果为 :
     * int 0
     * int 1
     * int 2
     */
    var_dump($i);
    $i++;
}

$x = 0;
while ($x < 3){
    /**
     * 输出结果为 :
     * int 1
     * int 2
     * int 3
     */
    $x++;
    var_dump($x);
}

$y = 0;
do{
    /**
     * 输出结果为 :
     * int 0
     * int 1
     * int 2
     */
    var_dump($y);
    $y++;
}while($y < 3);

$arr = ['www','baidu','com'];
foreach ($arr as $value){
    /**
     * 输出结果为 :
     * string 'www' (length=3) string 'baidu' (length=5) string 'com' (length=3)
     */
    var_dump($value);
}

foreach ($arr as $key => $value){
    echo '下标 : '.$key.' -- '.'值 : '.$value.'<br/>';
}