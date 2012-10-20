<?php include "db.php"; ?>
<?php

    $usernamepost = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = $usernamepost
            AND password = $password";
            
            
    $result = mysql_query($sql);
    
    
    while($row = mysql_fetch_array($result)){
        $_SESSION['username'] = $usernamepost;
    }

    header("Location: show.php");

    mysql_close($con);
    
?>
