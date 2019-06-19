<html>
<style>
    .btns{
        overflow: hidden;
    }
    .btn{
        padding: 10px 20px;
        float: left;
        background-color: #999;
        color: #000;
        margin-right: 20px;
        margin-top: 20px;
        cursor: pointer;
        font-size: 14px;
    }
    .btn:hover{
        background-color: #000000;
        color: #fff;
    }
</style>
<body>
<div class="btns">
    <a href="add_form.php">
        <div class="btn">添加</div>
    </a>
</div>
</body>
</html>
<?php
/**
 * 实战
 */
$link = mysqli_connect('localhost','root','');

if(!$link){
    exit('数据库连接失败');
}

mysqli_set_charset($link,'utf8');

mysqli_select_db($link,'jscyl');

//----------------- 分页开始-------------

// 1.得出总条数
$number_all = "select count(*) as count from user";// 准备sql语句  as count 取别名
$number_result = mysqli_query($link,$number_all);// 发送sql语句
$number_count = mysqli_fetch_assoc($number_result);// 根据求总条数函数得出总条数
$number_sum = intval($number_count['count']);// 根据下标 count 取出总条数的值,同时添加数据类型转换
//echo '总条数 : ' . $number_sum . '<br>';

// 2.规定每页显示数 和 默认当前为第一页
$num = 5;
$page = empty($_GET['page']) ? 1 : $_GET['page']; // 默认的当前页
$prev = $page - 1; // 上一页
$next = $page + 1; // 下一页

// 3.根据总条数 / 每页显示数 = 总页数
$page_count = ceil($number_sum / $num);
//echo '总页数 : ' . $page_count . '<br>';

// 4.根据总页数求出偏移量
$offset = ($page -1) * $num;
//echo '当前初始偏移量 : ' .$offset . '<br>';

// 5.临界值判断
if($prev <= 0){
    $prev = 0;
}
if($next >= $page_count){
    $next = $page_count;
}

//----------------- 分页结束-------------

$sql_listen = 'select * from user order by id limit '. $offset .',' . $num . '';

$res = mysqli_query($link,$sql_listen);

echo '<table border="1" width="500">';

echo '<th>id</th><th>name</th><th>age</th><th>sex</th><th>操作</th>';

while ($rows =  mysqli_fetch_assoc($res)){

    echo '<tr>';

    echo '<td style="text-align: center;">'.$rows['id'].'</td>';
    echo '<td style="text-align: center;">'.$rows['name'].'</td>';
    echo '<td style="text-align: center;">'.$rows['age'].'</td>';
    echo '<td style="text-align: center;">'.($rows['sex'] == 1 ? '男' :'女').'</td>';
    echo '<td style="text-align: center;">'
         .'    <a href="del.php?id='.$rows['id'].'">删</a> /'
         .'    <a href="edit_form.php?id='.$rows['id'].'">改</a> /'
         .'    <a href="view.php?id='.$rows['id'].'">查</a> '
         .'</td>';

    echo '</tr>';
}

echo '</table>';

mysqli_close($link);
?>

<html>
    <style>
        table{
            margin-top: 20px;
        }
        br{
            margin-top: 20px;
        }
        .btns{
            overflow: hidden;
        }
        .btn{
            padding: 10px 20px;
            float: left;
            background-color: #999;
            color: #000;
            margin-right: 20px;
            margin-top: 20px;
            cursor: pointer;
            font-size: 14px;
        }
        .btn:hover{
            background-color: #000000;
            color: #fff;
        }
    </style>
    <body>
        <div class="btns">
            <a href="013.php?page=1">
                <div class="btn">首页</div>
            </a>
            <a href="013.php?page=<?php echo $prev; ?>">
                <div class="btn">上一页</div>
            </a>
            <a href="013.php?page=<?php echo $next; ?>">
                <div class="btn">下一页</div>
            </a>
            <a href="013.php?page=<?php echo $page_count; ?>">
                <div class="btn">尾页</div>
            </a>
        </div>
    </body>
</html>
