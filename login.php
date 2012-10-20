<?php

    $usernamepost = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = $usernamepost
            AND pwd = $password";
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result)){
        $login = 1;
        $_SESSION['username'] = $usernamepost;
    }

    echo $_SESSION['username'];

    mysql_close($con);
    
?>