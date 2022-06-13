<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
	die("server connection error ". mysqli_error($con));
}
$db=mysqli_select_db($con,"survey_new");
if(!$db)
{
	die("database error ". mysqli_error($con));
}
