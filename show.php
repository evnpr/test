<?php include "db.php"; ?>

<?php
if (!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
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
   <span style="float: right; margin-right: 30px; margin-top: 10px;">
    Welcome <?php echo $_SESSION['username']; ?>,
    <a href="logout.php">Log Out</a></span>
</div>

<div id="container">


<?php

    $sql = "SELECT * FROM product";
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result)){
        
?>

<div>
<h3><?php echo $row['nama']; ?></h3>
<pre><?php echo $row['description']; ?></pre>
<p>quantity: <?php echo $row['jumlah']; ?></p>
<hr>
</div>


<?php
        
    }
?>    
    

<a href="input.php">input items?</a>
</div>


<div id="footer">
</div>


</body>
</html>












