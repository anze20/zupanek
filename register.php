<?php


    
    if(isset($_SESSION['id'])){
        header("Location: blog.php");
    }
    if(isset($_POST['register'])){
        include_once("db.php");
        
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        $email = strip_tags($_POST['email']);
        $password_confirm = strip_tags($_POST['password_confirm']); 
        

        
        $sql_store = "INSERT into uporabniki (username, password, email) VALUES ('$username', '$password', '$email')";
         
       
        $sql_fetch_username = "SELECT username FROM users WHERE username = '$username'";
        $sql_fetch_email = "SELECT email FROM users WHERE email = 'email'";
        
        $query_username = mysqli_query($db, $sql_fetch_username);
        $query_email = mysqli_query($db, $sql_fetch_email);
        
        if(mysqli_num_rows(($query_username))){
            echo "There is already a user with that name!";
            return;
        }
        
        if($username == ""){
            echo "Please insert a username";
            return;
        }
        
        if($password == "" || $password_confirm == ""){
            echo "Please insert your password";
            return;
        }
        
        if($password != $password_confirm){
            echo "Passwords do not match!";
            return;
        }
        
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)|| $email == ""){
            echo "This email is not valid!";
            return;
        }
        

        
        
        
        if(mysqli_num_rows(($query_email))){
            echo "There is already a user with that email!";
            return;
        }
        
        mysqli_query($db, $sql_store);
        
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>

<body>
        <form action="register.php" method="post" enctype="multipart/form-data">
            <input placeholder="Username" name="username" type="text" autofocus>
            <input placeholder="Password" name="password" type="password">
            <input placeholder="Confirm password" name="password_confirm" type="password">
            <input placeholder="Email Adress" name="email" type="text">
            <input name="register" type="submit" value="Register">
        </form>
</body>
</html>
