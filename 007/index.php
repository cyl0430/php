<?php
/**
 * 函数
 * 1.自定义函数
 *   格式 :
 *      定义 :
 *        function 函数名 (参数){
 *           函数内部的方法
 *        }
 *      调用 :
 *        函数名(参数)
 * 2.内置函数(类库)
 *   是php自己定义的函数,如 :
 *   is_string() ; is_arrey() 等
 * 3.匿名函数
 *   将匿名函数赋值给一个变量,通过变量调用
 */
$arr = ['a','b','c'];
$arr1 = ['www','baidu','com'];// 健名
$arr2 = ['www','jscyl','com'];// 键值
$sum = [];
$x = ['a','b'];
$y = ['c','d'];
$z = ['e','f'];

// 自定义函数
function test (){
    var_dump('test'); // 输出结果为 : string 'test' (length=4)
}
test(); // 调用

// 传入多个参数(前提 : php版本7.0+)
function more (...$params){
    var_dump($params);
}
more(...$arr);

// 匿名函数
$noName = function (){
    echo 'noName'; // 输出结果为 : noName
};
$noName();

/**
 * 常用的内置函数
 * array_combine()
 *      作用：通过合并两个数组来创建一个新数组，其中的一个数组是键名，另一个数组的值为键值
 *      语法：array_combine(keys,values);
 *            keys    	必需。键名数组。
 *            values    必需。键值数组。
 * array_merge()
 *      作用：把一个或多个数组合并为一个数组
 *      语法：array_merge(array1,array2,array3...)
 *            array1 	必需。规定数组。
 *            array2	可选。规定数组。
 *            array3	可选。规定数组。
 * array_key_exists()
 *      作用：检查某个数组中是否存在指定的键名
 *      语法：array_key_exists(key,array)
 *            key	必需。规定键名。
 *            array	必需。规定数组。
 * array_pop()
 *      作用：删除数组中的最后一个元素
 *      语法：array_pop(array)
 *            array	必需。规定数组
 * array_push()
 *      作用：向第一个参数的数组尾部添加一个或多个元素（入栈），然后返回新数组的长度。
 *      语法：array_push(array,value1,value2...)
 *            array	    必需。规定数组。
 *            value1	必需。规定要添加的值。
 *            value2	可选。规定要添加的值。
 * array_rand()
 *      作用：返回数组中的随机键名，或者如果您规定函数返回不只一个键名，则返回包含随机键名的数组。
 *      语法：array_rand(array,number)
 *            array    	必需。规定数组。
 *            number    可选。规定返回多少随机键名。
 * array_search()
 *      作用：在数组中搜索某个键值，并返回对应的键名。
 *      语法：array_search(value,array,strict)
 *            value	    必需。规定需要搜素的键值。
 *            array	    必需。规定被搜索的数组。
 *            strict	可选。如果该参数被设置为 TRUE，则函数在数组中搜索数据类型和值都一致的元素。可能的值：true，false - 默认，如果设置为 true，则在数组中检查给定值的类型，数字 5 和字符串 5 是不同的
 * array_shift()
 *      作用：删除数组中第一个元素，并返回被删除元素的值。
 *      语法：array_shift(array)
 *            array	必需。规定数组。
 */

/**
 * 合并2个数组
 * 输出结果为 :
 * 'www' => string 'www' (length=3)
 * 'baidu' => string 'jscyl' (length=5)
 * 'com' => string 'com' (length=3)
 */
$sum = array_combine($arr1,$arr2);
var_dump($sum);

/**
 * 合并多个数组
 * 输出结果为 :
 * 0 => string 'a' (length=1)
 * 1 => string 'b' (length=1)
 * 2 => string 'c' (length=1)
 * 3 => string 'd' (length=1)
 * 4 => string 'e' (length=1)
 * 5 => string 'f' (length=1)
 */
var_dump(array_merge($x,$y,$z));

/**
 * 查找健名是否存在,返回布尔值
 * 输出结果为 : boolean false
 */
var_dump(array_key_exists('baidu',$arr1));

/**
 * 删除数组中的最后一个元素
 * 输出结果为 :
 * 0 => string 'a' (length=1)
 */
array_pop($x);
var_dump($x);

/**
 * 将一个或多个元素插入数组的末尾
 * 输出结果为 :
 * 0 => string 'a' (length=1)
 * 1 => string 'pop' (length=3)
 */
array_push($x,'pop');
var_dump($x);

/**
 * 随机返回一个或多个元素
 * 输出结果为 :
 * string 'baidu' (length=5)
 * 注意 : 如果是单个的数组,健名就是下标值
 * */
var_dump(array_rand($sum));

/**
 * 在数组中搜索某个键值，并返回对应的键名。
 * 输出结果为 :
 * int 1
 */
var_dump(array_search('jscyl',$arr2));

/**
 * 删除数组中第一个元素
 * 输出结果为 :
 * 0 => string 'pop' (length=3)
 */
array_shift($x);
var_dump($x);


