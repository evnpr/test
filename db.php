<?php
session_start();
$con = mysql_connect("localhost","hungryjack","ee4717");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hungryjack", $con);
?>


