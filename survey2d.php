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
        
   

    if (isset($_POST['2_20_1'])) {  $a2_20_1 = $_POST['2_20_1'];   } else {$a2_20_1 = 0; }
    if (isset($_POST['2_20_2'])) {  $a2_20_2 = $_POST['2_20_2'];   } else {$a2_20_2 = 0; }
    if (isset($_POST['2_20_3'])) {  $a2_20_3 = $_POST['2_20_3'];   } else {$a2_20_3 = 0; }
    if (isset($_POST['2_20_4'])) {  $a2_20_4 = $_POST['2_20_4'];   } else {$a2_20_4 = 0; }
    if (isset($_POST['2_20_5'])) {  $a2_20_5 = $_POST['2_20_5'];   } else {$a2_20_5 = 0; }
    if (isset($_POST['2_20_6'])) {  $a2_20_6 = $_POST['2_20_6'];   } else {$a2_20_6 = 0; }
    if (isset($_POST['2_20_7'])) {  $a2_20_7 = $_POST['2_20_7'];   } else {$a2_20_7 = 0; }
    if (isset($_POST['2_20_8'])) {  $a2_20_8 = $_POST['2_20_8'];   } else {$a2_20_8 = 0; }
    if (isset($_POST['2_20_9'])) {  $a2_20_9 = $_POST['2_20_9'];   } else {$a2_20_9 = 0; }
    if (isset($_POST['2_20_10'])) {  $a2_20_10 = $_POST['2_20_10'];   } else {$a2_20_10 = 0; }
    if (isset($_POST['2_20_11'])) {  $a2_20_11 = $_POST['2_20_11'];   } else {$a2_20_11 = 0; }
    if (isset($_POST['2_20_12'])) {  $a2_20_12 = $_POST['2_20_12'];   } else {$a2_20_12 = 0; }

    if (isset($_POST['2_21_1'])) {  $a2_21_1 = $_POST['2_21_1'];   }else {$a2_21_1 = 0; }
    if (isset($_POST['2_21_2'])) {  $a2_21_2 = $_POST['2_21_2'];   } else {$a2_21_2 = 0; }
    if (isset($_POST['2_21_3'])) {  $a2_21_3 = $_POST['2_21_3'];   } else {$a2_21_3 = 0; }
    if (isset($_POST['2_21_4'])) {  $a2_21_4 = $_POST['2_21_4'];   } else {$a2_21_4 = 0; }
    if (isset($_POST['2_21_5'])) {  $a2_21_5 = $_POST['2_21_5'];   } else {$a2_21_5 = 0; }
    if (isset($_POST['2_21_6'])) {  $a2_21_6 = $_POST['2_21_6'];   } else {$a2_21_6 = 0; }
    if (isset($_POST['2_21_7'])) {  $a2_21_7 = $_POST['2_21_7'];   } else {$a2_21_7 = 0; }
    if (isset($_POST['2_21_8'])) {  $a2_21_8 = $_POST['2_21_8'];   } else {$a2_21_8 = 0; }
    if (isset($_POST['2_21_9'])) {  $a2_21_9 = $_POST['2_21_9'];   } else {$a2_21_9 = 0; }
    if (isset($_POST['2_21_10'])) {  $a2_21_10 = $_POST['2_21_10'];   } else {$a2_21_10 = 0; }
    if (isset($_POST['2_21_11'])) {  $a2_21_11 = $_POST['2_21_11'];   } else {$a2_21_11 = 0; }
    if (isset($_POST['2_21_12'])) {  $a2_21_12 = $_POST['2_21_12'];   } else {$a2_21_12 = 0; }

    if (isset($_POST['2_22_1'])) {  $a2_22_1 = $_POST['2_22_1'];   } else {$a2_22_1 = 0; }
    if (isset($_POST['2_22_2'])) {  $a2_22_2 = $_POST['2_22_2'];   } else {$a2_22_2 = 0; }
        
    
    $sqlupdatesq = "UPDATE tblsurvey_question SET  2_20_1='$a2_20_1',2_20_2='$a2_20_2',2_20_3='$a2_20_3',2_20_4='$a2_20_4',2_20_5='$a2_20_5',2_20_6='$a2_20_6',2_20_7='$a2_20_7',2_20_8='$a2_20_8',2_20_9='$a2_20_9',2_20_10='$a2_20_10',2_20_11='$a2_20_11',2_20_12='$a2_20_12',2_21_1='$a2_21_1',2_21_2='$a2_21_2',2_21_3='$a2_21_3',2_21_4='$a2_21_4',2_21_5='$a2_21_5',2_21_6='$a2_21_6',2_21_7='$a2_21_7',2_21_8='$a2_21_8',2_21_9='$a2_21_9',2_21_10='$a2_21_10',2_21_11='$a2_21_11',2_21_12='$a2_21_12',2_22_1='$a2_22_1',2_22_2='$a2_22_2'  where household_id= '$household_id' "; 	   
    $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
           
            echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=survey3_1.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <div class="container-fluid">
        <h2>2. ගොවිපල තොරතුරු (දිගටම...)</h2>
        Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="card card-primary">
                <div class="card-header">
                    d).කුලියට ගත් කම්කරු ශ්‍රමිකයන් පිලිබඳ තොරතුරු
                </div>

                <div class="card-body">
                    <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <label>2.19 ඔබ කුඹුරු වැඩ සඳහා කම්කරුවන් කුලියට ගත්තාද? </label>
                            <div class="input-group">

                                <select class="form-control" name="2_19" id="2_19" onchange="updatef2d()">
                                    
                                    <option value="1">නැත</option>
                                    <option value="2">ඔව් </option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div id="divid2_20">


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