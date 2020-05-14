<?php
session_start();
include '../../model/connection/conn.php';
$bookID = $_REQUEST['id'];
$sql = "SELECT * FROM books WHERE `id`='$bookID' ";
$stmt = $conn->query($sql);
$book = $stmt->fetch();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>UPDATE YOUR BOOK</title>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<?php include "../nav.php"; ?>

<div class="container" style="text-align: center">
    <div class="col-md-12 well" style="display: inline-block">
        <h3 class="text-primary">UPDATE YOUR BOOK</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="../../model/book/update.php?id=<?php echo $bookID ?>" method="POST">
                <h4 class="text-success">Please fill in book's information</h4>
                <hr style="border-top:1px groovy #000;">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $book['name'] ?>"/>
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" name="author" value="<?php echo $book['author'] ?>"/>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label><select name="category" class="form-control"
                                                                                   id="exampleFormControlSelect1">
                        <option value="<?php echo $book['category'] ?>"
                                selected><?php echo $book['category'] ?></option>
                        <option value="action-adventure">Action and Adventure</option>
                        <option value="comic-graphic">Comic and Graphic Novel</option>
                        <option value="crime-detective">Crime and Detective</option>
                        <option value="drama">Drama</option>
                        <option value="fairy-tale">Fairy Tale</option>
                        <option value="classic">Classic</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description"><?php echo $book['description'] ?></textarea>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                        <option value="1" <?php if ($book['status'] == 1): ?>
                            selected
                        <?php endif ?>>Available
                        </option>
                        <option value="0" <?php if ($book['status'] == 0): ?>
                            selected
                        <?php endif ?>>Unavailable
                        </option>
                    </select>
                </div>
                <br/>
                <div class="form-group">
                    <button class="btn btn-primary form-control" name="add">UPDATE YOUR BOOK</button>
                </div>
                <a href="display.php">Display books list</a>
            </form>
        </div>
    </div>
</div>
<canvas id="myCanvas" width="1368px" height="768px" style="border:1px solid #d3d3d3;"></canvas>
<script src="../../js/background.js"></script>
</body>
</html>