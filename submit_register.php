<?php include "db.php"; ?>
<?php
    $usernamepost = $_POST['username'];
    $pwd = md5($_POST['pwd']);
    $email = $_POST['email'];
    
    $result = mysql_query("SELECT * FROM user WHERE username = 'evan'");
    while($row = mysql_fetch_array($result)){
        $_SESSION['alert'] = 'exist';
        header("Location: showe.php");
        return;
    }
    
    $sql = "INSERT INTO user(username,pwd,email) VALUES('$usernamepost','$pwd','$email')";
    mysql_query($sql);
    echo $_SESSION['username'];
    $_SESSION['alert'] = 'success';
    header("Location: show.php");
?>

