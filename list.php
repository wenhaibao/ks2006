<?php
include "pdo.php";
$pdo = getPdo();
$sql = "select * from ks_susers,ks_class where ks_susers.c_id=ks_class.c_id";
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
    <h2>学生列表</h2>
    <table border="1">
        <tr>
            <td>学生姓名</td>
            <td>班级</td>
            <td>照片</td>
            <td>学生简介</td>
            <td>编辑</td>
        </tr>
        <?php foreach($data as $k=>$v){?>
            <tr>
                <td><?php echo $v['s_name'];?></td>
                <td><?php echo $v['c_name'];?></td>
                <td><img src="<?php echo $v['s_tu'];?>" width="50px" height="50px" alt=""></td>
                <td><?php echo $v['s_jj'];?></td>
                <td>
                    <a href="#">修改</a>|
                    <a href="#">删除</a>
                </td>
            </tr>
        <?php }?>
    </table>
    <a href="http://2006.com/ks/create.php">学生添加</a>
</body>
</html>