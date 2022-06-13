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
        
   

        if (isset($_POST['1_1_2_1'])) {  $a1_1_2_1 = $_POST['1_1_2_1'];   } else {$a1_1_2_1 = NULL; }
        if (isset($_POST['1_1_3_1'] )) { $a1_1_3_1 = $_POST['1_1_3_1'];} else {$a1_1_3_1 = NULL; }
        if (isset($_POST['1_1_4_1'] )) { $a1_1_4_1 = $_POST['1_1_4_1'];} else {$a1_1_4_1 = NULL; }
        if (isset($_POST['1_1_5_1'] )) { $a1_1_5_1 = $_POST['1_1_5_1'];} else {$a1_1_5_1 = NULL; }
        if (isset($_POST['1_1_6_1'] )) { $a1_1_6_1 = $_POST['1_1_6_1'];} else {$a1_1_6_1 = NULL; }
        if (isset($_POST['1_1_7_1'] )) { $a1_1_7_1 = $_POST['1_1_7_1'];} else {$a1_1_7_1 = NULL; }
        if (isset($_POST['1_1_8_1'] )) { $a1_1_8_1 = $_POST['1_1_8_1'];} else {$a1_1_8_1 = NULL; }
        if (isset($_POST['1_1_9_1'] )) { $a1_1_9_1 = $_POST['1_1_9_1'];} else {$a1_1_9_1 = NULL; }
        if (isset($_POST['1_1_10_1'] )) { $a1_1_10_1 = $_POST['1_1_10_1'];} else {$a1_1_10_1 = NULL; }
        if (isset($_POST['1_1_11_1'] )) { $a1_1_11_1 = $_POST['1_1_11_1'];} else {$a1_1_11_1 = NULL; }
        if (isset($_POST['1_1_12_1'] )) { $a1_1_12_1 = $_POST['1_1_12_1'];} else {$a1_1_12_1 = NULL; }
        if (isset($_POST['1_1_13_1'] )) { $a1_1_13_1 = $_POST['1_1_13_1'];} else {$a1_1_13_1 = NULL; }
        
    
        $sqlupdatesq = "UPDATE tblsurvey_question SET 1_1_2_1='$a1_1_2_1',1_1_3_1='$a1_1_3_1' ,1_1_4_1='$a1_1_4_1' ,1_1_5_1='$a1_1_5_1',1_1_6_1='$a1_1_7_1' ,1_1_7_1='$a1_1_7_1',1_1_8_1=' $a1_1_8_1',1_1_9_1=' $a1_1_9_1', 1_1_10_1=' $a1_1_10_1', 1_1_11_1=' $a1_1_11_1' ,1_1_12_1='$a1_1_12_1'  ,1_1_13_1='$a1_1_13_1'  where household_id= '$household_id' ";
        $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
           
            echo '<script> alert("your data added successfully");//window.location.href="index1.php?pg=surveyG.php";</script>';
           
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
                b). Farm machinery
                </div>

                <div class="card-body">
                    <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>2.16. Which of the following farm machinery/assets do you have?</label>
                                <div class="checkbox"><label><input type="checkbox" name="2_16a" id="2_16a"
                                            value="1">2-wheel tractor</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="2_16b" id="2_16b"
                                            value="2">4-wheel tractor
                                    </label></div>
                                <div class="checkbox"><label><input type="checkbox" name="2_16c" id="2_16c"
                                            value="3">Mechanical thresher</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="2_16d" id="2_16d"
                                            value="4">Reaper/ harvester
                                    </label></div>
                                <div class="checkbox"><label><input type="checkbox" name="2_16e" id="2_16e"
                                            value="5">Ground tiller
                                    </label></div>
                                <div class="checkbox"><label><input type="checkbox" name="2_16f" id="2_16f"
                                            value="6">Combined harvester
                                    </label></div>
                                    <div class="checkbox"><label><input type="checkbox" name="2_16f" id="2_16f"
                                            value="7">Sprayers
                                    </label></div>
                                    <div class="checkbox"><label><input type="checkbox" name="2_16f" id="2_16f"
                                            value="8">Water pump
                                    </label></div>
                                    <div class="checkbox"><label><input type="checkbox" name="2_16f" id="2_16f"
                                            value="9">Agro-wells
                                    </label></div>
                                    <div class="checkbox"><label><input type="checkbox" name="2_16f" id="2_16f"
                                            value="10">Others
                                    </label></div>

                            </div>
                        </div>
                        
               
          
                    </div>
                </div>
                <div class="card-footer">
                   
                   <button type="reset" class="btn btn-default">Reset Button</button>
                   <button type="submit" name="btnsave" id="btnsave" class="btn btn-primary float-right">Submit Button</button>
               </div>
        </form>
    </div>
</div>
</div>
</div>