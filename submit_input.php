<?php
    $usernamepost = $_POST['username'];
    $pwd = md5($_POST['pwd']);
    $email = $_POST['email'];
    
    
    $sql = "INSERT INTO user(username,pwd,email) VALUES('$usernamepost','$pwd','$email')";
    mysql_query($sql);
    header("Location: show.php");