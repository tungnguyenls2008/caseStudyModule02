<!DOCTYPE html>
<?php

session_start();
require '../../model/connection/conn.php';
if (!isset($_SESSION['user'])) {
    header('location:../../index.php');
}

?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>SEARCH</title>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style type="text/css">
    table.gridtable {
        font-family: verdana, arial, sans-serif;
        font-size: 11px;
        color: #333333;
        border-width: 1px;
        border-color: #666666;
        border-collapse: collapse;
    }

    table.gridtable th {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #dedede;
    }

    table.gridtable td {
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
        <h3 class="text-primary">Registered Users</h3>
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
            <div style="text-align: center;">
                <h4><?php echo 'hi there ' . $fetch['firstname'] . " " . $fetch['lastname'] ?></h4></div>
            <h5>This is a list of registered user, nothing important, really.</h5>
            <br/>
            <div><?php if ($_SESSION['user']['role'] == 1): ?>
                    <a class="btn btn-primary" href="../../model/user/addRandomUser.php">Add random
                        user</a> <?php endif; ?>
                <a class="btn btn-danger" href="../../model/user/logout.php">Logout</a>
                <a class="btn btn-primary" href="../home.php">Back to home</a></div>
            <div style="display: inline-block;">
                <form method="post">
                    <input type="text" name="keyword" placeholder="search"
                           value="<?php echo (isset($_POST['keyword'])) ? $_POST['keyword'] : '' ?>">
                    <input type="submit" name="search" value="SEARCH">
                    <?php if (isset($_POST['search'])) {
                        $keyword = $_REQUEST['keyword'];
                        $sql = "SELECT * FROM `member` WHERE `firstname` LIKE '%$keyword%' OR `lastname` LIKE '%$keyword%' OR `username` LIKE '%$keyword%' ";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_ASSOC);

                    } ?>
                    <table class="gridtable" border="1px">
                        <tr>
                            <th>No.</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>

                        <?php foreach ($results as $key => $item): ?>
                            <tr>
                                <td><?php echo ++$key ?></td>
                                <td><?php echo $item['firstname'] ?></td>
                                <td><?php echo $item['lastname'] ?></td>
                                <td>
                                    <a href="../user/profile.php?id=<?php echo $item['mem_id'] ?>"> <?php echo $item['username'] ?></a>
                                </td>
                                <td><?php if ($item['role'] == 1) {
                                        echo 'Admin';
                                    } else {
                                        echo 'Member';
                                    } ?>
                                <td>
                                    <?php if ($_SESSION['user']['role'] == 1): ?>
                                        <a class="btn btn-danger"
                                           href="../../model/user/delete.php?id=<?php echo $item['mem_id'] ?>">Delete</a>
                                        <br>
                                        <a class="btn btn-primary"
                                           href="../../model/user/makeAdmin.php?id=<?php echo $item['mem_id'] ?>">Make
                                            Admin</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </form>
            </div>

        </div>
    </div>
</div>
<canvas id="myCanvas" width="1368px" height="768px" style="border:1px solid #d3d3d3;"></canvas>
<script src="../../js/background.js"></script>
</body>
</html><?php
