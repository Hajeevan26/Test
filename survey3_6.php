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
        
   
    if (isset($_POST['3_6_5_a'])) {  $a3_6_5_a = $_POST['3_6_5_a'];   } else {$a3_6_5_a = NULL; }
    if (isset($_POST['3_6_6_a'])) {  $a3_6_6_a = $_POST['3_6_6_a'];   } else {$a3_6_6_a = 0; }
    if (isset($_POST['3_6_7_a'])) {  $a3_6_7_a = $_POST['3_6_7_a'];   } else {$a3_6_7_a = 0; }
    if (isset($_POST['3_6_8_a'])) {  $a3_6_8_a = $_POST['3_6_8_a'];   } else {$a3_6_8_a = 0; }

    
    if (isset($_POST['3_6_5_b'])) {  $a3_6_5_b = $_POST['3_6_5_b'];   } else {$a3_6_5_b= NULL; }
    if (isset($_POST['3_6_6_b'])) {  $a3_6_6_b = $_POST['3_6_6_b'];   } else {$a3_6_6_b = 0; }
    if (isset($_POST['3_6_7_b'])) {  $a3_6_7_b = $_POST['3_6_7_b'];   } else {$a3_6_7_b = 0; }
    if (isset($_POST['3_6_8_b'])) {  $a3_6_8_b = $_POST['3_6_8_b'];   } else {$a3_6_8_b = 0; }

    if (isset($_POST['3_6_5_c'])) {  $a3_6_5_c = $_POST['3_6_5_c'];   } else {$a3_6_5_c= NULL; }
    if (isset($_POST['3_6_6_c'])) {  $a3_6_6_c = $_POST['3_6_6_c'];   } else {$a3_6_6_c = 0; }
    if (isset($_POST['3_6_7_c'])) {  $a3_6_7_c = $_POST['3_6_7_c'];   } else {$a3_6_7_c = 0; }
    if (isset($_POST['3_6_8_c'])) {  $a3_6_8_c = $_POST['3_6_8_c'];   } else {$a3_6_8_c = 0; }

    if (isset($_POST['3_6_5_d'])) {  $a3_6_5_d = $_POST['3_6_5_d'];   } else {$a3_6_5_d= NULL; }
    if (isset($_POST['3_6_6_d'])) {  $a3_6_6_d = $_POST['3_6_6_d'];   } else {$a3_6_6_d = 0; }
    if (isset($_POST['3_6_7_d'])) {  $a3_6_7_d = $_POST['3_6_7_d'];   } else {$a3_6_7_d = 0; }
    if (isset($_POST['3_6_8_d'])) {  $a3_6_8_d = $_POST['3_6_8_d'];   } else {$a3_6_8_d = 0; }

    if (isset($_POST['3_6_5_e'])) {  $a3_6_5_e = $_POST['3_6_5_e'];   } else {$a3_6_5_e= NULL; }
    if (isset($_POST['3_6_6_e'])) {  $a3_6_6_e = $_POST['3_6_6_e'];   } else {$a3_6_6_e = 0; }
    if (isset($_POST['3_6_7_e'])) {  $a3_6_7_e = $_POST['3_6_7_e'];   } else {$a3_6_7_e = 0; }
    if (isset($_POST['3_6_8_e'])) {  $a3_6_8_e = $_POST['3_6_8_e'];   } else {$a3_6_8_e = 0; }

    if (isset($_POST['3_6_5_f'])) {  $a3_6_5_f = $_POST['3_6_5_f'];   } else {$a3_6_5_f= NULL; }
    if (isset($_POST['3_6_6_f'])) {  $a3_6_6_f = $_POST['3_6_6_f'];   } else {$a3_6_6_f = 0; }
    if (isset($_POST['3_6_7_f'])) {  $a3_6_7_f = $_POST['3_6_7_f'];   } else {$a3_6_7_f = 0; }
    if (isset($_POST['3_6_8_f'])) {  $a3_6_8_f = $_POST['3_6_8_f'];   } else {$a3_6_8_f = 0; }

    if (isset($_POST['3_6_5_g'])) {  $a3_6_5_g = $_POST['3_6_5_g'];   } else {$a3_6_5_g= 0; }
    if (isset($_POST['3_6_6_g'])) {  $a3_6_6_g = $_POST['3_6_6_g'];   } else {$a3_6_6_g = 0; }
    if (isset($_POST['3_6_7_g'])) {  $a3_6_7_g = $_POST['3_6_7_g'];   } else {$a3_6_7_g = 0; }
    if (isset($_POST['3_6_8_g'])) {  $a3_6_8_g = $_POST['3_6_8_g'];   } else {$a3_6_8_g = 0; }
    
    //
   if (isset($_POST['3_6_9_a'])) {  $a3_6_9_a = $_POST['3_6_9_a'];   } else {$a3_6_9_a= NULL; }
   if (isset($_POST['3_6_10_a'])) {  $a3_6_10_a = $_POST['3_6_10_a'];   } else {$a3_6_10_a= 0; }
   if (isset($_POST['3_6_11_a'])) {  $a3_6_11_a = $_POST['3_6_11_a'];   } else {$a3_6_11_a= 0; }
   if (isset($_POST['3_6_12_a'])) {  $a3_6_12_a = $_POST['3_6_12_a'];   } else {$a3_6_12_a= 0; }

   if (isset($_POST['3_6_9_b'])) {  $a3_6_9_b = $_POST['3_6_9_b'];   } else {$a3_6_9_b= NULL; }
   if (isset($_POST['3_6_10_b'])) {  $a3_6_10_b = $_POST['3_6_10_b'];   } else {$a3_6_10_b= 0; }
   if (isset($_POST['3_6_11_b'])) {  $a3_6_11_b = $_POST['3_6_11_b'];   } else {$a3_6_11_b= 0; }
   if (isset($_POST['3_6_12_b'])) {  $a3_6_12_b = $_POST['3_6_12_b'];   } else {$a3_6_12_b= 0; }

   if (isset($_POST['3_6_9_c'])) {  $a3_6_9_c = $_POST['3_6_9_c'];   } else {$a3_6_9_c= NULL; }
   if (isset($_POST['3_6_10_c'])) {  $a3_6_10_c = $_POST['3_6_10_c'];   } else {$a3_6_10_c= 0; }
   if (isset($_POST['3_6_11_c'])) {  $a3_6_11_c = $_POST['3_6_11_c'];   } else {$a3_6_11_c= 0; }
   if (isset($_POST['3_6_12_c'])) {  $a3_6_12_c = $_POST['3_6_12_c'];   } else {$a3_6_12_c= 0; }

   if (isset($_POST['3_6_9_d'])) {  $a3_6_9_d = $_POST['3_6_9_d'];   } else {$a3_6_9_d= NULL; }
   if (isset($_POST['3_6_10_d'])) {  $a3_6_10_d = $_POST['3_6_10_d'];   } else {$a3_6_10_d= 0; }
   if (isset($_POST['3_6_11_d'])) {  $a3_6_11_d = $_POST['3_6_11_d'];   } else {$a3_6_11_d= 0; }
   if (isset($_POST['3_6_12_d'])) {  $a3_6_12_d = $_POST['3_6_12_d'];   } else {$a3_6_12_d= 0; }

   if (isset($_POST['3_6_9_e'])) {  $a3_6_9_a = $_POST['3_6_9_e'];   } else {$a3_6_9_e= NULL; }
   if (isset($_POST['3_6_10_e'])) {  $a3_6_10_a = $_POST['3_6_10_e'];   } else {$a3_6_10_e= 0; }
   if (isset($_POST['3_6_11_e'])) {  $a3_6_11_a = $_POST['3_6_11_e'];   } else {$a3_6_11_e= 0; }
   if (isset($_POST['3_6_12_e'])) {  $a3_6_12_a = $_POST['3_6_12_e'];   } else {$a3_6_12_e= 0; }

   if (isset($_POST['3_6_9_f'])) {  $a3_6_9_f = $_POST['3_6_9_f'];   } else {$a3_6_9_f= NULL; }
   if (isset($_POST['3_6_10_f'])) {  $a3_6_10_f = $_POST['3_6_10_f'];   } else {$a3_6_10_f= 0; }
   if (isset($_POST['3_6_11_f'])) {  $a3_6_11_f = $_POST['3_6_11_f'];   } else {$a3_6_11_f= 0; }
   if (isset($_POST['3_6_12_f'])) {  $a3_6_12_f = $_POST['3_6_12_f'];   } else {$a3_6_12_f= 0; }

   if (isset($_POST['3_6_9_g'])) {  $a3_6_9_g = $_POST['3_6_9_g'];   } else {$a3_6_9_g= NULL; }
   if (isset($_POST['3_6_10_g'])) {  $a3_6_10_g = $_POST['3_6_10_g'];   } else {$a3_6_10_g= 0; }
   if (isset($_POST['3_6_11_g'])) {  $a3_6_11_g = $_POST['3_6_11_g'];   } else {$a3_6_11_g= 0; }
   if (isset($_POST['3_6_12_g'])) {  $a3_6_12_g = $_POST['3_6_12_g'];   } else {$a3_6_12_g= 0; }
        
    
 $sqlupdatesq = "UPDATE tblsurvey_question SET  3_6_5_a='$a3_6_5_a',  3_6_6_a='$a3_6_6_a',  3_6_7_a='$a3_6_7_a',  3_6_8_a='$a3_6_8_a',   3_6_5_b='$a3_6_5_b',  3_6_6_b='$a3_6_6_b',  3_6_7_b='$a3_6_7_b',  3_6_8_b='$a3_6_8_b',   3_6_5_c='$a3_6_5_c',  3_6_6_c='$a3_6_6_c',  3_6_7_c='$a3_6_7_c',  3_6_8_c='$a3_6_8_c',   3_6_5_d='$a3_6_5_d',  3_6_6_d='$a3_6_6_d',  3_6_7_d='$a3_6_7_d',  3_6_8_d='$a3_6_8_d',   3_6_5_e='$a3_6_5_e',  3_6_6_e='$a3_6_6_e',  3_6_7_e='$a3_6_7_e',  3_6_8_e='$a3_6_8_e',   3_6_5_f='$a3_6_5_f',  3_6_6_f='$a3_6_6_f',  3_6_7_f='$a3_6_7_f',  3_6_8_f='$a3_6_8_f',   3_6_5_g='$a3_6_5_g',  3_6_6_g='$a3_6_6_g',  3_6_7_g='$a3_6_7_g',  3_6_8_g='$a3_6_8_g',             3_6_9_a='$a3_6_9_a',  3_6_10_a='$a3_6_10_a',  3_6_11_a='$a3_6_11_a',  3_6_12_a='$a3_6_12_a',   3_6_9_b='$a3_6_9_b',  3_6_10_b='$a3_6_10_b',  3_6_11_b='$a3_6_11_b',  3_6_12_b='$a3_6_12_b',   3_6_9_c='$a3_6_9_c',  3_6_10_c='$a3_6_10_c',  3_6_11_c='$a3_6_11_c',  3_6_12_c='$a3_6_12_c',   3_6_9_d='$a3_6_9_d',  3_6_10_d='$a3_6_10_d',  3_6_11_d='$a3_6_11_d',  3_6_12_d='$a3_6_12_d',   3_6_9_e='$a3_6_9_a',  3_6_10_e='$a3_6_10_a',  3_6_11_e='$a3_6_11_a',  3_6_12_e='$a3_6_12_a',  3_6_9_f='$a3_6_9_f',  3_6_10_f='$a3_6_10_f',  3_6_11_f='$a3_6_11_f',  3_6_12_f='$a3_6_12_f',3_6_9_g='$a3_6_9_g',  3_6_10_g='$a3_6_10_g',  3_6_11_g='$a3_6_11_g',  3_6_12_g='$a3_6_12_g'  where household_id= '$household_id' ";    
        $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
           
            echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=survey4.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <div class="container-fluid">
        <h2>Paddy Sales of the last season (Maha 2021/22) </h2>
        Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="widget-header">
                

            </div>
            <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

            <?php
  
        include('survey3_6_Content.php');
     ?>
        </form>
    </div>
</div>