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
        
   

        if (isset($_POST['6_1'])) {  $a6_1 = $_POST['6_1'];   } else {$a6_1 = 0; }
        if (isset($_POST['6_2'] )) { $a6_2 = $_POST['6_2'];} else {$a6_2 = 0; }
        if (isset($_POST['6_2_oth'] )) { $a6_2_oth = $_POST['6_2_oth'];} else {$a6_2_oth = NULL; }
        if (isset($_POST['6_3'] )) { $a6_3 = $_POST['6_3'];} else {$a6_3 = 0; }
        if (isset($_POST['6_3_oth'] )) { $a6_3_oth = $_POST['6_3_oth'];} else {$a6_3_oth = NULL; }
        if (isset($_POST['6_4a'] )) { $a6_4a = $_POST['6_4a'];} else {$a6_4a = 0; }
        if (isset($_POST['6_4b'] )) { $a6_4b = $_POST['6_4b'];} else {$a6_4b = 0; }
        if (isset($_POST['6_4c'] )) { $a6_4c = $_POST['6_4c'];} else {$a6_4c = 0; }
        if (isset($_POST['6_4d'] )) { $a6_4d = $_POST['6_4d'];} else {$a6_4d= 0; }
        if (isset($_POST['6_4e'] )) { $a6_4e = $_POST['6_4e'];} else {$a6_4e = 0; }
        if (isset($_POST['6_4f'] )) { $a6_4f = $_POST['6_4f'];} else {$a6_4f = 0; }
        if (isset($_POST['6_4g'] )) { $a6_4g = $_POST['6_4g'];} else {$a6_4g = 0; }
        if (isset($_POST['6_4h'] )) { $a6_4h = $_POST['6_4h'];} else {$a6_4h = 0; }
        if (isset($_POST['6_4i'] )) { $a6_4i = $_POST['6_4i'];} else {$a6_4i = 0; }
        if (isset($_POST['6_4_oth'] )) { $a6_4_oth = $_POST['6_4_oth'];} else {$a6_4_oth = NULL; }
    
        $sqlupdatesq = "UPDATE tblsurvey_question SET 6_1='$a6_1',6_2='$a6_2' ,6_3='$a6_3' ,6_4='$a6_4',6_4a='$a6_4a' ,6_4b='$a6_4b',6_4c=' $a6_4c',6_4d=' $a6_4d', 6_4e=' $a6_4e', 6_4f=' $a6_4f' ,6_4g='$a6_4g'  ,6_4h='$a6_4h',a6_4i='$a6_4i' ,6_4_oth='$a6_4_oth' where household_id= '$household_id' ";
        $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
           
            echo '<script> alert("your data added successfully");//window.location.href="index1.php?pg=surveyG.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <div class="container-fluid">Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="widget-header">
                <h4 class="widget-title">
                    <center>6.Decision on conversion into organic farming</center>
                </h4>

            </div>
            <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

            <?php
  
        include('survey6_Content.php');
     ?>
        </form>
    </div>
</div></div>