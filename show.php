<?php

$sql = "SELECT * FROM product";
            
            
    $result = mysql_query($sql);
    
    
    while($row = mysql_fetch_array($result)){
        $_SESSION['username'] = $usernamepost;
    }
