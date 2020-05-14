<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>REGISTRATION</title>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php
session_start();
include '../../model/connection/conn.php';
$userID = $_REQUEST['id'];
$sql = "SELECT * FROM member WHERE `mem_id`='$userID' ";
$stmt = $conn->query($sql);
$user = $stmt->fetch();
?>
<?php include "../nav.php"; ?>


<div class="container" style="text-align: center">
    <div class="col-md-12 well" style="display: inline-block">
        <h3 class="text-primary">User profile update</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="../../model/user/update.php?id=<?php echo $user['mem_id'] ?>" method="POST">
                <h4 class="text-success">Update profile here...</h4>
                <hr style="border-top:1px groovy #000;">
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname" value="<?php echo $user['firstname'] ?>"/>
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname" value="<?php echo $user['lastname'] ?>"/>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $user['username'] ?>"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password"
                           value="<?php echo $user['password'] ?>"/>
                </div>
                <div class="form-group">
                    <label>Retype password</label>
                    <input type="password" class="form-control" name="retype-password"
                           value="<?php echo $user['password'] ?>"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $user['email'] ?>"/>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $user['address'] ?>"/>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $user['phone'] ?>"/>
                </div>
                <?php if ($_SESSION['user']['role'] == 1): ?>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Status</label>
                        </div>
                        <div class="col-md-6">
                            <select>
                                <option value="0">Active</option>
                                <option value="1">Blocked</option>
                            </select>
                        </div>
                    </div><?php endif; ?>
                <br/>
                <div class="form-group">
                    <button class="btn btn-primary form-control" name="update">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>
<canvas id="myCanvas" width="1368px" height="768px" style="border:1px solid #d3d3d3;"></canvas>
<script src="../../js/background.js"></script>
</body>
</html>