<?php
session_start();
require_once '../../model/connection/conn.php';
if ($_SESSION['user']['role'] == 1) {
    if (isset($_POST['update'])) {
        if ($_POST['name'] != "" || $_POST['status'] != "") {

            try {
                $id = $_REQUEST['id'];
                $sql = "UPDATE `books` SET `name`=?,`status`=?, `author`=?, `description`=?, `category`=? WHERE `id`=?";
                $query = $conn->prepare($sql);
                $query->bindParam(1, $_POST['name']);
                $query->bindParam(2, $_POST['status']);
                $query->bindParam(3, $_POST['author']);
                $query->bindParam(4, $_POST['description']);
                $query->bindParam(5, $_POST['category']);
                $query->bindParam(6, $id);
                $query->execute();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

            $conn = null;
            header('location:../../view/book/profile.php?id=' . $id);
        } else {
            echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'updateForm.php'</script>
			";
        }
    }
} else echo "You're at the wrong place, buddy.";
