<!DOCTYPE html>
<?php

session_start();
require '../../model/connection/conn.php';
if (!isset($_SESSION['book'])) {
    header('location:../../index.php');
}


?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>REGISTERED BOOKS</title>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style type="text/css">
    table.gridtable {
        width: auto;
        margin: auto;
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
        <h3 class="text-primary">Registered Books</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-2"></div>
        <div style="width: auto;margin: auto">
            <h3>Welcome!</h3>
            <?php
            $id = $_SESSION['user']['mem_id'];
            $sql2 = $conn->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
            $sql2->execute();
            $fetch = $sql2->fetch();
            ?>
            <div style="text-align: center;">
                <h4><?php echo 'hi there ' . $fetch['firstname'] . " " . $fetch['lastname'] ?></h4></div>
            <h5>This is a list of registered books, nothing important, really.</h5>
            <br/>
            <div style="width: auto;margin: auto">
                <form style="width: auto;margin: auto" method="post">
                    <input type="text" name="keyword" placeholder="search"
                           value="<?php echo (isset($_POST['keyword'])) ? $_POST['keyword'] : '' ?>">
                    <input type="submit" name="search" value="SEARCH"><br>
                    <?php if (isset($_POST['search'])) {
                        $keyword = $_POST['keyword'];
                        $sql = "SELECT * FROM `books` WHERE `name` LIKE '%$keyword%'";
                        $query = $conn->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll(PDO::FETCH_ASSOC);

                    } ?><table style="display: inline-block;text-align: left"><tr>
                    <?php if ($_SESSION['user']['role'] == 1): ?>
                        <td><a class="btn btn-primary" href="addForm.php">ADD NEW BOOK</a></td>
                        <td><a class="btn btn-warning" href="../../model/book/addRandomBook.php">Add random book</a></td>
                        <?php endif; ?>
                    <td><a class="btn btn-primary" href="../home.php">Back to home</a></td>
                    <td><a class="btn btn-danger" href="../../model/user/logout.php">Logout</a></td>
                        </tr></table>
                    <table class="gridtable" border="1px">
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>

                        <?php foreach ($results as $key => $item): ?>
                            <tr>
                                <td><?php echo ++$key ?></td>
                                <td><a href="profile.php?id=<?php echo $item['id'] ?>"> <?php echo $item['name'] ?></a>
                                </td>
                                <td><?php if ($item['status'] == 1) {
                                        echo 'Available';
                                    } else {
                                        echo 'Unavailable';
                                    } ?>
                                <td>
                                    <?php if ($_SESSION['user']['role'] == 1): ?>
                                        <a class="btn btn-danger"
                                           href="../../model/book/delete.php?id=<?php echo $item['id'] ?>">Delete</a>
                                        <br>
                                        <a class="btn btn-primary" href="updateForm.php?id=<?php echo $item['id'] ?>">Update</a>
                                    <?php endif; ?>
                                    <?php if ($_SESSION['user']['role'] == 0): ?>
                                        <a class="btn btn-outline-primary"
                                        >Book ID: <?php echo $item['id'] ?></a><br>
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
</html>