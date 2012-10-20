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


<form action="login.php" method="POST">
Nama Produk : <input type="text" name="username" /><br><br><br>
Description : <textarea name="username"></textarea><br><br>
Jumlah Barang : <select name="jumlah">

<?php
for($i=0; $i<10; $i++){
?>

<option value="<?php echo $i ?>"><?php echo $i ?></option>

<?php
    }
?>

</select><br>
<input type="submit" value="submit" />
</form>
</center>
</div>


<div id="footer">
</div>


</body>
</html>



