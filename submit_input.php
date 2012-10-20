<?php include "db.php"; ?>
<?php
    $name = $_POST['name'];
    $description = $_POST['description'];
    $jumlah = $_POST['jumlah'];
    
    
    $sql = "INSERT INTO product(nama,description,jumlah) VALUES('$name','$description','$jumlah')";
    mysql_query($sql);
    header("Location: show.php");



