<?php
session_start();
$host="127.0.0.1";
$username="root";
$password="";
$db_name="schoolmsdb";
$link=mysqli_connect("$host", "$username", "$password")or die("Cannot Connect");
mysqli_select_db($link, "$db_name")or die("Cannot Select DB");
?>
