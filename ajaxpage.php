<?php
date_default_timezone_set("Asia/Colombo");
include('connection/config.php');
if (!isset($_SESSION)) {
	session_start();
}
//$id=$_SESSION['id'];

//$user_id=$_SESSION['user_id'];
if (isset($_GET['option'])) {
	if ($_GET['option'] == "update2_19") {
		$household_id = $_GET["household_id"];
		$a2_19 = $_GET["f2_19"];
      echo $a2_19;
      
		$sqlupdateb6 = "UPDATE tblsurvey_question SET 2_19='$a2_19' where household_id= $household_id";
		//$resultupdatecustomer = mysqli_query($con, $sqlupdateb6) or die("error in update customer part:" . mysqli_error($con));

		//if ($resultupdatecustomer) {
			if ($a2_19 == 2) { ?>
				<div class="row">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>If Yes</th>
                                <th colspan="6">2.20. How many people did you hire for paddy farming?</th>
                            </tr>
                            <tr>
                                <td> </td>
                                <td>norganic Fertilizer application</td>
                                <td>Organic fertilizer application</td>
                                <td>Organic fertilizer application
                                    Land Preparation</td>
                                <td>Chemical application</td>
                                <td>Harvest</td>
                                <td>Post-harvest handling (carry
                                    harvest from the field/
                                    marketing etc.)</td>
                            </tr>
                            <tr>
                                <td>Adult Male</td>
                                <td>
                                    <div>2_20_1 <input type="text" name="2_20_1" id="2_20_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_20_2 <input type="text" name="2_20_2" id="2_20_2"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_20_3 <input type="text" name="2_20_3" id="2_20_3"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_20_4<input type="text" name="2_20_4" id="2_20_4"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_20_5<input type="text" name="2_20_5" id="2_20_5"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>1.1.12.1 <input type="text" name="2_20_6" id="2_20_6"
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>Adult Female</td>
                                <td>
                                    <div>2_20_7 <input type="text" name="2_20_7" id="2_20_7"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_20_8 <input type="text" name="2_20_8" id="2_20_8"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_20_9<input type="text" name="2_20_9" id="2_20_9"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_20_10<input type="text" name="2_20_10" id="2_20_10"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_20_11<input type="text" name="2_20_11" id="2_20_11"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_20_12 <input type="text" name="2_20_12" id="2_20_12"
                                            class="form-control" />
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="row">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th colspan="6">2.21. On average, how many days did these laborers work?</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>inorganic Fertilizer application </td>
                              
                                <td>Organic fertilizer application</td>
                                <td>Land Preparation</td>
                                <td>Chemical application</td>
                                <td>Harvest</td>
                                <td>Post-harvest handling (carry harvest from the field/ marketing etc.)</td>
                                <td>2.22. Daily wage (Rupees per day)</td>
                               
                            </tr>
                            <tr>
                                <td>Adult Male</td>
                                <td>
                                    <div>2_21_1<input type="text" name="2_21_1" id="2_21_1"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_21_2 <input type="text" name="2_21_2" id="2_21_2"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_21_3<input type="text" name="2_21_3" id="2_21_3"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_21_4<input type="text" name="2_21_4" id="2_21_4"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_21_5<input type="text" name="2_21_5" id="2_21_5"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_21_6<input type="text" name="2_21_6" id="2_21_6"
                                            class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td>Adult Female</td>
                                <td>
                                    <div>2_21_7 <input type="text" name="2_21_7" id="2_21_7"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_21_8<input type="text" name="2_21_8" id="2_21_8"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_21_9<input type="text" name="2_21_9" id="2_21_9"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_21_10<input type="text" name="2_21_10" id="2_21_10"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_21_11<input type="text" name="2_21_11" id="2_21_11"
                                            class="form-control" />
                                </td>
                                <td>
                                    <div>2_21_12<input type="text" name="2_21_12" id="2_21_12"
                                            class="form-control" />
                                </td>
                            </tr>
                        </table>
                    </div>


                </div>
			<?php
			}
		//}
	}
}