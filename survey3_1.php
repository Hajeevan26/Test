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
                            <label>3.1.1 What type of fertilizer you used in last 2021/22 Maha season? </label>
                            <div class="input-group">

                                <select class="form-control" name="3_1_1" id="3_1_1" onchange="funb3_1_1()">
                                    <option value="1">Inorganic fertilizer only </option>
                                    <option value="2">Organic fertilizer only</option>
                                    <option value="3">Mixture of both inorganic and organic fertilizers</option>
                                    <option value="4">None</option>
                                    <option value="5">Other</option>
                                </select>
                            </div>
                            <div id="divid3_1_1"></div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <table class="table table-bordered table-hover">

                            <tr>
                                <th> Type of fertilizer usage for 2021/22 </th>
                                <th>3.1.2.Amount (Kg)</th>
                                <th>3.1.3.Area applied (Acres)</th>
                                <th>3.1.4.Price per unit (Rs/Kg)</th>
                                <th>3.1.5.Total Cost (Rs) </th>
                                <th>3.1.6.Source (Please use below codes) </th>

                            </tr>
                            <tr>
                                <td>Urea</td>
                                <td>
                                    <div>3_1_2_1<input type="text" name="3_1_2_1" id="3_1_2_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_1 <input type="text" name="3_1_3_1" id="3_1_3_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_1<input type="text" name="3_1_4_1" id="3_1_4_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_1<input type="text" name="3_1_5_1" id="3_1_5_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_1a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler-3_1_6_1a</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_1b" id="3_1_6_1b"
                                                    value="2">Agrarian Devlopment Centre-3_1_6_1b</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_1c" id="3_1_6_1c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_1d" id="3_1_6_1d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_1e" id="3_1_6_1e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_1f" id="3_1_6_1f"
                                                    value="5">Other</label> </div>
                                        <div>3_1_6_1f_oth<input type="text" name="3_1_6_1f_oth" id="3_1_6_1f_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td>TSP</td>
                                <td>
                                    <div>3_1_2_2<input type="text" name="3_1_2_2" id="3_1_2_2"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_2<input type="text" name="3_1_3_2" id="3_1_3_2"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_2<input type="text" name="3_1_4_2" id="3_1_4_2"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_2<input type="text" name="3_1_5_2" id="3_1_5_2"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="3_1_6_2a" id="3_1_6_2a"
value="1">Retail Shop/ wholesaler-3_1_6_2a</label> </div>
<div class="checkbox"><label><input type="checkbox" name="3_1_6_2b" id="3_1_6_2b"
value="2">Agrarian Devlopment Centre-3_1_6_2b</label> </div>
<div class="checkbox"><label><input type="checkbox" name="3_1_6_2c" id="3_1_6_2c"
value="3">Fellow farmer</label> </div>
<div class="checkbox"><label><input type="checkbox" name="3_1_6_2d" id="3_1_6_2d"
value="4">Farmer association or cooperative</label></div>
<div class="checkbox"> <label><input type="checkbox" name="3_1_6_2e" id="3_1_6_2e"
value="5">Neighbour</label> </div>
<div class="checkbox"> <label><input type="checkbox" name="3_1_6_2f" id="3_1_6_2f"
value="5">Other</label> </div>
<div>3_1_6_2f_oth<input type="text" name="3_1_6_2f_oth" id="3_1_6_2f_oth"
	class="form-control" />
</div>
                                </td>

                            </tr>

                            <tr>
                                <td>MOP</td>
                                <td>
                                    <div>3_1_2_3<input type="text" name="3_1_2_3" id="3_1_2_3"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_3<input type="text" name="3_1_3_3" id="3_1_3_3"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_3<input type="text" name="3_1_4_3" id="3_1_4_3"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_3<input type="text" name="3_1_5_3" id="3_1_5_3"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="3_1_6_3a" id="3_1_6_3a"
value="1">Retail Shop/ wholesaler-3_1_6_3a</label> </div>
<div class="checkbox"><label><input type="checkbox" name="3_1_6_3b" id="3_1_6_3b"
value="2">Agrarian Devlopment Centre-3_1_6_3b</label> </div>
<div class="checkbox"><label><input type="checkbox" name="3_1_6_3c" id="3_1_6_3c"
value="3">Fellow farmer</label> </div>
<div class="checkbox"><label><input type="checkbox" name="3_1_6_3d" id="3_1_6_3d"
value="4">Farmer association or cooperative</label></div>
<div class="checkbox"> <label><input type="checkbox" name="3_1_6_3e" id="3_1_6_3e"
value="5">Neighbour</label> </div>
<div class="checkbox"> <label><input type="checkbox" name="3_1_6_3f" id="3_1_6_3f"
value="5">Other</label> </div>
<div>3_1_6_3f_oth<input type="text" name="3_1_6_3f_oth" id="3_1_6_3f_oth"
	class="form-control" />
</div>
                                </td>

                            </tr>
                            <tr>
                                <td>Compost</td>
                                <td>
                                    <div>3_1_2_4<input type="text" name="3_1_2_4" id="3_1_2_4"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_4<input type="text" name="3_1_3_4" id="3_1_3_4"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_4<input type="text" name="3_1_4_4" id="3_1_4_4"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_4<input type="text" name="3_1_5_4" id="3_1_5_4"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_4a" id="3_1_6_4a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_4b" id="3_1_6_4b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_4c" id="3_1_6_4c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_4d" id="3_1_6_4d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_4e" id="3_1_6_4e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_4e" id="3_1_6_4e"
                                                    value="5">Other</label> </div>
                                        <div>1.1.12.1 <input type="text" name="3_1_6_4e_oth" id="3_1_6_4e_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Manure</td>
                                <td>
                                    <div>3_1_2_5<input type="text" name="3_1_2_5" id="3_1_2_5"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_5<input type="text" name="3_1_3_5" id="3_1_3_5"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_5<input type="text" name="3_1_4_5" id="3_1_4_5"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_5<input type="text" name="3_1_5_5" id="3_1_5_5"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_6a" id="3_1_6_6a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_6b" id="3_1_6_6b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_6c" id="3_1_6_6c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_5_6d" id="3_1_6_6d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_6e" id="3_1_6_6e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_6e" id="3_1_6_6e"
                                                    value="5">Other</label> </div>
                                        <div>3_1_6_6e_oth<input type="text" name="3_1_6_6e_oth" id="3_1_6_6e_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>


                            <tr>
                                <td> Liquid fertilizers</td>
                                <td>
                                    <div>3_1_2_6<input type="text" name="3_1_2_6" id="3_1_2_6"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_6<input type="text" name="3_1_3_6" id="3_1_3_6"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_6<input type="text" name="3_1_4_6" id="3_1_4_6"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_6<input type="text" name="3_1_5_6" id="3_1_5_6"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_6_6a" id="3_1_5_6a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_6b" id="3_1_5_6b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_6c" id="3_1_5_6c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_6d" id="3_1_5_6d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_6e" id="3_1_5_6e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_6e" id="3_1_5_6e"
                                                    value="5">Other</label> </div>
                                        <div>3_1_5_6e_oth<input type="text" name="3_1_5_6e_oth" id="3_1_6_6e_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td> Other organic
                                    fertilizers</td>
                                    <td>
                                    <div>3_1_2_7<input type="text" name="3_1_2_7" id="3_1_2_7"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_7<input type="text" name="3_1_3_7" id="3_1_3_7"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_7<input type="text" name="3_1_4_7" id="3_1_4_7"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_7<input type="text" name="3_1_5_7" id="3_1_5_7"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_6_7a" id="3_1_5_7a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_7b" id="3_1_5_7b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_7c" id="3_1_5_7c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_7d" id="3_1_5_7d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_7e" id="3_1_5_7e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_7e" id="3_1_5_7e"
                                                    value="5">Other</label> </div>
                                        <div>3_1_5_7e_oth<input type="text" name="3_1_5_7e_oth" id="3_1_6_7e_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td> Other</td>
                                <td>
                                    <div>3_1_2_8<input type="text" name="3_1_2_8" id="3_1_2_8"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_3_8<input type="text" name="3_1_3_8" id="3_1_3_8"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_4_8<input type="text" name="3_1_4_8" id="3_1_4_8"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>3_1_5_8<input type="text" name="3_1_5_8" id="3_1_5_8"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_6_8a" id="3_1_5_8a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_8b" id="3_1_5_8b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_8c" id="3_1_5_8c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_6_8d" id="3_1_5_8d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_8e" id="3_1_5_8e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_6_8e" id="3_1_5_8e"
                                                    value="5">Other</label> </div>
                                        <div>3_1_5_8e_oth<input type="text" name="3_1_5_8e_oth" id="3_1_6_8e_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                        </table>
                    </div>
<div class="row">
<div class="col-md-12">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th colspan="3">3.1.7. Costs incurred with fertilizer application (without labour costs)</th>
                                </tr>
                                <tr>
                                    <th>Reason</th>
                                    <th>Cost</th>
                                </tr>
                                <tr>
                                    <td>Fuel for transport fertilizer</td>
                                    <td>
                                        <div>3_1_7_1 <input type="text" name="3_1_7_1" id="3_1_7_1"
                                                class="form-control" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cost for spraying machine</td>
                                    <td>
                                        <div>3_1_7_2<input type="text" name="3_1_7_2" id="3_1_7_2"
                                                class="form-control" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>Other costs</td>
                                    <td>
                                        <div>3_1_7_3<input type="text" name="3_1_7_3" id="3_1_7_3"
                                                class="form-control" />
                                    </td>
                                </tr>
                            </table>
                        </div>
</div>
                    <div class="row">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th> Type of fertilizer usage for 2020/21 </th>
                                <th>3.1.8.Amount (Kg)</th>
                                <th>3.1.9.Area applied (Acres)</th>
                                <th>3.1.10.Price per unit (Rs/Kg)</th>
                                <th>3.1.11.Total Cost (Rs) </th>
                                <th>3.1.12.Source (Please use below codes) </th>

                            </tr>
                            <tr>
                                <td>Urea</td>
                                <td><div>3_1_8_1<input type="text" name="3_1_8_1" id="3_1_8_1"  class="form-control" /> </td>
                                <td><div>3_1_9_1<input type="text" name="3_1_9_1" id="3_1_9_1" class="form-control" /> </td>
                                <td><div>3_1_10_1<input type="text" name="3_1_10_1" id="3_1_10_1" class="form-control" /> </td>
                                <td><div>3_1_11_1<input type="text" name="3_1_11_1" id="3_1_11_1" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_1a" id="3_1_12_1a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_1b" id="3_1_12_1b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_1c" id="3_1_12_1c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_1d" id="3_1_12_1d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_12_1e" id="3_1_12_1e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_12_1" id="3_1_12_1e"
                                                    value="5">Other</label> </div>
                                        <div>3_1_12_1e_oth<input type="text" name="3_1_12_1e_oth" id="3_1_12_1e_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td>TSP</td>
                                <td><div>3_1_8_2<input type="text" name="3_1_8_2" id="3_1_8_2"  class="form-control" /> </td>
                                <td><div>3_1_9_2<input type="text" name="3_1_9_2" id="3_1_9_2" class="form-control" /> </td>
                                <td><div>3_1_10_2<input type="text" name="3_1_10_2" id="3_1_10_2" class="form-control" /> </td>
                                <td><div>3_1_11_2<input type="text" name="3_1_11_2" id="3_1_11_2" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_12_2a" id="3_1_12_2a" value="1"> Retail Shop/ wholesaler</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_2b" id="3_1_12_2b" value="2">Agrarian Devlopment Centre</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_2c" id="3_1_12_2c" value="3">Fellow farmer</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_2d" id="3_1_12_2d" value="4">Farmer association or cooperative</label></div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_2e" id="3_1_12_2e" value="5">Neighbour</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_2e" id="3_1_12_2e" value="6">Other</label> </div>
	
    <div>3_1_12_2e_oth<input type="text" name="3_1_12_2e_oth" id="3_1_12_2e_oth" class="form-control" /> </div>
                                </td>

                            </tr>

                            <tr>
                                <td>MOP</td>
                                <td><div>3_1_8_3<input type="text" name="3_1_8_3" id="3_1_8_3"  class="form-control" /> </td>
                                <td><div>3_1_9_3<input type="text" name="3_1_9_3" id="3_1_9_3" class="form-control" /> </td>
                                <td><div>3_1_10_3<input type="text" name="3_1_10_3" id="3_1_10_3" class="form-control" /> </td>
                                <td><div>3_1_11_3<input type="text" name="3_1_11_3" id="3_1_11_3" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_12_3a" id="3_1_12_3a" value="1"> Retail Shop/ wholesaler</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_3b" id="3_1_12_3b" value="2">Agrarian Devlopment Centre</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_3c" id="3_1_12_3c" value="3">Fellow farmer</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_3d" id="3_1_12_3d" value="4">Farmer association or cooperative</label></div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_3e" id="3_1_12_3e" value="5">Neighbour</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_3e" id="3_1_12_3e" value="6">Other</label> </div>
	
    <div>3_1_12_3e_oth<input type="text" name="3_1_12_3e_oth" id="3_1_12_3e_oth" class="form-control" /> </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Compost</td>
                                <td><div>3_1_8_4<input type="text" name="3_1_8_4" id="3_1_8_4"  class="form-control" /> </td>
                                <td><div>3_1_9_4<input type="text" name="3_1_9_4" id="3_1_9_4" class="form-control" /> </td>
                                <td><div>3_1_10_4<input type="text" name="3_1_10_4" id="3_1_10_4" class="form-control" /> </td>
                                <td><div>3_1_11_4<input type="text" name="3_1_11_4" id="3_1_11_4" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_12_4a" id="3_1_12_4a" value="1"> Retail Shop/ wholesaler</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_4b" id="3_1_12_4b" value="2">Agrarian Devlopment Centre</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_4c" id="3_1_12_4c" value="3">Fellow farmer</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_4d" id="3_1_12_4d" value="4">Farmer association or cooperative</label></div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_4e" id="3_1_12_4e" value="5">Neighbour</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_4e" id="3_1_12_4e" value="6">Other</label> </div>
	
    <div>3_1_12_4e_oth<input type="text" name="3_1_12_4e_oth" id="3_1_12_4e_oth" class="form-control" /> </div>
                                </td>

                            </tr>
                            <tr>
                            <td><div>3_1_8_5<input type="text" name="3_1_8_5" id="3_1_8_5"  class="form-control" /> </td>
                                <td><div>3_1_9_5<input type="text" name="3_1_9_5" id="3_1_9_5" class="form-control" /> </td>
                                <td><div>3_1_10_5<input type="text" name="3_1_10_5" id="3_1_10_5" class="form-control" /> </td>
                                <td><div>3_1_11_5<input type="text" name="3_1_11_5" id="3_1_11_5" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_12_5a" id="3_1_12_5a" value="1"> Retail Shop/ wholesaler</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_5b" id="3_1_12_5b" value="2">Agrarian Devlopment Centre</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_5c" id="3_1_12_5c" value="3">Fellow farmer</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_5d" id="3_1_12_5d" value="4">Farmer association or cooperative</label></div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_5e" id="3_1_12_5e" value="5">Neighbour</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_5e" id="3_1_12_5e" value="6">Other</label> </div>
	
    <div>3_1_12_5e_oth<input type="text" name="3_1_12_5e_oth" id="3_1_12_5e_oth" class="form-control" /> </div>
                                </td>

                            </tr>


                            <tr>
                                <td> Liquid fertilizers</td>
                                <td><div>3_1_8_6<input type="text" name="3_1_8_6" id="3_1_8_6"  class="form-control" /> </td>
                                <td><div>3_1_9_6<input type="text" name="3_1_9_6" id="3_1_9_6" class="form-control" /> </td>
                                <td><div>3_1_10_6<input type="text" name="3_1_10_6" id="3_1_10_6" class="form-control" /> </td>
                                <td><div>3_1_11_6<input type="text" name="3_1_11_6" id="3_1_11_6" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_12_6a" id="3_1_12_6a" value="1"> Retail Shop/ wholesaler</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_6b" id="3_1_12_6b" value="2">Agrarian Devlopment Centre</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_6c" id="3_1_12_6c" value="3">Fellow farmer</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_6d" id="3_1_12_6d" value="4">Farmer association or cooperative</label></div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_6e" id="3_1_12_6e" value="5">Neighbour</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_6e" id="3_1_12_6e" value="6">Other</label> </div>
	
    <div>3_1_12_6e_oth<input type="text" name="3_1_12_6e_oth" id="3_1_12_6e_oth" class="form-control" /> </div>
                                </td>

                            </tr>
                            <tr>
                                <td> Other organic fertilizers</td>
                                <td><div>3_1_8_7<input type="text" name="3_1_8_7" id="3_1_8_7"  class="form-control" /> </td>
                                <td><div>3_1_9_7<input type="text" name="3_1_9_7" id="3_1_9_7" class="form-control" /> </td>
                                <td><div>3_1_10_7<input type="text" name="3_1_10_7" id="3_1_10_7" class="form-control" /> </td>
                                <td><div>3_1_11_7<input type="text" name="3_1_11_7" id="3_1_11_7" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="3_1_12_7a" id="3_1_12_7a" value="1"> Retail Shop/ wholesaler</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_7b" id="3_1_12_7b" value="2">Agrarian Devlopment Centre</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_7c" id="3_1_12_7c" value="3">Fellow farmer</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_7d" id="3_1_12_7d" value="4">Farmer association or cooperative</label></div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_7e" id="3_1_12_7e" value="5">Neighbour</label> </div>
    <div class="checkbox"><label><input type="checkbox" name="3_1_12_7e" id="3_1_12_7e" value="6">Other</label> </div>
	
    <div>3_1_12_7e_oth<input type="text" name="3_1_12_7e_oth" id="3_1_12_7e_oth" class="form-control" /> </div>
                                </td>

                            </tr>
                            <tr>
                                <td> Other</td>
                                <td><div>3_1_8_8<input type="text" name="3_1_8_8" id="3_1_8_8"  class="form-control" /> </td>
                                <td><div>3_1_9_8<input type="text" name="3_1_9_8" id="3_1_9_8" class="form-control" /> </td>
                                <td><div>3_1_10_8<input type="text" name="3_1_10_8" id="3_1_10_8" class="form-control" /> </td>
                                <td><div>3_1_11_8<input type="text" name="3_1_11_8" id="3_1_11_8" class="form-control" /> </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_8a" id="3_1_12_8a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_8b" id="3_1_12_8b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_8c" id="3_1_12_8c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="3_1_12_8d" id="3_1_12_8d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_12_8e" id="3_1_12_8e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="3_1_12_8e" id="3_1_12_8e"
                                                    value="6">Other</label> </div>
                                        <div>1.1.12.1 <input type="text" name="3_1_12_8e_oth" id="3_1_12_8e_oth"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                        </table>
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