<?php
    echo '当前数据的id为 : '.$_GET['id'];
?>

<html>
<style>
    input{
        width: 300px;
        height: 40px;
        margin-top: 20px;
        border: 1px solid #e6e6e6;
        text-indent: 1em;
    }
    .point{
        cursor: pointer;
    }
    .point:hover{
        background-color: black;
        color: white;
    }
</style>
<form action="edit_result.php">
    <input type="tel" placeholder="id" name="id" value="<?php echo $_GET['id']; ?>">
    <br>
    <input type="text" placeholder="name" name="name">
    <br>
    <input type="tel" placeholder="age" name="age">
    <br>
    <input type="tel" placeholder="sex" name="sex">
    <br>
    <input type="submit" class="point" value="修改数据">
</form>
</html>


