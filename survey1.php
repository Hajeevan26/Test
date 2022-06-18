<?php
include('connection/config.php');
if (!isset($_SESSION)) {
    session_start();
}
$user_id = $_SESSION['user_id'];
//$role_id = $_SESSION['role_id'];
if (isset($_SESSION['household_id'])) {
    $household_id = $_SESSION['household_id'];
    $sqlitem = "select * from tblsurvey_question where household_id='$household_id' and interviewer_id='$user_id' and status =0 ORDER BY household_id DESC limit 1";
} else {
    $sqlitem = "select * from tblsurvey_question where status =0 ORDER BY household_id DESC limit 1";
}

date_default_timezone_set("Asia/Colombo");

//$sqlitem = "select * from tblsurvey where id='$id' and interviewer_id='$user_id' ORDER BY id DESC limit 1";
$resultitem = mysqli_query($con, $sqlitem) or die("error in select survey:" . mysqli_error($con));
$row = mysqli_fetch_assoc($resultitem);
//$a1 = $row['a1'];
$household_id = $row['household_id'];
//$type_of_migrant = $row['type_of_migrant'];
//echo $a1;

if(isset($_POST['btnsubmit']) ) {
    $sqlitem = "select * from tblsurvey_question where household_id='$household_id' and interviewer_id='$user_id' and status =0 ORDER BY household_id DESC limit 1";
    $resultitem = mysqli_query($con, $sqlitem) or die("error in select survey:" . mysqli_error($con));
    $row = mysqli_fetch_assoc($resultitem);
        
   

        if (isset($_POST['1_1_2_1'])) {  $a1_1_2_1 = $_POST['1_1_2_1'];} else {$a1_1_2_1 = NULL; }
        if (isset($_POST['1_1_3_1'] )) { $a1_1_3_1 = $_POST['1_1_3_1'];} else {$a1_1_3_1 = NULL; }
        if (isset($_POST['1_1_3_1_oth'] )) { $a1_1_3_1_oth = $_POST['1_1_3_1_oth'];} else {$a1_1_3_1_oth = NULL; }
        if (isset($_POST['1_1_4_1'] )) { $a1_1_4_1 = $_POST['1_1_4_1'];} else {$a1_1_4_1 = NULL; }
        if (isset($_POST['1_1_5_1'] )) { $a1_1_5_1 = $_POST['1_1_5_1'];} else {$a1_1_5_1 = NULL; }
        if (isset($_POST['1_1_6_1'] )) { $a1_1_6_1 = $_POST['1_1_6_1'];} else {$a1_1_6_1 = NULL; }
        if (isset($_POST['1_1_6_1_oth'] )) { $a1_1_6_1_oth = $_POST['1_1_6_1_oth'];} else {$a1_1_6_1_oth = NULL; }
        if (isset($_POST['1_1_7_1'] )) { $a1_1_7_1 = $_POST['1_1_7_1'];} else {$a1_1_7_1 = NULL; }
        if (isset($_POST['1_1_7_1_oth'] )) { $a1_1_7_1_oth = $_POST['1_1_7_1_oth'];} else {$a1_1_7_1_oth = NULL; }
        if (isset($_POST['1_1_8_1'] )) { $a1_1_8_1 = $_POST['1_1_8_1'];} else {$a1_1_8_1 = NULL; }
        if (isset($_POST['1_1_9_1'] )) { $a1_1_9_1 = $_POST['1_1_9_1'];} else {$a1_1_9_1 = NULL; }
        if (isset($_POST['1_1_10_1'] )) { $a1_1_10_1 = $_POST['1_1_10_1'];} else {$a1_1_10_1 = NULL; }
        if (isset($_POST['1_1_10_1_oth'] )) { $a1_1_10_1_oth = $_POST['1_1_10_1_oth'];} else {$a1_1_10_1_oth = NULL; }
        if (isset($_POST['1_1_11_1'] )) { $a1_1_11_1 = $_POST['1_1_11_1'];} else {$a1_1_11_1 = NULL; }
        if (isset($_POST['1_1_11_1_oth'] )) { $a1_1_11_1_oth = $_POST['1_1_11_1_oth'];} else {$a1_1_11_1_oth = NULL; }
        if (isset($_POST['1_1_12_1'] )) { $a1_1_12_1 = $_POST['1_1_12_1'];} else {$a1_1_12_1 = NULL; }
        if (isset($_POST['1_1_13_1'] )) { $a1_1_13_1 = $_POST['1_1_13_1'];} else {$a1_1_13_1 = NULL; }

        //2nd
        if (isset($_POST['1_1_2_2'])) {  $a1_1_2_2 = $_POST['1_1_2_2'];} else {$a1_1_2_2 = NULL; }
        if (isset($_POST['1_1_3_2'] )) { $a1_1_3_2 = $_POST['1_1_3_2'];} else {$a1_1_3_2 = NULL; }
        if (isset($_POST['1_1_3_2_oth'] )) { $a1_1_3_2_oth = $_POST['1_1_3_2_oth'];} else {$a1_1_3_2_oth = NULL; }
        if (isset($_POST['1_1_4_2'] )) { $a1_1_4_2 = $_POST['1_1_4_2'];} else {$a1_1_4_2 = NULL; }
        if (isset($_POST['1_1_5_2'] )) { $a1_1_5_2 = $_POST['1_1_5_2'];} else {$a1_1_5_2 = NULL; }
        if (isset($_POST['1_1_6_2'] )) { $a1_1_6_2 = $_POST['1_1_6_2'];} else {$a1_1_6_2 = NULL; }
        if (isset($_POST['1_1_6_2_oth'] )) { $a1_1_6_2_oth = $_POST['1_1_6_2_oth'];} else {$a1_1_6_2_oth = NULL; }
        if (isset($_POST['1_1_7_2'] )) { $a1_1_7_2 = $_POST['1_1_7_2'];} else {$a1_1_7_2 = NULL; }
        if (isset($_POST['1_1_7_2_oth'] )) { $a1_1_7_2_oth = $_POST['1_1_7_2_oth'];} else {$a1_1_7_2_oth = NULL; }
        if (isset($_POST['1_1_8_2'] )) { $a1_1_8_2 = $_POST['1_1_8_2'];} else {$a1_1_8_2 = NULL; }
        if (isset($_POST['1_1_9_2'] )) { $a1_1_9_2 = $_POST['1_1_9_2'];} else {$a1_1_9_2 = NULL; }
        if (isset($_POST['1_1_10_2'] )) { $a1_1_10_2 = $_POST['1_1_10_2'];} else {$a1_1_10_2 = NULL; }
        if (isset($_POST['1_1_10_2_oth'] )) { $a1_1_10_2_oth = $_POST['1_1_10_2_oth'];} else {$a1_1_10_2_oth = NULL; }
        if (isset($_POST['1_1_11_2'] )) { $a1_1_11_2 = $_POST['1_1_11_2'];} else {$a1_1_11_2 = NULL; }
        if (isset($_POST['1_1_11_2_oth'] )) { $a1_1_11_2_oth = $_POST['1_1_11_2_oth'];} else {$a1_1_11_2_oth = NULL; }
        if (isset($_POST['1_1_12_2'] )) { $a1_1_12_2 = $_POST['1_1_12_2'];} else {$a1_1_12_2 = NULL; }
        if (isset($_POST['1_1_13_2'] )) { $a1_1_13_2 = $_POST['1_1_13_2'];} else {$a1_1_13_2 = NULL; }

        		//3
		if (isset($_POST['1_1_2_3'])) {  $a1_1_2_3 = $_POST['1_1_2_3'];} else {$a1_1_2_3 = NULL; }
		if (isset($_POST['1_1_3_3'] )) { $a1_1_3_3 = $_POST['1_1_3_3'];} else {$a1_1_3_3 = NULL; }
		if (isset($_POST['1_1_3_3_oth'] )) { $a1_1_3_3_oth = $_POST['1_1_3_3_oth'];} else {$a1_1_3_3_oth = NULL; }
		if (isset($_POST['1_1_4_3'] )) { $a1_1_4_3 = $_POST['1_1_4_3'];} else {$a1_1_4_3 = NULL; }
		if (isset($_POST['1_1_5_3'] )) { $a1_1_5_3 = $_POST['1_1_5_3'];} else {$a1_1_5_3 = NULL; }
		if (isset($_POST['1_1_6_3'] )) { $a1_1_6_3 = $_POST['1_1_6_3'];} else {$a1_1_6_3 = NULL; }
		if (isset($_POST['1_1_6_3_oth'] )) { $a1_1_6_3_oth = $_POST['1_1_6_3_oth'];} else {$a1_1_6_3_oth = NULL; }
		if (isset($_POST['1_1_7_3'] )) { $a1_1_7_3 = $_POST['1_1_7_3'];} else {$a1_1_7_3 = NULL; }
		if (isset($_POST['1_1_7_3_oth'] )) { $a1_1_7_3_oth = $_POST['1_1_7_3_oth'];} else {$a1_1_7_3_oth = NULL; }
		if (isset($_POST['1_1_8_3'] )) { $a1_1_8_3 = $_POST['1_1_8_3'];} else {$a1_1_8_3 = NULL; }
		if (isset($_POST['1_1_9_3'] )) { $a1_1_9_3 = $_POST['1_1_9_3'];} else {$a1_1_9_3 = NULL; }
		if (isset($_POST['1_1_10_3'] )) { $a1_1_10_3 = $_POST['1_1_10_3'];} else {$a1_1_10_3 = NULL; }
		if (isset($_POST['1_1_10_3_oth'] )) { $a1_1_10_3_oth = $_POST['1_1_10_3_oth'];} else {$a1_1_10_3_oth = NULL; }
		if (isset($_POST['1_1_11_3'] )) { $a1_1_11_3 = $_POST['1_1_11_3'];} else {$a1_1_11_3 = NULL; }
		if (isset($_POST['1_1_11_3_oth'] )) { $a1_1_11_3_oth = $_POST['1_1_11_3_oth'];} else {$a1_1_11_3_oth = NULL; }
		if (isset($_POST['1_1_12_3'] )) { $a1_1_12_3 = $_POST['1_1_12_3'];} else {$a1_1_12_3 = NULL; }
		if (isset($_POST['1_1_13_3'] )) { $a1_1_13_3 = $_POST['1_1_13_3'];} else {$a1_1_13_3 = NULL; }

		//4
		if (isset($_POST['1_1_2_4'])) {  $a1_1_2_4 = $_POST['1_1_2_4'];} else {$a1_1_2_4 = NULL; }
		if (isset($_POST['1_1_3_4'] )) { $a1_1_3_4 = $_POST['1_1_3_4'];} else {$a1_1_3_4 = NULL; }
		if (isset($_POST['1_1_3_4_oth'] )) { $a1_1_3_4_oth = $_POST['1_1_3_4_oth'];} else {$a1_1_3_4_oth = NULL; }
		if (isset($_POST['1_1_4_4'] )) { $a1_1_4_4 = $_POST['1_1_4_4'];} else {$a1_1_4_4 = NULL; }
		if (isset($_POST['1_1_5_4'] )) { $a1_1_5_4 = $_POST['1_1_5_4'];} else {$a1_1_5_4 = NULL; }
		if (isset($_POST['1_1_6_4'] )) { $a1_1_6_4 = $_POST['1_1_6_4'];} else {$a1_1_6_4 = NULL; }
		if (isset($_POST['1_1_6_4_oth'] )) { $a1_1_6_4_oth = $_POST['1_1_6_4_oth'];} else {$a1_1_6_4_oth = NULL; }
		if (isset($_POST['1_1_7_4'] )) { $a1_1_7_4 = $_POST['1_1_7_4'];} else {$a1_1_7_4 = NULL; }
		if (isset($_POST['1_1_7_1_oth'] )) { $a1_1_7_4_oth = $_POST['1_1_7_4_oth'];} else {$a1_1_7_4_oth = NULL; }
		if (isset($_POST['1_1_8_4'] )) { $a1_1_8_4 = $_POST['1_1_8_4'];} else {$a1_1_8_4 = NULL; }
		if (isset($_POST['1_1_9_4'] )) { $a1_1_9_4 = $_POST['1_1_9_4'];} else {$a1_1_9_4 = NULL; }
		if (isset($_POST['1_1_10_4'] )) { $a1_1_10_4 = $_POST['1_1_10_4'];} else {$a1_1_10_4 = NULL; }
		if (isset($_POST['1_1_10_4_oth'] )) { $a1_1_10_4_oth = $_POST['1_1_10_4_oth'];} else {$a1_1_10_4_oth = NULL; }
		if (isset($_POST['1_1_11_4'] )) { $a1_1_11_4 = $_POST['1_1_11_4'];} else {$a1_1_11_4 = NULL; }
		if (isset($_POST['1_1_11_4_oth'] )) { $a1_1_11_4_oth = $_POST['1_1_11_4_oth'];} else {$a1_1_11_4_oth = NULL; }
		if (isset($_POST['1_1_12_4'] )) { $a1_1_12_4 = $_POST['1_1_12_4'];} else {$a1_1_12_4 = NULL; }
		if (isset($_POST['1_1_13_4'] )) { $a1_1_13_4 = $_POST['1_1_13_4'];} else {$a1_1_13_4 = NULL; }

		//5
		if (isset($_POST['1_1_2_5'])) {  $a1_1_2_5 = $_POST['1_1_2_5'];} else {$a1_1_2_5 = NULL; }
		if (isset($_POST['1_1_3_5'] )) { $a1_1_3_5 = $_POST['1_1_3_5'];} else {$a1_1_3_5 = NULL; }
		if (isset($_POST['1_1_3_5_oth'] )) { $a1_1_3_5_oth = $_POST['1_1_3_5_oth'];} else {$a1_1_3_5_oth = NULL; }
		if (isset($_POST['1_1_4_5'] )) { $a1_1_4_5 = $_POST['1_1_4_5'];} else {$a1_1_4_5 = NULL; }
		if (isset($_POST['1_1_5_5'] )) { $a1_1_5_5 = $_POST['1_1_5_5'];} else {$a1_1_5_5 = NULL; }
		if (isset($_POST['1_1_6_5'] )) { $a1_1_6_5 = $_POST['1_1_6_5'];} else {$a1_1_6_5 = NULL; }
		if (isset($_POST['1_1_6_5_oth'] )) { $a1_1_6_5_oth = $_POST['1_1_6_5_oth'];} else {$a1_1_6_5_oth = NULL; }
		if (isset($_POST['1_1_7_5'] )) { $a1_1_7_5 = $_POST['1_1_7_5'];} else {$a1_1_7_5 = NULL; }
		if (isset($_POST['1_1_7_5_oth'] )) { $a1_1_7_5_oth = $_POST['1_1_7_5_oth'];} else {$a1_1_7_5_oth = NULL; }
		if (isset($_POST['1_1_8_5'] )) { $a1_1_8_5 = $_POST['1_1_8_5'];} else {$a1_1_8_5 = NULL; }
		if (isset($_POST['1_1_9_5'] )) { $a1_1_9_5 = $_POST['1_1_9_5'];} else {$a1_1_9_5 = NULL; }
		if (isset($_POST['1_1_10_5'] )) { $a1_1_10_5 = $_POST['1_1_10_5'];} else {$a1_1_10_5 = NULL; }
		if (isset($_POST['1_1_10_5_oth'] )) { $a1_1_10_5_oth = $_POST['1_1_10_5_oth'];} else {$a1_1_10_5_oth = NULL; }
		if (isset($_POST['1_1_11_5'] )) { $a1_1_11_5 = $_POST['1_1_11_5'];} else {$a1_1_11_5 = NULL; }
		if (isset($_POST['1_1_11_5_oth'] )) { $a1_1_11_5_oth = $_POST['1_1_11_5_oth'];} else {$a1_1_11_5_oth = NULL; }
		if (isset($_POST['1_1_12_5'] )) { $a1_1_12_5 = $_POST['1_1_12_5'];} else {$a1_1_12_5 = NULL; }
		if (isset($_POST['1_1_13_5'] )) { $a1_1_13_5 = $_POST['1_1_13_5'];} else {$a1_1_13_5 = NULL; }

		//6
		if (isset($_POST['1_1_2_6'])) {  $a1_1_2_6 = $_POST['1_1_2_6'];} else {$a1_1_2_6 = NULL; }
		if (isset($_POST['1_1_3_6'] )) { $a1_1_3_6 = $_POST['1_1_3_6'];} else {$a1_1_3_6 = NULL; }
		if (isset($_POST['1_1_3_6_oth'] )) { $a1_1_3_6_oth = $_POST['1_1_3_6_oth'];} else {$a1_1_3_6_oth = NULL; }
		if (isset($_POST['1_1_4_6'] )) { $a1_1_4_6 = $_POST['1_1_4_6'];} else {$a1_1_4_6 = NULL; }
		if (isset($_POST['1_1_5_6'] )) { $a1_1_5_6 = $_POST['1_1_5_6'];} else {$a1_1_5_6 = NULL; }
		if (isset($_POST['1_1_6_6'] )) { $a1_1_6_6 = $_POST['1_1_6_6'];} else {$a1_1_6_6 = NULL; }
		if (isset($_POST['1_1_6_6_oth'] )) { $a1_1_6_6_oth = $_POST['1_1_6_6_oth'];} else {$a1_1_6_6_oth = NULL; }
		if (isset($_POST['1_1_7_6'] )) { $a1_1_7_6 = $_POST['1_1_7_6'];} else {$a1_1_7_6 = NULL; }
		if (isset($_POST['1_1_8_6'] )) { $a1_1_8_6 = $_POST['1_1_8_6'];} else {$a1_1_8_6 = NULL; }
		if (isset($_POST['1_1_9_6'] )) { $a1_1_9_6 = $_POST['1_1_9_6'];} else {$a1_1_9_6 = NULL; }
		if (isset($_POST['1_1_10_6'] )) { $a1_1_10_6 = $_POST['1_1_10_6'];} else {$a1_1_10_6 = NULL; }
		if (isset($_POST['1_1_10_6_oth'] )) { $a1_1_10_6_oth = $_POST['1_1_10_6_oth'];} else {$a1_1_10_6_oth = NULL; }
		if (isset($_POST['1_1_11_6'] )) { $a1_1_11_6 = $_POST['1_1_11_6'];} else {$a1_1_11_6 = NULL; }
		if (isset($_POST['1_1_11_6_oth'] )) { $a1_1_11_6_oth = $_POST['1_1_11_6_oth'];} else {$a1_1_11_6_oth = NULL; }
		if (isset($_POST['1_1_12_6'] )) { $a1_1_12_6 = $_POST['1_1_12_6'];} else {$a1_1_12_6 = NULL; }
		if (isset($_POST['1_1_13_6'] )) { $a1_1_13_6 = $_POST['1_1_13_6'];} else {$a1_1_13_6 = NULL; }

		//7
		if (isset($_POST['1_1_2_7'])) {  $a1_1_2_7 = $_POST['1_1_2_7'];} else {$a1_1_2_7 = NULL; }
		if (isset($_POST['1_1_3_7'] )) { $a1_1_3_7 = $_POST['1_1_3_7'];} else {$a1_1_3_7 = NULL; }
		if (isset($_POST['1_1_3_7_oth'] )) { $a1_1_3_7_oth = $_POST['1_1_3_7_oth'];} else {$a1_1_3_7_oth = NULL; }
		if (isset($_POST['1_1_4_7'] )) { $a1_1_4_7 = $_POST['1_1_4_7'];} else {$a1_1_4_7 = NULL; }
		if (isset($_POST['1_1_5_7'] )) { $a1_1_5_7 = $_POST['1_1_5_7'];} else {$a1_1_5_7 = NULL; }
		if (isset($_POST['1_1_6_7'] )) { $a1_1_6_7 = $_POST['1_1_6_7'];} else {$a1_1_6_7 = NULL; }
		if (isset($_POST['1_1_6_7_oth'] )) { $a1_1_6_7_oth = $_POST['1_1_6_7_oth'];} else {$a1_1_6_7_oth = NULL; }
		if (isset($_POST['1_1_7_7'] )) { $a1_1_7_7 = $_POST['1_1_7_7'];} else {$a1_1_7_7 = NULL; }
		if (isset($_POST['1_1_7_7_oth'] )) { $a1_1_7_7_oth = $_POST['1_1_7_7_oth'];} else {$a1_1_7_7_oth = NULL; }
		if (isset($_POST['1_1_8_7'] )) { $a1_1_8_7 = $_POST['1_1_8_7'];} else {$a1_1_8_7 = NULL; }
		if (isset($_POST['1_1_9_7'] )) { $a1_1_9_7 = $_POST['1_1_9_7'];} else {$a1_1_9_7 = NULL; }
		if (isset($_POST['1_1_10_7'] )) { $a1_1_10_7 = $_POST['1_1_10_7'];} else {$a1_1_10_7 = NULL; }
		if (isset($_POST['1_1_10_7_oth'] )) { $a1_1_10_7_oth = $_POST['1_1_10_7_oth'];} else {$a1_1_10_7_oth = NULL; }
		if (isset($_POST['1_1_11_7'] )) { $a1_1_11_7 = $_POST['1_1_11_7'];} else {$a1_1_11_7 = NULL; }
		if (isset($_POST['1_1_11_7_oth'] )) { $a1_1_11_7_oth = $_POST['1_1_11_7_oth'];} else {$a1_1_11_7_oth = NULL; }
		if (isset($_POST['1_1_12_7'] )) { $a1_1_12_7 = $_POST['1_1_12_7'];} else {$a1_1_12_7 = NULL; }
		if (isset($_POST['1_1_13_7'] )) { $a1_1_13_7 = $_POST['1_1_13_7'];} else {$a1_1_13_7 = NULL; }

		//8
		if (isset($_POST['1_1_2_8'])) {  $a1_1_2_8 = $_POST['1_1_2_8'];} else {$a1_1_2_8 = NULL; }
		if (isset($_POST['1_1_3_8'] )) { $a1_1_3_8 = $_POST['1_1_3_8'];} else {$a1_1_3_8 = NULL; }
		if (isset($_POST['1_1_3_8_oth'] )) { $a1_1_3_8_oth = $_POST['1_1_3_8_oth'];} else {$a1_1_3_8_oth = NULL; }
		if (isset($_POST['1_1_4_8'] )) { $a1_1_4_8 = $_POST['1_1_4_8'];} else {$a1_1_4_8 = NULL; }
		if (isset($_POST['1_1_5_8'] )) { $a1_1_5_8 = $_POST['1_1_5_8'];} else {$a1_1_5_8 = NULL; }
		if (isset($_POST['1_1_6_8'] )) { $a1_1_6_8 = $_POST['1_1_6_8'];} else {$a1_1_6_8 = NULL; }
		if (isset($_POST['1_1_6_8_oth'] )) { $a1_1_6_8_oth = $_POST['1_1_6_8_oth'];} else {$a1_1_6_8_oth = NULL; }
		if (isset($_POST['1_1_7_8'] )) { $a1_1_7_8 = $_POST['1_1_7_8'];} else {$a1_1_7_8 = NULL; }
		if (isset($_POST['1_1_7_8_oth'] )) { $a1_1_7_8_oth = $_POST['1_1_7_8_oth'];} else {$a1_1_7_8_oth = NULL; }
		if (isset($_POST['1_1_8_8'] )) { $a1_1_8_8 = $_POST['1_1_8_8'];} else {$a1_1_8_8 = NULL; }
		if (isset($_POST['1_1_8_8_oth'] )) { $a1_1_8_8_oth = $_POST['1_1_8_8_oth'];} else {$a1_1_8_8_oth = NULL; }
		if (isset($_POST['1_1_9_8'] )) { $a1_1_9_8 = $_POST['1_1_9_8'];} else {$a1_1_9_8 = NULL; }
		if (isset($_POST['1_1_10_8'] )) { $a1_1_10_8 = $_POST['1_1_10_8'];} else {$a1_1_10_8 = NULL; }
		if (isset($_POST['1_1_10_8_oth'] )) { $a1_1_10_8_oth = $_POST['1_1_10_8_oth'];} else {$a1_1_10_8_oth = NULL; }
		if (isset($_POST['1_1_11_8'] )) { $a1_1_11_8 = $_POST['1_1_11_8'];} else {$a1_1_11_8 = NULL; }
		if (isset($_POST['1_1_11_8_oth'] )) { $a1_1_11_8_oth = $_POST['1_1_11_8_oth'];} else {$a1_1_11_8_oth = NULL; }
		if (isset($_POST['1_1_12_8'] )) { $a1_1_12_8 = $_POST['1_1_12_8'];} else {$a1_1_12_8 = NULL; }
		if (isset($_POST['1_1_13_8'] )) { $a1_1_13_8 = $_POST['1_1_13_8'];} else {$a1_1_13_8 = NULL; }

		//9
		if (isset($_POST['1_1_2_9'])) {  $a1_1_2_9 = $_POST['1_1_2_9'];} else {$a1_1_2_9 = NULL; }
		if (isset($_POST['1_1_3_9'] )) { $a1_1_3_9 = $_POST['1_1_3_9'];} else {$a1_1_3_9 = NULL; }
		if (isset($_POST['1_1_3_9_oth'] )) { $a1_1_3_9_oth = $_POST['1_1_3_9_oth'];} else {$a1_1_3_9_oth = NULL; }
		if (isset($_POST['1_1_4_9'] )) { $a1_1_4_9 = $_POST['1_1_4_9'];} else {$a1_1_4_9 = NULL; }
		if (isset($_POST['1_1_5_9'] )) { $a1_1_5_9 = $_POST['1_1_5_9'];} else {$a1_1_5_9 = NULL; }
		if (isset($_POST['1_1_6_9'] )) { $a1_1_6_9 = $_POST['1_1_6_9'];} else {$a1_1_6_9 = NULL; }
		if (isset($_POST['1_1_6_9_oth'] )) { $a1_1_6_9_oth = $_POST['1_1_6_9_oth'];} else {$a1_1_6_9_oth = NULL; }
		if (isset($_POST['1_1_7_9'] )) { $a1_1_7_9 = $_POST['1_1_7_9'];} else {$a1_1_7_9 = NULL; }
		if (isset($_POST['1_1_7_9_oth'] )) { $a1_1_7_9_oth = $_POST['1_1_7_9_oth'];} else {$a1_1_7_9_oth = NULL; }
		if (isset($_POST['1_1_8_9'] )) { $a1_1_8_9 = $_POST['1_1_8_9'];} else {$a1_1_8_9 = NULL; }
		if (isset($_POST['1_1_9_9'] )) { $a1_1_9_9 = $_POST['1_1_9_9'];} else {$a1_1_9_9 = NULL; }
		if (isset($_POST['1_1_10_9'] )) { $a1_1_10_9 = $_POST['1_1_10_9'];} else {$a1_1_10_9 = NULL; }
		if (isset($_POST['1_1_10_9_oth'] )) { $a1_1_10_9_oth = $_POST['1_1_10_9_oth'];} else {$a1_1_10_9_oth = NULL; }
		if (isset($_POST['1_1_11_9'] )) { $a1_1_11_9 = $_POST['1_1_11_9'];} else {$a1_1_11_9 = NULL; }
		if (isset($_POST['1_1_11_9_oth'] )) { $a1_1_11_9_oth = $_POST['1_1_11_9_oth'];} else {$a1_1_11_9_oth = NULL; }
		if (isset($_POST['1_1_12_9'] )) { $a1_1_12_9 = $_POST['1_1_12_9'];} else {$a1_1_12_9 = NULL; }
		if (isset($_POST['1_1_13_9'] )) { $a1_1_13_9 = $_POST['1_1_13_9'];} else {$a1_1_13_9 = NULL; }

		//10
		if (isset($_POST['1_1_2_10'])) {  $a1_1_2_10 = $_POST['1_1_2_7'];} else {$a1_1_2_10 = NULL; }
		if (isset($_POST['1_1_3_10'] )) { $a1_1_3_10 = $_POST['1_1_3_7'];} else {$a1_1_3_10 = NULL; }
		if (isset($_POST['1_1_3_10_oth'] )) { $a1_1_3_10_oth = $_POST['1_1_3_10_oth'];} else {$a1_1_3_10_oth = NULL; }
		if (isset($_POST['1_1_4_10'] )) { $a1_1_4_10 = $_POST['1_1_4_7'];} else {$a1_1_4_10 = NULL; }
		if (isset($_POST['1_1_5_10'] )) { $a1_1_5_10 = $_POST['1_1_5_7'];} else {$a1_1_5_10 = NULL; }
		if (isset($_POST['1_1_6_10'] )) { $a1_1_6_10 = $_POST['1_1_6_7'];} else {$a1_1_6_10 = NULL; }
		if (isset($_POST['1_1_6_10_oth'] )) { $a1_1_6_10_oth = $_POST['1_1_6_10_oth'];} else {$a1_1_6_10_oth = NULL; }
		if (isset($_POST['1_1_7_10'] )) { $a1_1_7_10 = $_POST['1_1_7_7'];} else {$a1_1_7_10 = NULL; }
		if (isset($_POST['1_1_7_10_oth'] )) { $a1_1_7_10_oth = $_POST['1_1_7_10_oth'];} else {$a1_1_7_10_oth = NULL; }
		if (isset($_POST['1_1_8_10'] )) { $a1_1_8_10 = $_POST['1_1_8_7'];} else {$a1_1_8_10 = NULL; }
		if (isset($_POST['1_1_9_10'] )) { $a1_1_9_10 = $_POST['1_1_9_7'];} else {$a1_1_9_10 = NULL; }
		if (isset($_POST['1_1_10_10'] )) { $a1_1_10_10 = $_POST['1_1_10_7'];} else {$a1_1_10_10 = NULL; }
		if (isset($_POST['1_1_10_10_oth'] )) { $a1_1_10_10_oth = $_POST['1_1_10_10_oth'];} else {$a1_1_10_10_oth = NULL; 
		if (isset($_POST['1_1_11_10'] )) { $a1_1_11_10 = $_POST['1_1_11_7'];} else {$a1_1_11_10 = NULL; }
		if (isset($_POST['1_1_11_10_oth'] )) { $a1_1_11_10_oth = $_POST['1_1_11_10_oth'];} else {$a1_1_11_10_oth = NULL; }
		if (isset($_POST['1_1_12_10'] )) { $a1_1_12_10 = $_POST['1_1_12_7'];} else {$a1_1_12_10 = NULL; }
		if (isset($_POST['1_1_13_10'] )) { $a1_1_13_10 = $_POST['1_1_13_7'];} else {$a1_1_13_10 = NULL; }

        
    
        $sqlupdatesq1 = "UPDATE tblsurvey_question SET 1_1_2_1='$a1_1_2_1',1_1_3_1='$a1_1_3_1',1_1_3_1_oth='$a1_1_3_1_oth',1_1_3_1='$a1_1_3_1' ,1_1_4_1='$a1_1_4_1' ,1_1_5_1='$a1_1_5_1',1_1_6_1='$a1_1_6_1',1_1_6_1_oth='$a1_1_6_1_oth' ,1_1_7_1='$a1_1_7_1',1_1_7_1_oth='$a1_1_7_1_oth',1_1_8_1='$a1_1_8_1',1_1_9_1='$a1_1_9_1', 1_1_10_1='$a1_1_10_1',1_1_10_1_oth='$a1_1_10_1_oth', 1_1_11_1='$a1_1_11_1', 1_1_11_1_oth=' $1_1_11_1_oth' ,1_1_12_1='$a1_1_12_1'  ,1_1_13_1='$a1_1_13_1'  where household_id= '$household_id' ";
		
		$sqlupdatesq2 = "UPDATE tblsurvey_question SET 1_1_2_2='$a1_1_2_2',1_1_3_2='$a1_1_3_2',1_1_3_2_oth='$a1_1_3_2_oth',1_1_3_2='$a1_1_3_2',1_1_4_2='$a1_1_4_2' ,1_1_5_2='$a1_1_5_2',1_1_6_2='$a1_1_6_2',1_1_6_2_oth='$a1_1_6_2_oth' ,1_1_7_2='$a1_1_7_2',1_1_7_2_oth='$a1_1_7_2_oth',1_1_8_2='$a1_1_8_2',1_1_9_2='$a1_1_9_2', 1_1_10_2='$a1_1_10_2',1_1_10_2_oth='$a1_1_10_2_oth', 1_1_11_2='$a1_1_11_2', 1_1_11_2_oth='$1_1_11_2_oth' ,1_1_12_2='$a1_1_12_2'  ,1_1_13_2='$a1_1_13_2'  where household_id= '$household_id' ";
		$sqlupdatesq3 = "UPDATE tblsurvey_question SET 1_1_2_3='$a1_1_2_3',1_1_3_3='$a1_1_3_3',1_1_3_3_oth='$a1_1_3_3_oth',1_1_3_3='$a1_1_3_3',1_1_4_3='$a1_1_4_3' ,1_1_5_3='$a1_1_5_3',1_1_6_3='$a1_1_6_3',1_1_6_3_oth='$a1_1_6_3_oth' ,1_1_7_3='$a1_1_7_3',1_1_7_3_oth='$a1_1_7_3_oth',1_1_8_3='$a1_1_8_3',1_1_9_3='$a1_1_9_3', 1_1_10_3='$a1_1_10_3',1_1_10_3_oth='$a1_1_10_3_oth', 1_1_11_3='$a1_1_11_3', 1_1_11_3_oth='$1_1_11_3_oth' ,1_1_12_3='$a1_1_12_3'  ,1_1_13_3='$a1_1_13_3'  where household_id= '$household_id' ";
		$sqlupdatesq4 = "UPDATE tblsurvey_question SET 1_1_2_4='$a1_1_2_4',1_1_3_4='$a1_1_3_4',1_1_3_4_oth='$a1_1_3_4_oth',1_1_3_4='$a1_1_3_4',1_1_4_4='$a1_1_4_4' ,1_1_5_4='$a1_1_5_4',1_1_6_4='$a1_1_6_4',1_1_6_4_oth='$a1_1_6_4_oth' ,1_1_7_4='$a1_1_7_4',1_1_7_4_oth='$a1_1_7_4_oth',1_1_8_4='$a1_1_8_4',1_1_9_4='$a1_1_9_4', 1_1_10_4='$a1_1_10_4',1_1_10_4_oth='$a1_1_10_4_oth', 1_1_11_4='$a1_1_11_4', 1_1_11_4_oth='$1_1_11_4_oth' ,1_1_12_4='$a1_1_12_4'  ,1_1_13_4='$a1_1_13_4'  where household_id= '$household_id' ";
		$sqlupdatesq5 = "UPDATE tblsurvey_question SET 1_1_2_5='$a1_1_2_5',1_1_3_5='$a1_1_3_5',1_1_3_5_oth='$a1_1_3_5_oth',1_1_3_5='$a1_1_3_5',1_1_4_5='$a1_1_4_5' ,1_1_5_5='$a1_1_5_5',1_1_6_5='$a1_1_6_5',1_1_6_5_oth='$a1_1_6_5_oth' ,1_1_7_5='$a1_1_7_5',1_1_7_5_oth='$a1_1_7_5_oth',1_1_8_5='$a1_1_8_5',1_1_9_5='$a1_1_9_5', 1_1_10_5='$a1_1_10_5',1_1_10_5_oth='$a1_1_10_5_oth', 1_1_11_5='$a1_1_11_5', 1_1_11_5_oth='$1_1_11_5_oth' ,1_1_12_5='$a1_1_12_5'  ,1_1_13_5='$a1_1_13_5'  where household_id= '$household_id' ";
		$sqlupdatesq6 = "UPDATE tblsurvey_question SET 1_1_2_6='$a1_1_2_6',1_1_3_6='$a1_1_3_6',1_1_3_6_oth='$a1_1_3_6_oth',1_1_3_6='$a1_1_3_6',1_1_4_6='$a1_1_4_6' ,1_1_5_6='$a1_1_5_6',1_1_6_6='$a1_1_6_6',1_1_6_6_oth='$a1_1_6_6_oth' ,1_1_7_6='$a1_1_7_6',1_1_7_6_oth='$a1_1_7_6_oth',1_1_8_6='$a1_1_8_6',1_1_9_6='$a1_1_9_6', 1_1_10_6='$a1_1_10_6',1_1_10_6_oth='$a1_1_10_6_oth', 1_1_11_6='$a1_1_11_6', 1_1_11_6_oth='$1_1_11_6_oth' ,1_1_12_6='$a1_1_12_6'  ,1_1_13_6='$a1_1_13_6'  where household_id= '$household_id' ";
		$sqlupdatesq7 = "UPDATE tblsurvey_question SET 1_1_2_7='$a1_1_2_7',1_1_3_7='$a1_1_3_7',1_1_3_7_oth='$a1_1_3_7_oth',1_1_3_7='$a1_1_3_7',1_1_4_7='$a1_1_4_7' ,1_1_5_7='$a1_1_5_7',1_1_6_7='$a1_1_6_7',1_1_6_7_oth='$a1_1_6_7_oth' ,1_1_7_7='$a1_1_7_7',1_1_7_7_oth='$a1_1_7_7_oth',1_1_8_7='$a1_1_8_7',1_1_9_7='$a1_1_9_7', 1_1_10_7='$a1_1_10_7',1_1_10_7_oth='$a1_1_10_7_oth', 1_1_11_7='$a1_1_11_7', 1_1_11_7_oth='$1_1_11_7_oth' ,1_1_12_7='$a1_1_12_7'  ,1_1_13_7='$a1_1_13_7'  where household_id= '$household_id' ";
		$sqlupdatesq8 = "UPDATE tblsurvey_question SET 1_1_2_8='$a1_1_2_5',1_1_3_8='$a1_1_3_8',1_1_3_8_oth='$a1_1_3_8_oth',1_1_3_8='$a1_1_3_8',1_1_4_8='$a1_1_4_8' ,1_1_5_8='$a1_1_5_8',1_1_6_8='$a1_1_6_8',1_1_6_8_oth='$a1_1_6_8_oth' ,1_1_7_8='$a1_1_7_8',1_1_7_8_oth='$a1_1_7_8_oth',1_1_8_8='$a1_1_8_8',1_1_9_8='$a1_1_9_8', 1_1_10_8='$a1_1_10_8',1_1_10_8_oth='$a1_1_10_8_oth', 1_1_11_8='$a1_1_11_8', 1_1_11_8_oth='$1_1_11_8_oth' ,1_1_12_8='$a1_1_12_8'  ,1_1_13_8='$a1_1_13_8'  where household_id= '$household_id' ";
		$sqlupdatesq9 = "UPDATE tblsurvey_question SET 1_1_2_9='$a1_1_2_9',1_1_3_9='$a1_1_3_9',1_1_3_9_oth='$a1_1_3_9_oth',1_1_3_9='$a1_1_3_9',1_1_4_9='$a1_1_4_9' ,1_1_5_9='$a1_1_5_9',1_1_6_9='$a1_1_6_9',1_1_6_9_oth='$a1_1_6_9_oth' ,1_1_7_9='$a1_1_7_9',1_1_7_9_oth='$a1_1_7_9_oth',1_1_8_9='$a1_1_8_9',1_1_9_9='$a1_1_9_9', 1_1_10_9='$a1_1_10_9',1_1_10_9_oth='$a1_1_10_9_oth', 1_1_11_9='$a1_1_11_9', 1_1_11_7_oth='$1_1_11_9_oth' ,1_1_12_9='$a1_1_12_9'  ,1_1_13_9='$a1_1_13_9'  where household_id= '$household_id' ";
		$sqlupdatesq10 ="UPDATE tblsurvey_question SET 1_1_2_10='$a1_1_2_10',1_1_3_10='$a1_1_3_10',1_1_3_10_oth='$a1_1_3_10_oth',1_1_3_10='$a1_1_3_10',1_1_4_10='$a1_1_4_10' ,1_1_5_10='$a1_1_5_10',1_1_6_10='$a1_1_6_10',1_1_6_10_oth='$a1_1_6_10_oth' ,1_1_7_10='$a1_1_7_10',1_1_7_10_oth='$a1_1_7_10_oth',1_1_8_10='$a1_1_8_10',1_1_9_10='$a1_1_9_10', 1_1_10_10='$a1_1_10_10',1_1_10_10_oth='$a1_1_10_10_oth', 1_1_11_10='$a1_1_11_10', 1_1_11_7_oth='$1_1_11_10_oth' ,1_1_12_10='$a1_1_12_10'  ,1_1_13_10='$a1_1_13_10'  where household_id= '$household_id' ";
		
		$rslt1 = mysqli_query($con, $sqlupdatesq1) or die("error in update customer part:" . mysqli_error($con));
		$rslt2 = mysqli_query($con, $sqlupdatesq2) or die("error in update customer part:" . mysqli_error($con));
		$rslt3 = mysqli_query($con, $sqlupdatesq3) or die("error in update customer part:" . mysqli_error($con));
		$rslt4 = mysqli_query($con, $sqlupdatesq4) or die("error in update customer part:" . mysqli_error($con));
		$rslt5 = mysqli_query($con, $sqlupdatesq5) or die("error in update customer part:" . mysqli_error($con));
		$rslt6 = mysqli_query($con, $sqlupdatesq6) or die("error in update customer part:" . mysqli_error($con));
		$rslt7 = mysqli_query($con, $sqlupdatesq7) or die("error in update customer part:" . mysqli_error($con));
		$rslt8 = mysqli_query($con, $sqlupdatesq8) or die("error in update customer part:" . mysqli_error($con));
		$rslt9 = mysqli_query($con, $sqlupdatesq9) or die("error in update customer part:" . mysqli_error($con));
		$rslt10 = mysqli_query($con, $sqlupdatesq10) or die("error in update customer part:" . mysqli_error($con));

        if ($rslt1 == 1 && $rslt2 == 1 && $rslt3 == 1 && $rslt4 == 1 && $rslt5 == 1 && $rslt6 == 1 && $rslt7 == 1 && $rslt8 == 1 && $rslt9 == 1 && $rslt10 == 1  ) 
        {
           
            echo '<script> alert("your data added successfully");//window.location.href="index1.php?pg=survey1_2.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }
}

?>
<div class="content">
    <div class="container-fluid">
        <h2>SECTION 1 - Household Information - <span><?php echo $household_id; ?></span></h2>
   
        <form role="form" action="" method="post" onload="updateb6()">
            <div class="widget-header">
                <h4 class="widget-title">
                    <center>E සංක්‍රමිකයා විදේශගතව සිටියදී පවුලේ සමාජිකයින් උපකාර පැතීම.</center>
                </h4>

            </div>
            <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

            <?php
  
        include('survey1_Content.php');
     ?>
        </form>
    </div>
</div>