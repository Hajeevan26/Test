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
        
        if (isset($_POST['3_1_2_1'])) {  $a3_1_2_1 = $_POST['3_1_2_1'];   } else {$a3_1_2_1 = NULL; }
        if (isset($_POST['3_1_3_1'])) {  $a3_1_3_1 = $_POST['3_1_3_1'];   } else {$a3_1_3_1 = NULL; }
        if (isset($_POST['3_1_4_1'])) {  $a3_1_4_1 = $_POST['3_1_4_1'];   } else {$a3_1_4_1 = NULL; }
        if (isset($_POST['3_1_5_1'])) {  $a3_1_5_1 = $_POST['3_1_5_1'];   } else {$a3_1_5_1 = NULL; }
        if (isset($_POST['3_1_6_1a'] )) { $a3_1_6_1a = $_POST['3_1_6_1a'];} else {$a3_1_6_1a = NULL; }
        if (isset($_POST['3_1_6_1b'] )) { $a3_1_6_1b = $_POST['3_1_6_1b'];} else {$a3_1_6_1b = NULL; }
        if (isset($_POST['3_1_6_1c'] )) { $a3_1_6_1c = $_POST['3_1_6_1c'];} else {$a3_1_6_1c = NULL; }
        if (isset($_POST['3_1_6_1d'] )) { $a3_1_6_1d = $_POST['3_1_6_1d'];} else {$a3_1_6_1d = NULL; }
        if (isset($_POST['3_1_6_1e'] )) { $a3_1_6_1e = $_POST['3_1_6_1e'];} else {$a3_1_6_1e = NULL; }
        if (isset($_POST['3_1_6_1f'] )) { $a3_1_6_1f = $_POST['3_1_6_1f'];} else {$a3_1_6_1f = NULL; }
        if (isset($_POST['3_1_6_1f_oth'] )) { $a3_1_6_1f_oth = $_POST['3_1_6_1f_oth'];} else {$a3_1_6_1f_oth = NULL; }

        //2
        if (isset($_POST['3_1_2_2'])) {  $a3_1_2_2 = $_POST['3_1_2_2'];   } else {$a3_1_2_2 = NULL; }
        if (isset($_POST['3_1_3_2'])) {  $a3_1_3_2 = $_POST['3_1_3_2'];   } else {$a3_1_3_2 = NULL; }
        if (isset($_POST['3_1_4_2'])) {  $a3_1_4_2 = $_POST['3_1_4_2'];   } else {$a3_1_4_2 = NULL; }
        if (isset($_POST['3_1_5_2'])) {  $a3_1_5_2 = $_POST['3_1_5_2'];   } else {$a3_1_5_2 = NULL; }
        if (isset($_POST['3_1_6_2a'] )) { $a3_1_6_2a = $_POST['3_1_6_2a'];} else {$a3_1_6_2a = NULL; }
        if (isset($_POST['3_1_6_2b'] )) { $a3_1_6_2b = $_POST['3_1_6_2b'];} else {$a3_1_6_2b = NULL; }
        if (isset($_POST['3_1_6_2c'] )) { $a3_1_6_2c = $_POST['3_1_6_2c'];} else {$a3_1_6_2c = NULL; }
        if (isset($_POST['3_1_6_2d'] )) { $a3_1_6_2d = $_POST['3_1_6_2d'];} else {$a3_1_6_2d = NULL; }
        if (isset($_POST['3_1_6_2e'] )) { $a3_1_6_2e = $_POST['3_1_6_2e'];} else {$a3_1_6_2e = NULL; }
        if (isset($_POST['3_1_6_2f'] )) { $a3_1_6_2f = $_POST['3_1_6_2f'];} else {$a3_1_6_2f = NULL; }
        if (isset($_POST['3_1_6_2f_oth'] )) { $a3_1_6_2f_oth = $_POST['3_1_6_2f_oth'];} else {$a3_1_6_2f_oth = NULL; }

        //3
        if (isset($_POST['3_1_2_3'])) {  $a3_1_2_3 = $_POST['3_1_2_3'];   } else {$a3_1_2_3 = NULL; }
        if (isset($_POST['3_1_3_3'])) {  $a3_1_3_3 = $_POST['3_1_3_3'];   } else {$a3_1_3_3 = NULL; }
        if (isset($_POST['3_1_4_3'])) {  $a3_1_4_3 = $_POST['3_1_4_3'];   } else {$a3_1_4_3 = NULL; }
        if (isset($_POST['3_1_5_3'])) {  $a3_1_5_3 = $_POST['3_1_5_3'];   } else {$a3_1_5_3 = NULL; }
        if (isset($_POST['3_1_6_3a'] )) { $a3_1_6_3a = $_POST['3_1_6_3a'];} else {$a3_1_6_3a = NULL; }
        if (isset($_POST['3_1_6_3b'] )) { $a3_1_6_3b = $_POST['3_1_6_3b'];} else {$a3_1_6_3b = NULL; }
        if (isset($_POST['3_1_6_3c'] )) { $a3_1_6_3c = $_POST['3_1_6_3c'];} else {$a3_1_6_3c = NULL; }
        if (isset($_POST['3_1_6_3d'] )) { $a3_1_6_3d = $_POST['3_1_6_3d'];} else {$a3_1_6_3d = NULL; }
        if (isset($_POST['3_1_6_3e'] )) { $a3_1_6_3e = $_POST['3_1_6_3e'];} else {$a3_1_6_3e = NULL; }
        if (isset($_POST['3_1_6_3f'] )) { $a3_1_6_3f = $_POST['3_1_6_3f'];} else {$a3_1_6_3f = NULL; }
        if (isset($_POST['3_1_6_3f_oth'] )) { $a3_1_6_3f_oth = $_POST['3_1_6_3f_oth'];} else {$a3_1_6_3f_oth = NULL; }

        //4
        if (isset($_POST['3_1_2_4'])) {  $a3_1_2_4 = $_POST['3_1_2_4'];   } else {$a3_1_2_4 = NULL; }
        if (isset($_POST['3_1_3_4'])) {  $a3_1_3_4 = $_POST['3_1_3_4'];   } else {$a3_1_3_4 = NULL; }
        if (isset($_POST['3_1_4_4'])) {  $a3_1_4_4 = $_POST['3_1_4_4'];   } else {$a3_1_4_4 = NULL; }
        if (isset($_POST['3_1_5_4'])) {  $a3_1_5_4 = $_POST['3_1_5_4'];   } else {$a3_1_5_4 = NULL; }
        if (isset($_POST['3_1_6_4a'] )) { $a3_1_6_4a = $_POST['3_1_6_4a'];} else {$a3_1_6_4a = NULL; }
        if (isset($_POST['3_1_6_4b'] )) { $a3_1_6_4b = $_POST['3_1_6_4b'];} else {$a3_1_6_4b = NULL; }
        if (isset($_POST['3_1_6_4c'] )) { $a3_1_6_4c = $_POST['3_1_6_4c'];} else {$a3_1_6_4c = NULL; }
        if (isset($_POST['3_1_6_4d'] )) { $a3_1_6_4d = $_POST['3_1_6_4d'];} else {$a3_1_6_4d = NULL; }
        if (isset($_POST['3_1_6_4e'] )) { $a3_1_6_4e = $_POST['3_1_6_4e'];} else {$a3_1_6_4e = NULL; }
        if (isset($_POST['3_1_6_4f'] )) { $a3_1_6_4f = $_POST['3_1_6_4f'];} else {$a3_1_6_4f = NULL; }
        if (isset($_POST['3_1_6_4f_oth'] )) { $a3_1_6_4f_oth = $_POST['3_1_6_4f_oth'];} else {$a3_1_6_4f_oth = NULL; }

        //5
        if (isset($_POST['3_1_2_5'])) {  $a3_1_2_5 = $_POST['3_1_2_5'];   } else {$a3_1_2_5 = NULL; }
        if (isset($_POST['3_1_3_5'])) {  $a3_1_3_5 = $_POST['3_1_3_5'];   } else {$a3_1_3_5 = NULL; }
        if (isset($_POST['3_1_4_5'])) {  $a3_1_4_5 = $_POST['3_1_4_5'];   } else {$a3_1_4_5 = NULL; }
        if (isset($_POST['3_1_5_5'])) {  $a3_1_5_5 = $_POST['3_1_5_5'];   } else {$a3_1_5_5 = NULL; }
        if (isset($_POST['3_1_6_5a'] )) { $a3_1_6_5a = $_POST['3_1_6_5a'];} else {$a3_1_6_5a = NULL; }
        if (isset($_POST['3_1_6_5b'] )) { $a3_1_6_5b = $_POST['3_1_6_5b'];} else {$a3_1_6_5b = NULL; }
        if (isset($_POST['3_1_6_5c'] )) { $a3_1_6_5c = $_POST['3_1_6_5c'];} else {$a3_1_6_5c = NULL; }
        if (isset($_POST['3_1_6_5d'] )) { $a3_1_6_5d = $_POST['3_1_6_5d'];} else {$a3_1_6_5d = NULL; }
        if (isset($_POST['3_1_6_5e'] )) { $a3_1_6_5e = $_POST['3_1_6_5e'];} else {$a3_1_6_5e = NULL; }
        if (isset($_POST['3_1_6_5f'] )) { $a3_1_6_5f = $_POST['3_1_6_5f'];} else {$a3_1_6_5f = NULL; }
        if (isset($_POST['3_1_6_5f_oth'] )) { $a3_1_6_5f_oth = $_POST['3_1_6_5f_oth'];} else {$a3_1_6_5f_oth = NULL; }

        //6
        if (isset($_POST['3_1_2_6'])) {  $a3_1_2_6 = $_POST['3_1_2_6'];   } else {$a3_1_2_6 = NULL; }
        if (isset($_POST['3_1_3_6'])) {  $a3_1_3_6 = $_POST['3_1_3_6'];   } else {$a3_1_3_6 = NULL; }
        if (isset($_POST['3_1_4_6'])) {  $a3_1_4_6 = $_POST['3_1_4_6'];   } else {$a3_1_4_6 = NULL; }
        if (isset($_POST['3_1_5_6'])) {  $a3_1_5_6 = $_POST['3_1_5_6'];   } else {$a3_1_5_6 = NULL; }
        if (isset($_POST['3_1_6_6a'] )) { $a3_1_6_6a = $_POST['3_1_6_6a'];} else {$a3_1_6_6a = NULL; }
        if (isset($_POST['3_1_6_6b'] )) { $a3_1_6_6b = $_POST['3_1_6_6b'];} else {$a3_1_6_6b = NULL; }
        if (isset($_POST['3_1_6_6c'] )) { $a3_1_6_6c = $_POST['3_1_6_6c'];} else {$a3_1_6_6c = NULL; }
        if (isset($_POST['3_1_6_6d'] )) { $a3_1_6_6d = $_POST['3_1_6_6d'];} else {$a3_1_6_6d = NULL; }
        if (isset($_POST['3_1_6_6e'] )) { $a3_1_6_6e = $_POST['3_1_6_6e'];} else {$a3_1_6_6e = NULL; }
        if (isset($_POST['3_1_6_6f'] )) { $a3_1_6_6f = $_POST['3_1_6_6f'];} else {$a3_1_6_6f = NULL; }
        if (isset($_POST['3_1_6_6f_oth'] )) { $a3_1_6_6f_oth = $_POST['3_1_6_6f_oth'];} else {$a3_1_6_6f_oth = NULL; }

        //7
        if (isset($_POST['3_1_2_7'])) {  $a3_1_2_7 = $_POST['3_1_2_7'];   } else {$a3_1_2_7 = NULL; }
        if (isset($_POST['3_1_3_7'])) {  $a3_1_3_7 = $_POST['3_1_3_7'];   } else {$a3_1_3_7 = NULL; }
        if (isset($_POST['3_1_4_7'])) {  $a3_1_4_7 = $_POST['3_1_4_7'];   } else {$a3_1_4_7 = NULL; }
        if (isset($_POST['3_1_5_7'])) {  $a3_1_5_7 = $_POST['3_1_5_7'];   } else {$a3_1_5_7 = NULL; }
        if (isset($_POST['3_1_6_7a'] )) { $a3_1_6_7a = $_POST['3_1_6_7a'];} else {$a3_1_6_7a = NULL; }
        if (isset($_POST['3_1_6_7b'] )) { $a3_1_6_7b = $_POST['3_1_6_7b'];} else {$a3_1_6_7b = NULL; }
        if (isset($_POST['3_1_6_7c'] )) { $a3_1_6_7c = $_POST['3_1_6_7c'];} else {$a3_1_6_7c = NULL; }
        if (isset($_POST['3_1_6_7d'] )) { $a3_1_6_7d = $_POST['3_1_6_7d'];} else {$a3_1_6_7d = NULL; }
        if (isset($_POST['3_1_6_7e'] )) { $a3_1_6_7e = $_POST['3_1_6_7e'];} else {$a3_1_6_7e = NULL; }
        if (isset($_POST['3_1_6_7f'] )) { $a3_1_6_7f = $_POST['3_1_6_7f'];} else {$a3_1_6_7f = NULL; }
        if (isset($_POST['3_1_6_7f_oth'] )) { $a3_1_6_7f_oth = $_POST['3_1_6_7f_oth'];} else {$a3_1_6_7f_oth = NULL; }

        //8
        
        if (isset($_POST['3_1_2_8'])) {  $a3_1_2_8 = $_POST['3_1_2_8'];   } else {$a3_1_2_8 = NULL; }
        if (isset($_POST['3_1_3_8'])) {  $a3_1_3_8 = $_POST['3_1_3_8'];   } else {$a3_1_3_8 = NULL; }
        if (isset($_POST['3_1_4_8'])) {  $a3_1_4_8 = $_POST['3_1_4_8'];   } else {$a3_1_4_8 = NULL; }
        if (isset($_POST['3_1_5_8'])) {  $a3_1_5_8 = $_POST['3_1_5_8'];   } else {$a3_1_5_8 = NULL; }
        if (isset($_POST['3_1_6_8a'] )) { $a3_1_6_8a = $_POST['3_1_6_8a'];} else {$a3_1_6_8a = NULL; }
        if (isset($_POST['3_1_6_8b'] )) { $a3_1_6_8b = $_POST['3_1_6_8b'];} else {$a3_1_6_8b = NULL; }
        if (isset($_POST['3_1_6_8c'] )) { $a3_1_6_8c = $_POST['3_1_6_8c'];} else {$a3_1_6_8c = NULL; }
        if (isset($_POST['3_1_6_8d'] )) { $a3_1_6_8d = $_POST['3_1_6_8d'];} else {$a3_1_6_8d = NULL; }
        if (isset($_POST['3_1_6_8e'] )) { $a3_1_6_8e = $_POST['3_1_6_8e'];} else {$a3_1_6_8e = NULL; }
        if (isset($_POST['3_1_6_8f'] )) { $a3_1_6_8f = $_POST['3_1_6_8f'];} else {$a3_1_6_8f = NULL; }
        if (isset($_POST['3_1_6_8f_oth'] )) { $a3_1_6_7f_oth = $_POST['3_1_6_8f_oth'];} else {$a3_1_6_8f_oth = NULL; }

        if (isset($_POST['3_1_7_1'])) {  $a3_1_7_1 = $_POST['3_1_7_1'];   } else {$a3_1_7_1 = NULL; }
        if (isset($_POST['3_1_7_2'])) {  $a3_1_7_2 = $_POST['3_1_7_2'];   } else {$a3_1_7_2 = NULL; }
        if (isset($_POST['3_1_7_3'])) {  $a3_1_7_3 = $_POST['3_1_7_3'];   } else {$a3_1_7_3 = NULL; }
        
        if (isset($_POST['3_1_8_1'])) {  $a3_1_8_1 = $_POST['3_1_8_1'];   } else {$a3_1_8_1 = NULL; }
        if (isset($_POST['3_1_9_1'])) {  $a3_1_9_1 = $_POST['3_1_9_1'];   } else {$a3_1_9_1 = NULL; }
        if (isset($_POST['3_1_10_1'])) {  $a3_1_10_1 = $_POST['3_1_10_1'];   } else {$a3_1_10_1 = NULL; }
        if (isset($_POST['3_1_11_1'])) {  $a3_1_11_1 = $_POST['3_1_11_1'];   } else {$a3_1_11_1 = NULL; }
        if (isset($_POST['3_1_12_1a'] )) { $a3_1_12_1a = $_POST['3_1_12_1a'];} else {$a3_1_12_1a = NULL; }
        if (isset($_POST['3_1_12_1b'] )) { $a3_1_12_1b = $_POST['3_1_12_1b'];} else {$a3_1_12_1b = NULL; }
        if (isset($_POST['3_1_12_1c'] )) { $a3_1_12_1c = $_POST['3_1_12_1c'];} else {$a3_1_12_1c = NULL; }
        if (isset($_POST['3_1_12_1d'] )) { $a3_1_12_1d = $_POST['3_1_12_1d'];} else {$a3_1_12_1d = NULL; }
        if (isset($_POST['3_1_12_1e'] )) { $a3_1_12_1e = $_POST['3_1_12_1e'];} else {$a3_1_12_1e = NULL; }
        if (isset($_POST['3_1_12_1f'] )) { $a3_1_12_1f = $_POST['3_1_12_1f'];} else {$a3_1_12_1f = NULL; }
        if (isset($_POST['3_1_12_1f_oth'] )) { $a3_1_12_1f_oth = $_POST['3_1_12_1f_oth'];} else {$a3_1_12_1f_oth = NULL; }

        if (isset($_POST['3_1_8_2'])) {  $a3_1_8_2 = $_POST['3_1_8_2'];   } else {$a3_1_8_2 = NULL; }
        if (isset($_POST['3_1_9_2'])) {  $a3_1_9_2 = $_POST['3_1_9_2'];   } else {$a3_1_9_2 = NULL; }
        if (isset($_POST['3_1_10_2'])) {  $a3_1_10_2 = $_POST['3_1_10_2'];   } else {$a3_1_10_2 = NULL; }
        if (isset($_POST['3_1_11_2'])) {  $a3_1_11_2 = $_POST['3_1_11_2'];   } else {$a3_1_11_2 = NULL; }
        if (isset($_POST['3_1_12_2a'] )) { $a3_1_12_2a = $_POST['3_1_12_2a'];} else {$a3_1_12_2a = NULL; }
        if (isset($_POST['3_1_12_2b'] )) { $a3_1_12_2b = $_POST['3_1_12_2b'];} else {$a3_1_12_2b = NULL; }
        if (isset($_POST['3_1_12_2c'] )) { $a3_1_12_2c = $_POST['3_1_12_2c'];} else {$a3_1_12_2c = NULL; }
        if (isset($_POST['3_1_12_2d'] )) { $a3_1_12_2d = $_POST['3_1_12_2d'];} else {$a3_1_12_2d = NULL; }
        if (isset($_POST['3_1_12_2e'] )) { $a3_1_12_2e = $_POST['3_1_12_2e'];} else {$a3_1_12_2e = NULL; }
        if (isset($_POST['3_1_12_2f'] )) { $a3_1_12_2f = $_POST['3_1_12_2f'];} else {$a3_1_12_2f = NULL; }
        if (isset($_POST['3_1_12_2f_oth'] )) { $a3_1_12_2f_oth = $_POST['3_1_12_2f_oth'];} else {$a3_1_12_2f_oth = NULL; }



        if (isset($_POST['3_1_8_3'])) {  $a3_1_8_3 = $_POST['3_1_8_3'];   } else {$a3_1_8_3 = NULL; }
        if (isset($_POST['3_1_9_3'])) {  $a3_1_9_3 = $_POST['3_1_9_3'];   } else {$a3_1_9_3 = NULL; }
        if (isset($_POST['3_1_10_3'])) {  $a3_1_10_3 = $_POST['3_1_10_3'];   } else {$a3_1_10_3 = NULL; }
        if (isset($_POST['3_1_11_3'])) {  $a3_1_11_3 = $_POST['3_1_11_3'];   } else {$a3_1_11_3 = NULL; }
        if (isset($_POST['3_1_12_3a'] )) { $a3_1_12_3a = $_POST['3_1_12_3a'];} else {$a3_1_12_3a = NULL; }
        if (isset($_POST['3_1_12_3b'] )) { $a3_1_12_3b = $_POST['3_1_12_3b'];} else {$a3_1_12_3b = NULL; }
        if (isset($_POST['3_1_12_3c'] )) { $a3_1_12_3c = $_POST['3_1_12_3c'];} else {$a3_1_12_3c = NULL; }
        if (isset($_POST['3_1_12_3d'] )) { $a3_1_12_3d = $_POST['3_1_12_3d'];} else {$a3_1_12_3d = NULL; }
        if (isset($_POST['3_1_12_3e'] )) { $a3_1_12_3e = $_POST['3_1_12_3e'];} else {$a3_1_12_3e = NULL; }
        if (isset($_POST['3_1_12_3f'] )) { $a3_1_12_3f = $_POST['3_1_12_3f'];} else {$a3_1_12_3f = NULL; }
        if (isset($_POST['3_1_12_3f_oth'] )) { $a3_1_12_3f_oth = $_POST['3_1_12_3f_oth'];} else {$a3_1_12_3f_oth = NULL; }


        if (isset($_POST['3_1_8_4'])) {  $a3_1_8_4 = $_POST['3_1_8_4'];   } else {$a3_1_8_4 = NULL; }
        if (isset($_POST['3_1_9_4'])) {  $a3_1_9_4 = $_POST['3_1_9_4'];   } else {$a3_1_9_4 = NULL; }
        if (isset($_POST['3_1_10_4'])) {  $a3_1_10_4 = $_POST['3_1_10_4'];   } else {$a3_1_10_4 = NULL; }
        if (isset($_POST['3_1_11_4'])) {  $a3_1_11_4 = $_POST['3_1_11_4'];   } else {$a3_1_11_4 = NULL; }
        if (isset($_POST['3_1_12_4a'] )) { $a3_1_12_4a = $_POST['3_1_12_3a'];} else {$a3_1_12_3a = NULL; }
        if (isset($_POST['3_1_12_4b'] )) { $a3_1_12_4b = $_POST['3_1_12_4b'];} else {$a3_1_12_4b = NULL; }
        if (isset($_POST['3_1_12_4c'] )) { $a3_1_12_4c = $_POST['3_1_12_4c'];} else {$a3_1_12_4c = NULL; }
        if (isset($_POST['3_1_12_4d'] )) { $a3_1_12_4d = $_POST['3_1_12_4d'];} else {$a3_1_12_4d = NULL; }
        if (isset($_POST['3_1_12_4e'] )) { $a3_1_12_4e = $_POST['3_1_12_4e'];} else {$a3_1_12_4e = NULL; }
        if (isset($_POST['3_1_12_4f'] )) { $a3_1_12_4f = $_POST['3_1_12_4f'];} else {$a3_1_12_4f = NULL; }
        if (isset($_POST['3_1_12_4f_oth'] )) { $a3_1_12_4f_oth = $_POST['3_1_12_4f_oth'];} else {$a3_1_12_4f_oth = NULL; }


        if (isset($_POST['3_1_8_5'])) {  $a3_1_8_5 = $_POST['3_1_8_5'];   } else {$a3_1_8_5 = NULL; }
        if (isset($_POST['3_1_9_5'])) {  $a3_1_9_5 = $_POST['3_1_9_5'];   } else {$a3_1_9_5 = NULL; }
        if (isset($_POST['3_1_10_5'])) {  $a3_1_10_5 = $_POST['3_1_10_5'];   } else {$a3_1_10_5 = NULL; }
        if (isset($_POST['3_1_11_5'])) {  $a3_1_11_5 = $_POST['3_1_11_5'];   } else {$a3_1_11_5 = NULL; }
        if (isset($_POST['3_1_12_5a'] )) { $a3_1_12_5a = $_POST['3_1_12_5a'];} else {$a3_1_12_5a = NULL; }
        if (isset($_POST['3_1_12_5b'] )) { $a3_1_12_5b = $_POST['3_1_12_5b'];} else {$a3_1_12_5b = NULL; }
        if (isset($_POST['3_1_12_5c'] )) { $a3_1_12_5c = $_POST['3_1_12_5c'];} else {$a3_1_12_5c = NULL; }
        if (isset($_POST['3_1_12_5d'] )) { $a3_1_12_5d = $_POST['3_1_12_5d'];} else {$a3_1_12_5d = NULL; }
        if (isset($_POST['3_1_12_5e'] )) { $a3_1_12_5e = $_POST['3_1_12_5e'];} else {$a3_1_12_5e = NULL; }
        if (isset($_POST['3_1_12_5f'] )) { $a3_1_12_5f = $_POST['3_1_12_5f'];} else {$a3_1_12_5f = NULL; }
        if (isset($_POST['3_1_12_5f_oth'] )) { $a3_1_12_5f_oth = $_POST['3_1_12_5f_oth'];} else {$a3_1_12_5f_oth = NULL; }


        if (isset($_POST['3_1_8_6'])) {  $a3_1_8_6 = $_POST['3_1_8_6'];   } else {$a3_1_8_6 = NULL; }
        if (isset($_POST['3_1_9_6'])) {  $a3_1_9_6 = $_POST['3_1_9_6'];   } else {$a3_1_9_6 = NULL; }
        if (isset($_POST['3_1_10_6'])) {  $a3_1_10_6 = $_POST['3_1_10_6'];   } else {$a3_1_10_6 = NULL; }
        if (isset($_POST['3_1_11_6'])) {  $a3_1_11_6 = $_POST['3_1_11_6'];   } else {$a3_1_11_6 = NULL; }
        if (isset($_POST['3_1_12_6a'] )) { $a3_1_12_6a = $_POST['3_1_12_6a'];} else {$a3_1_12_6a = NULL; }
        if (isset($_POST['3_1_12_6b'] )) { $a3_1_12_6b = $_POST['3_1_12_6b'];} else {$a3_1_12_6b = NULL; }
        if (isset($_POST['3_1_12_6c'] )) { $a3_1_12_6c = $_POST['3_1_12_6c'];} else {$a3_1_12_6c = NULL; }
        if (isset($_POST['3_1_12_6d'] )) { $a3_1_12_6d = $_POST['3_1_12_6d'];} else {$a3_1_12_6d = NULL; }
        if (isset($_POST['3_1_12_6e'] )) { $a3_1_12_6e = $_POST['3_1_12_6e'];} else {$a3_1_12_6e = NULL; }
        if (isset($_POST['3_1_12_6f'] )) { $a3_1_12_6f = $_POST['3_1_12_6f'];} else {$a3_1_12_6f = NULL; }
        if (isset($_POST['3_1_12_6f_oth'] )) { $a3_1_12_6f_oth = $_POST['3_1_12_6f_oth'];} else {$a3_1_12_6f_oth = NULL; }

        if (isset($_POST['3_1_8_7'])) {  $a3_1_8_7 = $_POST['3_1_8_7'];   } else {$a3_1_8_7 = NULL; }
        if (isset($_POST['3_1_9_7'])) {  $a3_1_9_7 = $_POST['3_1_9_7'];   } else {$a3_1_9_7 = NULL; }
        if (isset($_POST['3_1_10_7'])) {  $a3_1_10_7 = $_POST['3_1_10_7'];   } else {$a3_1_10_7 = NULL; }
        if (isset($_POST['3_1_11_7'])) {  $a3_1_11_7 = $_POST['3_1_11_7'];   } else {$a3_1_11_7 = NULL; }
        if (isset($_POST['3_1_12_7a'] )) { $a3_1_12_7a = $_POST['3_1_12_7a'];} else {$a3_1_12_7a = NULL; }
        if (isset($_POST['3_1_12_7b'] )) { $a3_1_12_7b = $_POST['3_1_12_7b'];} else {$a3_1_12_7b = NULL; }
        if (isset($_POST['3_1_12_7c'] )) { $a3_1_12_7c = $_POST['3_1_12_7c'];} else {$a3_1_12_7c = NULL; }
        if (isset($_POST['3_1_12_7d'] )) { $a3_1_12_7d = $_POST['3_1_12_7d'];} else {$a3_1_12_7d = NULL; }
        if (isset($_POST['3_1_12_7e'] )) { $a3_1_12_7e = $_POST['3_1_12_7e'];} else {$a3_1_12_7e = NULL; }
        if (isset($_POST['3_1_12_7f'] )) { $a3_1_12_7f = $_POST['3_1_12_7f'];} else {$a3_1_12_7f = NULL; }
        if (isset($_POST['3_1_12_7f_oth'] )) { $a3_1_12_7f_oth = $_POST['3_1_12_7f_oth'];} else {$a3_1_12_7f_oth = NULL; }

        if (isset($_POST['3_1_8_8'])) {  $a3_1_8_8 = $_POST['3_1_8_8'];   } else {$a3_1_8_8 = NULL; }
        if (isset($_POST['3_1_9_8'])) {  $a3_1_9_8 = $_POST['3_1_9_8'];   } else {$a3_1_9_8 = NULL; }
        if (isset($_POST['3_1_10_8'])) {  $a3_1_10_8 = $_POST['3_1_10_8'];   } else {$a3_1_10_8 = NULL; }
        if (isset($_POST['3_1_11_8'])) {  $a3_1_11_8 = $_POST['3_1_11_8'];   } else {$a3_1_11_8 = NULL; }
        if (isset($_POST['3_1_12_8a'] )) { $a3_1_12_8a = $_POST['3_1_12_8a'];} else {$a3_1_12_8a = NULL; }
        if (isset($_POST['3_1_12_8b'] )) { $a3_1_12_8b = $_POST['3_1_12_8b'];} else {$a3_1_12_8b = NULL; }
        if (isset($_POST['3_1_12_8c'] )) { $a3_1_12_8c = $_POST['3_1_12_8c'];} else {$a3_1_12_8c = NULL; }
        if (isset($_POST['3_1_12_8d'] )) { $a3_1_12_8d = $_POST['3_1_12_8d'];} else {$a3_1_12_8d = NULL; }
        if (isset($_POST['3_1_12_8e'] )) { $a3_1_12_8e = $_POST['3_1_12_8e'];} else {$a3_1_12_8e = NULL; }
        if (isset($_POST['3_1_12_8f'] )) { $a3_1_12_8f = $_POST['3_1_12_8f'];} else {$a3_1_12_8f = NULL; }
        if (isset($_POST['3_1_12_8f_oth'] )) { $a3_1_12_8f_oth = $_POST['3_1_12_8f_oth'];} else {$a3_1_12_8f_oth = NULL; }


        
    
     $sqlupdatesq = "UPDATE tblsurvey_question SET 3_1_2_1='$a3_1_2_1', 3_1_3_1='$a3_1_3_1', 3_1_4_1='$a3_1_4_1', 3_1_5_1='$a3_1_5_1', 3_1_6_1a='$a3_1_6_1a', 3_1_6_1b='$a3_1_6_1b', 3_1_6_1c='$a3_1_6_1c', 3_1_6_1d='$a3_1_6_1d', 3_1_6_1e='$a3_1_6_1e', 
     3_1_6_1f='$a3_1_6_1f', 3_1_6_1f_oth='$a3_1_6_1f_oth',  3_1_2_2='$a3_1_2_2', 3_1_3_2='$a3_1_3_2', 3_1_4_2='$a3_1_4_2', 3_1_5_2='$a3_1_5_2', 3_1_6_2a='$a3_1_6_2a', 3_1_6_2b='$a3_1_6_2b', 3_1_6_2c='$a3_1_6_2c', 3_1_6_2d='$a3_1_6_2d', 3_1_6_2e='$a3_1_6_2e', 
     3_1_6_2f='$a3_1_6_2f', 3_1_6_2f_oth='$a3_1_6_2f_oth',  3_1_2_3='$a3_1_2_3', 3_1_3_3='$a3_1_3_3', 3_1_4_3='$a3_1_4_3', 3_1_5_3='$a3_1_5_3', 3_1_6_3a='$a3_1_6_3a', 3_1_6_3b='$a3_1_6_3b', 3_1_6_3c='$a3_1_6_3c', 3_1_6_3d='$a3_1_6_3d', 3_1_6_3e='$a3_1_6_3e',
     3_1_6_3f='$a3_1_6_3f', 3_1_6_3f_oth='$a3_1_6_3f_oth',  3_1_2_4='$a3_1_2_4', 3_1_3_4='$a3_1_3_4', 3_1_4_4='$a3_1_4_4', 3_1_5_4='$a3_1_5_4', 3_1_6_4a='$a3_1_6_4a', 3_1_6_4b='$a3_1_6_4b', 3_1_6_4c='$a3_1_6_4c', 3_1_6_4d='$a3_1_6_4d', 3_1_6_4e='$a3_1_6_4e', 
     3_1_6_4f='$a3_1_6_4f', 3_1_6_4f_oth='$a3_1_6_4f_oth',  3_1_2_5='$a3_1_2_5', 3_1_3_5='$a3_1_3_5', 3_1_4_5='$a3_1_4_5', 3_1_5_5='$a3_1_5_5', 3_1_6_5a='$a3_1_6_5a', 3_1_6_5b='$a3_1_6_5b', 3_1_6_5c='$a3_1_6_5c', 3_1_6_5d='$a3_1_6_5d', 3_1_6_5e='$a3_1_6_5e',
     3_1_6_5f='$a3_1_6_5f', 3_1_6_5f_oth='$a3_1_6_5f_oth',  3_1_2_6='$a3_1_2_6', 3_1_3_6='$a3_1_3_6', 3_1_4_6='$a3_1_4_6', 3_1_5_6='$a3_1_5_6', 3_1_6_6a='$a3_1_6_6a', 3_1_6_6b='$a3_1_6_6b', 3_1_6_6c='$a3_1_6_6c', 3_1_6_6d='$a3_1_6_6d', 3_1_6_6e='$a3_1_6_6e',
     3_1_6_6f='$a3_1_6_6f', 3_1_6_6f_oth='$a3_1_6_6f_oth',  3_1_2_7='$a3_1_2_7', 3_1_3_7='$a3_1_3_7', 3_1_4_7='$a3_1_4_7', 3_1_5_7='$a3_1_5_7', 3_1_6_7a='$a3_1_6_7a', 3_1_6_7b='$a3_1_6_7b', 3_1_6_7c='$a3_1_6_7c', 3_1_6_7d='$a3_1_6_7d', 3_1_6_7e='$a3_1_6_7e',
      3_1_6_7f='$a3_1_6_7f', 3_1_6_7f_oth='$a3_1_6_7f_oth',  3_1_2_8='$a3_1_2_8', 3_1_3_8='$a3_1_3_8', 3_1_4_8='$a3_1_4_8', 3_1_5_8='$a3_1_5_8', 3_1_6_8a='$a3_1_6_8a', 3_1_6_8b='$a3_1_6_8b', 3_1_6_8c='$a3_1_6_8c', 3_1_6_8d='$a3_1_6_8d', 3_1_6_8e='$a3_1_6_8e', 
      3_1_6_8f='$a3_1_6_8f', 3_1_6_8f_oth='$a3_1_6_7f_oth',  3_1_7_1='$a3_1_7_1', 3_1_7_2='$a3_1_7_2', 3_1_7_3='$a3_1_7_3',  3_1_8_1='$a3_1_8_1', 3_1_9_1='$a3_1_9_1', 3_1_10_1='$a3_1_10_1', 3_1_11_1='$a3_1_11_1', 3_1_12_1a='$a3_1_12_1a', 3_1_12_1b='$a3_1_12_1b', 
      3_1_12_1c='$a3_1_12_1c', 3_1_12_1d='$a3_1_12_1d', 3_1_12_1e='$a3_1_12_1e', 3_1_12_1f='$a3_1_12_1f', 3_1_12_1f_oth='$a3_1_12_1f_oth', 3_1_8_2='$a3_1_8_2', 3_1_9_2='$a3_1_9_2', 3_1_10_2='$a3_1_10_2', 3_1_11_2='$a3_1_11_2', 3_1_12_2a='$a3_1_12_2a', 
      3_1_12_2b='$a3_1_12_2b', 3_1_12_2c='$a3_1_12_2c', 3_1_12_2d='$a3_1_12_2d', 3_1_12_2e='$a3_1_12_2e', 3_1_12_2f='$a3_1_12_2f', 3_1_12_2f_oth='$a3_1_12_2f_oth',  3_1_8_3='$a3_1_8_3', 3_1_9_3='$a3_1_9_3', 3_1_10_3='$a3_1_10_3', 3_1_11_3='$a3_1_11_3', 
      3_1_12_3a='$a3_1_12_3a', 3_1_12_3b='$a3_1_12_3b', 3_1_12_3c='$a3_1_12_3c', 3_1_12_3d='$a3_1_12_3d', 3_1_12_3e='$a3_1_12_3e', 3_1_12_3f='$a3_1_12_3f', 3_1_12_3f_oth='$a3_1_12_3f_oth',  3_1_8_4='$a3_1_8_4', 3_1_9_4='$a3_1_9_4', 3_1_10_4='$a3_1_10_4',
       3_1_11_4='$a3_1_11_4', 3_1_12_4a='$a3_1_12_4a', 3_1_12_4b='$a3_1_12_4b', 3_1_12_4c='$a3_1_12_4c', 3_1_12_4d='$a3_1_12_4d', 3_1_12_4e='$a3_1_12_4e', 3_1_12_4f='$a3_1_12_4f', 3_1_12_4f_oth='$a3_1_12_4f_oth',  3_1_8_5='$a3_1_8_5', 3_1_9_5='$a3_1_9_5',
        3_1_10_5='$a3_1_10_5', 3_1_11_5='$a3_1_11_5', 3_1_12_5a='$a3_1_12_5a', 3_1_12_5b='$a3_1_12_5b', 3_1_12_5c='$a3_1_12_5c', 3_1_12_5d='$a3_1_12_5d', 3_1_12_5e='$a3_1_12_5e', 3_1_12_5f='$a3_1_12_5f', 3_1_12_5f_oth='$a3_1_12_5f_oth',   3_1_8_6='a3_1_8_6',
         3_1_9_6='a3_1_9_6', 3_1_10_6='$a3_1_10_6', 3_1_11_6='$a3_1_11_6', 3_1_12_6a='$a3_1_12_6a', 3_1_12_6b='$a3_1_12_6b', 3_1_12_6c='$a3_1_12_6c', 3_1_12_6d='$a3_1_12_6d', 3_1_12_6e='$a3_1_12_6e', 3_1_12_6f='$a3_1_12_6f', 3_1_12_6f_oth='a3_1_12_6f_oth',
           3_1_8_7='$a3_1_8_7', 3_1_9_7='$a3_1_9_7', 3_1_10_7='$a3_1_10_7', 3_1_11_7='$a3_1_11_7', 3_1_12_7a='$a3_1_12_7a', 3_1_12_7b='$a3_1_12_7b', 3_1_12_7c='$a3_1_12_7c', 3_1_12_7d='$a3_1_12_7d', 3_1_12_7e='$a3_1_12_7e', 3_1_12_7f='$a3_1_12_7f', 
           3_1_12_7f_oth='$a3_1_12_7f_oth',  3_1_8_8 ='$a3_1_8_8', 3_1_9_8 ='$a3_1_9_8', 3_1_10_8='$a3_1_10_8', 3_1_11_8='$a3_1_11_8', 3_1_12_8a='$a3_1_12_8a, 3_1_12_8b='$a3_1_12_8b, 3_1_12_8c='$a3_1_12_8c,
       3_1_12_8d='$a3_1_12_8d, 3_1_12_8e='$a3_1_12_8e, 3_1_12_8f='$a3_1_12_8f, 3_1_12_8f_oth='$a3_1_12_8f_oth' where household_id= '$household_id' ";
        $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
           
            echo '<script> alert("your data added successfully");//window.location.href="index1.php?pg=surveyG.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <div class="container-fluid">
        <h2>need to do later </h2>
        Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="card card-primary">
                <div class="card-header">
                    d). Hired Labour
                </div>

                <div class="card-body">
                    <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <label>3.1.1 What type of fertilizer you used in last 2021/22 Maha season? </label>
                            <div class="input-group">

                                <select class="form-control" name="3_1_1" id="3_1_1" onchange="funb3_1_1()">
                                    <option value="1">Inorganic fertilizer only </option>
                                    <option value="2">Organic fertilizer only</option>
                                    <option value="3">Mixture of both inorganic and organic fertilizers</option>
                                    <option value="4">None</option>
                                    <option value="5">Other</option>
                                </select>
                            </div>
                            <div id="divid3_1_1"></div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <table class="table table-bordered table-hover">

                            <tr>
                                <th> Type of fertilizer usage for 2021/22 </th>
                                <th>3.1.2.Amount (Kg)</th>
                                <th>3.1.3.Area applied (Acres)</th>
                                <th>3.1.4.Price per unit (Rs/Kg)</th>
                                <th>3.1.5.Total Cost (Rs) </th>
                                <th>3.1.6.Source (Please use below codes) </th>

                            </tr>
                            <tr>
                                <td>Urea</td>
                                <td>
                                    <div>3_1_2_1<input type="text" name="3_1_2_1" id="3_1_2_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_1 <input type="text" name="3_1_3_1" id="3_1_3_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_1<input type="text" name="3_1_4_1" id="3_1_4_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_1<input type="text" name="3_1_5_1" id="3_1_5_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_1a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler-3_1_6_1a</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_1b" id="3_1_6_1b"
                                                    value="2">Agrarian Devlopment Centre-3_1_6_1b</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_1c" id="3_1_6_1c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_1d" id="3_1_6_1d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_1e" id="3_1_6_1e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_1f" id="3_1_6_1f" onclick="eDcheckOT('3_1_6_1f','3_1_6_1f_oth')"
                                                    value="5">Other</label> </div>
                                        <div>3_1_6_1f_oth<input type="text" name="3_1_6_1f_oth" id="3_1_6_1f_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td>TSP</td>
                                <td>
                                    <div>3_1_2_2<input type="text" name="3_1_2_2" id="3_1_2_2"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_2<input type="text" name="3_1_3_2" id="3_1_3_2"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_2<input type="text" name="3_1_4_2" id="3_1_4_2"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_2<input type="text" name="3_1_5_2" id="3_1_5_2"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="3_1_6_2a" id="3_1_6_2a"
value="1">Retail Shop/ wholesaler-3_1_6_2a</label> </div>
<div class="checkbox"><label><input type="checkbox" name="3_1_6_2b" id="3_1_6_2b"
value="2">Agrarian Devlopment Centre-3_1_6_2b</label> </div>
<div class="checkbox"><label><input type="checkbox" name="3_1_6_2c" id="3_1_6_2c"
value="3">Fellow farmer</label> </div>
<div class="checkbox"><label><input type="checkbox" name="3_1_6_2d" id="3_1_6_2d"
value="4">Farmer association or cooperative</label></div>
<div class="checkbox"> <label><input type="checkbox" name="3_1_6_2e" id="3_1_6_2e"
value="5">Neighbour</label> </div>
<div class="checkbox"> <label><input type="checkbox" name="3_1_6_2f" id="3_1_6_2f"  onclick="eDcheckOT('3_1_6_2f','3_1_6_2f_oth')"
value="5">Other</label> </div>
<div>3_1_6_2f_oth<input type="text" name="3_1_6_2f_oth" id="3_1_6_2f_oth"
	class="form-control" />
</div>
                                </td>

                            </tr>

                            <tr>
                                <td>MOP</td>
                                <td>
                                    <div>3_1_2_3<input type="text" name="3_1_2_3" id="3_1_2_3"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_3<input type="text" name="3_1_3_3" id="3_1_3_3"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_3<input type="text" name="3_1_4_3" id="3_1_4_3"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_3<input type="text" name="3_1_5_3" id="3_1_5_3"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="3_1_6_3a" id="3_1_6_3a"
value="1">Retail Shop/ wholesaler-3_1_6_3a</label> </div>
<div class="checkbox"><label><input type="checkbox" name="3_1_6_3b" id="3_1_6_3b"
value="2">Agrarian Devlopment Centre-3_1_6_3b</label> </div>
<div class="checkbox"><label><input type="checkbox" name="3_1_6_3c" id="3_1_6_3c"
value="3">Fellow farmer</label> </div>
<div class="checkbox"><label><input type="checkbox" name="3_1_6_3d" id="3_1_6_3d"
value="4">Farmer association or cooperative</label></div>
<div class="checkbox"> <label><input type="checkbox" name="3_1_6_3e" id="3_1_6_3e"
value="5">Neighbour</label> </div>
<div class="checkbox"> <label><input type="checkbox" name="3_1_6_3f" id="3_1_6_3f" onclick="eDcheckOT('3_1_6_3f','3_1_6_3f_oth')"
value="5">Other</label> </div>
<div>3_1_6_3f_oth<input type="text" name="3_1_6_3f_oth" id="3_1_6_3f_oth"
	class="form-control" />
</div>
                                </td>

                            </tr>
                            <tr>
                                <td>Compost</td>
                                <td>
                                    <div>3_1_2_4<input type="text" name="3_1_2_4" id="3_1_2_4"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_4<input type="text" name="3_1_3_4" id="3_1_3_4"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_4<input type="text" name="3_1_4_4" id="3_1_4_4"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_4<input type="text" name="3_1_5_4" id="3_1_5_4"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_4a" id="3_1_6_4a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_4b" id="3_1_6_4b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_4c" id="3_1_6_4c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_4d" id="3_1_6_4d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_4e" id="3_1_6_4e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_4f" id="3_1_6_4f" onclick="eDcheckOT('3_1_6_4f','3_1_6_4f_oth')"
                                                    value="5">Other</label> </div>
                                        <div>3_1_6_4e_oth<input type="text" name="3_1_6_4f_oth" id="3_1_6_4f_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Manure</td>
                                <td>
                                    <div>3_1_2_5<input type="text" name="3_1_2_5" id="3_1_2_5"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_5<input type="text" name="3_1_3_5" id="3_1_3_5"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_5<input type="text" name="3_1_4_5" id="3_1_4_5"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_5<input type="text" name="3_1_5_5" id="3_1_5_5"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_5a" id="3_1_6_5a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_5b" id="3_1_6_5b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_5c" id="3_1_6_5c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_5_5d" id="3_1_6_5d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_5e" id="3_1_6_5e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_5f" id="3_1_6_5f" onclick="eDcheckOT('3_1_6_5f','3_1_6_5f_oth')"
                                                    value="5">Other</label> </div>
                                        <div>3_1_6_5e_oth<input type="text" name="3_1_6_5f_oth" id="3_1_6_5f_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>


                            <tr>
                                <td> Liquid fertilizers</td>
                                <td>
                                    <div>3_1_2_6<input type="text" name="3_1_2_6" id="3_1_2_6"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_6<input type="text" name="3_1_3_6" id="3_1_3_6"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_6<input type="text" name="3_1_4_6" id="3_1_4_6"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_6<input type="text" name="3_1_5_6" id="3_1_5_6"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_6_6a" id="3_1_5_6a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_6b" id="3_1_6_6b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_6c" id="3_1_6_6c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_6d" id="3_1_6_6d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_6e" id="3_1_6_6e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_6f" id="3_1_6_6f"  onclick="eDcheckOT('3_1_6_6f','3_1_6_6f_oth')"
                                                    value="5">Other</label> </div>
                                        <div>3_1_5_6e_oth<input type="text" name="3_1_5_6e_oth" id="3_1_6_6f_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td> Other organic
                                    fertilizers</td>
                                    <td>
                                    <div>3_1_2_7<input type="text" name="3_1_2_7" id="3_1_2_7"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_7<input type="text" name="3_1_3_7" id="3_1_3_7"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_7<input type="text" name="3_1_4_7" id="3_1_4_7"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_7<input type="text" name="3_1_5_7" id="3_1_5_7"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_6_7a" id="3_1_6_7a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_7b" id="3_1_6_7b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_7c" id="3_1_6_7c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_7d" id="3_1_6_7d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_7e" id="3_1_6_7e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_7f" id="3_1_6_7f"  onclick="eDcheckOT('3_1_6_7f','3_1_6_7f_oth')"
                                                    value="5">Other</label> </div>
                                        <div>3_1_5_7e_oth<input type="text" name="3_1_5_7f_oth" id="3_1_6_7f_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td> Other</td>
                                <td>
                                    <div>3_1_2_8<input type="text" name="3_1_2_8" id="3_1_2_8"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_8<input type="text" name="3_1_3_8" id="3_1_3_8"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_8<input type="text" name="3_1_4_8" id="3_1_4_8"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_8<input type="text" name="3_1_5_8" id="3_1_5_8"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_6_8a" id="3_1_6_8a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_8b" id="3_1_6_8b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_8c" id="3_1_6_8c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_8d" id="3_1_6_8d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_8e" id="3_1_6_8e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_8f" id="3_1_6_8f"  onclick="eDcheckOT('3_1_6_8f','3_1_6_8f_oth')"
                                                    value="5">Other</label> </div>
                                        <div>3_1_5_8e_oth<input type="text" name="3_1_5_8f_oth" id="3_1_6_8f_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                        </table>
                    </div>
<div class="row">
<div class="col-md-12">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th colspan="3">3.1.7. Costs incurred with fertilizer application (without labour costs)</th>
                                </tr>
                                <tr>
                                    <th>Reason</th>
                                    <th>Cost</th>
                                </tr>
                                <tr>
                                    <td>Fuel for transport fertilizer</td>
                                    <td>
                                        <div>3_1_7_1 <input type="text" name="3_1_7_1" id="3_1_7_1"
                                                class="form-control" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cost for spraying machine</td>
                                    <td>
                                        <div>3_1_7_2<input type="text" name="3_1_7_2" id="3_1_7_2"
                                                class="form-control" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Other costs</td>
                                    <td>
                                        <div>3_1_7_3<input type="text" name="3_1_7_3" id="3_1_7_3"
                                                class="form-control" />
                                    </td>
                                </tr>
                            </table>
                        </div>
</div>
                    <div class="row">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th> Type of fertilizer usage for 2020/21 </th>
                                <th>3.1.8.Amount (Kg)</th>
                                <th>3.1.9.Area applied (Acres)</th>
                                <th>3.1.10.Price per unit (Rs/Kg)</th>
                                <th>3.1.11.Total Cost (Rs) </th>
                                <th>3.1.12.Source (Please use below codes) </th>

                            </tr>
                            <tr>
                                <td>Urea</td>
                                <td><div>3_1_8_1<input type="text" name="3_1_8_1" id="3_1_8_1"  class="form-control" /> </td>
                                <td><div>3_1_9_1<input type="text" name="3_1_9_1" id="3_1_9_1" class="form-control" /> </td>
                                <td><div>3_1_10_1<input type="text" name="3_1_10_1" id="3_1_10_1" class="form-control" /> </td>
                                <td><div>3_1_11_1<input type="text" name="3_1_11_1" id="3_1_11_1" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_1a" id="3_1_12_1a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_1b" id="3_1_12_1b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_1c" id="3_1_12_1c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_1d" id="3_1_12_1d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_12_1e" id="3_1_12_1e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_12_1f" id="3_1_12_1f"  onclick="eDcheckOT('3_1_12_1f','3_1_12_1f_oth')"
                                                    value="5">Other</label> </div>
                                        <div>3_1_12_1e_oth<input type="text" name="3_1_12_1f_oth" id="3_1_12_1f_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td>TSP</td>
                                <td><div>3_1_8_2<input type="text" name="3_1_8_2" id="3_1_8_2"  class="form-control" /> </td>
                                <td><div>3_1_9_2<input type="text" name="3_1_9_2" id="3_1_9_2" class="form-control" /> </td>
                                <td><div>3_1_10_2<input type="text" name="3_1_10_2" id="3_1_10_2" class="form-control" /> </td>
                                <td><div>3_1_11_2<input type="text" name="3_1_11_2" id="3_1_11_2" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_12_2a" id="3_1_12_2a" value="1"> Retail Shop/ wholesaler</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_2b" id="3_1_12_2b" value="2">Agrarian Devlopment Centre</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_2c" id="3_1_12_2c" value="3">Fellow farmer</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_2d" id="3_1_12_2d" value="4">Farmer association or cooperative</label></div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_2e" id="3_1_12_2e" value="5">Neighbour</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_2f" id="3_1_12_2f" value="6"  onclick="eDcheckOT('3_1_12_2f','3_1_12_2f_oth')">Other</label> </div>
	
    <div>3_1_12_2e_oth<input type="text" name="3_1_12_2f_oth" id="3_1_12_2f_oth" class="form-control" /> </div>
                                </td>

                            </tr>

                            <tr>
                                <td>MOP</td>
                                <td><div>3_1_8_3<input type="text" name="3_1_8_3" id="3_1_8_3"  class="form-control" /> </td>
                                <td><div>3_1_9_3<input type="text" name="3_1_9_3" id="3_1_9_3" class="form-control" /> </td>
                                <td><div>3_1_10_3<input type="text" name="3_1_10_3" id="3_1_10_3" class="form-control" /> </td>
                                <td><div>3_1_11_3<input type="text" name="3_1_11_3" id="3_1_11_3" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_12_3a" id="3_1_12_3a" value="1"> Retail Shop/ wholesaler</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_3b" id="3_1_12_3b" value="2">Agrarian Devlopment Centre</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_3c" id="3_1_12_3c" value="3">Fellow farmer</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_3d" id="3_1_12_3d" value="4">Farmer association or cooperative</label></div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_3e" id="3_1_12_3e" value="5">Neighbour</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_3f" id="3_1_12_3f" value="6"  onclick="eDcheckOT('3_1_12_3f','3_1_12_3f_oth')">Other</label> </div>
	
    <div>3_1_12_3e_oth<input type="text" name="3_1_12_3f_oth" id="3_1_12_3f_oth" class="form-control" /> </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Compost</td>
                                <td><div>3_1_8_4<input type="text" name="3_1_8_4" id="3_1_8_4"  class="form-control" /> </td>
                                <td><div>3_1_9_4<input type="text" name="3_1_9_4" id="3_1_9_4" class="form-control" /> </td>
                                <td><div>3_1_10_4<input type="text" name="3_1_10_4" id="3_1_10_4" class="form-control" /> </td>
                                <td><div>3_1_11_4<input type="text" name="3_1_11_4" id="3_1_11_4" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_12_4a" id="3_1_12_4a" value="1"> Retail Shop/ wholesaler</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_4b" id="3_1_12_4b" value="2">Agrarian Devlopment Centre</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_4c" id="3_1_12_4c" value="3">Fellow farmer</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_4d" id="3_1_12_4d" value="4">Farmer association or cooperative</label></div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_4e" id="3_1_12_4e" value="5">Neighbour</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_4f" id="3_1_12_4f" value="6" onclick="eDcheckOT('3_1_12_4f','3_1_12_4f_oth')">Other</label> </div>
	
    <div>3_1_12_4e_oth<input type="text" name="3_1_12_4f_oth" id="3_1_12_4f_oth" class="form-control" /> </div>
                                </td>

                            </tr>
                            <tr>
                            <td>Manure</td>
                            <td>    <div>3_1_8_5<input type="text" name="3_1_8_5" id="3_1_8_5"  class="form-control" /> </td>
                                <td><div>3_1_9_5<input type="text" name="3_1_9_5" id="3_1_9_5" class="form-control" /> </td>
                                <td><div>3_1_10_5<input type="text" name="3_1_10_5" id="3_1_10_5" class="form-control" /> </td>
                                <td><div>3_1_11_5<input type="text" name="3_1_11_5" id="3_1_11_5" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_12_5a" id="3_1_12_5a" value="1"> Retail Shop/ wholesaler</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_5b" id="3_1_12_5b" value="2">Agrarian Devlopment Centre</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_5c" id="3_1_12_5c" value="3">Fellow farmer</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_5d" id="3_1_12_5d" value="4">Farmer association or cooperative</label></div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_5e" id="3_1_12_5e" value="5">Neighbour</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_5f" id="3_1_12_5f" value="6"  onclick="eDcheckOT('3_1_12_5f','3_1_12_5f_oth')">Other</label> </div>
	
    <div>3_1_12_5e_oth<input type="text" name="3_1_12_5f_oth" id="3_1_12_5f_oth" class="form-control" /> </div>
                                </td>

                            </tr>


                            <tr>
                                <td> Liquid fertilizers</td>
                                <td><div>3_1_8_6<input type="text" name="3_1_8_6" id="3_1_8_6"  class="form-control" /> </td>
                                <td><div>3_1_9_6<input type="text" name="3_1_9_6" id="3_1_9_6" class="form-control" /> </td>
                                <td><div>3_1_10_6<input type="text" name="3_1_10_6" id="3_1_10_6" class="form-control" /> </td>
                                <td><div>3_1_11_6<input type="text" name="3_1_11_6" id="3_1_11_6" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_12_6a" id="3_1_12_6a" value="1"> Retail Shop/ wholesaler</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_6b" id="3_1_12_6b" value="2">Agrarian Devlopment Centre</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_6c" id="3_1_12_6c" value="3">Fellow farmer</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_6d" id="3_1_12_6d" value="4">Farmer association or cooperative</label></div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_6e" id="3_1_12_6e" value="5">Neighbour</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_6f" id="3_1_12_6f" value="6" onclick="eDcheckOT('3_1_12_6f','3_1_12_6f_oth')">Other</label> </div>
	
    <div>3_1_12_6e_oth<input type="text" name="3_1_12_6f_oth" id="3_1_12_6f_oth" class="form-control" /> </div>
                                </td>

                            </tr>
                            <tr>
                                <td> Other organic fertilizers</td>
                                <td><div>3_1_8_7<input type="text" name="3_1_8_7" id="3_1_8_7"  class="form-control" /> </td>
                                <td><div>3_1_9_7<input type="text" name="3_1_9_7" id="3_1_9_7" class="form-control" /> </td>
                                <td><div>3_1_10_7<input type="text" name="3_1_10_7" id="3_1_10_7" class="form-control" /> </td>
                                <td><div>3_1_11_7<input type="text" name="3_1_11_7" id="3_1_11_7" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_12_7a" id="3_1_12_7a" value="1"> Retail Shop/ wholesaler</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_7b" id="3_1_12_7b" value="2">Agrarian Devlopment Centre</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_7c" id="3_1_12_7c" value="3">Fellow farmer</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_7d" id="3_1_12_7d" value="4">Farmer association or cooperative</label></div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_7e" id="3_1_12_7e" value="5">Neighbour</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_7f" id="3_1_12_7f" value="6" onclick="eDcheckOT('3_1_12_7f','3_1_12_7f_oth')">Other</label> </div>
	
    <div>3_1_12_7e_oth<input type="text" name="3_1_12_7f_oth" id="3_1_12_7f_oth" class="form-control" /> </div>
                                </td>

                            </tr>
                            <tr>
                                <td> Other</td>
                                <td><div>3_1_8_8<input type="text" name="3_1_8_8" id="3_1_8_8"  class="form-control" /> </td>
                                <td><div>3_1_9_8<input type="text" name="3_1_9_8" id="3_1_9_8" class="form-control" /> </td>
                                <td><div>3_1_10_8<input type="text" name="3_1_10_8" id="3_1_10_8" class="form-control" /> </td>
                                <td><div>3_1_11_8<input type="text" name="3_1_11_8" id="3_1_11_8" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_8a" id="3_1_12_8a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_8b" id="3_1_12_8b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_8c" id="3_1_12_8c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_8d" id="3_1_12_8d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_12_8e" id="3_1_12_8e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_12_8f" id="3_1_12_8f" onclick="eDcheckOT('3_1_12_8f','3_1_12_8f_oth')"
                                                    value="6">Other</label> </div>
                                        <div>1.1.12.1 <input type="text" name="3_1_12_8f_oth" id="3_1_12_8f_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                        </table>
                    </div>


                </div>
            </div>
            
            <div class="card-footer">

                <button type="reset" class="btn btn-default">Reset Button</button>
                <button type="submit" name="btnsave" id="btnsave" class="btn btn-primary float-right">Submit
                    Button</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>