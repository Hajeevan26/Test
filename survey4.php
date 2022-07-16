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
        
   

    if (isset($_POST['4_1'])) {   $a4_1 = $_POST['4_1']; } else { $a4_1 = 0; }
    if (isset($_POST['4_2a'] )) { $a4_2a = $_POST['4_2a'];} else  {$a4_2a= NULL; }
    if (isset($_POST['4_3a'] )) { $a4_3a = $_POST['4_3a'];} else  {$a4_3a= 0; }
    if (isset($_POST['4_4a'] )) { $a4_4a = $_POST['4_4a'];} else  {$a4_4a= 0; }
    if (isset($_POST['4_5a'] )) { $a4_5a = $_POST['4_5a'];} else  {$a4_5a= 0; }
    if (isset($_POST['4_2b'] )) { $a4_2b = $_POST['4_2b'];} else  {$a4_2b= NULL; }
    if (isset($_POST['4_3b'] )) { $a4_3b = $_POST['4_3b'];} else  {$a4_3b= 0; }
    if (isset($_POST['4_4b'] )) { $a4_4b = $_POST['4_4b'];} else  {$a4_4b= 0; }
    if (isset($_POST['4_5b'] )) { $a4_5b = $_POST['4_5b'];} else {$a4_5b = 0; }
    if (isset($_POST['4_2c'] )) { $a4_2c = $_POST['4_2c'];} else {$a4_2c = NULL; }
    if (isset($_POST['4_3c'] )) { $a4_3c = $_POST['4_3c'];} else {$a4_3c = 0; }
    if (isset($_POST['4_4c'] )) { $a4_4c = $_POST['4_4c'];} else {$a4_4c = 0; }
    if (isset($_POST['4_5c'] )) { $a4_5c = $_POST['4_5c'];} else {$a4_5c = 0; }
    
    
    
    $sqlupdatesq = "UPDATE tblsurvey_question SET 4_1 ='$a4_1 ', 4_2a='$a4_2a', 4_3a='$a4_3a', 4_4a='$a4_4a', 4_5a='$a4_5a', 4_2b='$a4_2b', 4_3b='$a4_3b', 4_4b='$a4_4b', 4_5b='$a4_5b', 4_2c='$a4_2c', 4_3c='$a4_3c', 4_4c='$a4_4c', 4_5c='$a4_5c' where household_id= '$household_id' ";
        $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
           
            echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=survey5.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <div class="container-fluid">
        <h2>4. ණය සහ බැර</h2>
        Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="widget-header">
                <h4 class="widget-title">
                    <center>ණය/ණය පහසුකම්/සේවා</center>
                </h4>

            </div>
            <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

            <?php
  
        include('survey4_Content.php');
     ?>
        </form>
    </div>
</div>