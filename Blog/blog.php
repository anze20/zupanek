<?php

session_start();
include('includes/header.html');
include_once("db.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
</head>

<body>

    <div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <div class="box">
        
                <?php
        require_once("nbbc/nbbc.php");
        
        $bbcode = new BBCode;
        
        $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 5";
        
        $res = mysqli_query($db, $sql) or die(mysqli_error());
        
        $posts = "";
        
        
        if(mysqli_num_rows($res) > 0) {
            while($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $title = $row['title'];
                $content = $row['content'];
                $date = $row['date'];
                $user = $row['user'];
                
                $output = $bbcode->Parse($content);
                
                $posts .= "<div class='post-preview'>
                <h2 class='post-title'><a href='view_post.php?pid=$id'>$title</a>
                
                </h2>
                <p >$output</p>
                <p class='post-meta'>Objavil uporabnik <a href='#'>$user </a>$date</p>
                </div><hr>";
                
                            }
            echo $posts;
            
        } else {
            echo "There are no posts to display!";
            }
            if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1)
            echo "<a href='admin.php'>Admin</a> | <a href='logout.php'>Logout</a>";
        
            if(!isset($_SESSION['username'])){
                echo "<a href='login.php'>Prijavi</a>";
            }
            if(isset($_SESSION['username']) && !isset($_SESSION['admin'])){
                echo "<a href='logout.php'>Odjavi</a>";
            }
    ?>
                

               

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Starejse &rarr;</a>
                    </li>
                </ul>
            </div>
                 </div>                              

            </div>



</body>

</html>

<?php
include('includes/footer.html');
?>
