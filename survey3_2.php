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
        <h2>need to do later </h2>
        Household number is -<?php echo $household_id; ?>
        <form role="form" action="" method="post">
            <div class="card card-primary">
                <div class="card-header">
                    d). Hired Labour
                </div>

                <div class="card-body">
                    <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <label>3.2.1 Did you use agro-chemicals for your paddy cultivation?</label>
                            <div class="input-group">
                                <select class="form-control" name="3_2_1" id="3_2_1">
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label>3.2.2 f yes, what type of Agro-chemicals you used in last 2021/22 Maha season?
                            </label>
                            <div class="form-group">

                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                            value="1">Weedicides</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                            value="2">Pesticides</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                            value="3">Insecticides</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                            value="4">Farmer association or cooperative</label></div>
                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                            value="5">None</label> </div>
                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                            value="5">Other</label> </div>
                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-bordered table-hover">

                                    <tr>
                                        <th> Type of agro-chemical 2021/22</th>
                                        <th>3.2.3.Amount (Kg/L) </th>
                                        <th>3.2.4.Area applied (Acres)</th>
                                        <th>3.2.5.Price per unit (Rs/Kg)</th>
                                        <th>3.2.6.Total Cost (Rs)</th>
                                        <th colspan="2">3.2.7.Source (Please use below codes)</th>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div>Weedicides</div>
                                            <div>3_2_a_1_1<input type="text" name="3_2_a_1_1" id="3_2_a_1_1"
                                                    class="form-control" /></div>
                                            <div>3_2_a_1_2<input type="text" name="3_2_a_1_2" id="3_2_a_1_2"
                                                    class="form-control" /></div>
                                            <div>3_2_a_1_3<input type="text" name="3_2_a_1_3" id="3_2_a_1_3"
                                                    class="form-control" /></div>
                                            <div>3_2_a_1_4<input type="text" name="3_2_a_1_4" id="3_2_a_1_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>KG</div>
                                            <div>3_2_a_3_1<input type="text" name="3_2_a_3_1" id="3_2_a_3_1"
                                                    class="form-control" /></div>
                                            <div>3_2_a_3_2<input type="text" name="3_2_a_3_2" id="3_2_a_3_2"
                                                    class="form-control" /></div>
                                            <div>3_2_a_3_3<input type="text" name="3_2_a_3_3" id="3_2_a_3_3"
                                                    class="form-control" /></div>
                                            <div>3_2_a_3_4<input type="text" name="3_2_a_3_4" id="3_2_a_3_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>Acres</div>
                                            <div>3_2_a_4_1<input type="text" name="3_2_a_4_1" id="3_2_a_4_1"
                                                    class="form-control" /></div>
                                            <div>3_2_a_4_2<input type="text" name="3_2_a_4_2" id="3_2_a_4_2"
                                                    class="form-control" /></div>
                                            <div>3_2_a_4_3<input type="text" name="3_2_a_4_3" id="3_2_a_4_3"
                                                    class="form-control" /></div>
                                            <div>3_2_a_4_4<input type="text" name="3_2_a_4_4" id="3_2_a_4_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>Rs/Kg</div>
                                            <div>3_2_a_5_1<input type="text" name="3_2_a_5_1" id="3_2_a_5_1"
                                                    class="form-control" /></div>
                                            <div>3_2_a_5_2<input type="text" name="3_2_a_5_2" id="3_2_a_5_2"
                                                    class="form-control" /></div>
                                            <div>3_2_a_5_3<input type="text" name="3_2_a_5_3" id="3_2_a_5_3"
                                                    class="form-control" /></div>
                                            <div>3_2_a_5_4<input type="text" name="3_2_a_5_4" id="3_2_a_5_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>Rs/Kg</div>
                                            <div>3_2_a_6_1<input type="text" name="3_2_a_6_1" id="3_2_a_6_1"
                                                    class="form-control" /></div>
                                            <div>3_2_a_6_2<input type="text" name="3_2_a_6_2" id="3_2_a_6_2"
                                                    class="form-control" /></div>
                                            <div>3_2_a_6_3<input type="text" name="3_2_a_6_3" id="3_2_a_6_3"
                                                    class="form-control" /></div>
                                            <div>3_2_a_6_4<input type="text" name="3_2_a_6_4" id="3_2_a_6_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div class="form-group">1
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_1_1"
                                                            id="3_2_a_7_1_1" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_1_2"
                                                            id="3_2_a_7_1_2" value="2">Agrarian Devlopment
                                                        Centre</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_1_3"
                                                            id="3_2_a_7_1_3" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_1_4"
                                                            id="3_2_a_7_1_4" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_1_5"
                                                            id="3_2_a_7_1_5" value="5">Neighbour</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_1_6"
                                                            id="3_2_a_7_1_6" value="6">Other</label> </div>

                                                <div>3_2_a_7_1_6_oth <input type="text" name="3_2_a_7_1_6_oth"
                                                        id="3_2_a_7_1_6_oth" class="form-control" /> </div>
                                                <hr>
                                                <div class="form-group">3
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_a_7_3_1" id="3_2_a_7_3_1" value="1">Retail
                                                            Shop/ wholesaler</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_a_7_3_2" id="3_2_a_7_3_2" value="2">Agrarian
                                                            Devlopment Centre</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_a_7_3_3" id="3_2_a_7_3_3" value="3">Fellow
                                                            farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_a_7_3_4" id="3_2_a_7_3_4" value="4">Farmer
                                                            association or cooperative</label></div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_a_7_3_5" id="3_2_a_7_3_5"
                                                                value="5">Neighbour</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_a_7_3_6" id="3_2_a_7_3_6"
                                                                value="6">Other</label> </div>

                                                    <div>3_2_a_7_3_6_oth <input type="text" name="3_2_a_7_1_6_oth"
                                                            id="3_2_a_7_1_6_oth" class="form-control" /> </div>


                                        </td>
                                        <td>
                                            <div class="form-group">2
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_2_1"
                                                            id="3_2_a_7_2_1" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_2_2"
                                                            id="3_2_a_7_2_2" value="2">Agrarian Devlopment
                                                        Centre</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_2_3"
                                                            id="3_2_a_7_2_3" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_2_4"
                                                            id="3_2_a_7_2_4" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_2_5"
                                                            id="3_2_a_7_2_5" value="5">Neighbour</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_2_6"
                                                            id="3_2_a_7_2_6" value="6">Other</label> </div>

                                                <div>3_2_a_7_2_6_oth <input type="text" name="3_2_a_7_2_6_oth"
                                                        id="3_2_a_7_2_6_oth" class="form-control" /> </div>
                                                <hr>
                                                <div class="form-group">4
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_a_7_3_1" id="3_2_a_7_3_1" value="1">Retail
                                                            Shop/ wholesaler</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_a_7_3_2" id="3_2_a_7_3_2" value="2">Agrarian
                                                            Devlopment Centre</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_a_7_3_3" id="3_2_a_7_3_3" value="3">Fellow
                                                            farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_a_7_3_4" id="3_2_a_7_3_4" value="4">Farmer
                                                            association or cooperative</label></div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_a_7_3_5" id="3_2_a_7_3_5"
                                                                value="5">Neighbour</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_a_7_3_6" id="3_2_a_7_3_6"
                                                                value="6">Other</label> </div>
                                                    <div>3_2_a_7_4_6_oth <input type="text" name="3_2_a_7_4_6_oth"
                                                            id="3_2_a_7_4_6_oth" class="form-control" /> </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div>Pesticides</div>
                                            <div>3_2_b_1_1<input type="text" name="3_2_b_1_1" id="3_2_b_1_1"
                                                    class="form-control" /></div>
                                            <div>3_2_b_1_2<input type="text" name="3_2_b_1_2" id="3_2_b_1_2"
                                                    class="form-control" /></div>
                                            <div>3_2_b_1_3<input type="text" name="3_2_b_1_3" id="3_2_b_1_3"
                                                    class="form-control" /></div>
                                            <div>3_2_b_1_4<input type="text" name="3_2_b_1_4" id="3_2_b_1_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>3_2_b_3_1<input type="text" name="3_2_b_3_1" id="3_2_b_3_1"
                                                    class="form-control" /></div>
                                            <div>3_2_b_3_2<input type="text" name="3_2_b_3_2" id="3_2_b_3_2"
                                                    class="form-control" /></div>
                                            <div>3_2_b_3_3<input type="text" name="3_2_b_3_3" id="3_2_b_3_3"
                                                    class="form-control" /></div>
                                            <div>3_2_b_3_4<input type="text" name="3_2_b_3_4" id="3_2_b_3_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>3_2_b_4_1<input type="text" name="3_2_b_4_1" id="3_2_b_4_1"
                                                    class="form-control" /></div>
                                            <div>3_2_b_4_2<input type="text" name="3_2_b_4_2" id="3_2_b_4_2"
                                                    class="form-control" /></div>
                                            <div>3_2_b_4_3<input type="text" name="3_2_b_4_3" id="3_2_b_4_3"
                                                    class="form-control" /></div>
                                            <div>3_2_b_4_4<input type="text" name="3_2_b_4_4" id="3_2_b_4_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>3_2_b_5_1<input type="text" name="3_2_b_5_1" id="3_2_b_5_1"
                                                    class="form-control" /></div>
                                            <div>3_2_b_5_2<input type="text" name="3_2_b_5_2" id="3_2_b_5_2"
                                                    class="form-control" /></div>
                                            <div>3_2_b_5_3<input type="text" name="3_2_b_5_3" id="3_2_b_5_3"
                                                    class="form-control" /></div>
                                            <div>3_2_b_5_4<input type="text" name="3_2_b_5_4" id="3_2_b_5_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>3_2_b_6_1<input type="text" name="3_2_b_6_1" id="3_2_a_6_1"
                                                    class="form-control" /></div>
                                            <div>3_2_b_6_2<input type="text" name="3_2_b_6_2" id="3_2_b_6_2"
                                                    class="form-control" /></div>
                                            <div>3_2_b_6_3<input type="text" name="3_2_b_6_3" id="3_2_b_6_3"
                                                    class="form-control" /></div>
                                            <div>3_2_b_6_4<input type="text" name="3_2_b_6_4" id="3_2_b_6_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>

                                            <div class="form-group">1
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_1_1"
                                                            id="3_2_b_7_1_1" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_1_2"
                                                            id="3_2_b_7_1_2" value="2">Agrarian Devlopment
                                                        Centre</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_1_3"
                                                            id="3_2_b_7_1_3" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_1_4"
                                                            id="3_2_b_7_1_4" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_1_5"
                                                            id="3_2_b_7_1_5" value="5">Neighbour</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_1_6"
                                                            id="3_2_b_7_1_6" value="6">Other</label> </div>

                                                <div>3_2_b_7_1_6_oth <input type="text" name="3_2_b_7_1_6_oth"
                                                        id="3_2_b_7_1_6_oth" class="form-control" /> </div>
                                                <hr>
                                                <div class="form-group">3
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_b_7_3_1" id="3_2_b_7_3_1" value="1">Retail
                                                            Shop/ wholesaler</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_b_7_3_2" id="3_2_b_7_3_2" value="2">Agrarian
                                                            Devlopment Centre</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_b_7_3_3" id="3_2_b_7_3_3" value="3">Fellow
                                                            farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_b_7_3_4" id="3_2_b_7_3_4" value="4">Farmer
                                                            association or cooperative</label></div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_b_7_3_5" id="3_2_b_7_3_5"
                                                                value="5">Neighbour</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_b_7_3_6" id="3_2_b_7_3_6"
                                                                value="6">Other</label> </div>

                                                    <div>3_2_b_7_3_6_oth <input type="text" name="3_2_b_7_1_6_oth"
                                                            id="3_2_b_7_1_6_oth" class="form-control" /> </div>
                                        </td>
                                        <td>
                                            <div class="form-group">2
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_2_1"
                                                            id="3_2_b_7_2_1" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_2_2"
                                                            id="3_2_b_7_2_2" value="2">Agrarian Devlopment
                                                        Centre</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_2_3"
                                                            id="3_2_b_7_2_3" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_2_4"
                                                            id="3_2_b_7_2_4" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_2_5"
                                                            id="3_2_b_7_2_5" value="5">Neighbour</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_2_6"
                                                            id="3_2_b_7_2_6" value="6">Other</label> </div>
                                                <div>3_2_b_7_2_6_oth <input type="text" name="3_2_b_7_2_6_oth"
                                                        id="3_2_b_7_2_6_oth" class="form-control" /> </div>
                                                <hr>
                                                <div class="form-group">4
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_b_7_3_1" id="3_2_b_7_3_1" value="1">Retail
                                                            Shop/ wholesaler</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_b_7_3_2" id="3_2_b_7_3_2" value="2">Agrarian
                                                            Devlopment Centre</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_b_7_3_3" id="3_2_b_7_3_3" value="3">Fellow
                                                            farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_b_7_3_4" id="3_2_b_7_3_4" value="4">Farmer
                                                            association or cooperative</label></div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_b_7_3_5" id="3_2_b_7_3_5"
                                                                value="5">Neighbour</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_b_7_3_6" id="3_2_b_7_3_6"
                                                                value="6">Other</label> </div>
                                                    <div>3_2_b_7_4_6_oth <input type="text" name="3_2_b_7_4_6_oth"
                                                            id="3_2_b_7_4_6_oth" class="form-control" /> </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div>Insecticides</div>
                                            <div>3_2_c_1_1<input type="text" name="3_2_c_1_1" id="3_2_c_1_1"
                                                    class="form-control" /></div>
                                            <div>3_2_c_1_2<input type="text" name="3_2_c_1_2" id="3_2_c_1_2"
                                                    class="form-control" /></div>
                                            <div>3_2_c_1_3<input type="text" name="3_2_c_1_3" id="3_2_c_1_3"
                                                    class="form-control" /></div>
                                            <div>3_2_c_1_4<input type="text" name="3_2_c_1_4" id="3_2_c_1_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>3_2_c_3_1<input type="text" name="3_2_c_3_1" id="3_2_c_3_1"
                                                    class="form-control" /></div>
                                            <div>3_2_c_3_2<input type="text" name="3_2_c_3_2" id="3_2_c_3_2"
                                                    class="form-control" /></div>
                                            <div>3_2_c_3_3<input type="text" name="3_2_c_3_3" id="3_2_c_3_3"
                                                    class="form-control" /></div>
                                            <div>3_2_c_3_4<input type="text" name="3_2_c_3_4" id="3_2_c_3_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>3_2_c_4_1<input type="text" name="3_2_c_4_1" id="3_2_c_4_1"
                                                    class="form-control" /></div>
                                            <div>3_2_c_4_2<input type="text" name="3_2_c_4_2" id="3_2_c_4_2"
                                                    class="form-control" /></div>
                                            <div>3_2_c_4_3<input type="text" name="3_2_c_4_3" id="3_2_c_4_3"
                                                    class="form-control" /></div>
                                            <div>3_2_c_4_4<input type="text" name="3_2_c_4_4" id="3_2_c_4_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>3_2_c_5_1<input type="text" name="3_2_c_5_1" id="3_2_c_5_1"
                                                    class="form-control" /></div>
                                            <div>3_2_c_5_2<input type="text" name="3_2_c_5_2" id="3_2_c_5_2"
                                                    class="form-control" /></div>
                                            <div>3_2_c_5_3<input type="text" name="3_2_c_5_3" id="3_2_c_5_3"
                                                    class="form-control" /></div>
                                            <div>3_2_c_5_4<input type="text" name="3_2_c_5_4" id="3_2_c_5_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>3_2_c_6_1<input type="text" name="3_2_c_6_1" id="3_2_a_6_1"
                                                    class="form-control" /></div>
                                            <div>3_2_c_6_2<input type="text" name="3_2_c_6_2" id="3_2_c_6_2"
                                                    class="form-control" /></div>
                                            <div>3_2_c_6_3<input type="text" name="3_2_c_6_3" id="3_2_c_6_3"
                                                    class="form-control" /></div>
                                            <div>3_2_c_6_4<input type="text" name="3_2_c_6_4" id="3_2_c_6_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div class="form-group">1
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_1_1"
                                                            id="3_2_c_7_1_1" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_1_2"
                                                            id="3_2_c_7_1_2" value="2">Agrarian Devlopment
                                                        Centre</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_1_3"
                                                            id="3_2_c_7_1_3" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_1_4"
                                                            id="3_2_c_7_1_4" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_1_5"
                                                            id="3_2_c_7_1_5" value="5">Neighbour</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_1_6"
                                                            id="3_2_c_7_1_6" value="6">Other</label> </div>

                                                <div>3_2_c_7_1_6_oth <input type="text" name="3_2_c_7_1_6_oth"
                                                        id="3_2_c_7_1_6_oth" class="form-control" /> </div>
                                                <hr>
                                                <div class="form-group">3
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_c_7_3_1" id="3_2_c_7_3_1" value="1">Retail
                                                            Shop/ wholesaler</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_c_7_3_2" id="3_2_c_7_3_2" value="2">Agrarian
                                                            Devlopment Centre</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_c_7_3_3" id="3_2_c_7_3_3" value="3">Fellow
                                                            farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_c_7_3_4" id="3_2_c_7_3_4" value="4">Farmer
                                                            association or cooperative</label></div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_c_7_3_5" id="3_2_c_7_3_5"
                                                                value="5">Neighbour</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_c_7_3_6" id="3_2_c_7_3_6"
                                                                value="6">Other</label> </div>

                                                    <div>3_2_c_7_3_6_oth <input type="text" name="3_2_c_7_1_6_oth"
                                                            id="3_2_c_7_1_6_oth" class="form-control" /> </div>
                                        </td>
                                        <td>
                                            <div class="form-group">2
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_2_1"
                                                            id="3_2_c_7_2_1" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_2_2"
                                                            id="3_2_c_7_2_2" value="2">Agrarian Devlopment
                                                        Centre</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_2_3"
                                                            id="3_2_c_7_2_3" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_2_4"
                                                            id="3_2_c_7_2_4" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_2_5"
                                                            id="3_2_c_7_2_5" value="5">Neighbour</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_2_6"
                                                            id="3_2_c_7_2_6" value="6">Other</label> </div>
                                                <div>3_2_c_7_2_6_oth <input type="text" name="3_2_c_7_2_6_oth"
                                                        id="3_2_c_7_2_6_oth" class="form-control" /> </div>
                                                <hr>
                                                <div class="form-group">4
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_c_7_3_1" id="3_2_c_7_3_1" value="1">Retail
                                                            Shop/ wholesaler</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_c_7_3_2" id="3_2_c_7_3_2" value="2">Agrarian
                                                            Devlopment Centre</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_c_7_3_3" id="3_2_c_7_3_3" value="3">Fellow
                                                            farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_c_7_3_4" id="3_2_c_7_3_4" value="4">Farmer
                                                            association or cooperative</label></div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_c_7_3_5" id="3_2_c_7_3_5"
                                                                value="5">Neighbour</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_c_7_3_6" id="3_2_c_7_3_6"
                                                                value="6">Other</label> </div>
                                                    <div>3_2_c_7_4_6_oth <input type="text" name="3_2_c_7_4_6_oth"
                                                            id="3_2_c_7_4_6_oth" class="form-control" /> </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>Other</div>
                                            <div>3_2_d_1_1<input type="text" name="3_2_d_1_1" id="3_2_d_1_1"
                                                    class="form-control" /></div>
                                            <div>3_2_d_1_2<input type="text" name="3_2_d_1_2" id="3_2_d_1_2"
                                                    class="form-control" /></div>
                                            <div>3_2_d_1_3<input type="text" name="3_2_d_1_3" id="3_2_d_1_3"
                                                    class="form-control" /></div>
                                            <div>3_2_d_1_4<input type="text" name="3_2_d_1_4" id="3_2_d_1_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>3_2_d_3_1<input type="text" name="3_2_d_3_1" id="3_2_d_3_1"
                                                    class="form-control" /></div>
                                            <div>3_2_d_3_2<input type="text" name="3_2_d_3_2" id="3_2_d_3_2"
                                                    class="form-control" /></div>
                                            <div>3_2_d_3_3<input type="text" name="3_2_d_3_3" id="3_2_d_3_3"
                                                    class="form-control" /></div>
                                            <div>3_2_d_3_4<input type="text" name="3_2_d_3_4" id="3_2_d_3_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>3_2_d_4_1<input type="text" name="3_2_d_4_1" id="3_2_d_4_1"
                                                    class="form-control" /></div>
                                            <div>3_2_d_4_2<input type="text" name="3_2_d_4_2" id="3_2_d_4_2"
                                                    class="form-control" /></div>
                                            <div>3_2_d_4_3<input type="text" name="3_2_d_4_3" id="3_2_d_4_3"
                                                    class="form-control" /></div>
                                            <div>3_2_d_4_4<input type="text" name="3_2_d_4_4" id="3_2_d_4_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>3_2_d_5_1<input type="text" name="3_2_d_5_1" id="3_2_d_5_1"
                                                    class="form-control" /></div>
                                            <div>3_2_d_5_2<input type="text" name="3_2_d_5_2" id="3_2_d_5_2"
                                                    class="form-control" /></div>
                                            <div>3_2_d_5_3<input type="text" name="3_2_d_5_3" id="3_2_d_5_3"
                                                    class="form-control" /></div>
                                            <div>3_2_d_5_4<input type="text" name="3_2_d_5_4" id="3_2_d_5_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div>3_2_d_6_1<input type="text" name="3_2_d_6_1" id="3_2_a_6_1"
                                                    class="form-control" /></div>
                                            <div>3_2_d_6_2<input type="text" name="3_2_d_6_2" id="3_2_d_6_2"
                                                    class="form-control" /></div>
                                            <div>3_2_d_6_3<input type="text" name="3_2_d_6_3" id="3_2_d_6_3"
                                                    class="form-control" /></div>
                                            <div>3_2_d_6_4<input type="text" name="3_2_d_6_4" id="3_2_d_6_4"
                                                    class="form-control" /></div>
                                        </td>
                                        <td>
                                            <div class="form-group">1
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_1_1"
                                                            id="3_2_d_7_1_1" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_1_2"
                                                            id="3_2_d_7_1_2" value="2">Agrarian Devlopment
                                                        Centre</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_1_3"
                                                            id="3_2_d_7_1_3" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_1_4"
                                                            id="3_2_d_7_1_4" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_1_5"
                                                            id="3_2_d_7_1_5" value="5">Neighbour</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_1_6"
                                                            id="3_2_d_7_1_6" value="6">Other</label> </div>

                                                <div>3_2_d_7_1_6_oth <input type="text" name="3_2_d_7_1_6_oth"
                                                        id="3_2_d_7_1_6_oth" class="form-control" /> </div>
                                                <hr>
                                                <div class="form-group">3
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_d_7_3_1" id="3_2_d_7_3_1" value="1">Retail
                                                            Shop/ wholesaler</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_d_7_3_2" id="3_2_d_7_3_2" value="2">Agrarian
                                                            Devlopment Centre</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_d_7_3_3" id="3_2_d_7_3_3" value="3">Fellow
                                                            farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_d_7_3_4" id="3_2_d_7_3_4" value="4">Farmer
                                                            association or cooperative</label></div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_d_7_3_5" id="3_2_d_7_3_5"
                                                                value="5">Neighbour</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_d_7_3_6" id="3_2_d_7_3_6"
                                                                value="6">Other</label> </div>

                                                    <div>3_2_d_7_3_6_oth <input type="text" name="3_2_d_7_1_6_oth"
                                                            id="3_2_d_7_1_6_oth" class="form-control" /> </div>
                                        </td>
                                        <td>
                                            <div class="form-group">2
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_2_1"
                                                            id="3_2_d_7_2_1" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_2_2"
                                                            id="3_2_d_7_2_2" value="2">Agrarian Devlopment
                                                        Centre</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_2_3"
                                                            id="3_2_d_7_2_3" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_2_4"
                                                            id="3_2_d_7_2_4" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_2_5"
                                                            id="3_2_d_7_2_5" value="5">Neighbour</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_2_6"
                                                            id="3_2_d_7_2_6" value="6">Other</label> </div>
                                                <div>3_2_d_7_2_6_oth <input type="text" name="3_2_d_7_2_6_oth"
                                                        id="3_2_d_7_2_6_oth" class="form-control" /> </div>
                                                <hr>
                                                <div class="form-group">4
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_d_7_3_1" id="3_2_d_7_3_1" value="1">Retail
                                                            Shop/ wholesaler</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_d_7_3_2" id="3_2_d_7_3_2" value="2">Agrarian
                                                            Devlopment Centre</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_d_7_3_3" id="3_2_d_7_3_3" value="3">Fellow
                                                            farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_d_7_3_4" id="3_2_d_7_3_4" value="4">Farmer
                                                            association or cooperative</label></div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_d_7_3_5" id="3_2_d_7_3_5"
                                                                value="5">Neighbour</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox"
                                                                name="3_2_d_7_3_6" id="3_2_d_7_3_6"
                                                                value="6">Other</label> </div>
                                                    <div>3_2_d_7_4_6_oth <input type="text" name="3_2_d_7_4_6_oth"
                                                            id="3_2_d_7_4_6_oth" class="form-control" /> </div>
                                        </td>
                                    </tr>




                                </table>
                            </div>

                            <div class="row">
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th rowspan="4">3.2.8. Costs incurred with chemical application (without labour
                                            costs)
                                        </th>
                                        <th>Reason</th>
                                        <th>Cost</th>
                                    </tr>
                                    <tr>
                                        <td>Fuel for transport fertilizer</td>
                                        <td>
                                            <div>3_2_8_1<input type="text" name="3_2_8_1" id="3_2_8_1"
                                                    class="form-control" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cost for spraying machine</td>
                                        <td>
                                            <div>3_2_8_2 <input type="text" name="3_2_8_2" id="3_2_8_2"
                                                    class="form-control" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Other costs</td>
                                        <td>
                                            <div>3_2_8_3<input type="text" name="3_2_8_3" id="3_2_8_3"
                                                    class="form-control" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row">
                                <table class="table table-bordered table-hover">

                                    <tr>
                                        <th> Type of agro-chemical 2020/21</th>
                                        <th>3.2.9.Amount (Kg/L) </th>
                                        <th>3.2.10.Area applied (Acres)</th>
                                        <th>3.2.11.Price per unit (Rs/Kg)</th>
                                        <th>3.2.12.Total Cost (Rs)</th>
                                        <th colspan="2">3.2.13.Source (Please use below codes)</th>
                                    </tr>
                                    <tr>
	<td>
		<div>Weedicides</div>
		<div>3_2_a_8_1<input type="text" name="3_2_a_8_1" id="3_2_a_8_1" class="form-control" /></div>
		<div>3_2_a_8_2<input type="text" name="3_2_a_8_2" id="3_2_a_8_2" class="form-control" /></div>
		<div>3_2_a_8_3<input type="text" name="3_2_a_8_3" id="3_2_a_8_3" class="form-control" /></div>
		<div>3_2_a_8_4<input type="text" name="3_2_a_8_4" id="3_2_a_8_4" class="form-control" /></div>
	</td>
	<td>
		<div>KG</div>
		<div>3_2_a_9_1<input type="text" name="3_2_a_3_1" id="3_2_a_9_1" class="form-control" /></div>
		<div>3_2_a_9_2<input type="text" name="3_2_a_3_2" id="3_2_a_9_2" class="form-control" /></div>
		<div>3_2_a_9_3<input type="text" name="3_2_a_3_3" id="3_2_a_9_3" class="form-control" /></div>
		<div>3_2_a_9_4<input type="text" name="3_2_a_3_4" id="3_2_a_9_4" class="form-control" /></div>
	</td>
	<td>
		<div>Acres</div>
		<div>3_2_a_10_1<input type="text" name="3_2_a_10_1" id="3_2_a_10_1" class="form-control" /></div>
		<div>3_2_a_10_2<input type="text" name="3_2_a_10_2" id="3_2_a_10_2" class="form-control" /></div>
		<div>3_2_a_10_3<input type="text" name="3_2_a_10_3" id="3_2_a_10_3" class="form-control" /></div>
		<div>3_2_a_10_4<input type="text" name="3_2_a_10_4" id="3_2_a_10_4" class="form-control" /></div>
	</td>
	<td>
		<div>Rs/Kg</div>
		<div>3_2_a_11_1<input type="text" name="3_2_a_11_1" id="3_2_a_11_1" class="form-control" /></div>
		<div>3_2_a_11_2<input type="text" name="3_2_a_11_2" id="3_2_a_11_2" class="form-control" /></div>
		<div>3_2_a_11_3<input type="text" name="3_2_a_11_3" id="3_2_a_11_3" class="form-control" /></div>
		<div>3_2_a_11_4<input type="text" name="3_2_a_11_4" id="3_2_a_11_4" class="form-control" /></div>
	</td>
	<td>
		<div>Rs/Kg</div>
		<div>3_2_a_12_1<input type="text" name="3_2_a_12_1" id="3_2_a_12_1" class="form-control" /></div>
		<div>3_2_a_12_2<input type="text" name="3_2_a_12_2" id="3_2_a_12_2" class="form-control" /></div>
		<div>3_2_a_12_3<input type="text" name="3_2_a_12_3" id="3_2_a_12_3" class="form-control" /></div>
		<div>3_2_a_12_4<input type="text" name="3_2_a_12_4" id="3_2_a_12_4" class="form-control" /></div>
	</td>
	<td>
		<div class="form-group">1
			<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_1_1" id="3_2_a_13_1_1" value="1">Retail Shop/ wholesaler</label></div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_1_2" id="3_2_a_13_1_2" value="2">Agrarian Devlopment Centre</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_1_3" id="3_2_a_13_1_3" value="3">Fellow farmer</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_1_4" id="3_2_a_13_1_4" value="4">Farmer association or cooperative</label></div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_1_5" id="3_2_a_13_1_5" value="5">Neighbour</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_1_6" id="3_2_a_13_1_6" value="6">Other</label> </div>

			<div>3_2_a_7_1_6_oth <input type="text" name="3_2_a_7_1_6_oth" id="3_2_a_7_1_6_oth" class="form-control" /> </div>
			<hr>
			<div class="form-group">3
				<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_1" id="3_2_a_13_3_1" value="1">Retail Shop/ wholesaler</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_2" id="3_2_a_13_3_2" value="2">Agrarian Devlopment Centre</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_3" id="3_2_a_13_3_3" value="3">Fellow farmer</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_4" id="3_2_a_13_3_4" value="4">Farmer association or cooperative</label></div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_5" id="3_2_a_13_3_5" value="5">Neighbour</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_6" id="3_2_a_13_3_6" value="6">Other</label> </div>

				<div>3_2_a_13_3_6_oth <input type="text" name="3_2_a_13_1_6_oth" id="3_2_a_13_1_6_oth" class="form-control" /> </div>


	</td>
	<td>
		<div class="form-group">2
			<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_2_1" id="3_2_a_13_2_1" value="1">Retail Shop/ wholesaler</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_2_2" id="3_2_a_13_2_2" value="2">Agrarian Devlopment Centre</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_2_3" id="3_2_a_13_2_3" value="3">Fellow farmer</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_2_4" id="3_2_a_13_2_4" value="4">Farmer association or cooperative</label></div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_2_5" id="3_2_a_13_2_5" value="5">Neighbour</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_2_6" id="3_2_a_13_2_6" value="6">Other</label> </div>

			<div>3_2_a_13_2_6_oth <input type="text" name="3_2_a_13_2_6_oth" id="3_2_a_13_2_6_oth" class="form-control" /> </div>
			<hr>
			<div class="form-group">4
				<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_1" id="3_2_a_13_3_1" value="1">Retail Shop/ wholesaler</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_2" id="3_2_a_13_3_2" value="2">Agrarian Devlopment Centre</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_3" id="3_2_a_13_3_3" value="3">Fellow farmer</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_4" id="3_2_a_13_3_4" value="4">Farmer association or cooperative</label></div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_5" id="3_2_a_13_3_5" value="5">Neighbour</label> </div> 
				<div class="checkbox"><label><input type="checkbox" name="3_2_a_13_3_6" id="3_2_a_13_3_6" value="6">Other</label> </div>
				<div>3_2_a_13_4_6_oth <input type="text" name="3_2_a_13_4_6_oth" id="3_2_a_13_4_6_oth" class="form-control" /> </div>
	</td>

	</tr>
	<tr>
	<td>
		<div>Pesticides</div>
		<div>3_2_b_8_1<input type="text" name="3_2_b_8_1" id="3_2_b_8_1" class="form-control" /></div>
		<div>3_2_b_8_2<input type="text" name="3_2_b_8_2" id="3_2_b_8_2" class="form-control" /></div>
		<div>3_2_b_8_3<input type="text" name="3_2_b_8_3" id="3_2_b_8_3" class="form-control" /></div>
		<div>3_2_b_8_4<input type="text" name="3_2_b_8_4" id="3_2_b_8_4" class="form-control" /></div>
	</td>
	<td>
		<div>3_2_b_9_1<input type="text" name="3_2_b_9_1" id="3_2_b_9_1" class="form-control" /></div>
		<div>3_2_b_9_2<input type="text" name="3_2_b_9_2" id="3_2_b_9_2" class="form-control" /></div>
		<div>3_2_b_9_3<input type="text" name="3_2_b_9_3" id="3_2_b_9_3" class="form-control" /></div>
		<div>3_2_b_9_4<input type="text" name="3_2_b_9_4" id="3_2_b_9_4" class="form-control" /></div>
	</td>
	<td>
		<div>3_2_b_10_1<input type="text" name="3_2_b_10_1" id="3_2_b_10_1" class="form-control" /></div>
		<div>3_2_b_10_2<input type="text" name="3_2_b_10_2" id="3_2_b_10_2" class="form-control" /></div>
		<div>3_2_b_10_3<input type="text" name="3_2_b_10_3" id="3_2_b_10_3" class="form-control" /></div>
		<div>3_2_b_10_4<input type="text" name="3_2_b_10_4" id="3_2_b_10_4" class="form-control" /></div>
	</td>
	<td>
		<div>3_2_b_11_1<input type="text" name="3_2_b_11_1" id="3_2_b_11_1" class="form-control" /></div>
		<div>3_2_b_11_2<input type="text" name="3_2_b_11_2" id="3_2_b_11_2" class="form-control" /></div>
		<div>3_2_b_11_3<input type="text" name="3_2_b_11_3" id="3_2_b_11_3" class="form-control" /></div>
		<div>3_2_b_11_4<input type="text" name="3_2_b_11_4" id="3_2_b_11_4" class="form-control" /></div>
	</td>
	<td>
		<div>3_2_b_12_1<input type="text" name="3_2_b_12_1" id="3_2_b_12_1" class="form-control" /></div>
		<div>3_2_b_12_2<input type="text" name="3_2_b_12_2" id="3_2_b_12_2" class="form-control" /></div>
		<div>3_2_b_12_3<input type="text" name="3_2_b_12_3" id="3_2_b_12_3" class="form-control" /></div>
		<div>3_2_b_12_4<input type="text" name="3_2_b_12_4" id="3_2_b_12_4" class="form-control" /></div>
	</td>
	<td>
		<div class="form-group">1
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_1" id="3_2_b_13_1_1" value="1">Retail Shop/ wholesaler</label></div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_2" id="3_2_b_13_1_2" value="2">Agrarian Devlopment Centre</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_3" id="3_2_b_13_1_3" value="3">Fellow farmer</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_4" id="3_2_b_13_1_4" value="4">Farmer association or cooperative</label></div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_5" id="3_2_b_13_1_5" value="5">Neighbour</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_6" id="3_2_b_13_1_6" value="6">Other</label> </div>

			<div>3_2_b_7_1_6_oth <input type="text" name="3_2_b_7_1_6_oth" id="3_2_b_7_1_6_oth" class="form-control" /> </div>
			<hr>
			<div class="form-group">3
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_1" id="3_2_b_13_3_1" value="1">Retail Shop/ wholesaler</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_2" id="3_2_b_13_3_2" value="2">Agrarian Devlopment Centre</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_3" id="3_2_b_13_3_3" value="3">Fellow farmer</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_4" id="3_2_b_13_3_4" value="4">Farmer association or cooperative</label></div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_5" id="3_2_b_13_3_5" value="5">Neighbour</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_6" id="3_2_b_13_3_6" value="6">Other</label> </div>

				<div>3_2_b_13_3_6_oth <input type="text" name="3_2_b_13_1_6_oth" id="3_2_b_13_1_6_oth" class="form-control" /> </div>


	</td>
	<td>
		<div class="form-group">2
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_1" id="3_2_b_13_2_1" value="1">Retail Shop/ wholesaler</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_2" id="3_2_b_13_2_2" value="2">Agrarian Devlopment Centre</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_3" id="3_2_b_13_2_3" value="3">Fellow farmer</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_4" id="3_2_b_13_2_4" value="4">Farmer association or cooperative</label></div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_5" id="3_2_b_13_2_5" value="5">Neighbour</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_6" id="3_2_b_13_2_6" value="6">Other</label> </div>

			<div>3_2_b_13_2_6_oth <input type="text" name="3_2_b_13_2_6_oth" id="3_2_b_13_2_6_oth" class="form-control" /> </div>
			<hr>
			<div class="form-group">4
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_1" id="3_2_b_13_3_1" value="1">Retail Shop/ wholesaler</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_2" id="3_2_b_13_3_2" value="2">Agrarian Devlopment Centre</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_3" id="3_2_b_13_3_3" value="3">Fellow farmer</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_4" id="3_2_b_13_3_4" value="4">Farmer association or cooperative</label></div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_5" id="3_2_b_13_3_5" value="5">Neighbour</label> </div> 
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_6" id="3_2_b_13_3_6" value="6">Other</label> </div>
				<div>3_2_b_13_4_6_oth <input type="text" name="3_2_b_13_4_6_oth" id="3_2_b_13_4_6_oth" class="form-control" /> </div>
	</td>
	</tr>

	<tr>
	<!-- c start -->
	<td>
		<div>Insecticides</div>
		<div>3_2_c_8_1<input type="text" name="3_2_c_8_1" id="3_2_c_8_1" class="form-control" /></div>
		<div>3_2_c_8_2<input type="text" name="3_2_c_8_2" id="3_2_c_8_2" class="form-control" /></div>
		<div>3_2_c_8_3<input type="text" name="3_2_c_8_3" id="3_2_c_8_3" class="form-control" /></div>
		<div>3_2_c_8_4<input type="text" name="3_2_c_8_4" id="3_2_c_8_4" class="form-control" /></div>
	</td>
	<td>
		<div>3_2_c_9_1<input type="text" name="3_2_c_9_1" id="3_2_c_9_1" class="form-control" /></div>
		<div>3_2_c_9_2<input type="text" name="3_2_c_9_2" id="3_2_c_9_2" class="form-control" /></div>
		<div>3_2_c_9_3<input type="text" name="3_2_c_9_3" id="3_2_c_9_3" class="form-control" /></div>
		<div>3_2_c_9_4<input type="text" name="3_2_c_9_4" id="3_2_c_9_4" class="form-control" /></div>
	</td>
	<td>
		<div>3_2_c_10_1<input type="text" name="3_2_c_10_1" id="3_2_c_10_1" class="form-control" /></div>
		<div>3_2_c_10_2<input type="text" name="3_2_c_10_2" id="3_2_c_10_2" class="form-control" /></div>
		<div>3_2_c_10_3<input type="text" name="3_2_c_10_3" id="3_2_c_10_3" class="form-control" /></div>
		<div>3_2_c_10_4<input type="text" name="3_2_c_10_4" id="3_2_c_10_4" class="form-control" /></div>
	</td>
	<td>
		<div>3_2_c_11_1<input type="text" name="3_2_b_11_1" id="3_2_b_11_1" class="form-control" /></div>
		<div>3_2_c_11_2<input type="text" name="3_2_b_11_2" id="3_2_b_11_2" class="form-control" /></div>
		<div>3_2_c_11_3<input type="text" name="3_2_b_11_3" id="3_2_b_11_3" class="form-control" /></div>
		<div>3_2_c_11_4<input type="text" name="3_2_b_11_4" id="3_2_b_11_4" class="form-control" /></div>
	</td>
	<td>
		<div>3_2_c_12_1<input type="text" name="3_2_c_12_1" id="3_2_c_12_1" class="form-control" /></div>
		<div>3_2_c_12_2<input type="text" name="3_2_c_12_2" id="3_2_c_12_2" class="form-control" /></div>
		<div>3_2_c_12_3<input type="text" name="3_2_c_12_3" id="3_2_c_12_3" class="form-control" /></div>
		<div>3_2_c_12_4<input type="text" name="3_2_c_12_4" id="3_2_c_12_4" class="form-control" /></div>
	</td>
	<td>
		<div class="form-group">1
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_1" id="3_2_b_13_1_1" value="1">Retail Shop/ wholesaler</label></div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_2" id="3_2_b_13_1_2" value="2">Agrarian Devlopment Centre</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_3" id="3_2_b_13_1_3" value="3">Fellow farmer</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_4" id="3_2_b_13_1_4" value="4">Farmer association or cooperative</label></div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_5" id="3_2_b_13_1_5" value="5">Neighbour</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_1_6" id="3_2_b_13_1_6" value="6">Other</label> </div>

			<div>3_2_b_7_1_6_oth <input type="text" name="3_2_b_7_1_6_oth" id="3_2_b_7_1_6_oth" class="form-control" /> </div>
			<hr>
			<div class="form-group">3
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_1" id="3_2_b_13_3_1" value="1">Retail Shop/ wholesaler</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_2" id="3_2_b_13_3_2" value="2">Agrarian Devlopment Centre</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_3" id="3_2_b_13_3_3" value="3">Fellow farmer</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_4" id="3_2_b_13_3_4" value="4">Farmer association or cooperative</label></div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_5" id="3_2_b_13_3_5" value="5">Neighbour</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_6" id="3_2_b_13_3_6" value="6">Other</label> </div>

				<div>3_2_b_13_3_6_oth <input type="text" name="3_2_b_13_1_6_oth" id="3_2_b_13_1_6_oth" class="form-control" /> </div>


	</td>
	<td>
		<div class="form-group">2
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_1" id="3_2_b_13_2_1" value="1">Retail Shop/ wholesaler</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_2" id="3_2_b_13_2_2" value="2">Agrarian Devlopment Centre</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_3" id="3_2_b_13_2_3" value="3">Fellow farmer</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_4" id="3_2_b_13_2_4" value="4">Farmer association or cooperative</label></div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_5" id="3_2_b_13_2_5" value="5">Neighbour</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_2_6" id="3_2_b_13_2_6" value="6">Other</label> </div>

			<div>3_2_b_13_2_6_oth <input type="text" name="3_2_b_13_2_6_oth" id="3_2_b_13_2_6_oth" class="form-control" /> </div>
			<hr>
			<div class="form-group">4
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_1" id="3_2_b_13_3_1" value="1">Retail Shop/ wholesaler</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_2" id="3_2_b_13_3_2" value="2">Agrarian Devlopment Centre</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_3" id="3_2_b_13_3_3" value="3">Fellow farmer</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_4" id="3_2_b_13_3_4" value="4">Farmer association or cooperative</label></div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_5" id="3_2_b_13_3_5" value="5">Neighbour</label> </div> 
				<div class="checkbox"><label><input type="checkbox" name="3_2_b_13_3_6" id="3_2_b_13_3_6" value="6">Other</label> </div>
				<div>3_2_b_13_4_6_oth <input type="text" name="3_2_b_13_4_6_oth" id="3_2_b_13_4_6_oth" class="form-control" /> </div>
	</td>
	</tr>
	<tr>
	<td>
		<div>Other</div>
		<div>3_2_d_8_1<input type="text" name="3_2_d_8_1" id="3_2_d_8_1" class="form-control" /></div>
		<div>3_2_d_8_2<input type="text" name="3_2_d_8_2" id="3_2_d_8_2" class="form-control" /></div>
		<div>3_2_d_8_3<input type="text" name="3_2_d_8_3" id="3_2_d_8_3" class="form-control" /></div>
		<div>3_2_d_8_4<input type="text" name="3_2_d_8_4" id="3_2_d_8_4" class="form-control" /></div>
	</td>
	<td>
		<div>3_2_d_9_1<input type="text" name="3_2_d_9_1" id="3_2_d_9_1" class="form-control" /></div>
		<div>3_2_d_9_2<input type="text" name="3_2_d_9_2" id="3_2_d_9_2" class="form-control" /></div>
		<div>3_2_d_9_3<input type="text" name="3_2_d_9_3" id="3_2_d_9_3" class="form-control" /></div>
		<div>3_2_d_9_4<input type="text" name="3_2_d_9_4" id="3_2_d_9_4" class="form-control" /></div>
	</td>
	<td>
		<div>3_2_d_10_1<input type="text" name="3_2_d_10_1" id="3_2_d_10_1" class="form-control" /></div>
		<div>3_2_d_10_2<input type="text" name="3_2_d_10_2" id="3_2_d_10_2" class="form-control" /></div>
		<div>3_2_d_10_3<input type="text" name="3_2_d_10_3" id="3_2_d_10_3" class="form-control" /></div>
		<div>3_2_d_10_4<input type="text" name="3_2_d_10_4" id="3_2_d_10_4" class="form-control" /></div>
	</td>
	<td>
		<div>3_2_d_11_1<input type="text" name="3_2_b_11_1" id="3_2_b_11_1" class="form-control" /></div>
		<div>3_2_d_11_2<input type="text" name="3_2_b_11_2" id="3_2_b_11_2" class="form-control" /></div>
		<div>3_2_d_11_3<input type="text" name="3_2_b_11_3" id="3_2_b_11_3" class="form-control" /></div>
		<div>3_2_d_11_4<input type="text" name="3_2_b_11_4" id="3_2_b_11_4" class="form-control" /></div>
	</td>
	<td>
		<div>3_2_d_12_1<input type="text" name="3_2_d_12_1" id="3_2_d_12_1" class="form-control" /></div>
		<div>3_2_d_12_2<input type="text" name="3_2_d_12_2" id="3_2_d_12_2" class="form-control" /></div>
		<div>3_2_d_12_3<input type="text" name="3_2_d_12_3" id="3_2_d_12_3" class="form-control" /></div>
		<div>3_2_d_12_4<input type="text" name="3_2_d_12_4" id="3_2_d_12_4" class="form-control" /></div>
	</td>
	<td>
		<div class="form-group">1
			<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_1_1" id="3_2_d_13_1_1" value="1">Retail Shop/ wholesaler</label></div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_1_2" id="3_2_d_13_1_2" value="2">Agrarian Devlopment Centre</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_1_3" id="3_2_d_13_1_3" value="3">Fellow farmer</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_1_4" id="3_2_d_13_1_4" value="4">Farmer association or cooperative</label></div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_1_5" id="3_2_d_13_1_5" value="5">Neighbour</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_1_6" id="3_2_d_13_1_6" value="6">Other</label> </div>

			<div>3_2_d_7_1_6_oth <input type="text" name="3_2_d_7_1_6_oth" id="3_2_d_7_1_6_oth" class="form-control" /> </div>
			<hr>
			<div class="form-group">3
				<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_1" id="3_2_d_13_3_1" value="1">Retail Shop/ wholesaler</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_2" id="3_2_d_13_3_2" value="2">Agrarian Devlopment Centre</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_3" id="3_2_d_13_3_3" value="3">Fellow farmer</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_4" id="3_2_d_13_3_4" value="4">Farmer association or cooperative</label></div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_5" id="3_2_d_13_3_5" value="5">Neighbour</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_6" id="3_2_d_13_3_6" value="6">Other</label> </div>

				<div>3_2_d_13_3_6_oth <input type="text" name="3_2_d_13_1_6_oth" id="3_2_d_13_1_6_oth" class="form-control" /> </div>


	</td>
	<td>
		<div class="form-group">2
			<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_2_1" id="3_2_d_13_2_1" value="1">Retail Shop/ wholesaler</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_2_2" id="3_2_d_13_2_2" value="2">Agrarian Devlopment Centre</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_2_3" id="3_2_d_13_2_3" value="3">Fellow farmer</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_2_4" id="3_2_d_13_2_4" value="4">Farmer association or cooperative</label></div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_2_5" id="3_2_d_13_2_5" value="5">Neighbour</label> </div>
			<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_2_6" id="3_2_d_13_2_6" value="6">Other</label> </div>

			<div>3_2_d_13_2_6_oth <input type="text" name="3_2_d_13_2_6_oth" id="3_2_d_13_2_6_oth" class="form-control" /> </div>
			<hr>
			<div class="form-group">4
				<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_1" id="3_2_d_13_3_1" value="1">Retail Shop/ wholesaler</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_2" id="3_2_d_13_3_2" value="2">Agrarian Devlopment Centre</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_3" id="3_2_d_13_3_3" value="3">Fellow farmer</label> </div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_4" id="3_2_d_13_3_4" value="4">Farmer association or cooperative</label></div>
				<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_5" id="3_2_d_13_3_5" value="5">Neighbour</label> </div> 
				<div class="checkbox"><label><input type="checkbox" name="3_2_d_13_3_6" id="3_2_d_13_3_6" value="6">Other</label> </div>
				<div>3_2_d_13_4_6_oth <input type="text" name="3_2_d_13_4_6_oth" id="3_2_d_13_4_6_oth" class="form-control" /> </div>
	</td>
	</tr>
                                </table>
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <h2> 3.3. Irrigation </h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">3.3.1 How do you irrigate your cultivations? </label>
                                <div class="checkbox"><label><input type="checkbox" name="3_3_1_a" id="1_2_1_a"
                                            value="1">Water from major irrigation </label>
                                </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_3_1_b" id="1_2_1_b"
                                            value="2">Rain-fed</label>
                                </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_3_1_c" id="1_2_1_c"
                                            value="3">Water from minor irrigation</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_3_1_d" id="1_2_1_d"
                                            value="4">Deep-wells</label></div>
                                <div class="checkbox"> <label><input type="checkbox" name="3_3_1_e" id="1_2_1_e"
                                            value="5">Agro-wells</label> </div>
                                <div class="checkbox"> <label><input type="checkbox" name="3_3_1_e" id="1_2_1_e"
                                            value="6">Other</label> </div>
                                <div>1.1.12.1 <input type="text" name="3_3_1_e_oth" id="3_3_1_e_oth" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th colspan="3">3.3.2. Costs incurred with irrigation</th>
                                </tr>
                                <tr>
                                    <th>Reason</th>
                                    <th>Cost</th>
                                </tr>
                                <tr>
                                    <td>Fuel for water pump </td>
                                    <td>
                                        <div>3_3_2_1<input type="text" name="3_3_2_1" id="3_3_2_1"
                                                class="form-control" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rental cost for equipments (ex: Water pump)</td>
                                    <td>
                                        <div>3_3_2_2<input type="text" name="3_3_2_2" id="3_3_2_2"
                                                class="form-control" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Other costs</td>
                                    <td>
                                        <div>3_3_2_3<input type="text" name="3_3_2_3" id="3_3_2_3"
                                                class="form-control" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>3.4. Land Management practices and Harvesting </h3>
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th rowspan="2"></th>
                                <th colspan="2">3.4.1. Method of practice</th>
                            </tr>
                            <tr>
                                <th>Manual</th>
                                <th>Mechanical</th>
                            </tr>
                            <tr>
                                <td>Land Management</td>
                                <td>
                                    <div>3_4_1_1<input type="text" name="3_4_1_1" id="3_4_1_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_4_1_2<input type="text" name="3_4_1_2" id="3_4_1_2"
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>Harvesting</td>
                                <td>
                                    <div>3_4_1_3<input type="text" name="3_4_1_3" id="3_4_1_3"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_4_1_4<input type="text" name="3_4_1_4" id="3_4_1_4"
                                            class="form-control" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">

                        <table class="table table-bordered table-hover">
                            <tr>
                                <th rowspan="2"></th>
                                <th colspan="3">3.4.2. Method of practice</th>
                            </tr>
                            <tr>
                                <th>Manual</th>
                                <th>Mechanical</th>
                                <th>Other Cost</th>
                            </tr>
                            <tr>
                                <td>Land Management</td>
                                <td>
                                    <div>3_4_2_1<input type="text" name="3_4_2_1" id="3_4_2_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_4_2_2<input type="text" name="3_4_2_2" id="3_4_2_2"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_4_2_3<input type="text" name="3_4_2_3" id="3_4_2_3"
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>Harvesting</td>
                                <td>
                                    <div>3_4_2_4<input type="text" name="3_4_2_4" id="3_4_2_4"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_4_2_5<input type="text" name="3_4_2_5" id="3_4_2_5"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_4_2_6<input type="text" name="3_4_2_6" id="3_4_2_6"
                                            class="form-control" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4>3.5.Yield information</h4>
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Season</th>
                                <th>3.5.1. Production/ harvest (Kg) </th>
                                <th>3.5.2. Sold amount</th>
                            </tr>
                            <tr>
                                <td>Maha 2021/22</td>
                                <td>
                                    <div>3_5_1_a<input type="text" name="3_5_1_a" id="3_5_1_a"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_5_2_a<input type="text" name="3_5_2_a" id="3_5_2_a"
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>Maha 2020/21</td>
                                <td>
                                    <div>3_5_1_b<input type="text" name="3_5_1_b" id="3_5_1_b"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_5_2_b<input type="text" name="3_5_2_b" id="3_5_2_b"
                                            class="form-control" />
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label>3.5.3. Are you satisfied with the harvest in Maha 2021/22? </label>
                        <div class="input-group">

                            <select class="form-control" name="3_5_3" id="3_5_3">
                                <option value="1">Highly satisfied, I had received a good harvest with a high difference
                                </option>
                                <option value="2">Satisfied, I had received the harvest with a low difference</option>
                                <option value="3">Neither satisfied nor dissatisfied with no difference</option>
                                <option value="4">Dissatisfied, I had received a comparatively low yield</option>
                                <option value="5">Highly dissatisfied, my harvest was really lower</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>3.6.1. What is the closest market to your farm?</label>
                            <div><input type="text" name="3_6_1" id="3_6_1" placeholder="Years" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>3.6.2. How far do you go for it?</label>
                            <div><input type="text" name="3_6_2" id="3_6_2" placeholder="Years" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">3.6.3. What is the transport method? </label>
                            <div class="checkbox"><label><input type="checkbox" name="3_6_3a" id="3_6_3a" value="1">By
                                    own vehicle
                                </label>
                            </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_6_3b" id="3_6_3b" value="2">By
                                    a rented vehicle
                                </label>
                            </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_6_3c" id="3_6_3bc"
                                        value="3">The seller comes to the doorstep to buy paddy
                                </label> </div>

                            <div class="checkbox"> <label><input type="checkbox" name="3_6_3d" id="3_6_3d"
                                        value="4">Other</label> </div>
                            <div>3_6_3d_oth<input type="text" name="3_6_3d_oth" id="3_6_3d_oth" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <table class="table table-bordered table-hover">
                            <tr>
                                <th colspan="3">3.6.4. Cost incurred with the marketing process?</th>
                            </tr>
                            <tr>
                                <th>Reason</th>
                                <th>Cost</th>
                            </tr>
                            <tr>
                                <td>Fuel for the vehicle</td>
                                <td>
                                    <div>3_6_4_1 <input type="text" name="3_6_4_1" id="3_6_4_1"
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>Rent for the vehicle
                                </td>
                                <td>
                                    <div>3_6_4_2<input type="text" name="3_6_4_2" id="3_6_4_2"
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>Other costs</td>
                                <td>
                                    <div>3_6_4_3 <input type="text" name="3_6_4_3" id="3_6_4_3"
                                            class="form-control" />
                                </td>
                            </tr>
                        </table>


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