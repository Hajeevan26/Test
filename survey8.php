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
    $status=1;
   $date_end= date('Y-m-d H:i:s');

        if (isset($_POST['8_1']))  { $a8_1 = $_POST['8_1'];} else {$a8_1 = 0; }
        if (isset($_POST['8_2'] )) { $a8_2 = $_POST['8_2'];} else {$a8_2 = 0; }
        if (isset($_POST['8_3'] )) { $a8_3 = $_POST['8_3'];} else {$a8_3 = 0; }
        if (isset($_POST['8_4'] )) { $a8_4 = $_POST['8_4'];} else {$a8_4 = 0; }
        if (isset($_POST['8_5'] )) { $a8_5 = $_POST['8_5'];} else {$a8_5 = 0; }
        if (isset($_POST['8_6'] )) { $a8_6 = $_POST['8_6'];} else {$a8_6 = 0; }
        if (isset($_POST['8_7'] )) { $a8_7 = $_POST['8_7'];} else {$a8_7 = 0; }
        if (isset($_POST['9'] )) { $a9 = $_POST['9'];} else {$a9 = 0; }
        
    
        $sqlupdatesq = "UPDATE tblsurvey_question SET 8_1='$a8_1',8_2='$a8_2' ,8_3='$a8_3' ,8_4='$a8_4',8_5='$a8_5' ,8_6='$a8_6',8_7=' $a8_7', 9_0='$a9' ,status='$status' ,date_end='$date_end' where household_id= '$household_id' ";
        $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
            unset($_SESSION['household_id']);
            echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=createsurvey.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <h2>8. සෞඛ්‍ය සහ පාරිසරික ගැටළු</h2>
    <div class="container-fluid">Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="widget-header">
                <h4 class="widget-title">
                    <center>8. සෞඛ්‍ය සහ පාරිසරික ගැටළු</center>
                </h4>

            </div>
            <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

            <?php
  
        include('survey8_Content.php');
     ?>
        </form>
    </div>
</div></div>