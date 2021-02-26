<?php
include "pdo.php";
$pdo = getPdo();


$s_name = $_POST['s_name'];
$c_id = $_POST['c_id'];
$s_jj = $_POST['s_jj'];
$s_tu = $_FILES['s_tu'];
$filename = "./images/".date('YmdHis').$s_tu['name'];
move_uploaded_file($s_tu['tmp_name'],$filename);

$sql = "insert into ks_susers(s_name,c_id,s_jj,s_tu) values('$s_name','$c_id','$s_jj','$filename')";
$res = $pdo->query($sql);
if($res==true){
    header("location:http://2006.com/ks/list.php");
}else{
    header("location:http://2006.com/ks/create.php");
}