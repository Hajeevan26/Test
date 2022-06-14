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
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div>KG</div>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div>Acres</div>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div>Rs/Kg</div>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div>Rs/Kg</div>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div>Pesticides</div>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div>Insecticides</div>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>Other</div>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manure</td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Liquid fertilizers</td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Other organic
                                            fertilizers</td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Other</td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
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
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cost for spraying machine</td>
                                        <td>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Other costs</td>
                                        <td>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
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
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>Pesticides</div>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div>Insecticides</div>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>Other</div>
                                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manure</td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td> Liquid fertilizers</td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Other organic
                                            fertilizers</td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> Other</td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                    class="form-control" />
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                                class="form-control" />
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                            id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                            id="1_2_1_b" value="2">Agrarian Devlopment Centre</label>
                                                </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                            id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                            id="1_2_1_d" value="4">Farmer association or
                                                        cooperative</label></div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="5">Neighbour</label> </div>
                                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                            id="1_2_1_e" value="6">Other</label> </div>
                                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                        class="form-control" />
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_a"
                                                                id="1_2_1_a" value="1">Retail Shop/ wholesaler</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_b"
                                                                id="1_2_1_b" value="2">Agrarian Devlopment
                                                            Centre</label>
                                                    </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_c"
                                                                id="1_2_1_c" value="3">Fellow farmer</label> </div>
                                                    <div class="checkbox"><label><input type="checkbox" name="1_2_1_d"
                                                                id="1_2_1_d" value="4">Farmer association or
                                                            cooperative</label></div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="5">Neighbour</label> </div>
                                                    <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e"
                                                                id="1_2_1_e" value="6">Other</label> </div>
                                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                            class="form-control" />
                                                    </div>
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
                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                            value="1">Water from major irrigation </label>
                                </div>
                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                            value="2">Rain-fed</label>
                                </div>
                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                            value="3">Water from minor irrigation</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                            value="4">Deep-wells</label></div>
                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                            value="5">Agro-wells</label> </div>
                                <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                            value="6">Other</label> </div>
                                <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" />
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
                                    <td>Fuel for water pump</td>
                                    <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                class="form-control" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rental cost for equipments (ex: Water pump)</td>
                                    <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                class="form-control" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Other costs</td>
                                    <td>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
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
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>Harvesting</td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
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
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>Harvesting</td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
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
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>Maha 2020/21</td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
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

                            <select class="form-control" name="3_1_1" id="3_1_1">
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
                            <div><input type="text" name="2_8" id="2_8" placeholder="Years" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>3.6.2. How far do you go for it?</label>
                            <div><input type="text" name="2_8" id="2_8" placeholder="Years" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">3.6.3. What is the transport method? </label>
                            <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a" value="1">By
                                    own vehicle
                                </label>
                            </div>
                            <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b" value="2">By
                                    a rented vehicle
                                </label>
                            </div>
                            <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                        value="3">The seller comes to the doorstep to buy paddy
                                </label> </div>

                            <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                        value="4">Other</label> </div>
                            <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" />
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
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>Rent for the vehicle
                                </td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>Other costs</td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
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