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
        
    if (isset($_POST['2_1_7_1']))  { $a2_1_7_1= $_POST['2_1_7_1'];} else {$a2_1_7_1 = 0; }
    if (isset($_POST['2_1_8_1'] )) { $a2_1_8_1= $_POST['2_1_8_1'];} else {$a2_1_8_1 = 0; }
    if (isset($_POST['2_1_9_1'] )) { $a2_1_9_1= $_POST['2_1_9_1'];} else {$a2_1_9_1 = 0; }
    if (isset($_POST['2_1_10_1'] )) { $a2_1_10_1 = $_POST['2_1_10_1'];} else {$a2_1_10_1 = 0; }
    if (isset($_POST['2_1_11_1'] )) { $a2_1_11_1 = $_POST['2_1_11_1'];} else {$a2_1_11_1 = 0; }
    if (isset($_POST['2_1_12_1'] )) { $a2_1_12_1 = $_POST['2_1_12_1'];} else {$a2_1_12_1 = 0; }
    if (isset($_POST['2_1_13_1'] )) { $a2_1_13_1 = $_POST['2_1_13_1'];} else {$a2_1_13_1 = 0; }
    
    if  (isset($_POST['2_1_7_2']))  {  $a2_1_7_2=   $_POST['2_1_7_2'];} else  {$a2_1_7_2 = 0; }
    if  (isset($_POST['2_1_8_2'] )) {  $a2_1_8_2=   $_POST['2_1_8_2'];} else  {$a2_1_8_2 = 0; }
    if  (isset($_POST['2_1_9_2'] )) {  $a2_1_9_2=   $_POST['2_1_9_2'];} else  {$a2_1_9_2 = 0; }
    if (isset($_POST['2_1_10_2'] )) { $a2_1_10_2 = $_POST['2_1_10_2'];} else {$a2_1_10_2 = 0; }
    if (isset($_POST['2_1_11_2'] )) { $a2_1_11_2 = $_POST['2_1_11_2'];} else {$a2_1_11_2 = 0; }
    if (isset($_POST['2_1_12_2'] )) { $a2_1_12_2 = $_POST['2_1_12_2'];} else {$a2_1_12_2 = 0; }
    if (isset($_POST['2_1_13_2'] )) { $a2_1_13_2 = $_POST['2_1_13_2'];} else {$a2_1_13_2 = 0; }
    
    if  (isset($_POST['2_1_7_3']))  {  $a2_1_7_3=   $_POST['2_1_7_3'];} else  {$a2_1_7_3 = 0; }
    if  (isset($_POST['2_1_8_3'] )) {  $a2_1_8_3=   $_POST['2_1_8_3'];} else  {$a2_1_8_3 = 0; }
    if  (isset($_POST['2_1_9_3'] )) {  $a2_1_9_3=   $_POST['2_1_9_3'];} else  {$a2_1_9_3 = 0; }
    if (isset($_POST['2_1_10_3'] )) { $a2_1_10_3 = $_POST['2_1_10_3'];} else {$a2_1_10_3 = 0; }
    if (isset($_POST['2_1_11_3'] )) { $a2_1_11_3 = $_POST['2_1_11_3'];} else {$a2_1_11_3 = 0; }
    if (isset($_POST['2_1_12_3'] )) { $a2_1_12_3 = $_POST['2_1_12_3'];} else {$a2_1_12_3 = 0; }
    if (isset($_POST['2_1_13_3'] )) { $a2_1_13_3 = $_POST['2_1_13_3'];} else {$a2_1_13_3 = 0; }
    
    if  (isset($_POST['2_1_7_4']))  {  $a2_1_7_4=   $_POST['2_1_7_4'];} else  {$a2_1_7_4 = 0; }
    if  (isset($_POST['2_1_8_4'] )) {  $a2_1_8_4=   $_POST['2_1_8_4'];} else  {$a2_1_8_4 = 0; }
    if  (isset($_POST['2_1_9_4'] )) {  $a2_1_9_4=   $_POST['2_1_9_4'];} else  {$a2_1_9_4 = 0; }
    if (isset($_POST['2_1_10_4'] )) { $a2_1_10_4 = $_POST['2_1_10_4'];} else {$a2_1_10_4 = 0; }
    if (isset($_POST['2_1_11_4'] )) { $a2_1_11_4 = $_POST['2_1_11_4'];} else {$a2_1_11_4 = 0; }
    if (isset($_POST['2_1_12_4'] )) { $a2_1_12_4 = $_POST['2_1_12_4'];} else {$a2_1_12_4 = 0; }
    if (isset($_POST['2_1_13_4'] )) { $a2_1_13_4 = $_POST['2_1_13_4'];} else {$a2_1_13_4 = 0; }
    
    if  (isset($_POST['2_1_7_5']))  {  $a2_1_7_5=   $_POST['2_1_7_5'];} else  {$a2_1_7_5 = 0; }
    if  (isset($_POST['2_1_8_5'] )) {  $a2_1_8_5=   $_POST['2_1_8_5'];} else  {$a2_1_8_5 = 0; }
    if  (isset($_POST['2_1_9_5'] )) {  $a2_1_9_5=   $_POST['2_1_9_5'];} else  {$a2_1_9_5 = 0; }
    if (isset($_POST['2_1_10_5'] )) { $a2_1_10_5 = $_POST['2_1_10_5'];} else {$a2_1_10_5 = 0; }
    if (isset($_POST['2_1_11_5'] )) { $a2_1_11_5 = $_POST['2_1_11_5'];} else {$a2_1_11_5 = 0; }
    if (isset($_POST['2_1_12_5'] )) { $a2_1_12_5 = $_POST['2_1_12_5'];} else {$a2_1_12_5 = 0; }
    if (isset($_POST['2_1_13_5'] )) { $a2_1_13_5 = $_POST['2_1_13_5'];} else {$a2_1_13_5 = 0; }
    
    if  (isset($_POST['2_1_7_6']))  {  $a2_1_7_6=   $_POST['2_1_7_6'];} else  {$a2_1_7_6 = 0; }
    if  (isset($_POST['2_1_8_6'] )) {  $a2_1_8_6=   $_POST['2_1_8_6'];} else  {$a2_1_8_6 = 0; }
    if  (isset($_POST['2_1_9_6'] )) {  $a2_1_9_6=   $_POST['2_1_9_6'];} else  {$a2_1_9_6 = 0; }
    if (isset($_POST['2_1_10_6'] )) { $a2_1_10_6 = $_POST['2_1_10_6'];} else {$a2_1_10_6 = 0; }
    if (isset($_POST['2_1_11_6'] )) { $a2_1_11_6 = $_POST['2_1_11_6'];} else {$a2_1_11_6 = 0; }
    if (isset($_POST['2_1_12_6'] )) { $a2_1_12_6 = $_POST['2_1_12_6'];} else {$a2_1_12_6 = 0; }
    if (isset($_POST['2_1_13_6'] )) { $a2_1_13_6 = $_POST['2_1_13_6'];} else {$a2_1_13_6 = 0; }
    
    if  (isset($_POST['2_1_7_7']))  {  $a2_1_7_7=   $_POST['2_1_7_7'];} else  {$a2_1_7_7 = 0; }
    if  (isset($_POST['2_1_8_7'] )) {  $a2_1_8_7=   $_POST['2_1_8_7'];} else  {$a2_1_8_7 = 0; }
    if  (isset($_POST['2_1_9_7'] )) {  $a2_1_9_7=   $_POST['2_1_9_7'];} else  {$a2_1_9_7 = 0; }
    if (isset($_POST['2_1_10_7'] )) { $a2_1_10_7 = $_POST['2_1_10_7'];} else {$a2_1_10_7 = 0; }
    if (isset($_POST['2_1_11_7'] )) { $a2_1_11_7 = $_POST['2_1_11_7'];} else {$a2_1_11_7 = 0; }
    if (isset($_POST['2_1_12_7'] )) { $a2_1_12_7 = $_POST['2_1_12_7'];} else {$a2_1_12_7 = 0; }
    if (isset($_POST['2_1_13_7'] )) { $a2_1_13_7 = $_POST['2_1_13_7'];} else {$a2_1_13_7 = 0; }
    
    if  (isset($_POST['2_1_7_8']))  {  $a2_1_7_8=   $_POST['2_1_7_8'];} else  {$a2_1_7_8 = 0; }
    if  (isset($_POST['2_1_8_8'] )) {  $a2_1_8_8=   $_POST['2_1_8_8'];} else  {$a2_1_8_8 = 0; }
    if  (isset($_POST['2_1_9_8'] )) {  $a2_1_9_8=   $_POST['2_1_9_8'];} else  {$a2_1_9_8 = 0; }
    if (isset($_POST['2_1_10_8'] )) { $a2_1_10_8 = $_POST['2_1_10_8'];} else {$a2_1_10_8 = 0; }
    if (isset($_POST['2_1_11_8'] )) { $a2_1_11_8 = $_POST['2_1_11_8'];} else {$a2_1_11_8 = 0; }
    if (isset($_POST['2_1_12_8'] )) { $a2_1_12_8 = $_POST['2_1_12_8'];} else {$a2_1_12_8 = 0; }
    if (isset($_POST['2_1_13_8'] )) { $a2_1_13_8 = $_POST['2_1_13_8'];} else {$a2_1_13_8 = 0; }
    
    if  (isset($_POST['2_1_7_9']))  {  $a2_1_7_9=   $_POST['2_1_7_9'];} else  {$a2_1_7_9 = 0; }
    if  (isset($_POST['2_1_8_9'] )) {  $a2_1_8_9=   $_POST['2_1_8_9'];} else  {$a2_1_8_9 = 0; }
    if  (isset($_POST['2_1_9_9'] )) {  $a2_1_9_9=   $_POST['2_1_9_9'];} else  {$a2_1_9_9 = 0; }
    if (isset($_POST['2_1_10_9'] )) { $a2_1_10_9 = $_POST['2_1_10_9'];} else {$a2_1_10_9 = 0; }
    if (isset($_POST['2_1_11_9'] )) { $a2_1_11_9 = $_POST['2_1_11_9'];} else {$a2_1_11_9 = 0; }
    if (isset($_POST['2_1_12_9'] )) { $a2_1_12_9 = $_POST['2_1_12_9'];} else {$a2_1_12_9 = 0; }
    if (isset($_POST['2_1_13_9'] )) { $a2_1_13_9 = $_POST['2_1_13_9'];} else {$a2_1_13_9 = 0; }
    
    if  (isset($_POST['2_1_7_10']))  {  $a2_1_7_10=   $_POST['2_1_7_10'];} else  {$a2_1_7_10 = 0; }
    if  (isset($_POST['2_1_8_10'] )) {  $a2_1_8_10=   $_POST['2_1_8_10'];} else  {$a2_1_8_10 = 0; }
    if  (isset($_POST['2_1_9_10'] )) {  $a2_1_9_10=   $_POST['2_1_9_10'];} else  {$a2_1_9_10 = 0; }
    if (isset($_POST['2_1_10_10'] )) { $a2_1_10_10 = $_POST['2_1_10_10'];} else {$a2_1_10_10 = 0; }
    if (isset($_POST['2_1_11_10'] )) { $a2_1_11_10 = $_POST['2_1_11_10'];} else {$a2_1_11_10 = 0; }
    if (isset($_POST['2_1_12_10'] )) { $a2_1_12_10 = $_POST['2_1_12_10'];} else {$a2_1_12_10 = 0; }
    if (isset($_POST['2_1_13_10'] )) { $a2_1_13_10 = $_POST['2_1_13_10'];} else {$a2_1_13_10 = 0; }
     
    $sqlupdatesq = "UPDATE tblsurvey_question SET 2_1_7_1='$a2_1_7_1', 2_1_8_1='$a2_1_8_1', 2_1_9_1='$a2_1_9_1', 2_1_10_1='$a2_1_10_1', 2_1_11_1='$a2_1_11_1', 2_1_12_1='$a2_1_12_1', 2_1_13_1='$a2_1_13_1', 		 2_1_7_2='$a2_1_7_2', 2_1_8_2='$a2_1_8_2', 2_1_9_2='$a2_1_9_2', 2_1_10_2='$a2_1_10_2', 2_1_11_2='$a2_1_11_2', 2_1_12_2='$a2_1_12_2', 2_1_13_2='$a2_1_13_2',  2_1_7_3='$a2_1_7_3', 2_1_8_3='$a2_1_8_3', 2_1_9_3='$a2_1_9_3', 2_1_10_3='$a2_1_10_3', 2_1_11_3='$a2_1_11_3', 2_1_12_3='$a2_1_12_3', 2_1_13_3='$a2_1_13_3',  2_1_7_4='$a2_1_7_4', 2_1_8_4='$a2_1_8_4', 2_1_9_4='$a2_1_9_4', 2_1_10_4='$a2_1_10_4', 2_1_11_4='$a2_1_11_4', 2_1_12_4='$a2_1_12_4', 2_1_13_4='$a2_1_13_4',  2_1_7_5='$a2_1_7_5', 2_1_8_5='$a2_1_8_5', 2_1_9_5='$a2_1_9_5', 2_1_10_5='$a2_1_10_5', 2_1_11_5='$a2_1_11_5', 2_1_12_5='$a2_1_12_5', 2_1_13_5='$a2_1_13_5',  2_1_7_6='$a2_1_7_6', 2_1_8_6='$a2_1_8_6', 2_1_9_6='$a2_1_9_6', 2_1_10_6='$a2_1_10_6', 2_1_11_6='$a2_1_11_6', 2_1_12_6='$a2_1_12_6', 2_1_13_6='$a2_1_13_6',  2_1_7_7='$a2_1_7_7', 2_1_8_7='$a2_1_8_7', 2_1_9_7='$a2_1_9_7', 2_1_10_7='$a2_1_10_7', 2_1_11_7='$a2_1_11_7', 2_1_12_7='$a2_1_12_7', 2_1_13_7='$a2_1_13_7',  2_1_7_8='$a2_1_7_8', 2_1_8_8='$a2_1_8_8', 2_1_9_8='$a2_1_9_8', 2_1_10_8='$a2_1_10_8', 2_1_11_8='$a2_1_11_8', 2_1_12_8='$a2_1_12_8', 2_1_13_8='$a2_1_13_8',  2_1_7_9='$a2_1_7_9', 2_1_8_9='$a2_1_8_9', 2_1_9_9='$a2_1_9_9', 2_1_10_9='$a2_1_10_9', 2_1_11_9='$a2_1_11_9', 2_1_12_9='$a2_1_12_9', 2_1_13_9='$a2_1_13_9',  2_1_7_10='$a2_1_7_10', 2_1_8_10='$a2_1_8_10', 2_1_9_10='$a2_1_9_10', 2_1_10_10='$a2_1_10_10', 2_1_11_10='$a2_1_11_10', 2_1_12_10='$a2_1_12_10', 2_1_13_10='$a2_1_13_10' where household_id= '$household_id' "; 				
        $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
           
            echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=survey2d.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <div class="container-fluid">
        <h2>need to do later </h2>
        Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="card card-primary">
                <div class="card-header">
                    c). Family labour use (2021/2022 Maha season)
                </div>

                <div class="card-body">
                    <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th rowspan="2">SN</th>
                                        <th rowspan="2">2.17.Did any of the household
                                            members involve in paddy farming
                                            activities in the last season?
                                            1;Yes, 2; No</th>
                                        <th colspan="6">2.18.How much time did they spend (in Average days) </th>
                                    </tr>
                                    <tr>
                                        <th>Inorganic Fertilizer application</th>
                                        <th>Organic fertilizer application</th>
                                        <th>Land Preparation</th>
                                        <th>Chemical application</th>
                                        <th>Harvest</th>
                                        <th>Post-harvest
                                            handling</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><div class="input-group"><select class="form-control" name="2_1_7_1" id="2_1_7_1"><option value="1">Yes</option><option value="2">No</option></select></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_8_1" id="2_1_8_1" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_9_1" id="2_1_9_1" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_10_1" id="2_1_10_1" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_11_1" id="2_1_11_1" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_12_1" id="2_1_12_1" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_13_1" id="2_1_13_1" class="form-control" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        
                                        <td><div class="input-group"><select class="form-control" name="2_1_7_2" id="2_1_7_2"><option value="1">Yes</option><option value="2">No</option></select></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_8_2" id="2_1_8_2" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_9_2" id="2_1_9_2" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_10_2" id="2_1_10_2" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_11_2" id="2_1_11_2" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_12_2" id="2_1_12_2" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_13_2" id="2_1_13_2" class="form-control" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><div class="input-group"><select class="form-control" name="2_1_7_3" id="2_1_7_3"><option value="1">Yes</option><option value="2">No</option></select></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_8_3" id="2_1_8_3" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_9_3" id="2_1_9_3" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_10_3" id="2_1_10_3" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_11_3" id="2_1_11_3" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_12_3" id="2_1_12_3" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_13_3" id="2_1_13_3" class="form-control" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><div class="input-group"><select class="form-control" name="2_1_7_4" id="2_1_7_4"><option value="1">Yes</option><option value="2">No</option></select></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_8_4" id="2_1_8_4" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_9_4" id="2_1_9_4" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_10_4" id="2_1_10_4" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_11_4" id="2_1_11_4" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_12_4" id="2_1_12_4" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_13_4" id="2_1_13_4" class="form-control" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><div class="input-group"><select class="form-control" name="2_1_7_5" id="2_1_7_5"><option value="1">Yes</option><option value="2">No</option></select></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_8_5" id="2_1_8_5" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_9_5" id="2_1_9_5" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_10_5" id="2_1_10_5" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_11_5" id="2_1_11_5" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_12_5" id="2_1_12_5" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_13_5" id="2_1_13_5" class="form-control" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><div class="input-group"><select class="form-control" name="2_1_7_6" id="2_1_7_6"><option value="1">Yes</option><option value="2">No</option></select></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_8_6" id="2_1_8_6" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_9_6" id="2_1_9_6" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_10_6" id="2_1_10_6" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_11_6" id="2_1_11_6" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_12_6" id="2_1_12_6" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_13_6" id="2_1_13_6" class="form-control" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><div class="input-group"><select class="form-control" name="2_1_7_7" id="2_1_7_7"><option value="1">Yes</option><option value="2">No</option></select></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_8_7" id="2_1_8_7" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_9_7" id="2_1_9_7" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_10_7" id="2_1_10_7" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_11_7" id="2_1_11_7" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_12_7" id="2_1_12_7" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_13_7" id="2_1_13_7" class="form-control" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td><div class="input-group"><select class="form-control" name="2_1_7_8" id="2_1_7_8"><option value="1">Yes</option><option value="2">No</option></select></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_8_8" id="2_1_8_8" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_9_8" id="2_1_9_8" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_10_8" id="2_1_10_8" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_11_8" id="2_1_11_8" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_12_8" id="2_1_12_8" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_13_8" id="2_1_13_8" class="form-control" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td><div class="input-group"><select class="form-control" name="2_1_7_9" id="2_1_7_9"><option value="1">Yes</option><option value="2">No</option></select></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_8_9" id="2_1_8_9" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_9_9" id="2_1_9_9" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_10_9" id="2_1_10_9" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_11_9" id="2_1_11_9" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_12_9" id="2_1_12_9" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_13_9" id="2_1_13_9" class="form-control" /></div></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td><div class="input-group"><select class="form-control" name="2_1_7_10" id="2_1_7_10"><option value="1">Yes</option><option value="2">No</option></select></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_8_10" id="2_1_8_10" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_9_10" id="2_1_9_10" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_10_10" id="2_1_10_10" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_11_10" id="2_1_11_10" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_12_10" id="2_1_12_10" class="form-control" /></div></td>
                                        <td><div class="input-group"><input type="text" required name="2_1_13_10" id="2_1_13_10" class="form-control" /></div></td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-default">Reset Button</button>
                    <button type="submit" name="btnsave" id="btnsave" class="btn btn-primary float-right">Submit
                        Button</button>
                </div>
        </form>
    </div>
</div>
</div>
</div>