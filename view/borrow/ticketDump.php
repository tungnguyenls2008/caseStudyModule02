<!DOCTYPE html>
<?php

session_start();
require '../../model/connection/conn.php';
if (!isset($_SESSION['book'])) {
    header('location:../../index.php');
}

$sql = "SELECT * FROM `ticket_dump` ";
$query = $conn->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>BOOK BORROW TICKETS</title>
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
        <h3 class="text-primary">Registered Books</h3>
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
            <h5>This is a list of finished book borrow tickets, nothing important, really.</h5>
            <br/>
            <div style="display: inline-block;">
                <form method="post">
                    <?php if ($_SESSION['user']['role'] == 1): ?>
                    <table class="gridtable" border="1px">
                        <th>No.</th>
                        <th>Ticket ID</th>
                        <th>Ticket time</th>
                        <th>Member ID</th>
                        <th>Book ID</th>
                        <?php foreach ($results as $key => $item): ?>

                            <tr>
                                <td><?php echo ++$key ?></td>
                                <td><?php echo $item['id'] ?></td>
                                <td><?php echo $item['time_of_borrow'] ?></td>
                                <td><?php echo $item['mem_id'] ?></td>
                                <td><?php echo $item['book_id'] ?></td>

                            </tr>
                        <?php endforeach; ?><?php endif; ?>
                    </table>
                </form>
            </div>
            <?php if ($_SESSION['user']['role'] == 1): ?>

        </div>
        <a class="btn btn-primary" href="../home.php">Back to home</a>
        <a class="btn btn-secondary" href="borrowHistory.php">Back to borrow history</a>
        <?php endif; ?>
    </div>
</div>
<canvas id="myCanvas"  style="border:1px solid #d3d3d3;"></canvas>
<script src="../../js/background.js"></script>
</body>
</html>