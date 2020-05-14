<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <title>INDEX</title>
        <link href="css/style.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
<?php include "view/nav.php"; ?>


<div class="container" style="text-align: center">
	<div class="col-md-12 well" style="display: inline-block">
		<h3 class="text-primary">Welcome to Awesome Library, please login or register</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<form action="model/user/login.php" method="POST">
				<h4 class="text-success">Login here...</h4>
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" />
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="login">Login</button>
				</div>
				<a href="view/user/registration.php">Registration</a>
			</form>
		</div>
	</div>
</div>
    <canvas id="myCanvas" width="1368px" height="768px" style="border:1px solid #d3d3d3;"></canvas>
    <script src="js/background.js"></script>
</body>
</html>