<?php
    session_start();
    include('includes/header.html');
    
    if(isset($_POST['login'])){
        include_once("db.php");
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        
        $username = stripslashes($_POST['username']);
        $password = stripslashes($_POST['password']);
        
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
        
        $password = md5($password);
        
        $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $query = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($query);
        $id = $row['id'];
        $db_password = $row['password'];
        $admin = $row['admin'];
        
        if($password == $db_password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            if($admin == 1){
                $_SESSION['admin'] = 1;
            }
            
            header("Location: blog.php");
        }else {
           
            echo "<div class='col-lg-4'>You didn't enter the correct details!</div>";
          
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>

<body>
    <div class="row">
            
            <div class="col-lg-4 col-lg-offset-3 col-md-10 col-md-offset-1">
            <div class="box">
            Vnesite uporabnisko ime in geslo.<br />
            <hr>
            
<form action="login.php" method="post" enctype="multipart/form-data">
            <input placeholder="Username" name="username" type="text" autofocus>
            <input placeholder="Password" name="password" type="password">
            <input name="login" type="submit" value="Login">
        </form>
                <hr>
                
        
        </div>
        </div>
        </div>
    
        <!--
<h1 style="font-family: Tahoma;">Login</h1>
        <form action="login.php" method="post" enctype="multipart/form-data">
            <input placeholder="Username" name="username" type="text" autofocus>
            <input placeholder="Password" name="password" type="password">
            <input name="login" type="submit" value="Login">
        </form>
-->
    
</body>
</html>

<?php
include('includes/footer.html');
?>
