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
        
   

    if (isset($_POST['2_1'])) {  $a2_1 = $_POST['2_1'];   } else {$a2_1_= 0; }
    if (isset($_POST['2_2'] )) { $a2_2 = $_POST['2_2'];} else {$a2_2 = 0; }
    if (isset($_POST['2_2_oth'] )) { $a2_2_oth = $_POST['2_2_oth'];} else {$a2_2_oth = NULL; }
    if (isset($_POST['2_3'])) {  $a2_3 = $_POST['2_3'];   } else {$a2_3_= 0; }
    if (isset($_POST['2_4'] )) { $a2_4 = $_POST['2_4'];} else {$a2_4 = 0; }
    if (isset($_POST['2_5'] )) { $a2_5 = $_POST['2_5'];} else {$a2_5 = 0; }
    if (isset($_POST['2_6a'] )) { $a2_6a = $_POST['2_6a'];} else {$a2_6a = 0; }
    if (isset($_POST['2_6b'] )) { $a2_6b = $_POST['2_6b'];} else {$a2_6b = 0; }
    if (isset($_POST['2_6c'] )) { $a2_6c = $_POST['2_6c'];} else {$a2_6c = 0; }
    if (isset($_POST['2_6d'] )) { $a2_6d = $_POST['2_6d'];} else {$a2_6d = 0; }
    if (isset($_POST['2_6e'] )) { $a2_6e = $_POST['2_6e'];} else {$a2_6e = 0; }
    if (isset($_POST['2_6f'] )) { $a2_6f = $_POST['2_6f'];} else {$a2_6f = 0; }
    if (isset($_POST['2_6_oth'] )) { $a2_6_oth = $_POST['2_6_oth'];} else {$a2_6_oth = NULL; }
    if (isset($_POST['2_7'] )) { $a2_7 = $_POST['2_7'];} else {$a2_7 = 0; }
    if (isset($_POST['2_8'] )) { $a2_8 = $_POST['2_8'];} else {$a2_8 = 0; }
        
    
    $sqlupdatesq = "UPDATE tblsurvey_question SET 2_1='$a2_1',2_2='$a2_2' ,2_2_oth='$a2_2_oth' ,2_3='$a2_3',2_4='$a2_4' ,2_5='$a2_5',2_6a=' $a2_6a',2_6b=' $a2_6b', 2_6c=' $a2_6c', 2_6d='$a2_6d' ,2_6e='$a2_6e'  ,2_6f='$a2_6f',2_6_oth='$a2_6_oth',2_7='$a2_7',2_8='$a2_8'  where household_id= '$household_id' ";
        $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
           
            echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=survey2a.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <div class="container-fluid">
        <h2>2. Farm information </h2>
        Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="widget-header">
                <h4 class="widget-title">
                    <center>2. Farm information</center>
                </h4>

            </div>
            <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

            <?php
  
        include('survey2_Content.php');
     ?>
        </form>
    </div>
</div>