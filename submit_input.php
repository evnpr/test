<?php include "db.php"; ?>
<?php
    $name = $_POST['name'];
    $description = $_POST['description'];
    $jumlah = $_POST['jumlah'];
    
    
    $sql = "INSERT INTO product(name,description,jumlah) VALUES('$name','$description','$jumlah')";
    mysql_query($sql);
    header("Location: show.php");



