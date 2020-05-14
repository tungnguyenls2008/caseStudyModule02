<link rel="stylesheet" type="text/css" href="/caseStudy/css/bootstrap.css"/>
<link href="/caseStudy/css/style.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="container">
    <nav class="navbar navbar-expand-md navbar-light bg-warning">
        <a href="/caseStudy/view/home.php">
        <img style="width: 120px" src="/caseStudy/img/logo.png" href="/caseStudy/view/home.php" alt="logo">
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item active">
                    <a class="nav-link" href="/caseStudy/view/home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php if ($_SESSION['user']): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/caseStudy/view/user/profile.php?id=<?php echo $_SESSION['user']['mem_id'] ?>">Hello, <?php echo $_SESSION['user']['firstname'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/caseStudy/view/user/display.php">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/caseStudy/view/book/display.php">Books</a>
                </li>
                <?php endif; ?>
                <?php if ($_SESSION['user']['role'] == 1): ?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary text-black-50" type="button"
                           href="/caseStudy/view/borrow/borrowForm.php" >Make new borrow
                            oder</a>
                    </li><?php endif; ?>
                <?php if (!$_SESSION['user']): ?>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" type="button" href="/caseStudy/index.php" >Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white" type="button" href="/caseStudy/view/user/registration.php" >Register</a>
                </li><?php endif;  ?>
                <?php if ($_SESSION['user']): ?>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-black-50" type="button" href="/caseStudy/model/user/logout.php"
                       >LOGOUT</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>




    </nav>
</div>