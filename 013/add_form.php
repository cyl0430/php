<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/14 0014
 * Time: 11:32
 */
?>

<html>
<style>
    input{
        width: 300px;
        height: 40px;
        border: 1px solid #e6e6e6;
        text-indent: 1em;
    }
    .item{
        margin-top: 20px;
    }
    .point{
        cursor: pointer;
    }
    .point:hover{
        background-color: black;
        color: white;
    }
</style>
<body>
<form action="add_result.php">
    <div class="item">
        <input type="tel" placeholder="id" name="id">
    </div>
    <div class="item">
        <input type="text" placeholder="name" name="name">
    </div>
    <div class="item">
        <input type="tel" placeholder="age" name="age">
    </div>
    <div class="item">
        <input type="tel" placeholder="sex" name="sex">
    </div>
    <div class="item">
        <input type="submit" class="point" value="增加数据">
    </div>
</form>
</body>
</html>
