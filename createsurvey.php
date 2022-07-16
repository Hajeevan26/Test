<?php
include('connection/config.php');
if (!isset($_SESSION)) {
    session_start();
}
$user_id = $_SESSION['user_id'];
$role_id = $_SESSION['role_id'];
$user_name=$_SESSION['user_name'];
date_default_timezone_set("Asia/Colombo");

$sql1 = "select household_id from tblsurvey_question where status=0 and interviewer_id='$user_id' order by household_id DESC";
              
$result1 = mysqli_query($con, $sql1) or die("error in insert Vehicle Id:" . mysqli_error($con));
$row = mysqli_fetch_assoc($result1);
$nor=mysqli_num_rows($result1);
if ($nor>0) {
    $idd = $row['household_id'];# code...
}

if (isset($_POST['btnsave'])) 
{

    if (isset($_POST['hblnot'])) { $hblnot= $_POST['hblnot']; } else {  $hblnot= NULL; }
    if (isset($_POST['hbl'])) { $hbl= $_POST['hbl']; } else {  $hbl= NULL; }
    if (isset($_POST['household_id'])) {  $household_id = $_POST['household_id'];   } else {$household_id = NULL; }
        if (isset($_POST['interviewer_id'] )) { $interviewer_id = $_POST['interviewer_id'];} else {$interviewer_id = NULL; }
        if (isset($_POST['date_created'] )) { $date_created = $_POST['date_created'];} else {$date_created = NULL; }
        if (isset($_POST['district'] )) { $district = $_POST['district'];} else {$district = NULL; }
        if (isset($_POST['ds_division'] )) { $ds_division = $_POST['ds_division'];} else {$ds_division = NULL; }
        if (isset($_POST['gn_division'] )) { $gn_division = $_POST['gn_division'];} else {$gn_division = NULL; }
        if (isset($_POST['village'] )) { $village = $_POST['village'];} else {$village = NULL; }
       // if (isset($_POST['control_sample'] )) { $control_sample = $_POST['control_sample'];} else {$control_sample = NULL; }
        //if (isset($_POST['treated_sample'] )) { $treated_sample = $_POST['treated_sample'];} else {$treated_sample = NULL; }
       // if (isset($_POST['organic_farmers'] )) { $organic_farmers = $_POST['organic_farmers'];} else {$organic_farmers = NULL; }
        //if (isset($_POST['conventional_farmers'] )) { $conventional_farmers = $_POST['conventional_farmers'];} else {$conventional_farmers = NULL; }
      
      
    if (!isset($idd)) 
    {
    $household_id = $_POST['household_id'];
    $sqlinsersurveyInfo = "INSERT INTO tblsurvey(household_id, interviewer_id, date_created,district,ds_division,gn_division,village,hbl,hblnot)
			VALUES('" . mysqli_real_escape_string($con, $_POST['household_id']) . "',
			'" . mysqli_real_escape_string($con, $_POST['interviewer_id']) . "',
            '" . mysqli_real_escape_string($con, $_POST['date_created']) . "',
            '" . mysqli_real_escape_string($con, $_POST['district']) . "',
            '" . mysqli_real_escape_string($con, $_POST['ds_division']) . "',
            '" . mysqli_real_escape_string($con, $_POST['gn_division']) . "',
            '" . mysqli_real_escape_string($con, $_POST['village']) . "',
          
            '" . mysqli_real_escape_string($con, $_POST['hbl']) . "', 
            '" . mysqli_real_escape_string($con, $hblnot). "')";

    $sqlinsertsurvey = "INSERT INTO tblsurvey_question(household_id,interviewer_id,district,ds_division,gn_division,village,hbl,hblnot,date_created)
			VALUES('" . mysqli_real_escape_string($con,  $_POST['household_id']) . "',
              '" . mysqli_real_escape_string($con, $_POST['interviewer_id']) . "',
              '" . mysqli_real_escape_string($con, $_POST['district']) . "',
              '" . mysqli_real_escape_string($con, $_POST['ds_division']) . "',
              '" . mysqli_real_escape_string($con, $_POST['gn_division']) . "',
              '" . mysqli_real_escape_string($con, $_POST['village']) . "',
           
              '" . mysqli_real_escape_string($con, $_POST['hbl']) . "',
              '" . mysqli_real_escape_string($con, $hblnot) . "',
              '" . mysqli_real_escape_string($con, $_POST['date_created']) . "')"; 
           
            $resultinsertsurveyInfo = mysqli_query($con, $sqlinsersurveyInfo) or die("error in insert survy info part:" . mysqli_error($con));
            $resultinsertsurvey = mysqli_query($con, $sqlinsertsurvey) or die("error in insert survey answer part:" . mysqli_error($con));
            if ($resultinsertsurveyInfo == 1 & $resultinsertsurvey == 1) {
            //if ( $resultinsertsurveyInfo == 1) {
                $_SESSION['household_id'] = $household_id;
                echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=survey1.php";</script>';
                // echo '<script> alert("your data added successfully");</script>';
                //header('location:index1.php?pg=survey.php');
            }
}
else
{
    $household_id = $idd;
    $sqlupdatesqq = "UPDATE tblsurvey_question SET district='$district',ds_division='$ds_division' ,gn_division='$gn_division' ,village='$village',
   hbl=' $hbl' ,hblnot='$hblnot'  where household_id= '$household_id' ";
    $resultupdatecustomerr = mysqli_query($con, $sqlupdatesqq) or die("error in update customer part:" . mysqli_error($con));

    $sqlupdatesq = "UPDATE tblsurvey SET district='$district',ds_division='$ds_division' ,gn_division='$gn_division' ,village='$village',
     hbl=' $hbl' ,hblnot='$hblnot'  where household_id= '$household_id' ";
    $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));


    if ($resultupdatecustomer == 1 && $resultupdatecustomer==1) 
    {
       
        echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=survey1.php";</script>';
       
        // $_SESSION['id'] = $id;
       
    }
}
}

?>
<div class="content">
    <div class="container-fluid">


        <h2>සමීක්ෂණ ප්‍රශ්නාවලිය</h2>

        <form role="form" action="" method="post">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>
                        <center>සාම්ප්‍රදායික ගොවිතැනේ සිට කාබනික ගොවිතැනට සංක්‍රමණය වීම පිලිබඳ ක්ෂේත්‍ර සමීක්ෂණය
                        </center>
                    </h4><br>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>Current Date</label>
                                <?php $date = date('Y-m-d H:i:s'); ?>
                                <input type="datetime" name="date_created" id="date_created" readonly
                                    value="<?php echo $date; ?>" class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="input-group">
                                <label> User ID </label>
                                <input type="number" min="0" required name="interviewer_id" id="interviewer_id" readonly
                                    value="<?php echo $user_id; ?>" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label> household_id</label>
                                <?php
                //Generate Vehicle id automatically-start
            

                if (!isset($_SESSION)) {
                    session_start();
                }
                if(isset($_SESSION['household_id'])) {
                    //$sql1 = "select household_id from tblsurvey_question where status=0 order by household_id DESC";
                    $id=$_SESSION['household_id'];
                }
               else{
                include('connection/config.php');
                $sql1 = "select household_id from tblsurvey_question order by household_id DESC";
                $result1 = mysqli_query($con, $sql1) or die("error in insert Vehicle Id:" . mysqli_error($con));
                $row = mysqli_fetch_assoc($result1);
                $id = $row['household_id'];
                if (mysqli_num_rows($result1) > 0) 
                {
                    $id = ++$id;
                } 
                else 
                {
                   // $SUFFIX = '0001 ';
                    $id = $user_name .'0001';
                }
            }
                ?>
                                <input type="text" required class="form-control" readonly required id="household_id"
                                    value="<?php echo $id; ?>" name="household_id">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label>දිස්ත්‍රික්කය</label>
                                <select class="form-control" name="district" id="district" onChange="callScreener1();">
                                    <option value="1">Anuradapura</option>
                                    <option value="2">Polonnaruwa</option>
                                    <option value="3">Kurunegala</option>
                                    <option value="4">Kalutara</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <label>ප්‍රාදේශීය ලේකම් කොට්ඨාශය</label>
                                <input type="text" required name="ds_division" required id="ds_division"
                                    class="form-control col-md-5"  />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <label> ග්‍රාම නිළධාරී කොට්ඨාශය </label>

                                <input type="text" required name="gn_division" required id="gn_division"
                                    class="form-control" />
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <label> ග්‍රාමයේ නම </label>
                                <input type="text" required name="village" id="village" class="form-control" />
                                <font color="red">
                                    <div id="tperrormsg"></div>
                                </font>
                            </div>
                        </div>


                    </div>
                    <hr>
                    <!--div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <label> පාලිත නියැදිය </label>
                                <select class="form-control  col-4" name="control_sample" id="control_sample">
                                    <option value="1">ඔව්</option>
                                    <option value="2">නැත</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label> ප්‍රතිකාර කළ නියැදිය </label>
                                <select class="form-control col-4" name="treated_sample" id="treated_sample">
                                    <option value="1">ඔව්</option>
                                    <option value="2">නැත</option>
                                </select>
                            </div>
                        </div> -->

                        <!--div class="col-md-3">
                            <div class="input-group">
                                <label> කාබනික ගොවියා</label>
                                <select class="form-control col-4" name="organic_farmers" id="organic_farmers">
                                    <option value="1">ඔව්</option>
                                    <option value="2">නැත</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <label> සාම්ප්‍රදායික ගොවියා </label>
                                <select class="form-control col-4" name="conventional_farmers"
                                    id="conventional_farmers">
                                    <option value="1">ඔව්</option>
                                    <option value="2">නැත</option>
                                </select>
                            </div>
                        </div>
                    </div-->
                   
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="input-group">
                                <label> නිවස ස්ථානගත කළ හැකිද?</label>
                                <select class="form-control" name="hbl" id="hbl" onChange="funhbl();">
                                    <option value="1">ඔව්</option>
                                    <option value="2">නැත</option>
                                </select>
                            </div>
                            <div id="loadhblnot">
                            </div>
                        </div>

                        <div class="col-md-4"></div>

                    </div>
                    <hr>
                    <br>


                    <div class="card-footer">

                        <button type="reset" class="btn btn-default">Reset Button</button>
                        <button type="submit" name="btnsave" id="btnsave" class="btn btn-primary float-right">Submit
                            Button</button>
                    </div>



                </div>
            </div>
        </form>
    </div>
</div>
</div>