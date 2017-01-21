<?php

session_start();
include('includes/header.php');
include_once("db.php");

    if(!isset($_SESSION['username'])){
        header("Location: login.php");
        return;
    }

    if(isset($_POST['post'])) {
        $title = strip_tags($_POST['naslov']);
        $content = strip_tags($_POST['besedilo']);
        
        $title = mysqli_real_escape_string($db, $title);
        $content = mysqli_real_escape_string($db, $content);
        $user = $_SESSION['username'];
        
        $date = date('d.m.Y h:i:s');
        
        $sql = "INSERT into posts (naslov, besedilo, datum, avtor) VALUES ('$title', '$content', '$date', '$user')";
        
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
<!--
            <div class="box">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

        <form action="post.php" method="post" enctype="multipart/form-data">
            <input placeholder="Naslov" name="title" type="text" autofocus size="48"><br /><br />
            <textarea placeholder="Vsebina" name="content" rows="10" cols="50"></textarea><br />
            <input name="post" type="submit" value="Objavi" >
        </form>
</body>
-->
</html>

<?php
include('includes/footer.php');
?>
