<!DOCTYPE html>
<?php

session_start();
require '../model/connection/conn.php';
if (!isset($_SESSION['user'])) {
    header('location:../index.php');
}

$sql = "SELECT * FROM `member` ";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
//count members
$sqlMember = "SELECT COUNT(*) FROM `member`";
$queryMember = $conn->prepare($sqlMember);
$queryMember->execute();
$resultMemCount = $queryMember->fetch();
//count books
$sqlBook = "SELECT COUNT(*) FROM `books`";
$queryBook = $conn->prepare($sqlBook);
$queryBook->execute();
$resultBookCount = $queryBook->fetch();
?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>HOME</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<?php include "../view/nav.php"; ?>
<!------ Include the above in your HEAD tag ---------->




<div class="container" style="text-align: center">
    <div class="col-md-12 well" style="display: inline-block">
        <h3 class="text-primary">HOME</h3>
        <hr style="border-top:1px dotted #ccc;"/>

        <div>
            <h3>Welcome!</h3>
            <?php
            $id = $_SESSION['user']['mem_id'];
            $sql2 = $conn->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
            $sql2->execute();
            $fetch = $sql2->fetch();
            ?>
            <div style="text-align: center;">
                <h4><?php echo 'hi there ' . $fetch['firstname'] . " " . $fetch['lastname'] ?></h4></div>
            <div><p>There're currently <?php echo implode($resultMemCount)[0] . implode($resultMemCount)[1] ?> members
                    registered</p></div>
            <div><p>There're currently <?php echo implode($resultBookCount)[0] . implode($resultBookCount)[1] ?> books
                    registered</p></div>
            <a href="user/display.php" class="btn btn-primary">View users</a>
            <a href="book/display.php" class="btn btn-primary">View books</a>
            <?php if ($_SESSION['user']['role'] == 1): ?>
                <a href="borrow/borrowForm.php" class="btn btn-primary">Make borrow order</a>
                <a href="borrow/borrowHistory.php" class="btn btn-primary">View borrow history</a>
            <?php endif; ?>
            <a href="../model/user/logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>
<canvas id="myCanvas"  style="border:1px solid #d3d3d3;"></canvas>
<script src="../js/background.js"></script>
</body>
</html>