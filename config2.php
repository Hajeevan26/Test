<?php
$conn=mysqli_connect("titum.com.lk","titumcomlk_suvey_sync","Titum@123");
if(!$conn)
{
	die("server connection error ".mysqli_error($conn));
}
$db=mysqli_select_db($conn,"titumcomlk_suvey_sync");
if(!$db)
{
	die("database error ".mysqli_error($conn));
}
?>