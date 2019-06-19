<?php
/**
 * 文件上传
 */

$file_data = $_FILES['file']; // 拿到文件的数据
var_dump($file_data);

// 1.判断是否有错误号
if($_FILES['file']['error'] == true){
    switch ($_FILES['file']['error']){
        case 1 :
            $str = '上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值,默认为2M';
            break;
        case 2 :
            $str = '上传的文件超过了 html 表单中 MAX_FILE_SIZE 选项指定的值';
            break;
        case 3 :
            $str = '文件只有部分被上传';
            break;
        case 4 :
            $str = '没有文件被上传';
            break;
        case 6 :
            $str = '找不到临时文件夹,php4.3.10 和 php 5.0.3 引进';
            break;
        case 7 :
            $str = '文件写入失败 php5.1.0引进';
            break;
    }
    echo $str;
    exit;
}
// 2.规定文件最大值
if($file_data['size'] > (pow(1024,2) * 2)){
    exit('已超过最大值');
}
// 3.规定文件类型
$allowMine = ['image/png','image/jpg','image/jpeg','image/gif'];
$allowFix = ['png','jpg','jpeg'];
$path_info = pathinfo($file_data['name']);// 得出路径信息的数组
var_dump($path_info);
$fix = $path_info['extension'];
$mine = $file_data['type'];

// 4.判断文件类型是否符合
if(in_array($fix,$allowFix) == false || in_array($mine,$allowMine) == false){
    exit('当前文件类型不在规定类型内,当前文件的后缀名 : ' . $fix . ' 当前文件的类型 : ' . $mine);
}else{
    echo '当前文件的后缀名 : ' . $fix . ' 当前文件的类型 : ' . $mine;
}

// 5.拼接文件路径,如果文件夹不存在,则创建该文件夹
$path = 'upload';
if(!file_exists($path)){
    mkdir($path);
}

// 6.随机文件名
$name = uniqid() . '.' . $fix;

// 7.判断是否为上传文件
if(is_uploaded_file($file_data['tmp_name'])){
    if(move_uploaded_file($file_data['tmp_name'],$path . '/' .$name)){
        echo '上传成功';
    }else{
        echo '文件上传失败';
    }
}else{
    echo '不是上传文件';
    exit;
}
