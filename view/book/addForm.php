<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <title>ADD NEW BOOK</title>
    <link href="../../css/style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<?php
session_start();
include '../nav.php' ?>

<div class="container" style="text-align: center">
    <div class="col-md-12 well" style="display: inline-block">
        <h3 class="text-primary">ADD NEW BOOK</h3>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="../../model/book/add.php" method="POST" enctype="multipart/form-data">
                <h4 class="text-success">Please fill in new book's information</h4>
                <hr style="border-top:1px groovy #000;">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label>Author</label>
                    <input type="text" class="form-control" name="author"/>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label><select name="category" class="form-control"
                                                                                   id="exampleFormControlSelect1">
                        <option value="uncategorized" selected>-----Uncategorized-----</option>
                        <option value="action-adventure">Action and Adventure</option>
                        <option value="comic-graphic">Comic and Graphic Novel</option>
                        <option value="crime-detective">Crime and Detective</option>
                        <option value="drama">Drama</option>
                        <option value="fairy-tale">Fairy Tale</option>
                        <option value="classic">Classic</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Cover</label>
                    <input type="file" name="image" style="display: inline-block">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" placeholder="Book's description"></textarea>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                        <option value="1">Available</option>
                        <option value="0">Unavailable</option>
                    </select>
                </div>
                <br/>
                <div class="form-group">
                    <button class="btn btn-primary form-control" name="add">ADD YOUR BOOK</button>
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