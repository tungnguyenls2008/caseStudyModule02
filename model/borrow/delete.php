<?php
session_start();
require_once '../../model/connection/conn.php';
if ($_SESSION['user']['role'] == 1) {
    if ($_SESSION['book']['id'] == $_REQUEST['id']) {
        header('location: warning.php');
    } else {

        $id = $_REQUEST['id'];
        $book_id = $_REQUEST['book_id'];
        $sql = "INSERT INTO `ticket_dump` SELECT * FROM `book_borrow` WHERE `id` = '$id';
DELETE FROM `book_borrow` WHERE `book_borrow`.`id` ='$id';
UPDATE `books` SET `status` = '1' WHERE `books`.`id` = '$book_id'";
        $query = $conn->prepare($sql);
        $query->execute();

        header('Location: ../../view/borrow/borrowHistory.php');
    }
} else echo "you're in a wrong place, buddy";