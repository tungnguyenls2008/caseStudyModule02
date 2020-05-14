<!DOCTYPE html>
<?php

session_start();
require '../../model/connection/conn.php';
if ($_SESSION['user']['role'] == 1): {
if (!isset($_SESSION['user'])) {
    header('location:../../index.php');
}
$sql = "SELECT * FROM `books` ";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);

?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>HOME</title>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style type="text/css">
    table.gridtable {
        width: auto;
        margin-left: auto;
        margin-right: auto;

        font-family: verdana, arial, sans-serif;
        font-size: 11px;
        color: #333333;
        border-width: 1px;
        border-color: #666666;
        border-collapse: collapse;
    }

    table.gridtable th {
        width: 1px;
        white-space: nowrap;
        margin-left: auto;
        margin-right: auto;
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #dedede;
    }

    table.gridtable td {
        width: 1px;
        white-space: nowrap;
        margin-left: auto;
        margin-right: auto;
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #ffffff;
    }
</style>
<body>
<?php include "../nav.php"; ?>



<div class="container" style="text-align: center">
    <div class="col-md-12 well" style="display: inline-block">
        <h3 class="text-primary">MAKE BORROW ORDER</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-2"></div>
        <div>
            <h3>Welcome!</h3>
            <?php
            $id = $_SESSION['user']['mem_id'];
            $sql2 = $conn->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
            $sql2->execute();
            $fetch = $sql2->fetch();
            ?>
            <div style="width: auto;
        margin-left: auto;
        margin-right: auto;">
                <h4><?php echo 'hi there ' . $fetch['firstname'] . " " . $fetch['lastname'] ?></h4></div>
            <h5>This form is for making book borrow orders, proceed with caution.</h5>
            <br/>
            <div style="display: inline-block;">
                <form method="post">

                    <table border="1px"

                    <tr>
                        <td>
                            <input type="number" name="user-id" placeholder="Type the ID"
                                   value="<?php echo (isset($_POST['user-id'])) ? $_POST['user-id'] : '' ?>">
                            <!--<input type="submit" name="search" value="SEARCH ID">-->
                            <?php if (!empty($_REQUEST['user-id'])): {
                                $keyword = $_REQUEST['user-id'];
                                $sql = "SELECT * FROM `member` WHERE `mem_id` LIKE '%$keyword%' ";
                                $query = $conn->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_ASSOC);
                            } ?>
                                <table class="gridtable" border="1px">
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Status</th>

                                </tr>

                                <?php foreach ($results as $key => $item): ?>
                                    <tr>
                                        <td><?php echo $item['mem_id'] ?></td>
                                        <td><a href="../user/profile.php?id=<?php echo $item['mem_id'] ?>"> <?php echo $item['username'] ?></a>
                                        </td>
                                        <td><?php if ($item['role'] == 1) {
                                                echo 'Admin';
                                            } else {
                                                echo 'Member';
                                            } ?>
                                        <td><?php if ($item['status'] == 0): ?>
                                                <p style="color: #1c7430">Active</p>
                                            <?php elseif ($item['status'] == 1): ?>
                                                <p style="color: #9A0000">Blocked</p>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                </tr></table><?php endif; ?>
                        </td>
                        <td>
                            <input type="text" name="keyword" placeholder="Search for books"
                                   value="<?php echo (isset($_POST['keyword'])) ? $_POST['keyword'] : '' ?>">
                            <input type="submit" name="search" value="SEARCH BOOK">
                            <?php if (!empty($_REQUEST['keyword'])): {
                                $keyword = $_POST['keyword'];
                                $sql = "SELECT * FROM `books` WHERE `name` LIKE '%$keyword%'";
                                $query = $conn->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_ASSOC);

                            } ?>
                                <table class="gridtable" border="1px">
                                <tr>
                                    <th>Check</th>
                                    <th>Name</th>
                                    <th>Status</th>

                                </tr>

                                <?php foreach ($results as $key => $item): ?>
                                    <tr>
                                        <td><a class="btn btn-outline-primary mr-5"
                                               href="../../model/borrow/borrow.php?user-id=<?php echo $_POST['user-id'] ?>&borrow-this=<?php echo $item['id'] ?>">BORROW THIS</a></td>
<!--                                        <td><input type="radio" name="borrow-this" value="--><?php //echo $item['id'] ?><!--">-->
<!--                                        </td>-->
                                        <td><a href="../book/profile.php?id=<?php echo $item['id'] ?>"> <?php echo $item['name'] ?></a></td>
                                        <td><?php if ($item['status'] == 1) {
                                                echo '<p style="color: #00A000"> Available</p>';
                                            } else {
                                                echo '<p style="color: #9A0000">Unavailable</p>';
                                            } ?></td>

                                    </tr>
                                <?php endforeach; ?>


                                </table><?php endif; ?>
                        </td>
                    </tr>

                </form>
            </div>
            <table>
                <tr>
                    <!--<td>
                        <a class="btn btn-primary mr-5"
                           href="../../model/borrow/borrow.php?user-id=<?php /*echo $_POST['user-id'] */?>&borrow-this=<?php /*echo $_POST['borrow-this'] */?>">MAKE
                            BORROW ORDER</a>
                    </td>-->
                    <td><a class="btn btn-primary mr-5" href="../home.php">Back to home</a></td>
                    <td><a class="btn btn-danger mr-5" href="../../model/user/logout.php">Logout</a></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<canvas id="myCanvas" width="1368px" height="768px" style="border:1px solid #d3d3d3;"></canvas>
<script src="../../js/background.js"></script>
</body>
</html><?php } endif; ?>

