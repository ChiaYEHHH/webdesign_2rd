<?php

// $dsn = "mysql:host=localhost;charset=utf8;dbname=db01";
// $pdo = new PDO($dsn, 'root', '');
// include_once "base.php";


// $_POST['text'] => array()
// $_POST['id'] => array()
// $_POST['sh'] =>str
// $_POST['del'] => array()

// if(isset($_POST['id'])){

// }

// foreach ($_POST['id'] as $key => $id) {
//     if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
//         $sql = "delete from `title` where id='$id'";
//         $pdo->exec($sql);
//     }else{
//         if (isset($_POST['sh']) && $_POST['sh'] == $id) {
//             $sql = "update `title` set `text`='{$_POST['text'][$key]}',`sh`='1' where id='$id'";
//         } else {
//             $sql = "update `title` set `text`='{$_POST['text'][$key]}',`sh`='0' where id='$id'";
//         }
//         $pdo->exec($sql);
//     }
// }

// header("location:../admin.php?do=title");

// 整合到edit.php