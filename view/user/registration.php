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

<?php include "../nav.php"; ?>


<div class="container" style="text-align: center">
    <div class="col-md-12 well" style="display: inline-block">
        <h3 class="text-primary">PDO Login and Registration</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="../../model/user/register.php" method="POST">
                <h4 class="text-success">Register here...</h4>
                <hr style="border-top:1px groovy #000;">
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" class="form-control" name="firstname"/>
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" class="form-control" name="lastname"/>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password"/>
                </div>
                <div class="form-group">
                    <label>Retype password</label>
                    <input type="password" class="form-control" name="retype-password"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address"/>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone"/>
                </div>
                <br/>
                <div class="form-group">
                    <button class="btn btn-primary form-control" name="register">Register</button>
                </div>
                <a href="../../index.php">Login</a>
            </form>
        </div>
    </div>
</div>
<canvas id="myCanvas"  style="border:1px solid #d3d3d3;"></canvas>
<script src="../../js/background.js"></script>
</body>
</html>