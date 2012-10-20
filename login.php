<?php

    $usernamepost = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = $usernamepost
            AND pwd = $password";
            
            
    $result = mysql_query($sql);
    
    
    while($row = mysql_fetch_array($result)){
        $_SESSION['username'] = $usernamepost;
    }

    header("Location: show.php");

    mysql_close($con);
    
?>