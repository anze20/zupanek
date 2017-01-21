<?php

session_start();
include('includes/header.html');
include_once("db.php");

    if(!isset($_SESSION['username'])){
        header("Location: login.php");
        return;
    }

    if(isset($_POST['post'])) {
        $title = strip_tags($_POST['title']);
        $content = strip_tags($_POST['content']);
        
        $title = mysqli_real_escape_string($db, $title);
        $content = mysqli_real_escape_string($db, $content);
        $user = $_SESSION['username'];
        
        $date = date('d.m.Y h:i:s');
        
        $sql = "INSERT into posts (title, content, date, user) VALUES ('$title', '$content', '$date', '$user')";
        
        if($title == "" || $content == ""){
            echo "Please complete your post!";
            return;
        }
        mysqli_query($db, $sql);
        
        header("Location: blog.php"); //Preusmeritev po koncanem vpisu
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog-Post</title>
</head>

<body>

<div class="row">
            <div class="box">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post.php">
                        <h2 class="post-title">
                            Zdravilno delovanje medu
                        </h2>

                    </a>
                    <p class="post-meta">Objavil <a href="#">Anze</a> September 24, 2014</p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post.php">
                        <h2 class="post-title">
                            Nasvet iz narave za lepšo kožo
                        </h2>
                    </a>
                    <p class="post-meta">Objavil <a href="#">Peter</a> Oktober 24, 2016</p>
                </div>
                <hr>
        <form action="post.php" method="post" enctype="multipart/form-data">
            <input placeholder="Title" name="title" type="text" autofocus size="48"><br /><br />
            <textarea placeholder="Content" name="content" rows="10" cols="50"></textarea><br />
            <input name="post" type="submit" value="Post" >
        </form>
</body>
</html>

<?php
include('includes/footer.html');
?>
