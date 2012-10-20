<html>
<head>
<title>Workshop Kuntum</title>
<style>
#header{
    height: 40px;
    background-color: #eee;
    margin-bottom: 50px;    
}
</style>

</head>
<body>
<div id="header">
    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQs1cmHC867CVc0fLaSimKNGSagPNFd2lhERT5rqovMOQ4mKtw_" height="40" width="100" />
    <span style="float: right; margin-right: 30px; margin-top: 10px;"><a href="register.php">Register</a></span>
</div>

<div id="container">
<center>
<form action="submit_register.php" method="POST">
username : <input type="text" name="username" /><br>
password : <input type="password" name="pwd" id="pwd"/><br>
conf password : <input type="password" name="cpwd" id="cpwd" onblur="validate()"/><br>
email : <input type="text" name="email"/><br>
<input type="submit" value="login" />
</form>
</center>
</div>


<div id="footer">
</div>

<script>
function validate(){
    pwd = document.getElementById("pwd").innerHTML
    cpwd = document.getElementById("cpwd").innerHTML
    if(pwd!=cpwd){
        alert("password not match");
    }
}
</script>

</body>
</html>

