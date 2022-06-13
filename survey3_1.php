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

                                <select class="form-control" name="3_1_1" id="3_1_1">
                                    <option value="1">Inorganic fertilizer only </option>
                                    <option value="2">Organic fertilizer only</option>
                                    <option value="2">Mixture of both inorganic and organic fertilizers</option>
                                    <option value="2">None</option>
                                    <option value="2">Other</option>
                                </select>
                            </div>
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
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td>TSP</td>
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
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>

                            <tr>
                                <td>MOP</td>
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
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Compost</td>
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
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
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
                                </td>
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
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
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
                                </td>
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
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
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
                                </td>
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
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
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
                                </td>
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
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
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
                                <th> Type of fertilizer usage for 2020/21 </th>
                                <th>3.1.2.Amount (Kg)</th>
                                <th>3.1.3.Area applied (Acres)</th>
                                <th>3.1.4.Price per unit (Rs/Kg)</th>
                                <th>3.1.5.Total Cost (Rs) </th>
                                <th>3.1.6.Source (Please use below codes) </th>

                            </tr>
                            <tr>
                                <td>Urea</td>
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
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td>TSP</td>
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
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>

                            <tr>
                                <td>MOP</td>
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
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                                class="form-control" />
                                        </div>
                                </td>

                            </tr>
                            <tr>
                                <td>Compost</td>
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
                                <td>
                                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
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
                                </td>
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
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
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
                                </td>
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
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
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
                                </td>
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
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
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
                                </td>
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
                                <td>
                                    <div class="form-group">

                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                                    value="1">Retail Shop/ wholesaler</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b"
                                                    value="2">Agrarian Devlopment Centre</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                                    value="3">Fellow farmer</label> </div>
                                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                                    value="4">Farmer association or cooperative</label></div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Neighbour</label> </div>
                                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                                    value="5">Other</label> </div>
                                        <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1"
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