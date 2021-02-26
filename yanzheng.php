<?php
$users = $_POST['users'];
$pass = md5($_POST['pass']);
include "pdo.php";
$pdo = getPdo();

$sql = "select * from ks_user where users='{$users}'";

$res = $pdo->query($sql);
$data = $res->fetch(PDO::FETCH_ASSOC);
if($data['pass']===$pass){
    $response = [
        'errno' =>'0',
        'msg' => 'ok'
    ];
    echo json_encode($response);
}else{
    $response = [
        'errno' =>'500008',
        'msg' => '登录失败'
    ];
    echo json_encode($response);
}