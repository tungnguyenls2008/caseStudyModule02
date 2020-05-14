<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="../../css/userProfile.css" rel="stylesheet">
<link href="../../css/style.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<?php
session_start();
//include '../nav.php';
include '../../model/connection/conn.php';
$userID = $_REQUEST['id'];
$sql = "SELECT * FROM member WHERE `mem_id`='$userID' ";
$stmt = $conn->query($sql);
$user = $stmt->fetch();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://images.theconversation.com/files/140429/original/image-20161005-15879-23ovmp.jpg"
                         alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        <?php echo $user['firstname'] . ' ' . $user['lastname'] ?>
                    </h5>
                    <h6>
                        <?php if ($user['role'] == 1) {
                            echo 'Admin';
                        } else {
                            echo 'Member';
                        } ?>
                    </h6>
                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">About</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <?php if ($_SESSION['user']['role'] == 1): ?>
                    <a class="btn btn-primary" name="btnAddMore" href="updateForm.php?id=<?php echo $userID ?>">Edit
                        Profile</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">

                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>User Id</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $user['mem_id'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $user['firstname'] . ' ' . $user['lastname'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Username</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $user['username'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $user['email'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $user['phone'] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Status</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php if ($user['status'] == 0) {
                                        echo '<p style="color: #00A000">Active</p>';
                                    } else {
                                        echo '<p style="color: #9A0000">Blocked</p>';
                                    } ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <a href="display.php" class="btn btn-primary" style="size: A3">Back to users list</a>
                            <?php if ($_SESSION['user']['role'] == 1):{ ?>
                                <a class="btn btn-danger"
                                   href="../../model/user/delete.php?id=<?php echo $user['mem_id'] ?>" style="size: A3">Delete</a>
                                <?php if ($user['status'] == 0): ?>
                                    <a class="btn btn-danger"
                                       href="../../model/user/block.php?id=<?php echo $user['mem_id'] ?>"
                                       style="size: A3">Block</a>

                                <?php elseif ($user['status'] == 1): ?>
                                    <a class="btn btn-secondary"
                                       href="../../model/user/unblock.php?id=<?php echo $user['mem_id'] ?> "
                                       style="size: A3">Unblock</a>
                                <?php endif;
                            } ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Experience</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Hourly Rate</label>
                            </div>
                            <div class="col-md-6">
                                <p>10$/hr</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Projects</label>
                            </div>
                            <div class="col-md-6">
                                <p>230</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>English Level</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Availability</label>
                            </div>
                            <div class="col-md-6">
                                <p>6 months</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br/>
                                <p>Your detail description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<canvas id="myCanvas" width="1368px" height="768px" style="border:1px solid #d3d3d3;"></canvas>
<script src="../../js/background.js"></script>
</body>
</html>
