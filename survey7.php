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
        
   

        if (isset($_POST['7_1'])) {  $a7_1 = $_POST['7_1'];   } else {$a7_1 = 0; }
        if (isset($_POST['7_1_oth'] )) { $a7_1_oth = $_POST['7_1_oth'];} else {$a7_1_oth = NULL; }
        if (isset($_POST['7_2'] )) { $a7_2 = $_POST['7_2'];} else {$a7_2 = 0; }
        if (isset($_POST['7_2_oth'] )) { $a7_2_oth = $_POST['7_2_oth'];} else {$a7_2_oth = NULL; }
        if (isset($_POST['7_3'] )) { $a7_3 = $_POST['7_3'];} else {$a7_3 = 0; }
        if (isset($_POST['7_4_a'] )) { $a7_4_a = $_POST['7_4_a'];} else {$a7_4_a = 0; }
        if (isset($_POST['7_4_b'] )) { $a7_4_b = $_POST['7_4_b'];} else {$a7_4_b = 0; }
        if (isset($_POST['7_4_c'] )) { $a7_4_c = $_POST['7_4_c'];} else {$a7_4_c = 0; }
        if (isset($_POST['7_4_d'] )) { $a7_4_d = $_POST['7_4_d'];} else {$a7_4_d = 0; }
        if (isset($_POST['7_4_e'] )) { $a7_4_e = $_POST['7_4_e'];} else {$a7_4_e = 0; }
        if (isset($_POST['7_4_e_oth'] )) { $a7_4_e_oth = $_POST['7_4_e_oth'];} else {$a7_4_e_oth = NULL; }
        if (isset($_POST['7_5'] )) { $a7_5 = $_POST['7_5'];} else {$a7_5 = 0; }
        if (isset($_POST['7_6'] )) { $a7_6 = $_POST['7_6'];} else {$a7_6 = 0; }
        if (isset($_POST['7_7'] )) { $a7_7 = $_POST['7_7'];} else {$a7_7 = 0; }
        if (isset($_POST['7_8'] )) { $a7_8 = $_POST['7_8'];} else {$a7_8 = 0; }
        if (isset($_POST['7_9'] )) { $a7_9 = $_POST['7_9'];} else {$a7_9 = 0; }
        if (isset($_POST['7_10'] )) { $a7_10 = $_POST['7_10'];} else {$a7_10 = 0; }
        if (isset($_POST['7_11'] )) { $a7_11 = $_POST['7_11'];} else {$a7_11 = 0; }

        
    
        $sqlupdatesq = "UPDATE tblsurvey_question SET 7_1='$a7_1',7_2='$a7_2' ,7_3='$a7_3' ,7_4='$a7_4',7_4_a='$a7_4_a',7_4_b='$a7_4_b',7_4_c='$a7_4_c',7_4_d='$a7_4_d',7_4_e='$a7_4_e',  a7_4_e_oth='$a7_4_e_oth', 7_5='$a7_5' , 7_6='$a7_6', 7_7='$a7_7', 7_8='$a7_8', 7_9='$a7_9', 7_10='$a7_10', 7_11='$a7_11' where household_id= '$household_id' ";
        $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
           
            echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=surveyG.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <div class="container-fluid">Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="widget-header">
                <h4 class="widget-title">
                    <center>2. Farm information</center>
                </h4>

            </div>
            <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

            <?php
  
        include('survey7_Content.php');
     ?>
        </form>
    </div>
</div></div>