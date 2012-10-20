<?php include "db.php"; ?>
<?php

unset($_SESSION['username']);

header("Location: index.php");
