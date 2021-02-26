<?php
include "pdo.php";
$pdo = getPdo();
$sql = "select * from ks_class";
$res = $pdo->query($sql);
$data = $res->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>学生添加</h2>
    <form action="createdo.php" method="POST" enctype="multipart/form-data">
        学生姓名<br>
        <input type="text" name="s_name"><br>
        学生班级<br>
        <select name="c_id">
            <?php foreach($data as $k=>$v){?>
                    <option value="<?php echo $v['c_id'];?>"><?php echo $v['c_name'];?></option>
            <?php }?>
        </select>
        <br>
        学生照片<br>
        <input type="file" name="s_tu"><br>
        学上简介<br>
        <textarea name="s_jj" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="添加">
    </form>
</body>
</html>