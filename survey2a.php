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
        
        
    if (isset($_POST['2_9a']))  {  $a2_9a =  $_POST['2_9a'];      } else {$a2_9a = 0; }
    if (isset($_POST['2_10a'])) {  $a2_10a = $_POST['2_10a'];   } else {$a2_10a = 0; }
    if (isset($_POST['2_11a'])) {  $a2_11a = $_POST['2_11a'];   } else {$a2_11a = 0; }
    if (isset($_POST['2_12a'])) {  $a2_12a = $_POST['2_12a'];   } else {$a2_12a = 0; }
    if (isset($_POST['2_13a'])) {  $a2_13a = $_POST['2_13a'];   } else {$a2_13a = 0; }
    if (isset($_POST['2_14a'])) {  $a2_14a = $_POST['2_14a'];   } else {$a2_14a = 0; }
    if (isset($_POST['2_15a'])) {  $a2_15a = $_POST['2_15a'];   } else {$a2_15a = 0; }
    if (isset($_POST['2_16a'])) {  $a2_16a = $_POST['2_16a'];   } else {$a2_16a = 0; }
    if (isset($_POST['2_9b']))  {  $a2_9b =  $_POST['2_9b'];     } else {$a2_9b = 0; }
    if (isset($_POST['2_10b'])) {  $a2_10b = $_POST['2_10b'];   } else {$a2_10b = 0; }
    if (isset($_POST['2_11b'])) {  $a2_11b = $_POST['2_11b'];   } else {$a2_11b = 0; }
    if (isset($_POST['2_12b'])) {  $a2_12b = $_POST['2_12b'];   } else {$a2_12b = 0; }
    if (isset($_POST['2_13b'])) {  $a2_13b = $_POST['2_13b'];   } else {$a2_13b = 0; }
    if (isset($_POST['2_14b'])) {  $a2_14b = $_POST['2_14b'];   } else {$a2_14b = 0; }
    if (isset($_POST['2_15b'])) {  $a2_15b = $_POST['2_15b'];   } else {$a2_15b = 0; }
    if (isset($_POST['2_16b'])) {  $a2_16b = $_POST['2_16b'];   } else {$a2_16b = 0; }
    if (isset($_POST['2_9c']))  {  $a2_9c = $_POST['2_9c'];     } else {$a2_9c = 0; }
    if (isset($_POST['2_10c'])) {  $a2_10c = $_POST['2_10c'];   } else {$a2_10c = 0; }
    if (isset($_POST['2_11c'])) {  $a2_11c = $_POST['2_11c'];   } else {$a2_11c = 0; }
    if (isset($_POST['2_12c'])) {  $a2_12c = $_POST['2_12c'];   } else {$a2_12c = 0; }
    if (isset($_POST['2_13c'])) {  $a2_13c = $_POST['2_13c'];   } else {$a2_13c = 0; }
    if (isset($_POST['2_14c'])) {  $a2_14c = $_POST['2_14c'];   } else {$a2_14c = 0; }
    if (isset($_POST['2_15c'])) {  $a2_15c = $_POST['2_15c'];   } else {$a2_15c = 0; }
    if (isset($_POST['2_16c'])) {  $a2_16c = $_POST['2_16c'];   } else {$a2_16c = 0; }
    if (isset($_POST['2_9d']))  {  $a2_9d = $_POST['2_9d'];      } else {$a2_9d = 0; }
    if (isset($_POST['2_10d'])) {  $a2_10d = $_POST['2_10d'];   } else {$a2_10d = 0; }
    if (isset($_POST['2_11d'])) {  $a2_11d = $_POST['2_11d'];   } else {$a2_11d = 0; }
    if (isset($_POST['2_12d'])) {  $a2_12d = $_POST['2_12d'];   } else {$a2_12d = 0; }
    if (isset($_POST['2_13d'])) {  $a2_13d = $_POST['2_13d'];   } else {$a2_13d = 0; }
    if (isset($_POST['2_14d'])) {  $a2_14d = $_POST['2_14d'];   } else {$a2_14d = 0; }
    if (isset($_POST['2_15d'])) {  $a2_15d = $_POST['2_15d'];   } else {$a2_15d = 0; }
    if (isset($_POST['2_16d'])) {  $a2_16d = $_POST['2_16d'];   } else {$a2_16d = 0; }
        
    
    $sqlupdatesq = "UPDATE tblsurvey_question SET 2_9a ='$a2_9a', 2_10a='$a2_10a', 2_11a='$a2_11a', 2_12a='$a2_12a', 2_13a='$a2_13a', 2_14a='$a2_14a', 2_15a='$a2_15a', 2_15a_1='$a2_16a', 2_9b ='$a2_9b', 2_10b='$a2_10b', 2_11b='$a2_11b', 2_12b='$a2_12b', 2_13b='$a2_13b', 2_14b='$a2_14b', 2_15b='$a2_15b', 2_15b_1='$a2_16b', 2_9c ='$a2_9c', 2_10c='$a2_10c', 2_11c='$a2_11c', 2_12c='$a2_12c', 2_13c='$a2_13c', 2_14c='$a2_14c', 2_15c='$a2_15c', 2_15c_1='$a2_16c', 2_9d ='$a2_9d', 2_10d='$a2_10d', 2_11d='$a2_11d', 2_12d='$a2_12d', 2_13d='$a2_13d', 2_14d='$a2_14d', 2_15d='$a2_15d', 2_15d_1='$a2_16d' where household_id= '$household_id' ";        
    $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
           
            echo '<script> alert("your data added successfully");//window.location.href="index1.php?pg=survey2b.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <div class="container-fluid">
        <h2>2. Farm information </h2>
        Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="card card-primary">
                <div class="card-header">
                    a). Land assets (please put extent in Acres)
                </div>

                <div class="card-body">
                    <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

                    <?php
  
                        include('survey2a_Content.php');
                    ?>
                </div>
        </form>
    </div>
</div>
</div>
</div>