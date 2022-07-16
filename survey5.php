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
        
   

        if (isset($_POST['5_1_a'])) {  $a5_1_a = $_POST['5_1_a'];   } else {$a5_1_a = 0; }
        if (isset($_POST['5_2_a_1'] )) { $a5_2_a_1 = $_POST['5_2_a_1'];} else {$a5_2_a_1 = 0; }
        if (isset($_POST['5_2_a_2'] )) { $a5_2_a_2 = $_POST['5_2_a_2'];} else {$a5_2_a_2 = 0; }
        if (isset($_POST['5_2_a_3'] )) { $a5_2_a_3 = $_POST['5_2_a_3'];} else {$a5_2_a_3 = 0; }
        if (isset($_POST['5_2_a_4'] )) { $a5_2_a_4 = $_POST['5_2_a_4'];} else {$a5_2_a_4= 0; }
        if (isset($_POST['5_2_a_5'] )) { $a5_2_a_5 = $_POST['5_2_a_5'];} else {$a5_2_a_5 = 0; }
        if (isset($_POST['5_2_a_6'] )) { $a5_2_a_6 = $_POST['5_2_a_6'];} else {$a5_2_a_6 = 0; }
        if (isset($_POST['5_2_a_7'] )) { $a5_2_a_7 = $_POST['5_2_a_7'];} else {$a5_2_a_7 = 0; }
        if (isset($_POST['5_2_a_7_oth'] )) { $a5_2_a_7_oth = $_POST['5_2_a_7_oth'];} else {$a5_2_a_7_oth = NULL; }
        if (isset($_POST['5_3_a_1'] )) { $a5_3_a_1 = $_POST['5_3_a_1'];} else {$a5_3_a_1 = 0; }
        if (isset($_POST['5_3_a_2'] )) { $a5_3_a_2 = $_POST['5_3_a_2'];} else {$a5_3_a_2 = 0; }
        if (isset($_POST['5_3_a_3'] )) { $a5_3_a_3 = $_POST['5_3_a_3'];} else {$a5_3_a_3 = 0; }
        if (isset($_POST['5_4_a'] )) { $a5_4_a = $_POST['5_4_a'];} else {$a5_4_a= 0; }
        if (isset($_POST['5_5_a'] )) { $a5_5_a = $_POST['5_5_a'];} else {$a5_5_a= 0; }
//2
if (isset($_POST['5_1_b'])) {    $a5_1_b = $_POST['5_1_b'];   } else {$a5_1_a = 0; }
if (isset($_POST['5_2_b_1'] )) { $a5_2_b_1 = $_POST['5_2_b_1'];} else {$a5_2_b_1 = 0; }
if (isset($_POST['5_2_b_2'] )) { $a5_2_b_2 = $_POST['5_2_b_2'];} else {$a5_2_b_2 = 0; }
if (isset($_POST['5_2_b_3'] )) { $a5_2_b_3 = $_POST['5_2_b_3'];} else {$a5_2_b_3 = 0; }
if (isset($_POST['5_2_b_4'] )) { $a5_2_b_4 = $_POST['5_2_b_4'];} else {$a5_2_b_4= 0; }
if (isset($_POST['5_2_b_5'] )) { $a5_2_b_5 = $_POST['5_2_b_5'];} else {$a5_2_b_5 = 0; }
if (isset($_POST['5_2_b_6'] )) { $a5_2_b_6 = $_POST['5_2_b_6'];} else {$a5_2_b_6 = 0; }
if (isset($_POST['5_2_b_7'] )) { $a5_2_b_7 = $_POST['5_2_b_7'];} else {$a5_2_b_7 = 0; }
if (isset($_POST['5_2_b_7_oth'])){ $a5_2_b_7_oth = $_POST['5_2_b_7_oth'];} else {$a5_2_b_7_oth = NULL; }
if (isset($_POST['5_3_b_1'] )) { $a5_3_b_1 = $_POST['5_3_b_1'];} else {$a5_3_b_1 = 0; }
if (isset($_POST['5_3_b_2'] )) { $a5_3_b_2 = $_POST['5_3_b_2'];} else {$a5_3_b_2 = 0; }
if (isset($_POST['5_3_b_3'] )) { $a5_3_b_3 = $_POST['5_3_b_3'];} else {$a5_3_b_3 = 0; }
if (isset($_POST['5_4_b'] )) { $a5_4_b = $_POST['5_4_b'];} else {$a5_4_b= 0; }
if (isset($_POST['5_5_b'] )) { $a5_5_b = $_POST['5_5_b'];} else {$a5_5_b= 0; }

//3
if (isset($_POST['5_1_c'])) {    $a5_1_c = $_POST['5_1_c'];   } else {$a5_1_a = 0; }
if (isset($_POST['5_2_c_1'] )) { $a5_2_c_1 = $_POST['5_2_c_1'];} else {$a5_2_c_1 = 0; }
if (isset($_POST['5_2_c_2'] )) { $a5_2_c_2 = $_POST['5_2_c_2'];} else {$a5_2_c_2 = 0; }
if (isset($_POST['5_2_c_3'] )) { $a5_2_c_3 = $_POST['5_2_c_3'];} else {$a5_2_c_3 = 0; }
if (isset($_POST['5_2_c_4'] )) { $a5_2_c_4 = $_POST['5_2_c_4'];} else {$a5_2_c_4= 0; }
if (isset($_POST['5_2_c_5'] )) { $a5_2_c_5 = $_POST['5_2_c_5'];} else {$a5_2_c_5 = 0; }
if (isset($_POST['5_2_c_6'] )) { $a5_2_c_6 = $_POST['5_2_c_6'];} else {$a5_2_c_6 = 0; }
if (isset($_POST['5_2_c_7'] )) { $a5_2_c_7 = $_POST['5_2_c_7'];} else {$a5_2_c_7 = 0; }
if (isset($_POST['5_2_c_7_oth'])){ $a5_2_c_7_oth = $_POST['5_2_c_7_oth'];} else {$a5_2_c_7_oth = NULL; }
if (isset($_POST['5_3_c_1'] )) { $a5_3_c_1 = $_POST['5_3_c_1'];} else {$a5_3_c_1 = 0; }
if (isset($_POST['5_3_c_2'] )) { $a5_3_c_2 = $_POST['5_3_c_2'];} else {$a5_3_c_2 = 0; }
if (isset($_POST['5_3_c_3'] )) { $a5_3_c_3 = $_POST['5_3_c_3'];} else {$a5_3_c_3 = 0; }
if (isset($_POST['5_4_c'] )) { $a5_4_c = $_POST['5_4_c'];} else {$a5_4_c= 0; }
if (isset($_POST['5_5_c'] )) { $a5_5_c = $_POST['5_5_c'];} else {$a5_5_c= 0; }
//d
if (isset($_POST['5_1_d'])) {    $a5_1_d = $_POST['5_1_d'];   } else {$a5_1_a = 0; }
if (isset($_POST['5_2_d_1'] )) { $a5_2_d_1 = $_POST['5_2_d_1'];} else {$a5_2_d_1 = 0; }
if (isset($_POST['5_2_d_2'] )) { $a5_2_d_2 = $_POST['5_2_d_2'];} else {$a5_2_d_2 = 0; }
if (isset($_POST['5_2_d_3'] )) { $a5_2_d_3 = $_POST['5_2_d_3'];} else {$a5_2_d_3 = 0; }
if (isset($_POST['5_2_d_4'] )) { $a5_2_d_4 = $_POST['5_2_d_4'];} else {$a5_2_d_4= 0; }
if (isset($_POST['5_2_d_5'] )) { $a5_2_d_5 = $_POST['5_2_d_5'];} else {$a5_2_d_5 = 0; }
if (isset($_POST['5_2_d_6'] )) { $a5_2_d_6 = $_POST['5_2_d_6'];} else {$a5_2_d_6 = 0; }
if (isset($_POST['5_2_d_7'] )) { $a5_2_d_7 = $_POST['5_2_d_7'];} else {$a5_2_d_7 = 0; }
if (isset($_POST['5_2_d_7_oth'])){ $a5_2_d_7_oth = $_POST['5_2_d_7_oth'];} else {$a5_2_d_7_oth = NULL; }
if (isset($_POST['5_3_d_1'] )) { $a5_3_d_1 = $_POST['5_3_d_1'];} else {$a5_3_d_1 = 0; }
if (isset($_POST['5_3_d_2'] )) { $a5_3_d_2 = $_POST['5_3_d_2'];} else {$a5_3_d_2 = 0; }
if (isset($_POST['5_3_d_3'] )) { $a5_3_d_3 = $_POST['5_3_d_3'];} else {$a5_3_d_3 = 0; }
if (isset($_POST['5_4_d'] )) { $a5_4_d = $_POST['5_4_d'];} else {$a5_4_d= 0; }
if (isset($_POST['5_5_d'] )) { $a5_5_d = $_POST['5_5_d'];} else {$a5_5_d= 0; }
//4
if (isset($_POST['5_1_e'])) {    $a5_1_e = $_POST['5_1_e'];   } else {$a5_1_a = 0; }
if (isset($_POST['5_2_e_1'] )) { $a5_2_e_1 = $_POST['5_2_e_1'];} else {$a5_2_e_1 = 0; }
if (isset($_POST['5_2_e_2'] )) { $a5_2_e_2 = $_POST['5_2_e_2'];} else {$a5_2_e_2 = 0; }
if (isset($_POST['5_2_e_3'] )) { $a5_2_e_3 = $_POST['5_2_e_3'];} else {$a5_2_e_3 = 0; }
if (isset($_POST['5_2_e_4'] )) { $a5_2_e_4 = $_POST['5_2_e_4'];} else {$a5_2_e_4= 0; }
if (isset($_POST['5_2_e_5'] )) { $a5_2_e_5 = $_POST['5_2_e_5'];} else {$a5_2_e_5 = 0; }
if (isset($_POST['5_2_e_6'] )) { $a5_2_e_6 = $_POST['5_2_e_6'];} else {$a5_2_e_6 = 0; }
if (isset($_POST['5_2_e_7'] )) { $a5_2_e_7 = $_POST['5_2_e_7'];} else {$a5_2_e_7 = 0; }
if (isset($_POST['5_2_e_7_oth'])){ $a5_2_e_7_oth = $_POST['5_2_e_7_oth'];} else {$a5_2_e_7_oth = NULL; }
if (isset($_POST['5_3_e_1'] )) { $a5_3_e_1 = $_POST['5_3_e_1'];} else {$a5_3_e_1 = 0; }
if (isset($_POST['5_3_e_2'] )) { $a5_3_e_2 = $_POST['5_3_e_2'];} else {$a5_3_e_2 = 0; }
if (isset($_POST['5_3_e_3'] )) { $a5_3_e_3 = $_POST['5_3_e_3'];} else {$a5_3_e_3 = 0; }
if (isset($_POST['5_4_e'] )) { $a5_4_e = $_POST['5_4_e'];} else {$a5_4_e= 0; }
if (isset($_POST['5_5_e'] )) { $a5_5_e = $_POST['5_5_e'];} else {$a5_5_e= 0; }

//f
if (isset($_POST['5_1_f'])) {    $a5_1_f =   $_POST['5_1_f'];   } else {$a5_1_f = 0; }
if (isset($_POST['5_2_f_1'] )) { $a5_2_f_1 = $_POST['5_2_f_1'];} else {$a5_2_f_1 = 0; }
if (isset($_POST['5_2_f_2'] )) { $a5_2_f_2 = $_POST['5_2_f_2'];} else {$a5_2_f_2 = 0; }
if (isset($_POST['5_2_f_3'] )) { $a5_2_f_3 = $_POST['5_2_f_3'];} else {$a5_2_f_3 = 0; }
if (isset($_POST['5_2_f_4'] )) { $a5_2_f_4 = $_POST['5_2_f_4'];} else {$a5_2_f_4= 0; }
if (isset($_POST['5_2_f_5'] )) { $a5_2_f_5 = $_POST['5_2_f_5'];} else {$a5_2_f_5 = 0; }
if (isset($_POST['5_2_f_6'] )) { $a5_2_f_6 = $_POST['5_2_f_6'];} else {$a5_2_f_6 = 0; }
if (isset($_POST['5_2_f_7'] )) { $a5_2_f_7 = $_POST['5_2_f_7'];} else {$a5_2_f_7 = 0; }
if (isset($_POST['5_2_f_7_oth'])){ $a5_2_f_7_oth = $_POST['5_2_f_7_oth'];} else {$a5_2_f_7_oth = NULL; }
if (isset($_POST['5_3_f_1'] )) { $a5_3_f_1 = $_POST['5_3_f_1'];} else {$a5_3_f_1 = 0; }
if (isset($_POST['5_3_f_2'] )) { $a5_3_f_2 = $_POST['5_3_f_2'];} else {$a5_3_f_2 = 0; }
if (isset($_POST['5_3_f_3'] )) { $a5_3_f_3 = $_POST['5_3_f_3'];} else {$a5_3_f_3 = 0; }
if (isset($_POST['5_4_f'] )) { $a5_4_f = $_POST['5_4_f'];} else {$a5_4_f= 0; }
if (isset($_POST['5_5_f'] )) { $a5_5_f = $_POST['5_5_f'];} else {$a5_5_f= 0; }
//g
if (isset($_POST['5_1_g'])) {    $a5_1_g =   $_POST['5_1_g'];   } else{$a5_1_g = 0; }
if (isset($_POST['5_2_g_1'] )) { $a5_2_g_1 = $_POST['5_2_g_1'];} else {$a5_2_g_1 = 0; }
if (isset($_POST['5_2_g_2'] )) { $a5_2_g_2 = $_POST['5_2_g_2'];} else {$a5_2_g_2 = 0; }
if (isset($_POST['5_2_g_3'] )) { $a5_2_g_3 = $_POST['5_2_g_3'];} else {$a5_2_g_3 = 0; }
if (isset($_POST['5_2_g_4'] )) { $a5_2_g_4 = $_POST['5_2_g_4'];} else {$a5_2_g_4= 0; }
if (isset($_POST['5_2_g_5'] )) { $a5_2_g_5 = $_POST['5_2_g_5'];} else {$a5_2_g_5 = 0; }
if (isset($_POST['5_2_g_6'] )) { $a5_2_g_6 = $_POST['5_2_g_6'];} else {$a5_2_g_6 = 0; }
if (isset($_POST['5_2_g_7'] )) { $a5_2_g_7 = $_POST['5_2_g_7'];} else {$a5_2_g_7 = 0; }
if (isset($_POST['5_3_g_1'] )) { $a5_3_g_1 = $_POST['5_3_g_1'];} else {$a5_3_g_1 = 0; }
if (isset($_POST['5_3_g_2'] )) { $a5_3_g_2 = $_POST['5_3_g_2'];} else {$a5_3_g_2 = 0; }
if (isset($_POST['5_3_g_3'] )) { $a5_3_g_3 = $_POST['5_3_g_3'];} else {$a5_3_g_3 = 0; }
if (isset($_POST['5_4_g'] )) {   $a5_4_g =   $_POST['5_4_g'];} else {  $a5_4_g= 0; }
if (isset($_POST['5_5_g'] )) {   $a5_5_g =   $_POST['5_5_g'];} else {  $a5_5_g= 0; }
if (isset($_POST['5_2_g_7_oth'])){$a5_2_g_7_oth =$_POST['5_2_g_7_oth'];} else {$a5_2_g_7_oth = NULL; }
//h
if (isset($_POST['5_1_h'])) {    $a5_1_h =   $_POST['5_1_h'];   } else{$a5_1_h = 0; }
if (isset($_POST['5_2_h_1'] )) { $a5_2_h_1 = $_POST['5_2_h_1'];} else {$a5_2_h_1 = 0; }
if (isset($_POST['5_2_h_2'] )) { $a5_2_h_2 = $_POST['5_2_h_2'];} else {$a5_2_h_2 = 0; }
if (isset($_POST['5_2_h_3'] )) { $a5_2_h_3 = $_POST['5_2_h_3'];} else {$a5_2_h_3 = 0; }
if (isset($_POST['5_2_h_4'] )) { $a5_2_h_4 = $_POST['5_2_h_4'];} else {$a5_2_h_4= 0; }
if (isset($_POST['5_2_h_5'] )) { $a5_2_h_5 = $_POST['5_2_h_5'];} else {$a5_2_h_5 = 0; }
if (isset($_POST['5_2_h_6'] )) { $a5_2_h_6 = $_POST['5_2_h_6'];} else {$a5_2_h_6 = 0; }
if (isset($_POST['5_2_h_7'] )) { $a5_2_h_7 = $_POST['5_2_h_7'];} else {$a5_2_h_7 = 0; }
if (isset($_POST['5_3_h_1'] )) { $a5_3_h_1 = $_POST['5_3_h_1'];} else {$a5_3_h_1 = 0; }
if (isset($_POST['5_3_h_2'] )) { $a5_3_h_2 = $_POST['5_3_h_2'];} else {$a5_3_h_2 = 0; }
if (isset($_POST['5_3_h_3'] )) { $a5_3_h_3 = $_POST['5_3_h_3'];} else {$a5_3_h_3 = 0; }
if (isset($_POST['5_4_h'] )) {   $a5_4_h =   $_POST['5_4_h'];} else {  $a5_4_h= 0; }
if (isset($_POST['5_5_h'] )) {   $a5_5_h =   $_POST['5_5_h'];} else {  $a5_5_h= 0; }
if (isset($_POST['5_2_h_7_oth'])){$a5_2_h_7_oth =$_POST['5_2_h_7_oth'];} else {$a5_2_h_7_oth = NULL; }
//i
if (isset($_POST['5_1_i'])) {    $a5_1_i =   $_POST['5_1_i'];   } else{$a5_1_i = 0; }
if (isset($_POST['5_2_i_1'] )) { $a5_2_i_1 = $_POST['5_2_i_1'];} else {$a5_2_i_1 = 0; }
if (isset($_POST['5_2_i_2'] )) { $a5_2_i_2 = $_POST['5_2_i_2'];} else {$a5_2_i_2 = 0; }
if (isset($_POST['5_2_i_3'] )) { $a5_2_i_3 = $_POST['5_2_i_3'];} else {$a5_2_i_3 = 0; }
if (isset($_POST['5_2_i_4'] )) { $a5_2_i_4 = $_POST['5_2_i_4'];} else {$a5_2_i_4= 0; }
if (isset($_POST['5_2_i_5'] )) { $a5_2_i_5 = $_POST['5_2_i_5'];} else {$a5_2_i_5 = 0; }
if (isset($_POST['5_2_i_6'] )) { $a5_2_i_6 = $_POST['5_2_i_6'];} else {$a5_2_i_6 = 0; }
if (isset($_POST['5_2_i_7'] )) { $a5_2_i_7 = $_POST['5_2_i_7'];} else {$a5_2_i_7 = 0; }
if (isset($_POST['5_3_i_1'] )) { $a5_3_i_1 = $_POST['5_3_i_1'];} else {$a5_3_i_1 = 0; }
if (isset($_POST['5_3_i_2'] )) { $a5_3_i_2 = $_POST['5_3_i_2'];} else {$a5_3_i_2 = 0; }
if (isset($_POST['5_3_i_3'] )) { $a5_3_i_3 = $_POST['5_3_i_3'];} else {$a5_3_i_3 = 0; }
if (isset($_POST['5_4_i'] )) {   $a5_4_i =   $_POST['5_4_i'];} else {  $a5_4_i= 0; }
if (isset($_POST['5_5_i'] )) {   $a5_5_i =   $_POST['5_5_i'];} else {  $a5_5_i= 0; }
if (isset($_POST['5_2_i_7_oth'])){$a5_2_i_7_oth =$_POST['5_2_i_7_oth'];} else {$a5_2_i_7_oth = NULL; }
//j
if (isset($_POST['5_1_j'])) {    $a5_1_j =   $_POST['5_1_j'];   } else{$a5_1_j = 0; }
if (isset($_POST['5_2_j_1'] )) { $a5_2_j_1 = $_POST['5_2_j_1'];} else {$a5_2_j_1 = 0; }
if (isset($_POST['5_2_j_2'] )) { $a5_2_j_2 = $_POST['5_2_j_2'];} else {$a5_2_j_2 = 0; }
if (isset($_POST['5_2_j_3'] )) { $a5_2_j_3 = $_POST['5_2_j_3'];} else {$a5_2_j_3 = 0; }
if (isset($_POST['5_2_j_4'] )) { $a5_2_j_4 = $_POST['5_2_j_4'];} else {$a5_2_j_4= 0; }
if (isset($_POST['5_2_j_5'] )) { $a5_2_j_5 = $_POST['5_2_j_5'];} else {$a5_2_j_5 = 0; }
if (isset($_POST['5_2_j_6'] )) { $a5_2_j_6 = $_POST['5_2_j_6'];} else {$a5_2_j_6 = 0; }
if (isset($_POST['5_2_j_7'] )) { $a5_2_j_7 = $_POST['5_2_j_7'];} else {$a5_2_j_7 = 0; }
if (isset($_POST['5_3_j_1'] )) { $a5_3_j_1 = $_POST['5_3_j_1'];} else {$a5_3_j_1 = 0; }
if (isset($_POST['5_3_j_2'] )) { $a5_3_j_2 = $_POST['5_3_j_2'];} else {$a5_3_j_2 = 0; }
if (isset($_POST['5_3_j_3'] )) { $a5_3_j_3 = $_POST['5_3_j_3'];} else {$a5_3_j_3 = 0; }
if (isset($_POST['5_4_j'] )) {   $a5_4_j =   $_POST['5_4_j'];} else {  $a5_4_j= 0; }
if (isset($_POST['5_5_j'] )) {   $a5_5_j =   $_POST['5_5_j'];} else {  $a5_5_j= 0; }
if (isset($_POST['5_2_j_7_oth'])){$a5_2_j_7_oth =$_POST['5_2_j_7_oth'];} else {$a5_2_j_7_oth = NULL; }
//k
if (isset($_POST['5_1_k'])) {    $a5_1_k =   $_POST['5_1_k'];   } else{$a5_1_k = 0; }
if (isset($_POST['5_2_k_1'] )) { $a5_2_k_1 = $_POST['5_2_k_1'];} else {$a5_2_k_1 = 0; }
if (isset($_POST['5_2_k_2'] )) { $a5_2_k_2 = $_POST['5_2_k_2'];} else {$a5_2_k_2 = 0; }
if (isset($_POST['5_2_k_3'] )) { $a5_2_k_3 = $_POST['5_2_k_3'];} else {$a5_2_k_3 = 0; }
if (isset($_POST['5_2_k_4'] )) { $a5_2_k_4 = $_POST['5_2_k_4'];} else {$a5_2_k_4= 0; }
if (isset($_POST['5_2_k_5'] )) { $a5_2_k_5 = $_POST['5_2_k_5'];} else {$a5_2_k_5 = 0; }
if (isset($_POST['5_2_k_6'] )) { $a5_2_k_6 = $_POST['5_2_k_6'];} else {$a5_2_k_6 = 0; }
if (isset($_POST['5_2_k_7'] )) { $a5_2_k_7 = $_POST['5_2_k_7'];} else {$a5_2_k_7 = 0; }
if (isset($_POST['5_3_k_1'] )) { $a5_3_k_1 = $_POST['5_3_k_1'];} else {$a5_3_k_1 = 0; }
if (isset($_POST['5_3_k_2'] )) { $a5_3_k_2 = $_POST['5_3_k_2'];} else {$a5_3_k_2 = 0; }
if (isset($_POST['5_3_k_3'] )) { $a5_3_k_3 = $_POST['5_3_k_3'];} else {$a5_3_k_3 = 0; }
if (isset($_POST['5_4_k'] )) {   $a5_4_k =   $_POST['5_4_k'];} else {  $a5_4_k= 0; }
if (isset($_POST['5_5_k'] )) {   $a5_5_k =   $_POST['5_5_k'];} else {  $a5_5_k= 0; }
if (isset($_POST['5_2_k_7_oth'])){$a5_2_k_7_oth =$_POST['5_2_k_7_oth'];} else {$a5_2_k_7_oth = NULL; }
//L l
if (isset($_POST['5_1_l'])) {    $a5_1_l =   $_POST['5_1_l'];   } else{$a5_1_l = 0; }
if (isset($_POST['5_2_l_1'] )) { $a5_2_l_1 = $_POST['5_2_l_1'];} else {$a5_2_l_1 = 0; }
if (isset($_POST['5_2_l_2'] )) { $a5_2_l_2 = $_POST['5_2_l_2'];} else {$a5_2_l_2 = 0; }
if (isset($_POST['5_2_l_3'] )) { $a5_2_l_3 = $_POST['5_2_l_3'];} else {$a5_2_l_3 = 0; }
if (isset($_POST['5_2_l_4'] )) { $a5_2_l_4 = $_POST['5_2_l_4'];} else {$a5_2_l_4= 0; }
if (isset($_POST['5_2_l_5'] )) { $a5_2_l_5 = $_POST['5_2_l_5'];} else {$a5_2_l_5 = 0; }
if (isset($_POST['5_2_l_6'] )) { $a5_2_l_6 = $_POST['5_2_l_6'];} else {$a5_2_l_6 = 0; }
if (isset($_POST['5_2_l_7'] )) { $a5_2_l_7 = $_POST['5_2_l_7'];} else {$a5_2_l_7 = 0; }
if (isset($_POST['5_3_l_1'] )) { $a5_3_l_1 = $_POST['5_3_l_1'];} else {$a5_3_l_1 = 0; }
if (isset($_POST['5_3_l_2'] )) { $a5_3_l_2 = $_POST['5_3_l_2'];} else {$a5_3_l_2 = 0; }
if (isset($_POST['5_3_l_3'] )) { $a5_3_l_3 = $_POST['5_3_l_3'];} else {$a5_3_l_3 = 0; }
if (isset($_POST['5_4_l'] )) {   $a5_4_l =   $_POST['5_4_l'];} else {  $a5_4_l= 0; }
if (isset($_POST['5_5_l'] )) {   $a5_5_l =   $_POST['5_5_l'];} else {  $a5_5_l= 0; }
if (isset($_POST['5_2_l_7_oth'])){$a5_2_l_7_oth =$_POST['5_2_l_7_oth'];} else {$a5_2_l_7_oth = NULL; }
//m
if (isset($_POST['5_1_m'])) {    $a5_1_m =   $_POST['5_1_m'];   } else{$a5_1_m = NULL; }
if (isset($_POST['5_2_m_1'] )) { $a5_2_m_1 = $_POST['5_2_m_1'];} else {$a5_2_m_1 = 0; }
if (isset($_POST['5_2_m_2'] )) { $a5_2_m_2 = $_POST['5_2_m_2'];} else {$a5_2_m_2 = 0; }
if (isset($_POST['5_2_m_3'] )) { $a5_2_m_3 = $_POST['5_2_m_3'];} else {$a5_2_m_3 = 0; }
if (isset($_POST['5_2_m_4'] )) { $a5_2_m_4 = $_POST['5_2_m_4'];} else {$a5_2_m_4= 0; }
if (isset($_POST['5_2_m_5'] )) { $a5_2_m_5 = $_POST['5_2_m_5'];} else {$a5_2_m_5 = 0; }
if (isset($_POST['5_2_m_6'] )) { $a5_2_m_6 = $_POST['5_2_m_6'];} else {$a5_2_m_6 = 0; }
if (isset($_POST['5_2_m_7'] )) { $a5_2_m_7 = $_POST['5_2_m_7'];} else {$a5_2_m_7 = 0; }
if (isset($_POST['5_3_m_1'] )) { $a5_3_m_1 = $_POST['5_3_m_1'];} else {$a5_3_m_1 = 0; }
if (isset($_POST['5_3_m_2'] )) { $a5_3_m_2 = $_POST['5_3_m_2'];} else {$a5_3_m_2 = 0; }
if (isset($_POST['5_3_m_3'] )) { $a5_3_m_3 = $_POST['5_3_m_3'];} else {$a5_3_m_3 = 0; }
if (isset($_POST['5_4_m'] )) {   $a5_4_m =   $_POST['5_4_m'];} else {  $a5_4_m= 0; }
if (isset($_POST['5_5_m'] )) {   $a5_5_m =   $_POST['5_5_m'];} else {  $a5_5_m= 0; }
if (isset($_POST['5_2_m_7_oth'])){$a5_2_m_7_oth =$_POST['5_2_m_7_oth'];} else {$a5_2_m_7_oth = NULL; }


$sqlupdatesq11  = "UPDATE tblsurvey_question SET 5_1_a='$a5_1_a',5_2_a_1='$a5_2_a_1' ,5_2_a_2='$a5_2_a_2' ,5_2_a_3='$a5_2_a_3',5_2_a_4='$a5_2_a_4',5_2_a_5='$a5_2_a_5',5_2_a_6='$a5_2_a_6',5_2_a_7='$a5_2_a_7' ,5_2_a_7_oth='$a5_2_a_7_oth',5_3_a_1=' $a5_3_a_1',5_3_a_2=' $a5_3_a_2', 5_3_a_3=' $a5_3_a_3', 5_4_a=' $a5_4_a' ,5_5_a='$a5_5_a'  where household_id= '$household_id' ";  
$sqlupdatesq12  = "UPDATE tblsurvey_question SET 5_1_b='$a5_1_b',5_2_b_1='$a5_2_b_1' ,5_2_b_2='$a5_2_b_2' ,5_2_b_3='$a5_2_b_3',5_2_b_4='$a5_2_b_4',5_2_b_5='$a5_2_b_5',5_2_b_6='$a5_2_b_6',5_2_b_7='$a5_2_b_7' ,5_2_b_7_oth='$a5_2_b_7_oth',5_3_b_1=' $a5_3_b_1',5_3_b_2=' $a5_3_b_2', 5_3_b_3=' $a5_3_b_3', 5_4_b=' $a5_4_b' ,5_5_b='$a5_5_b'  where household_id= '$household_id' "; 
$sqlupdatesq13  = "UPDATE tblsurvey_question SET 5_1_c='$a5_1_c',5_2_c_1='$a5_2_c_1' ,5_2_c_2='$a5_2_c_2' ,5_2_c_3='$a5_2_c_3',5_2_c_4='$a5_2_c_4',5_2_c_5='$a5_2_c_5',5_2_c_6='$a5_2_c_6',5_2_c_7='$a5_2_c_7' ,5_2_c_7_oth='$a5_2_c_7_oth',5_3_c_1=' $a5_3_c_1',5_3_c_2=' $a5_3_c_2', 5_3_c_3=' $a5_3_c_3', 5_4_c=' $a5_4_c' ,5_5_c='$a5_5_c'  where household_id= '$household_id' ";
$sqlupdatesq14  = "UPDATE tblsurvey_question SET 5_1_d='$a5_1_d',5_2_d_1='$a5_2_d_1' ,5_2_d_2='$a5_2_d_2' ,5_2_d_3='$a5_2_d_3',5_2_d_4='$a5_2_d_4',5_2_d_5='$a5_2_d_5',5_2_d_6='$a5_2_d_6',5_2_d_7='$a5_2_d_7' ,5_2_d_7_oth='$a5_2_d_7_oth',5_3_d_1=' $a5_3_d_1',5_3_d_2=' $a5_3_d_2', 5_3_d_3=' $a5_3_d_3', 5_4_d=' $a5_4_d' ,5_5_d='$a5_5_d'  where household_id= '$household_id' ";
$sqlupdatesq15  = "UPDATE tblsurvey_question SET 5_1_e='$a5_1_e',5_2_e_1='$a5_2_e_1' ,5_2_e_2='$a5_2_e_2' ,5_2_e_3='$a5_2_b_3',5_2_e_4='$a5_2_e_4',5_2_e_5='$a5_2_e_5',5_2_b_6='$a5_2_e_6',5_2_e_7='$a5_2_e_7' ,5_2_e_7_oth='$a5_2_e_7_oth',5_3_e_1=' $a5_3_e_1',5_3_e_2=' $a5_3_e_2', 5_3_e_3=' $a5_3_e_3', 5_4_e=' $a5_4_e' ,5_5_e='$a5_5_e'  where household_id= '$household_id' ";
$sqlupdatesq16  = "UPDATE tblsurvey_question SET 5_1_f='$a5_1_f',5_2_f_1='$a5_2_f_1' ,5_2_f_2='$a5_2_f_2' ,5_2_f_3='$a5_2_b_3',5_2_f_4='$a5_2_f_4',5_2_f_5='$a5_2_f_5',5_2_b_6='$a5_2_f_6',5_2_f_7='$a5_2_f_7' ,5_2_f_7_oth='$a5_2_f_7_oth',5_3_f_1=' $a5_3_f_1',5_3_f_2=' $a5_3_f_2', 5_3_f_3=' $a5_3_f_3', 5_4_f=' $a5_4_f' ,5_5_f='$a5_5_f'  where household_id= '$household_id' ";
$sqlupdatesq17  = "UPDATE tblsurvey_question SET 5_1_g='$a5_1_g',5_2_g_1='$a5_2_g_1' ,5_2_g_2='$a5_2_g_2' ,5_2_g_3='$a5_2_b_3',5_2_g_4='$a5_2_g_4',5_2_g_5='$a5_2_g_5',5_2_b_6='$a5_2_g_6',5_2_g_7='$a5_2_g_7' ,5_2_g_7_oth='$a5_2_g_7_oth',5_3_g_1=' $a5_3_g_1',5_3_g_2=' $a5_3_g_2', 5_3_g_3=' $a5_3_g_3', 5_4_g=' $a5_4_g' ,5_5_g='$a5_5_g'  where household_id= '$household_id' ";
$sqlupdatesq18  = "UPDATE tblsurvey_question SET 5_1_h='$a5_1_h',5_2_h_1='$a5_2_h_1' ,5_2_h_2='$a5_2_h_2' ,5_2_h_3='$a5_2_b_3',5_2_h_4='$a5_2_h_4',5_2_h_5='$a5_2_h_5',5_2_b_6='$a5_2_h_6',5_2_h_7='$a5_2_h_7' ,5_2_h_7_oth='$a5_2_h_7_oth',5_3_h_1=' $a5_3_h_1',5_3_h_2=' $a5_3_h_2', 5_3_h_3=' $a5_3_h_3', 5_4_h=' $a5_4_h' ,5_5_h='$a5_5_h'  where household_id= '$household_id' ";
$sqlupdatesq19  = "UPDATE tblsurvey_question SET 5_1_i='$a5_1_i',5_2_i_1='$a5_2_i_1' ,5_2_i_2='$a5_2_i_2' ,5_2_i_3='$a5_2_b_3',5_2_i_4='$a5_2_i_4',5_2_i_5='$a5_2_i_5',5_2_b_6='$a5_2_i_6',5_2_i_7='$a5_2_i_7' ,5_2_i_7_oth='$a5_2_i_7_oth',5_3_i_1=' $a5_3_i_1',5_3_i_2=' $a5_3_i_2', 5_3_i_3=' $a5_3_i_3', 5_4_i=' $a5_4_i' ,5_5_i='$a5_5_i'  where household_id= '$household_id' ";
$sqlupdatesq110 = "UPDATE tblsurvey_question SET 5_1_j='$a5_1_j',5_2_j_1='$a5_2_j_1' ,5_2_j_2='$a5_2_j_2' ,5_2_j_3='$a5_2_b_3',5_2_j_4='$a5_2_j_4',5_2_j_5='$a5_2_j_5',5_2_b_6='$a5_2_j_6',5_2_j_7='$a5_2_j_7' ,5_2_j_7_oth='$a5_2_j_7_oth',5_3_j_1=' $a5_3_j_1',5_3_j_2=' $a5_3_j_2', 5_3_j_3=' $a5_3_j_3', 5_4_j=' $a5_4_j' ,5_5_j='$a5_5_j'  where household_id= '$household_id' ";
$sqlupdatesq111 = "UPDATE tblsurvey_question SET 5_1_k='$a5_1_k',5_2_k_1='$a5_2_k_1' ,5_2_k_2='$a5_2_k_2' ,5_2_k_3='$a5_2_b_3',5_2_k_4='$a5_2_k_4',5_2_k_5='$a5_2_k_5',5_2_b_6='$a5_2_k_6',5_2_k_7='$a5_2_k_7' ,5_2_k_7_oth='$a5_2_k_7_oth',5_3_k_1=' $a5_3_k_1',5_3_k_2=' $a5_3_k_2', 5_3_k_3=' $a5_3_k_3', 5_4_k=' $a5_4_k' ,5_5_k='$a5_5_k'  where household_id= '$household_id' ";
$sqlupdatesq112 = "UPDATE tblsurvey_question SET 5_1_l='$a5_1_l',5_2_l_1='$a5_2_l_1' ,5_2_l_2='$a5_2_l_2' ,5_2_l_3='$a5_2_b_3',5_2_l_4='$a5_2_l_4',5_2_l_5='$a5_2_l_5',5_2_b_6='$a5_2_l_6',5_2_l_7='$a5_2_l_7' ,5_2_l_7_oth='$a5_2_l_7_oth',5_3_l_1=' $a5_3_l_1',5_3_l_2=' $a5_3_l_2', 5_3_l_3=' $a5_3_l_3', 5_4_l=' $a5_4_l' ,5_5_l='$a5_5_l'  where household_id= '$household_id' ";
$sqlupdatesq113 = "UPDATE tblsurvey_question SET 5_1_m='$a5_1_m',5_2_m_1='$a5_2_m_1' ,5_2_m_2='$a5_2_m_2' ,5_2_m_3='$a5_2_b_3',5_2_m_4='$a5_2_m_4',5_2_m_5='$a5_2_m_5',5_2_b_6='$a5_2_m_6',5_2_m_7='$a5_2_m_7' ,5_2_m_7_oth='$a5_2_m_7_oth',5_3_m_1=' $a5_3_m_1',5_3_m_2=' $a5_3_m_2', 5_3_m_3=' $a5_3_m_3', 5_4_m=' $a5_4_m' ,5_5_m='$a5_5_m'  where household_id= '$household_id' ";
       
$res1 = mysqli_query($con, $sqlupdatesq11) or die("error in update customer part:" . mysqli_error($con));
$res2 = mysqli_query($con, $sqlupdatesq12) or die("error in update customer part:" . mysqli_error($con));
$res3 = mysqli_query($con, $sqlupdatesq13) or die("error in update customer part:" . mysqli_error($con));
$res4 = mysqli_query($con, $sqlupdatesq14) or die("error in update customer part:" . mysqli_error($con));
$res5 = mysqli_query($con, $sqlupdatesq15) or die("error in update customer part:" . mysqli_error($con));
$res6 = mysqli_query($con, $sqlupdatesq16) or die("error in update customer part:" . mysqli_error($con));
$res7 = mysqli_query($con, $sqlupdatesq17) or die("error in update customer part:" . mysqli_error($con));
$res8 = mysqli_query($con, $sqlupdatesq18) or die("error in update customer part:" . mysqli_error($con));
$res9 = mysqli_query($con, $sqlupdatesq19) or die("error in update customer part:" . mysqli_error($con));
$res10 = mysqli_query($con, $sqlupdatesq110) or die("error in update customer part:" . mysqli_error($con));
$res11 = mysqli_query($con, $sqlupdatesq111) or die("error in update customer part:" . mysqli_error($con));
$res12 = mysqli_query($con, $sqlupdatesq112) or die("error in update customer part:" . mysqli_error($con));
$res13 = mysqli_query($con, $sqlupdatesq113) or die("error in update customer part:" . mysqli_error($con));

        if ($res1 == 1 && $res2 == 1 && $res3 == 1 &&  $res4 == 1 && $res5 == 1 && $res6 == 1 && $res7 == 1 && $res8 == 1 && $res9 == 1 && $res10 == 1 && $res11 == 1 && $res12 == 1 && $res13 == 1  ) 
        {
           
            echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=survey6.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
 <h2>5.	කෘෂි දැනුවත් කිරීම්, ව්යාප්ති සේවා සඳහා වන ප්රවේශය  </h2>
    <div class="container-fluid">Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="widget-header">
                <h4 class="widget-title">
                    <center>5 කෘෂි දැනුවත් කිරීම්, ව්යාප්ති සේවා සඳහා වන ප්රවේශය </center>
                </h4>

            </div>
            <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

            <?php
  
        include('survey5_Content.php');
     ?>
        </form>
    </div>
</div></div>