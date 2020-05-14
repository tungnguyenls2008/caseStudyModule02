<!DOCTYPE html>
<?php

session_start();
require '../../model/connection/conn.php';
if (!isset($_SESSION['user'])) {
    header('location:../../index.php');
}

$sql = "SELECT * FROM `member` ";
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
            <?php if ($_SESSION['user']['status'] == 0):{ ?>
            <h5>This is a list of registered user, nothing important, really.</h5>
            <div><?php if ($_SESSION['user']['role'] == 1): ?>
                    <a class="btn btn-secondary" href="searchResult.php">SEARCH</a>
                    <a class="btn btn-primary" href="../../model/user/addRandomUser.php">Add random user</a> <?php endif; ?>
                <a class="btn btn-danger" href="../../model/user/logout.php">Logout</a>
                <a class="btn btn-primary" href="../home.php">Back to home</a></div>
            <div style="display: inline-block;">
                <form method="post">
                    <br>
                    <table class="gridtable" border="1px">
                        <tr>
                            <th>No.</th>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>

                        <?php foreach ($results as $key => $item): ?>
                            <tr>
                                <td><?php echo ++$key ?></td>
                                <td><?php echo $item['mem_id'] ?></td>
                                <td>
                                    <a href="profile.php?id=<?php echo $item['mem_id'] ?>"> <?php echo $item['username'] ?></a>
                                </td>
                                <td><?php if ($item['role'] == 1) {
                                        echo 'Admin';
                                    } else {
                                        echo 'Member';
                                    } ?></td>
                                <td><?php if ($item['status'] == 0) {
                                        echo '<p style="color: #00A000">Active</p>';
                                    } else {
                                        echo '<p style="color: #9A0000">Blocked</p>';
                                    } ?></td>
                                <td>
                                    <?php if ($_SESSION['user']['role'] == 1):{ ?>
                                        <a class="btn btn-danger"
                                           href="../../model/user/delete.php?id=<?php echo $item['mem_id'] ?>">Delete</a><br><br>
                                        <?php if ($item['status'] == 0): ?>
                                            <a class="btn btn-danger" href="../../model/user/block.php?id=<?php echo $item['mem_id'] ?>">Block</a>
                                            <br><br>
                                        <?php elseif ($item['status'] == 1): ?>
                                            <a class="btn btn-secondary"
                                               href="../../model/user/unblock.php?id=<?php echo $item['mem_id'] ?>">Unblock</a><br><br>
                                        <?php endif; ?>
                                        <a class="btn btn-primary"
                                           href="../../model/user/makeAdmin.php?id=<?php echo $item['mem_id'] ?>">Make
                                            Admin</a>
                                    <?php } endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </form>
            </div>

        </div>
    </div>
</div>
<?php } else : echo "You're blocked from reaching this information, please contact site admin for details.";
endif; ?>
<canvas id="myCanvas"  style="border:1px solid #d3d3d3;"></canvas>
<script src="../../js/background.js"></script>
</body>
</html>