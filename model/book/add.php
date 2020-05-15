<?php
session_start();
require_once '../../model/connection/conn.php';
if ($_SESSION['user']['role'] == 1) {
    if (isset($_POST['add'])) {
        if ($_POST['name'] != "" || $_POST['author'] != "" || $_POST['category'] != "" || $_POST['cover'] != "" || $_POST['description'] != "" || $_POST['status'] != "") {
            try {
                $name = $_POST['name'];
                $status = $_POST['status'];
                $author = $_POST['author'];
                $category = $_POST['category'];
                $cover = $_FILES['image']['name'];
                $description = $_POST['description'];
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                include "coverUpload.php";
                $sql = "INSERT INTO `books` (`id`,`name`,`author`,`category`,`cover`,`description`, `status`) VALUES (NULL,'$name','$author','$category','$cover','$description' ,'$status')";
                $conn->exec($sql);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            $conn = null;
            header('location: ../../view/book/display.php');
        } else {
            echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'addForm.php'</script>
			";
        }
    }
} else echo "You're at the wrong place, buddy.";
