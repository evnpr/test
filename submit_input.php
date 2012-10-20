<?php
    $usernamepost = $_POST['username'];
    $description = $_POST['description'];
    $jumlah = $_POST['jumlah'];
    
    
    $sql = "INSERT INTO user(username,pwd,email) VALUES('$usernamepost','$pwd','$email')";
    mysql_query($sql);
    header("Location: show.php");
