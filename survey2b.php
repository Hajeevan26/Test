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
        
        if (isset($_POST['2_16a'])) {  $a2_16a = $_POST['2_16a'];   } else {$a2_16a = 0; }
        if (isset($_POST['2_16b'])) {  $a2_16b = $_POST['2_16b'];   } else {$a2_16b = 0; }
        if (isset($_POST['2_16c'])) {  $a2_16c = $_POST['2_16c'];   } else {$a2_16c = 0; }
        if (isset($_POST['2_16d'])) {  $a2_16d = $_POST['2_16d'];   } else {$a2_16d = 0; }
        if (isset($_POST['2_16e'])) {  $a2_16e = $_POST['2_16e'];   } else {$a2_16e = 0; }
        if (isset($_POST['2_16f'])) {  $a2_16f = $_POST['2_16f'];   } else {$a2_16f = 0; }
        if (isset($_POST['2_16g'])) {  $a2_16g = $_POST['2_16g'];   } else {$a2_16g = 0; }
        if (isset($_POST['2_16h'])) {  $a2_16h = $_POST['2_16h'];   } else {$a2_16h = 0; }
        if (isset($_POST['2_16i'])) {  $a2_16i = $_POST['2_16i'];   } else {$a2_16i = 0; }
        if (isset($_POST['2_16j'])) {  $a2_16j = $_POST['2_16j'];   } else {$a2_16j = 0; }
        if (isset($_POST['2_16f_oth'] )) { $a2_16f_oth = $_POST['2_16f_oth'];} else {$a2_16f_oth = NULL; }
        
    
        $sqlupdatesq = "UPDATE tblsurvey_question SET 2_16a='$a2_16a',2_16b='$a2_16b' ,2_16c='$a2_16c' ,2_16d='$a2_16d',2_16e='$a2_16e' ,2_16f='$a2_16f',2_16g=' $a2_16g',2_16h=' $a2_16h', 2_16i=' $a2_16i', 2_16j=' $a2_16j' ,2_16f_oth='$a2_16f_oth'    where household_id= '$household_id' ";
        $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
           
            echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=survey2c.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <div class="container-fluid">
        <h2>2. ගොවිපල තොරතුරු </h2>
        Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="card card-primary">
                <div class="card-header">
                b). ගොවිපල යන්ත්‍රෝපකරණ
                </div>

                <div class="card-body">
                    <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>2.16.පහත සඳහන් කුමන ගොවිපල යන්ත්‍රෝපකරණ/වත්කම් ඔබ සතුව තිබේද</label>
                                <div class="checkbox"><label><input type="checkbox" name="2_16a" id="2_16a"
                                            value="1">2- රෝද ට්‍රැක්ටරය</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="2_16b" id="2_16b"
                                            value="2">4- රෝද ට්‍රැක්ටරය
                                    </label></div>
                                <div class="checkbox"><label><input type="checkbox" name="2_16c" id="2_16c"
                                            value="3">යාන්ත්‍රික තෙරපුම් යන්ත්‍ර</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="2_16d" id="2_16d"
                                            value="4">රීපර් / අස්වනු නෙලන යන්ත්‍රය
                                    </label></div>
                                <div class="checkbox"><label><input type="checkbox" name="2_16e" id="2_16e"
                                            value="5">බිම් ගොයම් කපන යන්ත්‍ර
                                    </label></div>
                                <div class="checkbox"><label><input type="checkbox" name="2_16f" id="2_16f"
                                            value="6">ඒකාබද්ධ අස්වනු නෙලන යන්ත්‍රය
                                    </label></div>
                                    <div class="checkbox"><label><input type="checkbox" name="2_16g" id="2_16g"
                                            value="7">රසායන ඉසින යන්ත්‍ර
                                    </label></div>
                                    <div class="checkbox"><label><input type="checkbox" name="2_16h" id="2_16h"
                                            value="8">ජල පොම්පය
                                    </label></div>
                                    <div class="checkbox"><label><input type="checkbox" name="2_16i" id="2_16i"
                                            value="9">කෘෂි ළිං
                                    </label></div>
                                    <div class="checkbox"><label><input type="checkbox" name="2_16j" id="2_16j"
                                            value="10" onclick="eDcheckOT('2_16j','2_16f_oth')">වෙනත්
                                    </label></div>

                            </div>
                            <div class="input-group" id="2_16f_ot"><input type="text" placeholder="වෙනත්" required name="2_16f_oth" id="2_16f_oth" class="form-control" /></div>

                        </div>
                        
               
          
                    </div>
                </div>
                <div class="card-footer">
                   
                   <button type="reset" class="btn btn-default">Reset Button</button>
                   <button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary float-right">Submit Button</button>
               </div>
        </form>
    </div>
</div>
</div>
</div>