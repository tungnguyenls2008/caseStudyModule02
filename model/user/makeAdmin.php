<?php
session_start();
require_once '../../model/connection/conn.php';
if ($_SESSION['user']['role'] == 1){
if ($_SESSION['user'] == $_REQUEST['id']) {
    header('location: ../../view/user/warning.php');
} else {
    $id = $_REQUEST['id'];
    $sql = "UPDATE `member` SET `role` = '1' WHERE `member`.`mem_id` ='$id' ";
    $query = $conn->prepare($sql);
    $query->execute();

    header('Location: ../../view/user/display.php');
}}
else echo "you're in a wrong place, buddy";