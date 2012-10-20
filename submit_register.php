<?php include "db.php"; ?>
<?php
    $usernamepost = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
    
    $result = mysql_query("SELECT * FROM user WHERE username = '$usernamepost'");
    while($row = mysql_fetch_array($result)){
    header("Location: show.php");
    return;
    }
    
    $sql = "INSERT INTO user(username,password,email) VALUES('$usernamepost','$pwd','$email')";
    mysql_query($sql);
    $_SESSION['username'] = $usernamepost;
    header("Location: show.php");
?>




