<?php
session_start();
$con = mysql_connect("localhost","kuntum","kuntum");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("workshop", $con);
?>




