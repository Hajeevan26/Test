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
        
   
include('query3_2Table1.php');   
include('query3_2Table2.php');   
include('query3_2Table3.php');  
       
        $sqlupdatesq1 = "UPDATE tblsurvey_question SET 3_2_1 ='$a3_2_1', 3_2_2a='$a3_2_2a', 3_2_2b='$a3_2_2b', 3_2_2c='$a3_2_2c', 3_2_2d='$a3_2_2d', 3_2_2e='$a3_2_2e', 3_2_2f='$a3_2_2f', 3_2_2f_oth='$a3_2_2f_oth',  3_2_a_1_1='$a3_2_a_1_1', 3_2_a_1_2='$a3_2_a_1_2', 3_2_a_1_3='$a3_2_a_1_3', 3_2_a_1_4='$a3_2_a_1_4',  3_2_a_3_1='$a3_2_a_3_1', 3_2_a_3_2='$a3_2_a_3_2', 3_2_a_3_3='$a3_2_a_3_3', 3_2_a_3_4='$a3_2_a_3_4', 		   3_2_a_4_1='$a3_2_a_4_1', 3_2_a_4_2='$a3_2_a_4_2', 3_2_a_4_3='$a3_2_a_4_3', 3_2_a_4_4='$a3_2_a_4_4', 	 3_2_a_5_1='$a3_2_a_5_1', 3_2_a_5_2='$a3_2_a_5_2', 3_2_a_5_3='$a3_2_a_5_3', 3_2_a_5_4='$a3_2_a_5_4',  3_2_a_6_1='$a3_2_a_6_1', 3_2_a_6_2='$a3_2_a_6_2', 3_2_a_6_3='$a3_2_a_6_3', 3_2_a_6_4='$a3_2_a_6_4',  3_2_a_7_1_1='$a3_2_a_7_1_1', 3_2_a_7_1_2='$a3_2_a_7_1_2', 3_2_a_7_1_3='$a3_2_a_7_1_3', 3_2_a_7_1_4='$a3_2_a_7_1_4', 3_2_a_7_1_5='$a3_2_a_7_1_5', 3_2_a_7_1_6='$a3_2_a_7_1_6', 3_2_a_7_1_6_oth='$a3_2_a_7_1_6_oth',  3_2_a_7_3_1='$a3_2_a_7_3_1', 3_2_a_7_3_2='$a3_2_a_7_3_2', 3_2_a_7_3_3='$a3_2_a_7_3_3', 3_2_a_7_3_4='$a3_2_a_7_3_4', 3_2_a_7_3_5='$a3_2_a_7_3_5', 3_2_a_7_3_6='$a3_2_a_7_3_6', 3_2_a_7_3_6_oth='$a3_2_a_7_3_6_oth',  3_2_a_7_2_1='$a3_2_a_7_2_1', 3_2_a_7_2_2='$a3_2_a_7_2_2', 3_2_a_7_2_3='$a3_2_a_7_2_3', 3_2_a_7_2_4='$a3_2_a_7_2_4', 3_2_a_7_2_5='$a3_2_a_7_2_5', 3_2_a_7_2_6='$a3_2_a_7_2_6', 3_2_a_7_2_6_oth='$a3_2_a_7_2_6_oth',  3_2_a_7_4_1='$a3_2_a_7_4_1', 3_2_a_7_4_2='$a3_2_a_7_4_2', 3_2_a_7_4_3='$a3_2_a_7_4_3', 3_2_a_7_4_4='$a3_2_a_7_4_4', 3_2_a_7_4_5='$a3_2_a_7_4_5', 3_2_a_7_4_6='$a3_2_a_7_4_6', 3_2_a_7_4_6_oth='$a3_2_a_7_4_6_oth',          3_2_b_1_1='$a3_2_b_1_1',         3_2_b_1_2='$a3_2_b_1_2',         3_2_b_1_3='$a3_2_b_1_3',         3_2_b_1_4='$a3_2_b_1_4', 		3_2_b_3_1='$a3_2_b_3_1',         3_2_b_3_2='$a3_2_b_3_2',         3_2_b_3_3='$a3_2_b_3_3',         3_2_b_3_4='$a3_2_b_3_4', 		3_2_b_4_1='$a3_2_b_4_1',         3_2_b_4_2='$a3_2_b_4_2',         3_2_b_4_3='$a3_2_b_4_3',         3_2_b_4_4='$a3_2_b_4_4', 		3_2_b_5_1='$a3_2_b_5_1',         3_2_b_5_2='$a3_2_b_5_2',         3_2_b_5_3='$a3_2_b_5_3',         3_2_b_5_4='$a3_2_b_5_4', 		3_2_b_6_1='$a3_2_b_6_1',         3_2_b_6_2='$a3_2_b_6_2',         3_2_b_6_3='$a3_2_b_6_3',         3_2_b_6_4='$a3_2_b_6_4', 		3_2_b_7_1_1='$a3_2_b_7_1_1',         3_2_b_7_1_2='$a3_2_b_7_1_2',         3_2_b_7_1_3='$a3_2_b_7_1_3',         3_2_b_7_1_4='$a3_2_b_7_1_4', 		3_2_b_7_1_5='$a3_2_b_7_1_5',         3_2_b_7_1_6='$a3_2_b_7_1_6',         3_2_b_7_1_6_oth='$a3_2_b_7_1_6_oth', 		3_2_b_7_3_1='$a3_2_b_7_3_1',         3_2_b_7_3_2='$a3_2_b_7_3_2',         3_2_b_7_3_3='$a3_2_b_7_3_3',         3_2_b_7_3_4='$a3_2_b_7_3_4', 		3_2_b_7_3_5='$a3_2_b_7_3_5',         3_2_b_7_3_6='$a3_2_b_7_3_6',         3_2_b_7_3_6_oth='$a3_2_b_7_3_6_oth', 		3_2_b_7_2_1='$a3_2_b_7_2_1',         3_2_b_7_2_2='$a3_2_b_7_2_2',         3_2_b_7_2_3='$a3_2_b_7_2_3',         3_2_b_7_2_4='$a3_2_b_7_2_4', 		3_2_b_7_2_5='$a3_2_b_7_2_5',         3_2_b_7_2_6='$a3_2_b_7_2_6',         3_2_b_7_2_6_oth='$a3_2_b_7_2_6_oth', 		3_2_b_7_4_1='$a3_2_b_7_4_1',         3_2_b_7_4_2='$a3_2_b_7_4_2',         3_2_b_7_4_3='$a3_2_b_7_4_3',         3_2_b_7_4_4='$a3_2_b_7_4_4', 		3_2_b_7_4_5='$a3_2_b_7_4_5',         3_2_b_7_4_6='$a3_2_b_7_4_6',         3_2_b_7_4_6_oth='$a3_2_b_7_4_6_oth',  	    3_2_c_1_1='$a3_2_c_1_1',         3_2_c_1_2='$a3_2_c_1_2',         3_2_c_1_3='$a3_2_c_1_3',         3_2_c_1_4='$a3_2_c_1_4', 	 		3_2_c_3_1='$a3_2_c_3_1',         3_2_c_3_2='$a3_2_c_3_2',         3_2_c_3_3='$a3_2_c_3_3',         3_2_c_3_4='$a3_2_c_3_4',  		3_2_c_4_1='$a3_2_c_4_1',         3_2_c_4_2='$a3_2_c_4_2',         3_2_c_4_3='$a3_2_c_4_3',         3_2_c_4_4='$a3_2_c_4_4', 	 		3_2_c_5_1='$a3_2_c_5_1',         3_2_c_5_2='$a3_2_c_5_2',         3_2_c_5_3='$a3_2_c_5_3',         3_2_c_5_4='$a3_2_c_5_4', 		 		3_2_c_6_1='$a3_2_c_6_1',         3_2_c_6_2='$a3_2_c_6_2',         3_2_c_6_3='$a3_2_c_6_3',         3_2_c_6_4='$a3_2_c_6_4',  		3_2_c_7_1_1='$a3_2_c_7_1_1',         3_2_c_7_1_2='$a3_2_c_7_1_2',         3_2_c_7_1_3='$a3_2_c_7_1_3',         3_2_c_7_1_4='$a3_2_c_7_1_4', 		3_2_c_7_1_5='$a3_2_c_7_1_5',         3_2_c_7_1_6='$a3_2_c_7_1_6',         3_2_c_7_1_6_oth='$a3_2_c_7_1_6_oth',  		3_2_c_7_3_1='$a3_2_c_7_3_1',         3_2_c_7_3_2='$a3_2_c_7_3_2',         3_2_c_7_3_3='$a3_2_c_7_3_3',         3_2_c_7_3_4='$a3_2_c_7_3_4', 		3_2_c_7_3_5='$a3_2_c_7_3_5',         3_2_c_7_3_6='$a3_2_c_7_3_6',         3_2_c_7_3_6_oth='$a3_2_c_7_3_6_oth',  		3_2_c_7_2_1='$a3_2_c_7_2_1',         3_2_c_7_2_2='$a3_2_c_7_2_2',         3_2_c_7_2_3='$a3_2_c_7_2_3',         3_2_c_7_2_4='$a3_2_c_7_2_4', 		3_2_c_7_2_5='$a3_2_c_7_2_5',         3_2_c_7_2_6='$a3_2_c_7_2_6',         3_2_c_7_2_6_oth='$a3_2_c_7_2_6_oth',  		3_2_c_7_4_1='$a3_2_c_7_4_1',         3_2_c_7_4_2='$a3_2_c_7_4_2',         3_2_c_7_4_3='$a3_2_c_7_4_3',         3_2_c_7_4_4='$a3_2_c_7_4_4', 		3_2_c_7_4_5='$a3_2_c_7_4_5',         3_2_c_7_4_6='$a3_2_c_7_4_6',         3_2_c_7_4_6_oth='$a3_2_c_7_4_6_oth',          3_2_d_1_1='$a3_2_d_1_1',         3_2_d_1_2='$a3_2_d_1_2',         3_2_d_1_3='$a3_2_d_1_3',         3_2_d_1_4='$a3_2_d_1_4', 			 		3_2_d_3_1='$a3_2_d_3_1',         3_2_d_3_2='$a3_2_d_3_2',         3_2_d_3_3='$a3_2_d_3_3',         3_2_d_3_4='$a3_2_d_3_4', 		 		3_2_d_4_1='$a3_2_d_4_1',         3_2_d_4_2='$a3_2_d_4_2',         3_2_d_4_3='$a3_2_d_4_3',         3_2_d_4_4='$a3_2_d_4_4', 			 		3_2_d_5_1='$a3_2_d_5_1',         3_2_d_5_2='$a3_2_d_5_2',         3_2_d_5_3='$a3_2_d_5_3',         3_2_d_5_4='$a3_2_d_5_4', 			 		3_2_d_6_1='$a3_2_d_6_1',         3_2_d_6_2='$a3_2_d_6_2',         3_2_d_6_3='$a3_2_d_6_3',         3_2_d_6_4='$a3_2_d_6_4',  		3_2_d_7_1_1='$a3_2_d_7_1_1',         3_2_d_7_1_2='$a3_2_d_7_1_2',         3_2_d_7_1_3='$a3_2_d_7_1_3',         3_2_d_7_1_4='$a3_2_d_7_1_4', 		3_2_d_7_1_5='$a3_2_d_7_1_5',         3_2_d_7_1_6='$a3_2_d_7_1_6', 		 		3_2_d_7_3_1='$a3_2_d_7_3_1',         3_2_d_7_3_2='$a3_2_d_7_3_2',         3_2_d_7_3_3='$a3_2_d_7_3_3',         3_2_d_7_3_4='$a3_2_d_7_3_4', 		3_2_d_7_3_5='$a3_2_d_7_3_5',         3_2_d_7_3_6='$a3_2_d_7_3_6', 		 		3_2_d_7_2_1='$a3_2_d_7_2_1',         3_2_d_7_2_2='$a3_2_d_7_2_2',         3_2_d_7_2_3='$a3_2_d_7_2_3',         3_2_d_7_2_4='$a3_2_d_7_2_4', 		3_2_d_7_2_5='$a3_2_d_7_2_5',         3_2_d_7_2_6='$a3_2_d_7_2_6',  		3_2_d_7_4_1='$a3_2_d_7_4_1',         3_2_d_7_4_2='$a3_2_d_7_4_2',         3_2_d_7_4_3='$a3_2_d_7_4_3',         3_2_d_7_4_4='$a3_2_d_7_4_4', 		3_2_d_7_4_5='$a3_2_d_7_4_5',         3_2_d_7_4_6='$a3_2_d_7_4_6', 		 		3_2_d_7_1_6_oth='$a3_2_d_7_1_6_oth', 		3_2_d_7_3_6_oth='$a3_2_d_7_3_6_oth', 		3_2_d_7_2_6_oth='$a3_2_d_7_2_6_oth',         3_2_d_7_4_6_oth='$a3_2_d_7_4_6_oth'  where household_id= '$household_id' "; 		 		 		
       $sqlupdatesq2 = "UPDATE tblsurvey_question SET  3_2_a_8_1='$a3_2_a_8_1',         3_2_a_8_2='$a3_2_a_8_2',         3_2_a_8_3='$a3_2_a_8_3',         3_2_a_8_4='$a3_2_a_8_4', 	 		3_2_a_9_1='$a3_2_a_9_1',         3_2_a_9_2='$a3_2_a_9_2',         3_2_a_9_3='$a3_2_a_9_3',         3_2_a_9_4='$a3_2_a_9_4',  		3_2_a_10_1='$a3_2_a_10_1',         3_2_a_10_2='$a3_2_a_10_2',         3_2_a_10_3='$a3_2_a_10_3',         3_2_a_10_4='$a3_2_a_10_4', 	 		3_2_a_11_1='$a3_2_a_11_1',         3_2_a_11_2='$a3_2_a_11_2',         3_2_a_11_3='$a3_2_a_11_3',         3_2_a_11_4='$a3_2_a_11_4',  		3_2_a_12_1='$a3_2_a_12_1',         3_2_a_12_2='$a3_2_a_12_2',         3_2_a_12_3='$a3_2_a_12_3',         3_2_a_12_4='$a3_2_a_12_4',  		3_2_a_13_1_1='$a3_2_a_13_1_1',         3_2_a_13_1_2='$a3_2_a_13_1_2',         3_2_a_13_1_3='$a3_2_a_13_1_3',         3_2_a_13_1_4='$a3_2_a_13_1_4', 		3_2_a_13_1_5='$a3_2_a_13_1_5',         3_2_a_13_1_6='$a3_2_a_13_1_6',         3_2_a_13_1_6_oth='$a3_2_a_13_1_6_oth',  		3_2_a_13_3_1='$a3_2_a_13_3_1',         3_2_a_13_3_2='$a3_2_a_13_3_2',         3_2_a_13_3_3='$a3_2_a_13_3_3',         3_2_a_13_3_4='$a3_2_a_13_3_4', 		3_2_a_13_3_5='$a3_2_a_13_3_5',         3_2_a_13_3_6='$a3_2_a_13_3_6',         3_2_a_13_3_6_oth='$a3_2_a_13_3_6_oth',  		3_2_a_13_2_1='$a3_2_a_13_2_1',         3_2_a_13_2_2='$a3_2_a_13_2_2',         3_2_a_13_2_3='$a3_2_a_13_2_3',         3_2_a_13_2_4='$a3_2_a_13_2_4', 		3_2_a_13_2_5='$a3_2_a_13_2_5',         3_2_a_13_2_6='$a3_2_a_13_2_6',         3_2_a_13_2_6_oth='$a3_2_a_13_2_6_oth',  		3_2_a_13_4_1='$a3_2_a_13_4_1',         3_2_a_13_4_2='$a3_2_a_13_4_2',         3_2_a_13_4_3='$a3_2_a_13_4_3',         3_2_a_13_4_4='$a3_2_a_13_4_4', 		3_2_a_13_4_5='$a3_2_a_13_4_5',         3_2_a_13_4_6='$a3_2_a_13_4_6',         3_2_a_13_4_6_oth='$a3_2_a_13_4_6_oth',  		3_2_b_8_1='$a3_2_b_8_1',         3_2_b_8_2='$a3_2_b_8_2',         3_2_b_8_3='$a3_2_b_8_3',         3_2_b_8_4='$a3_2_b_8_4', 		 		3_2_b_9_1='$a3_2_b_9_1',         3_2_b_9_2='$a3_2_b_9_2',         3_2_b_9_3='$a3_2_b_9_3',         3_2_b_9_4='$a3_2_b_9_4',  		3_2_b_10_1='$a3_2_b_10_1',         3_2_b_10_2='$a3_2_b_10_2',         3_2_b_10_3='$a3_2_b_10_3',         3_2_b_10_4='$a3_2_b_10_4', 			 		3_2_b_11_1='$a3_2_b_11_1',         3_2_b_11_2='$a3_2_b_11_2',         3_2_b_11_3='$a3_2_b_11_3',         3_2_b_11_4='$a3_2_b_11_4', 			 		3_2_b_12_1='$a3_2_b_12_1',         3_2_b_12_2='$a3_2_b_12_2',         3_2_b_12_3='$a3_2_b_12_3',         3_2_b_12_4='$a3_2_b_12_4',  		3_2_b_13_1_1='$a3_2_b_13_1_1',         3_2_b_13_1_2='$a3_2_b_13_1_2',         3_2_b_13_1_3='$a3_2_b_13_1_3',         3_2_b_13_1_4='$a3_2_b_13_1_4', 		3_2_b_13_1_5='$a3_2_b_13_1_5',         3_2_b_13_1_6='$a3_2_b_13_1_6',         3_2_b_13_1_6_oth='$a3_2_b_13_1_6_oth',  		3_2_b_13_3_1='$a3_2_b_13_3_1',         3_2_b_13_3_2='$a3_2_b_13_3_2',         3_2_b_13_3_3='$a3_2_b_13_3_3',         3_2_b_13_3_4='$a3_2_b_13_3_4', 		3_2_b_13_3_5='$a3_2_b_13_3_5',         3_2_b_13_3_6='$a3_2_b_13_3_6',         3_2_b_13_3_6_oth='$a3_2_b_13_3_6_oth',  		3_2_b_13_2_1='$a3_2_b_13_2_1',         3_2_b_13_2_2='$a3_2_b_13_2_2',         3_2_b_13_2_3='$a3_2_b_13_2_3',         3_2_b_13_2_4='$a3_2_b_13_2_4', 		3_2_b_13_2_5='$a3_2_b_13_2_5',         3_2_b_13_2_6='$a3_2_b_13_2_6',         3_2_b_13_2_6_oth='$a3_2_b_13_2_6_oth',  		3_2_b_13_4_1='$a3_2_b_13_4_1',         3_2_b_13_4_2='$a3_2_b_13_4_2',         3_2_b_13_4_3='$a3_2_b_13_4_3',         3_2_b_13_4_4='$a3_2_b_13_4_4', 		3_2_b_13_4_5='$a3_2_b_13_4_5',         3_2_b_13_4_6='$a3_2_b_13_4_6',         3_2_b_13_4_6_oth='$a3_2_b_13_4_6_oth', 		  		3_2_c_8_1='$a3_2_c_8_1',         3_2_c_8_2='$a3_2_c_8_2',         3_2_c_8_3='$a3_2_c_8_3',         3_2_c_8_4='$a3_2_c_8_4',  		3_2_c_9_1='$a3_2_c_9_1',         3_2_c_9_2='$a3_2_c_9_2',         3_2_c_9_3='$a3_2_c_9_3',         3_2_c_9_4='$a3_2_c_9_4',  		3_2_c_10_1='$a3_2_c_10_1',         3_2_c_10_2='$a3_2_c_10_2',         3_2_c_10_3='$a3_2_c_10_3',         3_2_c_10_4='$a3_2_c_10_4', 		 		3_2_c_11_1='$a3_2_c_11_1',         3_2_c_11_2='$a3_2_c_11_2',         3_2_c_11_3='$a3_2_c_11_3',         3_2_c_11_4='$a3_2_c_11_4', 		 		3_2_c_12_1='$a3_2_c_12_1',         3_2_c_12_2='$a3_2_c_12_2',         3_2_c_12_3='$a3_2_c_12_3',         3_2_c_12_4='$a3_2_c_12_4',  		3_2_c_13_1_1='$a3_2_c_13_1_1',         3_2_c_13_1_2='$a3_2_c_13_1_2',         3_2_c_13_1_3='$a3_2_c_13_1_3',         3_2_c_13_1_4='$a3_2_c_13_1_4', 		3_2_c_13_1_5='$a3_2_c_13_1_5',         3_2_c_13_1_6='$a3_2_c_13_1_6',         3_2_c_13_1_6_oth='$a3_2_c_13_1_6_oth',  		3_2_c_13_3_1='$a3_2_c_13_3_1',         3_2_c_13_3_2='$a3_2_c_13_3_2',         3_2_c_13_3_3='$a3_2_c_13_3_3',         3_2_c_13_3_4='$a3_2_c_13_3_4', 		3_2_c_13_3_5='$a3_2_c_13_3_5',         3_2_c_13_3_6='$a3_2_c_13_3_6',         3_2_c_13_3_6_oth='$a3_2_c_13_3_6_oth',  		3_2_c_13_2_1='$a3_2_c_13_2_1',         3_2_c_13_2_2='$a3_2_c_13_2_2',         3_2_c_13_2_3='$a3_2_c_13_2_3',         3_2_c_13_2_4='$a3_2_c_13_2_4', 		3_2_c_13_2_5='$a3_2_c_13_2_5',         3_2_c_13_2_6='$a3_2_c_13_2_6',         3_2_c_13_2_6_oth='$a3_2_c_13_2_6_oth',  		3_2_c_13_4_1='$a3_2_c_13_4_1',         3_2_c_13_4_2='$a3_2_c_13_4_2',         3_2_c_13_4_3='$a3_2_c_13_4_3',         3_2_c_13_4_4='$a3_2_c_13_4_4', 		3_2_c_13_4_5='$a3_2_c_13_4_5',         3_2_c_13_4_6='$a3_2_c_13_4_6',         3_2_c_13_4_6_oth='$a3_2_c_13_4_6_oth',  		3_2_d_8_1='$a3_2_d_8_1',         3_2_d_8_2='$a3_2_d_8_2',         3_2_d_8_3='$a3_2_d_8_3',         3_2_d_8_4='$a3_2_d_8_4', 	 		3_2_d_9_1='$a3_2_d_9_1',         3_2_d_9_2='$a3_2_d_9_2',         3_2_d_9_3='$a3_2_d_9_3',         3_2_d_9_4='$a3_2_d_9_4',  		3_2_d_10_1='$a3_2_d_10_1',         3_2_d_10_2='$a3_2_d_10_2',         3_2_d_10_3='$a3_2_d_10_3',         3_2_d_10_4='$a3_2_d_10_4', 		 		3_2_d_11_1='$a3_2_d_11_1',         3_2_d_11_2='$a3_2_d_11_2',         3_2_d_11_3='$a3_2_d_11_3',         3_2_d_11_4='$a3_2_d_11_4', 	 		3_2_d_12_1='$a3_2_d_12_1',         3_2_d_12_2='$a3_2_d_12_2',         3_2_d_12_3='$a3_2_d_12_3',         3_2_d_12_4='$a3_2_d_12_4',  		3_2_d_13_1_1='$a3_2_d_13_1_1',         3_2_d_13_1_2='$a3_2_d_13_1_2',         3_2_d_13_1_3='$a3_2_d_13_1_3',         3_2_d_13_1_4='$a3_2_d_13_1_4', 		3_2_d_13_1_5='$a3_2_d_13_1_5',         3_2_d_13_1_6='$a3_2_d_13_1_6',         3_2_d_13_1_6_oth='$a3_2_d_13_1_6_oth',  		3_2_d_13_3_1='$a3_2_d_13_3_1',         3_2_d_13_3_2='$a3_2_d_13_3_2',         3_2_d_13_3_3='$a3_2_d_13_3_3',         3_2_d_13_3_4='$a3_2_d_13_3_4', 		3_2_d_13_3_5='$a3_2_d_13_3_5',         3_2_d_13_3_6='$a3_2_d_13_3_6',         3_2_d_13_3_6_oth='$a3_2_d_13_3_6_oth',  		3_2_d_13_2_1='$a3_2_d_13_2_1',         3_2_d_13_2_2='$a3_2_d_13_2_2',         3_2_d_13_2_3='$a3_2_d_13_2_3',         3_2_d_13_2_4='$a3_2_d_13_2_4', 		3_2_d_13_2_5='$a3_2_d_13_2_5',         3_2_d_13_2_6='$a3_2_d_13_2_6',         3_2_d_13_2_6_oth='$a3_2_d_13_2_6_oth',  		3_2_d_13_4_1='$a3_2_d_13_4_1',         3_2_d_13_4_2='$a3_2_d_13_4_2',         3_2_d_13_4_3='$a3_2_d_13_4_3',         3_2_d_13_4_4='$a3_2_d_13_4_4', 		3_2_d_13_4_5='$a3_2_d_13_4_5',         3_2_d_13_4_6='$a3_2_d_13_4_6',         3_2_d_13_4_6_oth='$a3_2_d_13_4_6_oth'  where household_id= '$household_id' "; 		
       $sqlupdatesq3 = "UPDATE tblsurvey_question SET 3_3_1_a='$a3_3_1_a', 3_3_1_b='$a3_3_1_b', 3_3_1_c='$a3_3_1_c', 3_3_1_d='$a3_3_1_d', 3_3_1_e='$a3_3_1_e', 3_3_1_f='$a3_3_1_f', 3_3_1_f_oth='$a3_3_1_f_oth',  3_2_8_1='$a3_2_8_1', 3_2_8_2='$a3_2_8_2', 3_2_8_3='$a3_2_8_3',  3_2_8_1='$a3_2_8_1', 3_2_8_2='$a3_2_8_2', 3_2_8_3='$a3_2_8_3',3_3_3_1='$a3_3_3_1',3_3_3_2='$a3_3_3_2',3_3_3_3='$a3_3_3_3', 3_4_1a='$a3_4_1a',3_4_1b='$a3_4_1b', 3_4_1c='$a3_4_1c',3_4_1d='$a3_4_1d',3_4_2_1='$a3_4_2_1',3_4_2_2='$a3_4_2_2',3_4_2_3='$a3_4_2_3',3_4_2_4='$a3_4_2_4',3_4_2_5='$a3_4_2_5',3_4_2_6='$a3_4_2_6', 3_5_1_a='$a3_5_1_a', 3_5_2_a='$a3_5_2_a', 3_5_1_b='$a3_5_1_b', 3_5_2_b='$a3_5_2_b', 3_5_3='$a3_5_3',  3_6_1='$a3_6_1', 3_6_2='$a3_6_2', 3_6_3a='$a3_6_3a', 3_6_3b='$a3_6_3b', 3_6_3c='$a3_6_3c', 3_6_3d='$a3_6_3d', 3_6_3d_oth='$a3_6_3d_oth', 3_6_4_1='$a3_6_4_1', 3_6_4_2='$a3_6_4_2', 3_6_4_3='$a3_6_4_3' where household_id= '$household_id' "; 
       $resultupdatecustomer1 = mysqli_query($con, $sqlupdatesq1) or die("error in update customer part:" . mysqli_error($con));
        $resultupdatecustomer2 = mysqli_query($con, $sqlupdatesq2) or die("error in update customer part:" . mysqli_error($con));
        $resultupdatecustomer3 = mysqli_query($con, $sqlupdatesq3) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer1 == 1 && $resultupdatecustomer2 == 1 && $resultupdatecustomer3 == 1 ) 
        {
           
            echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=survey3_6.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <div class="container-fluid">
        <h2>3. ?????? ????????? ????????????????????? </h2>
        Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="card card-primary">
                <div class="card-header">
                    3.2. ???????????? ??????????????? ??????????????????
                </div>

                <div class="card-body">
                    <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <label>3.2.1 ?????? ????????? ?????? ??????????????? ???????????? ??????????????? ??????????????? ????????????? </label>
                            <div class="input-group">
                                <select class="form-control" name="3_2_1" id="3_2_1" onchange="funb3_2_1()">
                                    <option value="1">?????????</option>
                                    <option value="2">?????????</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="divid3_2_1">

                    </div>
                    <div class="row">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th rowspan="4">3.2.8. ????????????????????? ?????????????????? ????????? ???????????? ????????????????????? (??????????????? ????????????????????? ?????????????????????)

                                </th>
                                <th>???????????????</th>
                                <th>?????????????????????</th>
                            </tr>
                            <tr>
                                <td> ????????????????????? ????????????????????? ??????????????????????????? ???????????? ???????????????</td>
                                <td>
                                    <div>3_2_8_1<input type="text" name="3_2_8_1" id="3_2_8_1" value="0" required
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>??????????????? ???????????? ???????????????????????? ???????????? ?????????????????????</td>
                                <td>
                                    <div>3_2_8_2 <input type="text" name="3_2_8_2" id="3_2_8_2" value="0" required
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>??????????????? ??????????????????</td>
                                <td>
                                    <div>3_2_8_3<input type="text" name="3_2_8_3" id="3_2_8_3" value="0" required
                                            class="form-control" />
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
                        <table class="table table-bordered table-hover">

                            <tr>
                                <th> ???????????? ??????????????? ??????????????? 2020/21</th>
                                <th>3.2.9.?????????????????? (Kg/L) </th>
                                <th>3.2.10.???????????? ?????? ???????????????????????? (???????????????)</th>
                                <th>3.2.11.?????????????????? ????????? (??????./????????????)</th>
                                <th>3.2.12.???????????? ????????????????????? (??????.</th>
                                <th colspan="2">3.2.13.??????????????????????????? (????????????????????? ????????? ????????? ?????????????????? ???????????????)</th>
                            </tr>
                            <tr>
                                <td>
                                    <div>????????????????????? </div>
                                    <div>3_2_a_8_1<input type="text" name="3_2_a_8_1" id="3_2_a_8_1"
                                            class="form-control" /></div>
                                    <div>3_2_a_8_2<input type="text" name="3_2_a_8_2" id="3_2_a_8_2"
                                            class="form-control" /></div>
                                    <div>3_2_a_8_3<input type="text" name="3_2_a_8_3" id="3_2_a_8_3"
                                            class="form-control" /></div>
                                    <div>3_2_a_8_4<input type="text" name="3_2_a_8_4" id="3_2_a_8_4"
                                            class="form-control" /></div>
                                </td>
                                <td>
                                    <div>KG</div>
                                    <div>3_2_a_9_1<input type="text" name="3_2_a_9_1" id="3_2_a_9_1"
                                            onkeyup="fnmulty('3_2_a_9_1','3_2_a_11_1','3_2_a_12_1');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_a_9_2<input type="text" name="3_2_a_9_2" id="3_2_a_9_2"
                                            onkeyup="fnmulty('3_2_a_9_2','3_2_a_11_2','3_2_a_12_2');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_a_9_3<input type="text" name="3_2_a_9_3" id="3_2_a_9_3"
                                            onkeyup="fnmulty('3_2_a_9_3','3_2_a_11_3','3_2_a_12_3');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_a_9_4<input type="text" name="3_2_a_9_4" id="3_2_a_9_4"
                                            onkeyup="fnmulty('3_2_a_9_4','3_2_a_11_4','3_2_a_12_4');" value="0" required
                                            class="form-control" /></div>
                                </td>
                                <td>
                                    <div>Acres</div>
                                    <div>3_2_a_10_1<input type="text" name="3_2_a_10_1" id="3_2_a_10_1" value="0"
                                            required class="form-control" /></div>
                                    <div>3_2_a_10_2<input type="text" name="3_2_a_10_2" id="3_2_a_10_2" value="0"
                                            required class="form-control" /></div>
                                    <div>3_2_a_10_3<input type="text" name="3_2_a_10_3" id="3_2_a_10_3" value="0"
                                            required class="form-control" /></div>
                                    <div>3_2_a_10_4<input type="text" name="3_2_a_10_4" id="3_2_a_10_4" value="0"
                                            required class="form-control" /></div>
                                </td>
                                <td>
                                    <div>Rs/Kg</div>
                                    <div>3_2_a_11_1<input type="text" name="3_2_a_11_1" id="3_2_a_11_1"
                                            onkeyup="fnmulty('3_2_a_9_1','3_2_a_11_1','3_2_a_12_1');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_a_11_2<input type="text" name="3_2_a_11_2" id="3_2_a_11_2"
                                            onkeyup="fnmulty('3_2_a_9_2','3_2_a_11_2','3_2_a_12_2');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_a_11_3<input type="text" name="3_2_a_11_3" id="3_2_a_11_3"
                                            onkeyup="fnmulty('3_2_a_9_3','3_2_a_11_3','3_2_a_12_3');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_a_11_4<input type="text" name="3_2_a_11_4" id="3_2_a_11_4"
                                            onkeyup="fnmulty('3_2_a_9_4','3_2_a_11_4','3_2_a_12_4');" value="0" required
                                            class="form-control" /></div>
                                </td>
                                <td>
                                    <div>Rs/Kg</div>
                                    <div>3_2_a_12_1<input type="text" name="3_2_a_12_1" id="3_2_a_12_1" readonly
                                            value="0" class="form-control" /></div>
                                    <div>3_2_a_12_2<input type="text" name="3_2_a_12_2" id="3_2_a_12_2" readonly
                                            value="0" class="form-control" /></div>
                                    <div>3_2_a_12_3<input type="text" name="3_2_a_12_3" id="3_2_a_12_3" readonly
                                            value="0" class="form-control" /></div>
                                    <div>3_2_a_12_4<input type="text" name="3_2_a_12_4" id="3_2_a_12_4" readonly
                                            value="0" class="form-control" /></div>
                                </td>
                                <td>
                                    <div class="form-group">1
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_1_1"
                                                    id="3_2_a_13_1_1" value="1"> ?????????????????? ?????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_1_2"
                                                    id="3_2_a_13_1_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                        </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_1_3"
                                                    id="3_2_a_13_1_3" value="3"> ???????????? ??????????????????r</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_1_4"
                                                    id="3_2_a_13_1_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_1_5"
                                                    id="3_2_a_13_1_5" value="5"> ??????????????????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_1_6"
                                                    id="3_2_a_13_1_6" value="6"
                                                    onclick="eDcheckOT('3_2_a_13_1_6','3_2_a_13_1_6_oth')">???????????????, ???????????????
                                                ???????????????</label> </div>

                                        <div>3_2_a_13_1_6_oth <input type="text" name="3_2_a_13_1_6_oth"
                                                id="3_2_a_13_1_6_oth" class="form-control" /> </div>
                                        <hr>
                                        <div class="form-group">3
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_1"
                                                        id="3_2_a_13_3_1" value="1">?????????????????? ?????????????????????</label></div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_2"
                                                        id="3_2_a_13_3_2" value="2">?????????????????? ????????????????????? ?????????????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_3"
                                                        id="3_2_a_13_3_3" value="3">???????????? ??????????????????r</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_4"
                                                        id="3_2_a_13_3_4" value="4">???????????? ??????????????? ?????? ????????????????????????</label></div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_5"
                                                        id="3_2_a_13_3_5" value="5">??????????????????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_6"
                                                        id="3_2_a_13_3_6" value="6"
                                                        onclick="eDcheckOT('3_2_a_13_3_6','3_2_a_13_3_6_oth')">???????????????,
                                                    ??????????????? ???????????????</label> </div>

                                            <div>3_2_a_13_3_6_oth <input type="text" name="3_2_a_13_3_6_oth"
                                                    id="3_2_a_13_3_6_oth" class="form-control" /> </div>


                                </td>
                                <td>
                                    <div class="form-group">2
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_2_1"
                                                    id="3_2_a_13_2_1" value="1"> ?????????????????? ?????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_2_2"
                                                    id="3_2_a_13_2_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                        </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_2_3"
                                                    id="3_2_a_13_2_3" value="3"> ???????????? ??????????????????r</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_2_4"
                                                    id="3_2_a_13_2_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_2_5"
                                                    id="3_2_a_13_2_5" value="5"> ??????????????????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_2_6"
                                                    id="3_2_a_13_2_6" value="6"
                                                    onclick="eDcheckOT('3_2_a_13_2_6','3_2_a_13_2_6_oth')"> ???????????????, ???????????????
                                                ???????????????</label> </div>

                                        <div>3_2_a_13_2_6_oth <input type="text" name="3_2_a_13_2_6_oth"
                                                id="3_2_a_13_2_6_oth" class="form-control" /> </div>
                                        <hr>
                                        <div class="form-group">4
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_4_1"
                                                        id="3_2_a_13_4_1" value="1">?????????????????? ?????????????????????</label></div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_4_2"
                                                        id="3_2_a_13_4_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_4_3"
                                                        id="3_2_a_13_4_3" value="3">???????????? ??????????????????r</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_4_4"
                                                        id="3_2_a_13_4_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_4_5"
                                                        id="3_2_a_13_4_5" value="5">??????????????????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_13_4_6"
                                                        id="3_2_a_13_4_6" value="6"
                                                        onclick="eDcheckOT('3_2_a_13_4_6','3_2_a_13_4_6_oth')">???????????????,
                                                    ??????????????? ???????????????</label> </div>
                                            <div>3_2_a_13_4_6_oth <input type="text" name="3_2_a_13_4_6_oth"
                                                    id="3_2_a_13_4_6_oth" class="form-control" /> </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div>?????????????????????????????? </div>
                                    <div>3_2_b_8_1<input type="text" name="3_2_b_8_1" id="3_2_b_8_1"
                                            class="form-control" /></div>
                                    <div>3_2_b_8_2<input type="text" name="3_2_b_8_2" id="3_2_b_8_2"
                                            class="form-control" /></div>
                                    <div>3_2_b_8_3<input type="text" name="3_2_b_8_3" id="3_2_b_8_3"
                                            class="form-control" /></div>
                                    <div>3_2_b_8_4<input type="text" name="3_2_b_8_4" id="3_2_b_8_4"
                                            class="form-control" /></div>
                                </td>
                                <td>
                                    <div>3_2_b_9_1<input type="text" name="3_2_b_9_1" id="3_2_b_9_1"
                                            onkeyup="fnmulty('3_2_b_9_1','3_2_b_11_1','3_2_b_12_1');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_b_9_2<input type="text" name="3_2_b_9_2" id="3_2_b_9_2"
                                            onkeyup="fnmulty('3_2_b_9_2','3_2_b_11_2','3_2_b_12_2');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_b_9_3<input type="text" name="3_2_b_9_3" id="3_2_b_9_3"
                                            onkeyup="fnmulty('3_2_b_9_3','3_2_b_11_3','3_2_b_12_3');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_b_9_4<input type="text" name="3_2_b_9_4" id="3_2_b_9_4"
                                            onkeyup="fnmulty('3_2_b_9_4','3_2_b_11_4','3_2_b_12_4');" value="0" required
                                            class="form-control" /></div>
                                </td>
                                <td>
                                    <div>3_2_b_10_1<input type="text" name="3_2_b_10_1" id="3_2_b_10_1" value="0"
                                            required class="form-control" /></div>
                                    <div>3_2_b_10_2<input type="text" name="3_2_b_10_2" id="3_2_b_10_2" value="0"
                                            required class="form-control" /></div>
                                    <div>3_2_b_10_3<input type="text" name="3_2_b_10_3" id="3_2_b_10_3" value="0"
                                            required class="form-control" /></div>
                                    <div>3_2_b_10_4<input type="text" name="3_2_b_10_4" id="3_2_b_10_4" value="0"
                                            required class="form-control" /></div>
                                </td>
                                <td>
                                    <div>3_2_b_11_1<input type="text" name="3_2_b_11_1" id="3_2_b_11_1"
                                            onkeyup="fnmulty('3_2_b_9_1','3_2_b_11_1','3_2_b_12_1');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_b_11_2<input type="text" name="3_2_b_11_2" id="3_2_b_11_2"
                                            onkeyup="fnmulty('3_2_b_9_2','3_2_b_11_2','3_2_b_12_2');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_b_11_3<input type="text" name="3_2_b_11_3" id="3_2_b_11_3"
                                            onkeyup="fnmulty('3_2_b_9_3','3_2_b_11_3','3_2_b_12_3');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_b_11_4<input type="text" name="3_2_b_11_4" id="3_2_b_11_4"
                                            onkeyup="fnmulty('3_2_b_9_4','3_2_b_11_4','3_2_b_12_4');" value="0" required
                                            class="form-control" /></div>
                                </td>
                                <td>
                                    <div>3_2_b_12_1<input type="text" name="3_2_b_12_1" id="3_2_b_12_1" readonly
                                            value="0" class="form-control" /></div>
                                    <div>3_2_b_12_2<input type="text" name="3_2_b_12_2" id="3_2_b_12_2" readonly
                                            value="0" class="form-control" /></div>
                                    <div>3_2_b_12_3<input type="text" name="3_2_b_12_3" id="3_2_b_12_3" readonly
                                            value="0" class="form-control" /></div>
                                    <div>3_2_b_12_4<input type="text" name="3_2_b_12_4" id="3_2_b_12_4" readonly
                                            value="0" class="form-control" /></div>
                                </td>
                                <td>
                                    <div class="form-group">1
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_1"
                                                    id="3_2_b_13_1_1" value="1">?????????????????? ?????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_2"
                                                    id="3_2_b_13_1_2" value="2">?????????????????? ????????????????????? ?????????????????????????????????</label>
                                        </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_3"
                                                    id="3_2_b_13_1_3" value="3">???????????? ??????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_4"
                                                    id="3_2_b_13_1_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_5"
                                                    id="3_2_b_13_1_5" value="5">??????????????????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_6"
                                                    id="3_2_b_13_1_6" value="6"
                                                    onclick="eDcheckOT('3_2_b_13_1_6','3_2_b_13_1_6_oth')"> ???????????????, ???????????????
                                                ???????????????</label> </div>

                                        <div>3_2_b_13_1_6_oth <input type="text" name="3_2_b_13_1_6_oth"
                                                id="3_2_b_13_1_6_oth" class="form-control" /> </div>
                                        <hr>
                                        <div class="form-group">3
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_1"
                                                        id="3_2_b_13_3_1" value="1"> ?????????????????? ?????????????????????</label></div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_2"
                                                        id="3_2_b_13_3_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_3"
                                                        id="3_2_b_13_3_3" value="3"> ???????????? ??????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_4"
                                                        id="3_2_b_13_3_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_5"
                                                        id="3_2_b_13_3_5" value="5"> ??????????????????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_6"
                                                        id="3_2_b_13_3_6" value="6"
                                                        onclick="eDcheckOT('3_2_b_13_3_6','3_2_b_13_3_6_oth')"> ???????????????,
                                                    ??????????????? ???????????????</label> </div>

                                            <div>3_2_b_13_3_6_oth <input type="text" name="3_2_b_13_3_6_oth"
                                                    id="3_2_b_13_3_6_oth" class="form-control" /> </div>


                                </td>
                                <td>
                                    <div class="form-group">2
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_1"
                                                    id="3_2_b_13_2_1" value="1"> ?????????????????? ?????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_2"
                                                    id="3_2_b_13_2_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                        </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_3"
                                                    id="3_2_b_13_2_3" value="3"> ???????????? ??????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_4"
                                                    id="3_2_b_13_2_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_5"
                                                    id="3_2_b_13_2_5" value="5"> ??????????????????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_6"
                                                    id="3_2_b_13_2_6" value="6"
                                                    onclick="eDcheckOT('3_2_b_13_2_6','3_2_b_13_2_6_oth')">???????????????, ???????????????
                                                ???????????????</label> </div>

                                        <div>3_2_b_13_2_6_oth <input type="text" name="3_2_b_13_2_6_oth"
                                                id="3_2_b_13_2_6_oth" class="form-control" /> </div>
                                        <hr>
                                        <div class="form-group">4
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_4_1"
                                                        id="3_2_b_13_4_1" value="1"> ?????????????????? ?????????????????????</label></div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_4_2"
                                                        id="3_2_b_13_4_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_4_3"
                                                        id="3_2_b_13_4_3" value="3"> ???????????? ??????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_4_4"
                                                        id="3_2_b_13_4_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_4_5"
                                                        id="3_2_b_13_4_5" value="5"> ??????????????????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_13_4_6"
                                                        id="3_2_b_13_4_6" value="6"
                                                        onclick="eDcheckOT('3_2_b_13_4_6','3_2_b_13_4_6_oth')"> ???????????????,
                                                    ??????????????? ???????????????</label> </div>
                                            <div>3_2_b_13_4_6_oth <input type="text" name="3_2_b_13_4_6_oth"
                                                    id="3_2_b_13_4_6_oth" class="form-control" /> </div>
                                </td>
                            </tr>

                            <tr>
                                <!-- c start -->
                                <td>
                                    <div>????????????????????????</div>
                                    <div>3_2_c_8_1<input type="text" name="3_2_c_8_1" id="3_2_c_8_1"
                                            class="form-control" /></div>
                                    <div>3_2_c_8_2<input type="text" name="3_2_c_8_2" id="3_2_c_8_2"
                                            class="form-control" /></div>
                                    <div>3_2_c_8_3<input type="text" name="3_2_c_8_3" id="3_2_c_8_3"
                                            class="form-control" /></div>
                                    <div>3_2_c_8_4<input type="text" name="3_2_c_8_4" id="3_2_c_8_4"
                                            class="form-control" /></div>
                                </td>
                                <td>
                                    <div>3_2_c_9_1<input type="text" name="3_2_c_9_1" id="3_2_c_9_1" value="0"
                                            onkeyup="fnmulty('3_2_c_9_1','3_2_c_11_1','3_2_c_12_1');" required
                                            class="form-control" /></div>
                                    <div>3_2_c_9_2<input type="text" name="3_2_c_9_2" id="3_2_c_9_2" value="0"
                                            onkeyup="fnmulty('3_2_c_9_2','3_2_c_11_2','3_2_c_12_2');" required
                                            class="form-control" /></div>
                                    <div>3_2_c_9_3<input type="text" name="3_2_c_9_3" id="3_2_c_9_3" value="0"
                                            onkeyup="fnmulty('3_2_c_9_3','3_2_c_11_3','3_2_c_12_3');" required
                                            class="form-control" /></div>
                                    <div>3_2_c_9_4<input type="text" name="3_2_c_9_4" id="3_2_c_9_4" value="0"
                                            onkeyup="fnmulty('3_2_c_9_4','3_2_c_11_4','3_2_c_12_4');" required
                                            class="form-control" /></div>
                                </td>
                                <td>
                                    <div>3_2_c_10_1<input type="text" name="3_2_c_10_1" id="3_2_c_10_1" value="0"
                                            required class="form-control" /></div>
                                    <div>3_2_c_10_2<input type="text" name="3_2_c_10_2" id="3_2_c_10_2" value="0"
                                            required class="form-control" /></div>
                                    <div>3_2_c_10_3<input type="text" name="3_2_c_10_3" id="3_2_c_10_3" value="0"
                                            required class="form-control" /></div>
                                    <div>3_2_c_10_4<input type="text" name="3_2_c_10_4" id="3_2_c_10_4" value="0"
                                            required class="form-control" /></div>
                                </td>
                                <td>
                                    <div>3_2_c_11_1<input type="text" name="3_2_b_11_1" id="3_2_b_11_1" value="0"
                                            onkeyup="fnmulty('3_2_c_9_4','3_2_c_11_4','3_2_c_12_4');" required
                                            class="form-control" /></div>
                                    <div>3_2_c_11_2<input type="text" name="3_2_b_11_2" id="3_2_b_11_2" value="0"
                                            onkeyup="fnmulty('3_2_c_9_4','3_2_c_11_4','3_2_c_12_4');" required
                                            class="form-control" /></div>
                                    <div>3_2_c_11_3<input type="text" name="3_2_b_11_3" id="3_2_b_11_3" value="0"
                                            onkeyup="fnmulty('3_2_c_9_4','3_2_c_11_4','3_2_c_12_4');" required
                                            class="form-control" /></div>
                                    <div>3_2_c_11_4<input type="text" name="3_2_b_11_4" id="3_2_b_11_4" value="0"
                                            onkeyup="fnmulty('3_2_c_9_4','3_2_c_11_4','3_2_c_12_4');" required
                                            class="form-control" /></div>
                                </td>
                                <td>
                                    <div>3_2_c_12_1<input type="text" name="3_2_c_12_1" id="3_2_c_12_1" readonly
                                            value="0" class="form-control" /></div>
                                    <div>3_2_c_12_2<input type="text" name="3_2_c_12_2" id="3_2_c_12_2" readonly
                                            value="0" class="form-control" /></div>
                                    <div>3_2_c_12_3<input type="text" name="3_2_c_12_3" id="3_2_c_12_3" readonly
                                            value="0" class="form-control" /></div>
                                    <div>3_2_c_12_4<input type="text" name="3_2_c_12_4" id="3_2_c_12_4" readonly
                                            value="0" class="form-control" /></div>
                                </td>
                                <td>
                                    <div class="form-group">1c
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_1_1"
                                                    id="3_2_c_13_1_1" value="1"> ?????????????????? ?????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_1_2"
                                                    id="3_2_c_13_1_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                        </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_1_3"
                                                    id="3_2_c_13_1_3" value="3"> ???????????? ??????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_1_4"
                                                    id="3_2_c_13_1_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_1_5"
                                                    id="3_2_c_13_1_5" value="5"> ??????????????????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_1_6"
                                                    id="3_2_c_13_1_6" value="6"
                                                    onclick="eDcheckOT('3_2_c_13_1_6','3_2_c_13_1_6_oth')"> ???????????????, ???????????????
                                                ???????????????</label> </div>
                                        <div>3_2_c_13_1_6_oth <input type="text" name="3_2_c_13_1_6_oth"
                                                id="3_2_c_13_1_6_oth" class="form-control" /> </div>
                                        <hr>
                                        <div class="form-group">3
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_3_1"
                                                        id="3_2_c_13_3_1" value="1"> ?????????????????? ?????????????????????</label></div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_3_2"
                                                        id="3_2_c_13_3_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_3_3"
                                                        id="3_2_c_13_3_3" value="3"> ???????????? ??????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_3_4"
                                                        id="3_2_c_13_3_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_3_5"
                                                        id="3_2_c_13_3_5" value="5"> ??????????????????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_3_6"
                                                        id="3_2_c_13_3_6" value="6"
                                                        onclick="eDcheckOT('3_2_c_13_3_6','3_2_c_13_3_6_oth')"> ???????????????,
                                                    ??????????????? ???????????????</label> </div>

                                            <div>3_2_c_13_3_6_oth <input type="text" name="3_2_c_13_3_6_oth"
                                                    id="3_2_c_13_3_6_oth" class="form-control" /> </div>

                                </td>
                                <td>
                                    <div class="form-group">2
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_2_1"
                                                    id="3_2_c_13_2_1" value="1"> ?????????????????? ?????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_2_2"
                                                    id="3_2_c_13_2_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                        </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_2_3"
                                                    id="3_2_c_13_2_3" value="3"> ???????????? ??????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_2_4"
                                                    id="3_2_c_13_2_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_2_5"
                                                    id="3_2_c_13_2_5" value="5"> ??????????????????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_2_6"
                                                    id="3_2_c_13_2_6" value="6"
                                                    onclick="eDcheckOT('3_2_c_13_2_6','3_2_c_13_2_6_oth')"> ???????????????, ???????????????
                                                ???????????????</label> </div>

                                        <div>3_2_c_13_2_6_oth <input type="text" name="3_2_c_13_2_6_oth"
                                                id="3_2_c_13_2_6_oth" class="form-control" /> </div>
                                        <hr>
                                        <div class="form-group">4
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_4_1"
                                                        id="3_2_c_13_4_1" value="1"> ?????????????????? ?????????????????????</label></div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_4_2"
                                                        id="3_2_c_13_4_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_4_3"
                                                        id="3_2_c_13_4_3" value="3"> ???????????? ??????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_4_4"
                                                        id="3_2_c_13_4_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_4_5"
                                                        id="3_2_c_13_4_5" value="5"> ??????????????????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_13_4_6"
                                                        id="3_2_c_13_4_6" value="6"
                                                        onclick="eDcheckOT('3_2_c_13_4_6','3_2_c_13_4_6_oth')"> ???????????????,
                                                    ??????????????? ???????????????</label> </div>
                                            <div>3_2_c_13_4_6_oth <input type="text" name="3_2_c_13_4_6_oth"
                                                    id="3_2_c_13_4_6_oth" class="form-control" /> </div>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <div>???????????????</div>
                                    <div>3_2_d_8_1<input type="text" name="3_2_d_8_1" id="3_2_d_8_1"
                                            class="form-control" /></div>
                                    <div>3_2_d_8_2<input type="text" name="3_2_d_8_2" id="3_2_d_8_2"
                                            class="form-control" /></div>
                                    <div>3_2_d_8_3<input type="text" name="3_2_d_8_3" id="3_2_d_8_3"
                                            class="form-control" /></div>
                                    <div>3_2_d_8_4<input type="text" name="3_2_d_8_4" id="3_2_d_8_4"
                                            class="form-control" /></div>
                                </td>
                                <td>
                                    <div>3_2_d_9_1<input type="text" name="3_2_d_9_1" id="3_2_d_9_1" value="0"
                                            onkeyup="fnmulty('3_2_d_9_1','3_2_d_11_1','3_2_d_12_1');" required
                                            class="form-control" /></div>
                                    <div>3_2_d_9_2<input type="text" name="3_2_d_9_2" id="3_2_d_9_2" value="0"
                                            onkeyup="fnmulty('3_2_d_9_2','3_2_d_11_2','3_2_d_12_2');" required
                                            class="form-control" /></div>
                                    <div>3_2_d_9_3<input type="text" name="3_2_d_9_3" id="3_2_d_9_3" value="0"
                                            onkeyup="fnmulty('3_2_d_9_3','3_2_d_11_3','3_2_d_12_3');" required
                                            class="form-control" /></div>
                                    <div>3_2_d_9_4<input type="text" name="3_2_d_9_4" id="3_2_d_9_4" value="0"
                                            onkeyup="fnmulty('3_2_d_9_4','3_2_d_11_4','3_2_d_12_4');" required
                                            class="form-control" /></div>
                                </td>
                                <td>
                                    <div>3_2_d_10_1<input type="text" name="3_2_d_10_1" id="3_2_d_10_1" value="0"
                                            required class="form-control" /></div>
                                    <div>3_2_d_10_2<input type="text" name="3_2_d_10_2" id="3_2_d_10_2" value="0"
                                            required class="form-control" /></div>
                                    <div>3_2_d_10_3<input type="text" name="3_2_d_10_3" id="3_2_d_10_3" value="0"
                                            required class="form-control" /></div>
                                    <div>3_2_d_10_4<input type="text" name="3_2_d_10_4" id="3_2_d_10_4" value="0"
                                            required class="form-control" /></div>
                                </td>
                                <td>
                                    <div>3_2_d_11_1<input type="text" name="3_2_d_11_1" id="3_2_d_11_1"
                                            onkeyup="fnmulty('3_2_d_9_1','3_2_d_11_1','3_2_d_12_4');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_d_11_2<input type="text" name="3_2_d_11_2" id="3_2_d_11_2"
                                            onkeyup="fnmulty('3_2_d_9_2','3_2_d_11_2','3_2_d_12_2');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_d_11_3<input type="text" name="3_2_d_11_3" id="3_2_d_11_3"
                                            onkeyup="fnmulty('3_2_d_9_3','3_2_d_11_3','3_2_d_12_3');" value="0" required
                                            class="form-control" /></div>
                                    <div>3_2_d_11_4<input type="text" name="3_2_d_11_4" id="3_2_d_11_4"
                                            onkeyup="fnmulty('3_2_d_9_4','3_2_d_11_4','3_2_d_12_4');" value="0" required
                                            class="form-control" /></div>
                                </td>
                                <td>
                                    <div>3_2_d_12_1<input type="text" name="3_2_d_12_1" id="3_2_d_12_1" readonly
                                            value="0" class="form-control" /></div>
                                    <div>3_2_d_12_2<input type="text" name="3_2_d_12_2" id="3_2_d_12_2" readonly
                                            value="0" class="form-control" /></div>
                                    <div>3_2_d_12_3<input type="text" name="3_2_d_12_3" id="3_2_d_12_3" readonly
                                            value="0" class="form-control" /></div>
                                    <div>3_2_d_12_4<input type="text" name="3_2_d_12_4" id="3_2_d_12_4" readonly
                                            value="0" class="form-control" /></div>
                                </td>
                                <td>
                                    <div class="form-group">1
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_1_1"
                                                    id="3_2_d_13_1_1" value="1">?????????????????? ?????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_1_2"
                                                    id="3_2_d_13_1_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                        </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_1_3"
                                                    id="3_2_d_13_1_3" value="3"> ???????????? ??????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_1_4"
                                                    id="3_2_d_13_1_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_1_5"
                                                    id="3_2_d_13_1_5" value="5"> ??????????????????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_1_6"
                                                    id="3_2_d_13_1_6" value="6"
                                                    onclick="eDcheckOT('3_2_d_13_1_6','3_2_d_13_1_6_oth')">???????????????, ???????????????
                                                ???????????????</label> </div>

                                        <div>3_2_d_13_1_6_oth <input type="text" name="3_2_d_13_1_6_oth"
                                                id="3_2_d_13_1_6_oth" class="form-control" /> </div>
                                        <hr>
                                        <div class="form-group">3
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_1"
                                                        id="3_2_d_13_3_1" value="1"> ?????????????????? ?????????????????????</label></div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_2"
                                                        id="3_2_d_13_3_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_3"
                                                        id="3_2_d_13_3_3" value="3"> ???????????? ??????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_4"
                                                        id="3_2_d_13_3_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_5"
                                                        id="3_2_d_13_3_5" value="5"> ??????????????????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_6"
                                                        id="3_2_d_13_3_6" value="6"
                                                        onclick="eDcheckOT('3_2_d_13_3_6','3_2_d_13_3_6_oth')">???????????????,
                                                    ??????????????? ???????????????</label> </div>

                                            <div>3_2_d_13_3_6_oth <input type="text" name="3_2_d_13_3_6_oth"
                                                    id="3_2_d_13_3_6_oth" class="form-control" /> </div>


                                </td>
                                <td>
                                    <div class="form-group">2
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_2_1"
                                                    id="3_2_d_13_2_1" value="1"> ?????????????????? ?????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_2_2"
                                                    id="3_2_d_13_2_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                        </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_2_3"
                                                    id="3_2_d_13_2_3" value="3"> ???????????? ??????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_2_4"
                                                    id="3_2_d_13_2_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label></div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_2_5"
                                                    id="3_2_d_13_2_5" value="5"> ??????????????????????????????</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_2_6"
                                                    id="3_2_d_13_2_6" value="6"
                                                    onclick="eDcheckOT('3_2_d_13_2_6','3_2_d_13_2_6_oth')"> ???????????????, ???????????????
                                                ???????????????</label> </div>

                                        <div>3_2_d_13_2_6_oth <input type="text" name="3_2_d_13_2_6_oth"
                                                id="3_2_d_13_2_6_oth" class="form-control" /> </div>
                                        <hr>
                                        <div class="form-group">4
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_4_1"
                                                        id="3_2_d_13_4_1" value="1"> ?????????????????? ?????????????????????</label></div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_4_2"
                                                        id="3_2_d_13_4_2" value="2"> ?????????????????? ????????????????????? ?????????????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_4_3"
                                                        id="3_2_d_13_4_3" value="3"> ???????????? ??????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_4_4"
                                                        id="3_2_d_13_4_4" value="4"> ???????????? ??????????????? ?????? ????????????????????????</label>
                                            </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_4_5"
                                                        id="3_2_d_13_4_5" value="5"> ??????????????????????????????</label> </div>
                                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_13_4_6"
                                                        id="3_2_d_13_4_6" value="6"
                                                        onclick="eDcheckOT('3_2_d_13_4_6','3_2_d_13_4_6_oth')"> ???????????????,
                                                    ??????????????? ???????????????</label> </div>
                                            <div>3_2_d_13_4_6_oth <input type="text" name="3_2_d_13_4_6_oth"
                                                    id="3_2_d_13_4_6_oth" class="form-control" /> </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

            </div>
            <div class="row">
                <h2> 3.3. ??????????????????????????? </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">3.3.1 ????????? ?????????????????? ???????????? ????????? ????????????????????? ???????????????? </label>
                        <div class="checkbox"><label><input type="checkbox" name="3_3_1_a" id="3_3_2_a"
                                    value="1">????????????????????? ??????????????????????????? ??????????????? ????????? </label>
                        </div>
                        <div class="checkbox"><label><input type="checkbox" name="3_3_1_b" id="3_3_1_b" value="2">????????????
                                ????????? </label>
                        </div>
                        <div class="checkbox"><label><input type="checkbox" name="3_3_1_c" id="3_3_1_c" value="3"> ????????????
                                ??????????????????????????? ??????????????? ?????????</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="3_3_1_d" id="3_3_1_d" value="4">
                                ?????????????????? ?????????</label></div>
                        <div class="checkbox"> <label><input type="checkbox" name="3_3_1_e" id="3_3_1_e" value="5"> ????????????
                                ?????????</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="3_3_1_f" id="3_3_1_f" value="6"
                                    onclick="eDcheckOT('3_3_1_f','3_3_1_f_oth')"> ???????????????</label> </div>
                        <div>3_3_1_e_oth<input type="text" name="3_3_1_f_oth" id="3_3_1_f_oth" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">3.3.2. ??????????????????????????? ???????????? ????????? ?????? ?????????????????? </label>
                        <table class="table table-bordered table-hover">
<tr>
    <th> ???????????????</th>
    <th>?????????????????????</th>
</tr>
<tr>
    <td>?????? ??????????????? ???????????? ???????????????</td>
    <td> <div>3_3_3_1<input type="number" name="3_3_3_1" id="3_3_3_1" value="0" required class="form-control" /> </td>
</tr>
<tr>
    <td>??????????????? ???????????? ???????????? ????????????????????? (?????????: ?????? ???????????????)</td>
    <td> <div>3_3_3_2<input type="number" name="3_3_3_2" id="3_3_3_2" value="0" required class="form-control" /> </td>
</tr>
<tr>
    <td>??????????????? ??????????????????</td>
    <td> <div>3_3_3_3<input type="number" name="3_3_3_3" id="3_3_3_3" value="0" required class="form-control" /> </td>
</tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>3.4. ???????????? ???????????????????????? ???????????????????????? ?????? ?????????????????? ??????????????? </h3>
                    
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">

                    <table class="table table-bordered table-hover">
                        <tr>
                            <th></th>
                            <th rowspan="1"> ?????????????????? ?????????????????? ??????????????????</th>
                            
                            <th colspan="3">3.4.2. ???????????????????????????????????? ???????????? ????????????????????? (?????????????????? ?????????)</th>
                        </tr>
                        <tr>
                            <th></th>
                        <th> 3.4.1.</th>
                            <th> ??????????????? ?????????????????????</th>
                            <th> ?????????????????? ????????? ?????????????????????</th>
                            <th>??????????????? ?????????????????????</th>
                        </tr>
                        <tr>
                           <td> ???????????? ???????????????????????????</td>
                            <td> <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="3_4_1a" id="3_4_1a" value="1">
                          <label class="form-check-label">???????????? ???????????????????????????</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="3_4_1b" id="3_4_1b" value="2" checked="">
                          <label class="form-check-label">?????????????????? ???????????????</label>
                        </div> 
                      </div>
                            </td>
                            <td> <div>3_4_2_1<input type="number" name="3_4_2_1" id="3_4_2_1" value="0" required class="form-control" /> </td>
                            <td> <div>3_4_2_2<input type="number" name="3_4_2_2" id="3_4_2_2" value="0" required class="form-control" /> </td>
                            <td> <div>3_4_2_3<input type="number" name="3_4_2_3" id="3_4_2_3" value="0" required class="form-control" /> </td>
                        </tr> 

                        <tr>
                           <td> ?????????????????? ???????????????</td>
                            <td> <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="3_4_1c" id="3_4_1c" value="1">
                          <label class="form-check-label">???????????? ???????????????????????????</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" name="3_4_1d" id="3_4_1d" value="2" checked="">
                          <label class="form-check-label">?????????????????? ???????????????</label>
                        </div> 
                      </div>
                            </td>
                            <td> <div>3_4_2_4<input type="number" name="3_4_2_4" id="3_4_2_4" value="0" required class="form-control" /> </td>
                            <td> <div>3_4_2_5<input type="number" name="3_4_2_5" id="3_4_2_5" value="0" required class="form-control" /> </td>
                            <td> <div>3_4_2_6<input type="number" name="3_4_2_6" id="3_4_2_6" value="0" required class="form-control" /> </td>
                        </tr> 

                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>3.5.???????????????????????? ?????????????????????</h4>
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>???????????????</th>
                            <th>3.5.1. ???????????????????????????/???????????????????????? (Kg) </th>
                            <th>3.5.2. ?????????????????? ?????? ????????????</th>
                        </tr>
                        <tr>
                            <td> ?????? 2021/22</td>
                            <td>
                                <div>3_5_1_a<input type="number" name="3_5_1_a" id="3_5_1_a" value="0" required
                                        class="form-control" />
                            </td>
                            <td>
                                <div>3_5_2_a<input type="number" name="3_5_2_a" id="3_5_2_a" value="0" required
                                        class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td> ?????? 2020/21</td>
                            <td>
                                <div>3_5_1_b<input type="number" name="3_5_1_b" id="3_5_1_b" value="0" required
                                        class="form-control" />
                            </td>
                            <td>
                                <div>3_5_2_b<input type="number" name="3_5_2_b" id="3_5_2_b" value="0" required
                                        class="form-control" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label>3.5.3. ?????? 2021/22 ???????????????????????? ????????? ?????? ????????????????????? ??????????????????? </label>
                    <div class="input-group">

                        <select class="form-control" name="3_5_3" id="3_5_3">
                            <option value="1">????????? ???????????????????????????, ????????? ?????????????????? ????????? ????????? ?????????????????????????????? ???????????? ??????????????????
                            </option>
                            <option value="2">???????????????????????????, ??????????????? ???????????? ?????? ???????????????????????? ????????? ???????????? ????????? ????????? ?????????????????? ?????????????????? ???????????????
                                ???????????????????????? ???????????? ??????????????????</option>
                            <option value="3">????????????????????? ????????????????????????????????? ????????????, ?????????????????????????????? ???????????????????????? ????????????, ????????????????????????????????? ??????????????????
                                ?????????????????? ???????????????</option>
                            <option value="4">????????????????????? ????????? ???????????? , ?????? ???????????????????????? ????????? ?????????????????????????????? ???????????? ??????????????????</option>
                            <option value="5">????????? ??????????????????????????????, ????????? ???????????????????????? ???????????????????????? ????????? ?????????</option>
                        </select>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>3.6.1.????????? ????????????????????? ????????????????????? ????????????????????? ???????????????????</label>
                        <div><input type="text" name="3_6_1" id="3_6_1" placeholder="?????????????????????" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>3.6.2.?????? ??? ???????????? ??????????????? ??????????????? ????????????????</label>
                        <div><input type="text" name="3_6_2" id="3_6_2" placeholder="5KM" required
                                class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">3.6.3. ???????????????????????? ?????????????????? ???????????????????</label>
                        <div class="checkbox"><label><input type="checkbox" name="3_6_3a" id="3_6_3a" value="1">
                                ????????????????????? ???????????????????????????
                            </label>
                        </div>
                        <div class="checkbox"><label><input type="checkbox" name="3_6_3b" id="3_6_3b" value="2">
                                ?????????????????? ????????? ???????????????????????????
                            </label>
                        </div>
                        <div class="checkbox"><label><input type="checkbox" name="3_6_3c" id="3_6_3c" value="3">????????????????????????
                                ?????? ??????????????? ?????????????????? ?????????????????? ??????????????????
                            </label> </div>

                        <div class="checkbox"> <label><input type="checkbox" name="3_6_3d" id="3_6_3d" value="4"
                                    onclick="eDcheckOT('3_6_3d','3_6_3d_oth')">???????????????</label> </div>
                        <div>3_6_3d_oth<input type="text" name="3_6_3d_oth" id="3_6_3d_oth" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <table class="table table-bordered table-hover">
                        <tr>
                            <th colspan="3">3.6.4. ???????????????????????? ????????????????????????????????? ????????? ????????? ?????? ??????????????????????</th>
                        </tr>
                        <tr>
                            <th>???????????????</th>
                            <th>????????????????????? (??????.)</th>
                        </tr>
                        <tr>
                            <td>??????????????? ???????????? ???????????????</td>
                            <td>
                                <div>3_6_4_1 <input type="number" name="3_6_4_1" id="3_6_4_1" value="0" required
                                        class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>??????????????? ???????????? ??????????????????
                            </td>
                            <td>
                                <div>3_6_4_2<input type="number" name="3_6_4_2" id="3_6_4_2" value="0" required
                                        class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>??????????????? ??????????????????</td>
                            <td>
                                <div>3_6_4_3 <input type="number" name="3_6_4_3" id="3_6_4_3" value="0" required
                                        class="form-control" />
                            </td>
                        </tr>
                    </table>


                </div>
            </div>

            <div class="card-footer">

                <button type="reset" class="btn btn-default">Reset Button</button>
                <button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary float-right">Submit
                    Button</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>