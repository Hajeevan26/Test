<?php
date_default_timezone_set("Asia/Colombo");
include('connection/config.php');
if (!isset($_SESSION)) {
	session_start();
}
//$id=$_SESSION['id'];

//$user_id=$_SESSION['user_id'];
if (isset($_GET['option'])) 
{
	if ($_GET['option'] == "update2_19") {
		$household_id = $_GET["household_id"];
		$a2_19 = $_GET["f2_19"];
   
      
		$sqlupdateb6 = "UPDATE tblsurvey_question SET 2_19='$a2_19' where household_id= $household_id";
		//$resultupdatecustomer = mysqli_query($con, $sqlupdateb6) or die("error in update customer part:" . mysqli_error($con));

		//if ($resultupdatecustomer) {
			if ($a2_19 == 2) { ?>
<div class="row">
    <table class="table table-bordered table-hover">
        <tr>
            <th>ඔව් නම්,</th>
            <th colspan="6">2.20. කුඹුරු ගොවිතැනට කී දෙනෙකු කුලියට ලබා ගත්තේද?</th>
        </tr>
        <tr>
            <td> </td>
            <td> අකාබනික පොහොර යෙදීම</td>
            <td> කාබනික පොහොර යෙදීම</td>
            <td> ඉඩම් සකස් කිරීම</td>
            <td> රසායනික යෙදුම</td>
            <td> අස්වනු නෙලීම</td>
            <td> පසු අස්වනු හැසිරවීම (ක්ෂේත්‍රයෙන් අස්වැන්න රැගෙන යාම/ අලෙවිකරණය ආදිය</td>
        </tr>
        <tr>
            <td> වැඩිහිටි පිරිමි</td>
            <td>
                <div>2_20_1 <input type="number" value="0" required name="2_20_1" id="2_20_1" class="form-control" />
            </td>
            <td>
                <div>2_20_2 <input type="number" value="0" required name="2_20_2" id="2_20_2" class="form-control" />
            </td>
            <td>
                <div>2_20_3 <input type="number" value="0" required name="2_20_3" id="2_20_3" class="form-control" />
            </td>
            <td>
                <div>2_20_4<input type="number" value="0" required name="2_20_4" id="2_20_4" class="form-control" />
            </td>
            <td>
                <div>2_20_5<input type="number" value="0" required name="2_20_5" id="2_20_5" class="form-control" />
            </td>
            <td>
                <div>2_20_6 <input type="number" value="0" required name="2_20_6" id="2_20_6" class="form-control" />
            </td>
        </tr>
        <tr>
            <td> වැඩිහිටි ගැහැණු</td>
            <td>
                <div>2_20_7 <input type="number" value="0" required name="2_20_7" id="2_20_7" class="form-control" />
            </td>
            <td>
                <div>2_20_8 <input type="number" value="0" required name="2_20_8" id="2_20_8" class="form-control" />
            </td>
            <td>
                <div>2_20_9<input type="number" value="0" required name="2_20_9" id="2_20_9" class="form-control" />
            </td>
            <td>
                <div>2_20_10<input type="number" value="0" required name="2_20_10" id="2_20_10" class="form-control" />
            </td>
            <td>
                <div>2_20_11<input type="number" value="0" required name="2_20_11" id="2_20_11" class="form-control" />
            </td>
            <td>
                <div>2_20_12 <input type="number" value="0" required name="2_20_12" id="2_20_12" class="form-control" />
            </td>
        </tr>
    </table>
</div>

<div class="row">
    <table class="table table-bordered table-hover">
        <tr>
            <th colspan="7">2.21. සාමාන්‍යයෙන් මෙම කම්කරුවන් දින කීයක් වැඩ කළාද?</th>
            <th></th>
        </tr>
        <tr>
            <td></td>
            <td> අකාබනික පොහොර යෙදීම</td>
            <td> කාබනික පොහොර යෙදීම</td>
            <td> ඉඩම් සකස් කිරීම</td>
            <td> රසායනික යෙදුම</td>
            <td> අස්වනු නෙලීම</td>
            <td> පසු අස්වනු හැසිරවීම (ක්ෂේත්‍රයෙන් අස්වැන්න රැගෙන යාම/ අලෙවිකරණය ආදිය</td>
            <td> දෛනික වැටුප (දිනකට රුපියල්)</td>

        </tr>
        <tr>
            <td> වැඩිහිටි පිරිමි</td>
            <td>
                <div>2_21_1<input type="number" value="0" required name="2_21_1" id="2_21_1" class="form-control" />
            </td>
            <td>
                <div>2_21_2 <input type="number" value="0" required name="2_21_2" id="2_21_2" class="form-control" />
            </td>
            <td>
                <div>2_21_3<input type="number" value="0" required name="2_21_3" id="2_21_3" class="form-control" />
            </td>
            <td>
                <div>2_21_4<input type="number" value="0" required name="2_21_4" id="2_21_4" class="form-control" />
            </td>
            <td>
                <div>2_21_5<input type="number" value="0" required name="2_21_5" id="2_21_5" class="form-control" />
            </td>
            <td>
                <div>2_21_6<input type="number" value="0" required name="2_21_6" id="2_21_6" class="form-control" />
            </td>
            <td>
                <div>2_22_1<input type="number" value="0" required name="2_22_1" id="2_22_1" class="form-control" />
            </td>
            
        </tr>
        <tr>
            <td> වැඩිහිටි ගැහැණු</td>
            <td>
                <div>2_21_7 <input type="number" value="0" required name="2_21_7" id="2_21_7" class="form-control" />
            </td>
            <td>
                <div>2_21_8<input type="number" value="0" required name="2_21_8" id="2_21_8" class="form-control" />
            </td>
            <td>
                <div>2_21_9<input type="number" value="0" required name="2_21_9" id="2_21_9" class="form-control" />
            </td>
            <td>
                <div>2_21_10<input type="number" value="0" required name="2_21_10" id="2_21_10" class="form-control" />
            </td>
            <td>
                <div>2_21_11<input type="number" value="0" required name="2_21_11" id="2_21_11" class="form-control" />
            </td>
            <td>
                <div>2_21_12<input type="number" value="0" required name="2_21_12" id="2_21_12" class="form-control" />
            </td>
            <td>
                <div>2_22_2<input type="number" value="0" required name="2_22_2" id="2_22_2" class="form-control" />
            </td>
        </tr>
    </table>
</div>


</div>
<?php
			}
		//}
	}
    if ($_GET['option'] == "update3_2_1") {
		$household_id = $_GET["household_id"];
		$a3_2_1 = $_GET["f3_2_1"];
			if ($a3_2_1 == 2) { ?>
<div class="row">
    <div class="col-md-12">
        <label>3_2_2 ඔව් නම්, ඔබ පසුගිය 2021/22 මහ කන්නයේ භාවිතා කළේ කුමන ආකාරයේ කෘෂි රසායන ද
        </label>
        <div class="form-group">
            <div class="checkbox"><label><input type="checkbox" name="3_2_2a" id="3_2_2a" value="1">වල්නාශක</label>
            </div>
            <div class="checkbox"><label><input type="checkbox" name="3_2_2b" id="3_2_2b" value="2">පළිබෝධනාශක</label>
            </div>
            <div class="checkbox"><label><input type="checkbox" name="3_2_2c" id="3_2_2c" value="3">කෘමිනාශක</label>
            </div>
            <div class="checkbox"><label><input type="checkbox" name="3_2_2d" id="3_2_2d" value="4">ගොවි සංගමය
                </label></div>
            <div class="checkbox"> <label><input type="checkbox" name="3_2_2e" id="3_2_2e" value="5">කිසිවක් නැත</label>
            </div>
            <div class="checkbox"> <label><input type="checkbox" name="3_2_2f" id="3_2_2f"
                        onclick="eDcheckOT('3_2_2f','3_2_2f_oth')" value="5" checked>වෙනත්</label> </div>
            <div>3_2_2f_oth<input type="text" name="3_2_2f_oth" id="3_2_2f_oth" class="form-control" />
            </div>
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-md-12">
        <label>3_2_2 ඔව් නම්, ඔබ පසුගිය 2021/22 මහ කන්නයේ භාවිතා කළේ කුමන
            ආකාරයේ කෘෂි රසායන ද
        </label>

        <div class="row">
            <table class="table table-bordered table-hover">

                <tr>
                    <th> කෘෂි රසායන වර්ගය 2021/22</th>
                    <th>3.2.3.ප්‍රමාණය (Kg/L) </th>
                    <th>3.2.4.යොදන ලද ප්‍රදේශය (අක්කර)</th>
                    <th>3.2.5.ඒකකයකට මිල (රු./කිලෝ)</th>
                    <th>3.2.6.මුළු පිරිවැය (රු.)</th>
                    <th colspan="2">3.2.7.මූලාශ්‍රය (කරුණාකර පහත කේත භාවිතා කරන්න)</th>

                </tr>
                <tr>
                    <td>
                        <div>වල්නාශක </div>
                        <div>3_2_a_1_1<input type="text" name="3_2_a_1_1" id="3_2_a_1_1" required
                                class="form-control" /></div>
                        <div>3_2_a_1_2<input type="text" name="3_2_a_1_2" id="3_2_a_1_2" required
                                class="form-control" /></div>
                        <div>3_2_a_1_3<input type="text" name="3_2_a_1_3" id="3_2_a_1_3" required
                                class="form-control" /></div>
                        <div>3_2_a_1_4<input type="text" name="3_2_a_1_4" id="3_2_a_1_4" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>KG</div>
                        <div>3_2_a_3_1<input type="text" name="3_2_a_3_1" id="3_2_a_3_1"
                                onkeyup="fnmulty('3_2_a_3_1','3_2_a_5_1','3_2_a_6_1')" value="0" required
                                class="form-control" /></div>
                        <div>3_2_a_3_2<input type="text" name="3_2_a_3_2" id="3_2_a_3_2"
                                onkeyup="fnmulty('3_2_a_3_2','3_2_a_5_2','3_2_a_6_2')" value="0" required
                                class="form-control" /></div>
                        <div>3_2_a_3_3<input type="text" name="3_2_a_3_3" id="3_2_a_3_3"
                                onkeyup="fnmulty('3_2_a_3_3','3_2_a_5_3','3_2_a_6_3')" value="0" required
                                class="form-control" /></div>
                        <div>3_2_a_3_4<input type="text" name="3_2_a_3_4" id="3_2_a_3_4"
                                onkeyup="fnmulty('3_2_a_3_4','3_2_a_5_4','3_2_a_6_4')" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_a_4_1<input type="text" name="3_2_a_4_1" id="3_2_a_4_1" value="0" required
                                class="form-control" /></div>
                        <div>3_2_a_4_2<input type="text" name="3_2_a_4_2" id="3_2_a_4_2" value="0" required
                                class="form-control" /></div>
                        <div>3_2_a_4_3<input type="text" name="3_2_a_4_3" id="3_2_a_4_3" value="0" required
                                class="form-control" /></div>
                        <div>3_2_a_4_4<input type="text" name="3_2_a_4_4" id="3_2_a_4_4" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>Rs/Kg</div>
                        <div>3_2_a_5_1<input type="text" name="3_2_a_5_1" id="3_2_a_5_1"
                                onkeyup="fnmulty('3_2_a_3_1','3_2_a_5_1','3_2_a_6_1')" value="0" required
                                class="form-control" /></div>
                        <div>3_2_a_5_2<input type="text" name="3_2_a_5_2" id="3_2_a_5_2"
                                onkeyup="fnmulty('3_2_a_3_2','3_2_a_5_2','3_2_a_6_2')" value="0" required
                                class="form-control" /></div>
                        <div>3_2_a_5_3<input type="text" name="3_2_a_5_3" id="3_2_a_5_3"
                                onkeyup="fnmulty('3_2_a_3_3','3_2_a_5_3','3_2_a_6_3')" value="0" required
                                class="form-control" /></div>
                        <div>3_2_a_5_4<input type="text" name="3_2_a_5_4" id="3_2_a_5_4"
                                onkeyup="fnmulty('3_2_a_3_4','3_2_a_5_4','3_2_a_6_4')" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>Rs/Kg</div>
                        <div>3_2_a_6_1<input type="text" name="3_2_a_6_1" id="3_2_a_6_1" value="0" readonly
                                class="form-control" /></div>
                        <div>3_2_a_6_2<input type="text" name="3_2_a_6_2" id="3_2_a_6_2" value="0" readonly
                                class="form-control" /></div>
                        <div>3_2_a_6_3<input type="text" name="3_2_a_6_3" id="3_2_a_6_3" value="0" readonly
                                class="form-control" /></div>
                        <div>3_2_a_6_4<input type="text" name="3_2_a_6_4" id="3_2_a_6_4" value="0" readonly
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div class="form-group">1
                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_1_1" id="3_2_a_7_1_1"
                                        value="1"> සිල්ලර වෙළඳසැල</label>
                            </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_1_2" id="3_2_a_7_1_2"
                                        value="2">ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_1_3" id="3_2_a_7_1_3"
                                        value="3"> සෙසු ගොවියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_1_4" id="3_2_a_7_1_4"
                                        value="4">ගොවි සංගමය හෝ සමුපකාරය</label></div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_1_5" id="3_2_a_7_1_5"
                                        value="5"> අසල්වැසියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_1_6"
                                        onclick="eDcheckOT('3_2_a_7_1_6','3_2_a_7_1_6_oth')" id="3_2_a_7_1_6" value="6">
                                    වෙනත්, සඳහන් කරන්න</label> </div>

                            <div>3_2_a_7_1_6_oth <input type="text" name="3_2_a_7_1_6_oth" id="3_2_a_7_1_6_oth"
                                    class="form-control" /> </div>
                            <hr>
                            <div class="form-group">3
                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_3_1" id="3_2_a_7_3_1"
                                            value="1">සිල්ලර වෙළඳසැල</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_3_2" id="3_2_a_7_3_2"
                                            value="2">ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_3_3" id="3_2_a_7_3_3"
                                            value="3"> සෙසු ගොවියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_3_4" id="3_2_a_7_3_4"
                                            value="4">ගොවි සංගමය හෝ සමුපකාරය</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_3_5" id="3_2_a_7_3_5"
                                            value="5">අසල්වැසියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_3_6" id="3_2_a_7_3_6"
                                            onclick="eDcheckOT('3_2_a_7_3_6','3_2_a_7_3_6_oth')" value="6"> වෙනත්, සඳහන්
                                        කරන්න</label> </div>

                                <div>3_2_a_7_3_6_oth <input type="text" name="3_2_a_7_3_6_oth" id="3_2_a_7_3_6_oth"
                                        class="form-control" /> </div>


                    </td>
                    <td>
                        <div class="form-group">2
                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_2_1" id="3_2_a_7_2_1"
                                        value="1"> සිල්ලර වෙළඳසැල</label>
                            </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_2_2" id="3_2_a_7_2_2"
                                        value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_2_3" id="3_2_a_7_2_3"
                                        value="3"> සෙසු ගොවියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_2_4" id="3_2_a_7_2_4"
                                        value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_2_5" id="3_2_a_7_2_5"
                                        value="5"> අසල්වැසියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_2_6"
                                        onclick="eDcheckOT('3_2_a_7_2_6','3_2_a_7_2_6_oth')" id="3_2_a_7_2_6" value="6">
                                    වෙනත්, සඳහන් කරන්න</label> </div>

                            <div>3_2_a_7_2_6_oth <input type="text" name="3_2_a_7_2_6_oth" id="3_2_a_7_2_6_oth"
                                    class="form-control" /> </div>
                            <hr>
                            <div class="form-group">4
                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_4_1" id="3_2_a_7_4_1"
                                            value="1"> සිල්ලර වෙළඳසැල</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_4_2" id="3_2_a_7_4_2"
                                            value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_4_3" id="3_2_a_7_4_3"
                                            value="3"> සෙසු ගොවියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_4_4" id="3_2_a_7_4_4"
                                            value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_4_5" id="3_2_a_7_4_5"
                                            value="5"> අසල්වැසියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_a_7_4_6" id="3_2_a_7_4_6"
                                            onclick="eDcheckOT('3_2_a_7_4_6','3_2_a_7_4_6_oth')" value="6"> වෙනත්, සඳහන්
                                        කරන්න</label> </div>
                                <div>3_2_a_7_4_6_oth <input type="text" name="3_2_a_7_4_6_oth" id="3_2_a_7_4_6_oth"
                                        class="form-control" /> </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div>පළිබෝධනාශක </div>
                        <div>3_2_b_1_1<input type="text" name="3_2_b_1_1" id="3_2_b_1_1" required
                                class="form-control" /></div>
                        <div>3_2_b_1_2<input type="text" name="3_2_b_1_2" id="3_2_b_1_2" required
                                class="form-control" /></div>
                        <div>3_2_b_1_3<input type="text" name="3_2_b_1_3" id="3_2_b_1_3" required
                                class="form-control" /></div>
                        <div>3_2_b_1_4<input type="text" name="3_2_b_1_4" id="3_2_b_1_4" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_b_3_1<input type="text" name="3_2_b_3_1" id="3_2_b_3_1"
                                onkeyup="fnmulty('3_2_b_3_1','3_2_b_5_1','3_2_b_6_1')" value="0" required
                                class="form-control" /></div>
                        <div>3_2_b_3_2<input type="text" name="3_2_b_3_2" id="3_2_b_3_2"
                                onkeyup="fnmulty('3_2_b_3_2','3_2_b_5_2','3_2_b_6_2')" value="0" required
                                class="form-control" /></div>
                        <div>3_2_b_3_3<input type="text" name="3_2_b_3_3" id="3_2_b_3_3"
                                onkeyup="fnmulty('3_2_b_3_3','3_2_b_5_3','3_2_b_6_3')" value="0" required
                                class="form-control" /></div>
                        <div>3_2_b_3_4<input type="text" name="3_2_b_3_4" id="3_2_b_3_4"
                                onkeyup="fnmulty('3_2_b_3_4','3_2_b_5_4','3_2_b_6_4')" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_b_4_1<input type="text" name="3_2_b_4_1" id="3_2_b_4_1" value="0" required
                                class="form-control" /></div>
                        <div>3_2_b_4_2<input type="text" name="3_2_b_4_2" id="3_2_b_4_2" value="0" required
                                class="form-control" /></div>
                        <div>3_2_b_4_3<input type="text" name="3_2_b_4_3" id="3_2_b_4_3" value="0" required
                                class="form-control" /></div>
                        <div>3_2_b_4_4<input type="text" name="3_2_b_4_4" id="3_2_b_4_4" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_b_5_1<input type="text" name="3_2_b_5_1" id="3_2_b_5_1"
                                onkeyup="fnmulty('3_2_b_3_1','3_2_b_5_1','3_2_b_6_1');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_b_5_2<input type="text" name="3_2_b_5_2" id="3_2_b_5_2"
                                onkeyup="fnmulty('3_2_b_3_2','3_2_b_5_2','3_2_b_6_2');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_b_5_3<input type="text" name="3_2_b_5_3" id="3_2_b_5_3"
                                onkeyup="fnmulty('3_2_b_3_3','3_2_b_5_3','3_2_b_6_3');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_b_5_4<input type="text" name="3_2_b_5_4" id="3_2_b_5_4"
                                onkeyup="fnmulty('3_2_b_3_4','3_2_b_5_4','3_2_b_6_4');" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_b_6_1<input type="text" name="3_2_b_6_1" id="3_2_b_6_1" value="0" readonly
                                class="form-control" /></div>
                        <div>3_2_b_6_2<input type="text" name="3_2_b_6_2" id="3_2_b_6_2" value="0" readonly
                                class="form-control" /></div>
                        <div>3_2_b_6_3<input type="text" name="3_2_b_6_3" id="3_2_b_6_3" value="0" readonly
                                class="form-control" /></div>
                        <div>3_2_b_6_4<input type="text" name="3_2_b_6_4" id="3_2_b_6_4" value="0" readonly
                                class="form-control" /></div>
                    </td>
                    <td>

                        <div class="form-group">1
                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_1_1" id="3_2_b_7_1_1"
                                        value="1"> සිල්ලර වෙළඳසැල</label>
                            </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_1_2" id="3_2_b_7_1_2"
                                        value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_1_3" id="3_2_b_7_1_3"
                                        value="3"> සෙසු ගොවියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_1_4" id="3_2_b_7_1_4"
                                        value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_1_5" id="3_2_b_7_1_5"
                                        value="5"> අසල්වැසියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_1_6"
                                        onclick="eDcheckOT('3_2_b_7_1_6','3_2_b_7_1_6_oth')" id="3_2_b_7_1_6" value="6">
                                    වෙනත්, සඳහන් කරන්න</label> </div>

                            <div>3_2_b_7_1_6_oth <input type="text" name="3_2_b_7_1_6_oth" id="3_2_b_7_1_6_oth"
                                    class="form-control" /> </div>
                            <hr>
                            <div class="form-group">3
                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_3_1" id="3_2_b_7_3_1"
                                            value="1"> සිල්ලර වෙළඳසැල</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_3_2" id="3_2_b_7_3_2"
                                            value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_3_3" id="3_2_b_7_3_3"
                                            value="3"> සෙසු ගොවියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_3_4" id="3_2_b_7_3_4"
                                            value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_3_5" id="3_2_b_7_3_5"
                                            value="5"> අසල්වැසියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_3_6" id="3_2_b_7_3_6"
                                            onclick="eDcheckOT('3_2_b_7_3_6','3_2_b_7_3_6_oth')" value="6"> වෙනත්, සඳහන්
                                        කරන්න</label> </div>

                                <div>3_2_b_7_3_6_oth <input type="text" name="3_2_b_7_3_6_oth" id="3_2_b_7_3_6_oth"
                                        class="form-control" /> </div>
                    </td>
                    <td>
                        <div class="form-group">2
                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_2_1" id="3_2_b_7_2_1"
                                        value="1"> සිල්ලර වෙළඳසැල</label>
                            </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_2_2" id="3_2_b_7_2_2"
                                        value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_2_3" id="3_2_b_7_2_3"
                                        value="3"> සෙසු ගොවියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_2_4" id="3_2_b_7_2_4"
                                        value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_2_5" id="3_2_b_7_2_5"
                                        value="5"> අසල්වැසියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_2_6"
                                        onclick="eDcheckOT('3_2_b_7_2_6','3_2_b_7_2_6_oth')" id="3_2_b_7_2_6" value="6">
                                    වෙනත්, සඳහන් කරන්න</label> </div>
                            <div>3_2_b_7_2_6_oth <input type="text" name="3_2_b_7_2_6_oth" id="3_2_b_7_2_6_oth"
                                    class="form-control" /> </div>
                            <hr>
                            <div class="form-group">4
                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_4_1" id="3_2_b_7_4_1"
                                            value="1"> සිල්ලර වෙළඳසැල</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_4_2" id="3_2_b_7_4_2"
                                            value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_4_3" id="3_2_b_7_4_3"
                                            value="3"> සෙසු ගොවියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_4_4" id="3_2_b_7_4_4"
                                            value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_4_5" id="3_2_b_7_4_5"
                                            value="5"> අසල්වැසියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_b_7_4_6" id="3_2_b_7_4_6"
                                            onclick="eDcheckOT('3_2_b_7_4_6','3_2_b_7_4_6_oth')" value="6"> වෙනත්, සඳහන්
                                        කරන්න</label> </div>
                                <div>3_2_b_7_4_6_oth <input type="text" name="3_2_b_7_4_6_oth" id="3_2_b_7_4_6_oth"
                                        class="form-control" /> </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div>කෘමිනාශක</div>
                        <div>3_2_c_1_1<input type="text" name="3_2_c_1_1" id="3_2_c_1_1" required
                                class="form-control" /></div>
                        <div>3_2_c_1_2<input type="text" name="3_2_c_1_2" id="3_2_c_1_2" required
                                class="form-control" /></div>
                        <div>3_2_c_1_3<input type="text" name="3_2_c_1_3" id="3_2_c_1_3" required
                                class="form-control" /></div>
                        <div>3_2_c_1_4<input type="text" name="3_2_c_1_4" id="3_2_c_1_4" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_c_3_1<input type="text" name="3_2_c_3_1" id="3_2_c_3_1"
                                onkeyup="fnmulty('3_2_c_3_1','3_2_c_5_1','3_2_c_6_1');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_c_3_2<input type="text" name="3_2_c_3_2" id="3_2_c_3_2"
                                onkeyup="fnmulty('3_2_c_3_2','3_2_c_5_2','3_2_c_6_2');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_c_3_3<input type="text" name="3_2_c_3_3" id="3_2_c_3_3"
                                onkeyup="fnmulty('3_2_c_3_3','3_2_c_5_3','3_2_c_6_3');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_c_3_4<input type="text" name="3_2_c_3_4" id="3_2_c_3_4"
                                onkeyup="fnmulty('3_2_c_3_4','3_2_c_5_4','3_2_c_6_4');" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_c_4_1<input type="text" name="3_2_c_4_1" id="3_2_c_4_1" value="0" required
                                class="form-control" /></div>
                        <div>3_2_c_4_2<input type="text" name="3_2_c_4_2" id="3_2_c_4_2" value="0" required
                                class="form-control" /></div>
                        <div>3_2_c_4_3<input type="text" name="3_2_c_4_3" id="3_2_c_4_3" value="0" required
                                class="form-control" /></div>
                        <div>3_2_c_4_4<input type="text" name="3_2_c_4_4" id="3_2_c_4_4" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_c_5_1<input type="text" name="3_2_c_5_1" id="3_2_c_5_1"
                                onkeyup="fnmulty('3_2_c_3_1','3_2_c_5_1','3_2_c_6_1');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_c_5_2<input type="text" name="3_2_c_5_2" id="3_2_c_5_2"
                                onkeyup="fnmulty('3_2_c_3_2','3_2_c_5_2','3_2_c_6_2');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_c_5_3<input type="text" name="3_2_c_5_3" id="3_2_c_5_3"
                                onkeyup="fnmulty('3_2_c_3_3','3_2_c_5_3','3_2_c_6_3');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_c_5_4<input type="text" name="3_2_c_5_4" id="3_2_c_5_4"
                                onkeyup="fnmulty('3_2_c_3_4','3_2_c_5_4','3_2_c_6_4');" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_c_6_1<input type="text" name="3_2_c_6_1" id="3_2_c_6_1" value="0" readonly
                                class="form-control" /></div>
                        <div>3_2_c_6_2<input type="text" name="3_2_c_6_2" id="3_2_c_6_2" value="0" readonly
                                class="form-control" /></div>
                        <div>3_2_c_6_3<input type="text" name="3_2_c_6_3" id="3_2_c_6_3" value="0" readonly
                                class="form-control" /></div>
                        <div>3_2_c_6_4<input type="text" name="3_2_c_6_4" id="3_2_c_6_4" value="0" readonly
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div class="form-group">1
                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_1_1" id="3_2_c_7_1_1"
                                        value="1"> සිල්ලර වෙළඳසැල</label>
                            </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_1_2" id="3_2_c_7_1_2"
                                        value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_1_3" id="3_2_c_7_1_3"
                                        value="3"> සෙසු ගොවියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_1_4" id="3_2_c_7_1_4"
                                        value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_1_5" id="3_2_c_7_1_5"
                                        value="5"> අසල්වැසියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_1_6"
                                        onclick="eDcheckOT('3_2_c_7_1_6','3_2_c_7_1_6_oth')" id="3_2_c_7_1_6" value="6">
                                    වෙනත්, සඳහන් කරන්න</label> </div>

                            <div>3_2_c_7_1_6_oth <input type="text" name="3_2_c_7_1_6_oth" id="3_2_c_7_1_6_oth"
                                    class="form-control" /> </div>
                            <hr>
                            <div class="form-group">3
                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_3_1" id="3_2_c_7_3_1"
                                            value="1"> සිල්ලර වෙළඳසැල</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_3_2" id="3_2_c_7_3_2"
                                            value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_3_3" id="3_2_c_7_3_3"
                                            value="3"> සෙසු ගොවියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_3_4" id="3_2_c_7_3_4"
                                            value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_3_5" id="3_2_c_7_3_5"
                                            value="5"> අසල්වැසියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_3_6" id="3_2_c_7_3_6"
                                            onclick="eDcheckOT('3_2_c_7_3_6','3_2_c_7_3_6_oth')" value="6"> වෙනත්, සඳහන්
                                        කරන්න</label> </div>

                                <div>3_2_c_7_3_6_oth <input type="text" name="3_2_c_7_3_6_oth" id="3_2_c_7_3_6_oth"
                                        class="form-control" /> </div>
                    </td>
                    <td>
                        <div class="form-group">2
                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_2_1" id="3_2_c_7_2_1"
                                        value="1"> සිල්ලර වෙළඳසැල</label>
                            </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_2_2" id="3_2_c_7_2_2"
                                        value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_2_3" id="3_2_c_7_2_3"
                                        value="3"> සෙසු ගොවියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_2_4" id="3_2_c_7_2_4"
                                        value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_2_5" id="3_2_c_7_2_5"
                                        value="5"> අසල්වැසියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_2_6"
                                        onclick="eDcheckOT('3_2_c_7_2_6','3_2_c_7_2_6_oth')" id="3_2_c_7_2_6" value="6">
                                    වෙනත්, සඳහන් කරන්න</label> </div>
                            <div>3_2_c_7_2_6_oth <input type="text" name="3_2_c_7_2_6_oth" id="3_2_c_7_2_6_oth"
                                    class="form-control" /> </div>
                            <hr>
                            <div class="form-group">4
                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_4_1" id="3_2_c_7_4_1"
                                            value="1"> සිල්ලර වෙළඳසැල</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_4_2" id="3_2_c_7_4_2"
                                            value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_4_3" id="3_2_c_7_4_3"
                                            value="3"> සෙසු ගොවියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_4_4" id="3_2_c_7_4_4"
                                            value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_4_5" id="3_2_c_7_4_5"
                                            value="5"> අසල්වැසියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_c_7_4_6" id="3_2_c_7_4_6"
                                            onclick="eDcheckOT('3_2_c_7_4_6','3_2_c_7_4_6_oth')" value="6"> වෙනත්, සඳහන්
                                        කරන්න</label> </div>
                                <div>3_2_c_7_4_6_oth <input type="text" name="3_2_c_7_4_6_oth" id="3_2_c_7_4_6_oth"
                                        class="form-control" /> </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>වෙනත්</div>
                        <div>3_2_d_1_1<input type="text" name="3_2_d_1_1" id="3_2_d_1_1" value="0" required
                                class="form-control" /></div>
                        <div>3_2_d_1_2<input type="text" name="3_2_d_1_2" id="3_2_d_1_2" value="0" required
                                class="form-control" /></div>
                        <div>3_2_d_1_3<input type="text" name="3_2_d_1_3" id="3_2_d_1_3" value="0" required
                                class="form-control" /></div>
                        <div>3_2_d_1_4<input type="text" name="3_2_d_1_4" id="3_2_d_1_4" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_d_3_1<input type="text" name="3_2_d_3_1" id="3_2_d_3_1"
                                onkeyup="fnmulty('3_2_d_3_1','3_2_d_5_1','3_2_d_6_1');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_d_3_2<input type="text" name="3_2_d_3_2" id="3_2_d_3_2"
                                onkeyup="fnmulty('3_2_d_3_2','3_2_d_5_2','3_2_d_6_2');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_d_3_3<input type="text" name="3_2_d_3_3" id="3_2_d_3_3"
                                onkeyup="fnmulty('3_2_d_3_3','3_2_d_5_3','3_2_d_6_3');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_d_3_4<input type="text" name="3_2_d_3_4" id="3_2_d_3_4"
                                onkeyup="fnmulty('3_2_d_3_4','3_2_d_5_4','3_2_d_6_4');" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_d_4_1<input type="text" name="3_2_d_4_1" id="3_2_d_4_1" value="0" required
                                class="form-control" /></div>
                        <div>3_2_d_4_2<input type="text" name="3_2_d_4_2" id="3_2_d_4_2" value="0" required
                                class="form-control" /></div>
                        <div>3_2_d_4_3<input type="text" name="3_2_d_4_3" id="3_2_d_4_3" value="0" required
                                class="form-control" /></div>
                        <div>3_2_d_4_4<input type="text" name="3_2_d_4_4" id="3_2_d_4_4" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_d_5_1<input type="text" name="3_2_d_5_1" id="3_2_d_5_1"
                                onkeyup="fnmulty('3_2_d_3_1','3_2_d_5_1','3_2_d_6_1');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_d_5_2<input type="text" name="3_2_d_5_2" id="3_2_d_5_2"
                                onkeyup="fnmulty('3_2_d_3_2','3_2_d_5_2','3_2_d_6_2');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_d_5_3<input type="text" name="3_2_d_5_3" id="3_2_d_5_3"
                                onkeyup="fnmulty('3_2_d_3_3','3_2_d_5_3','3_2_d_6_3');" value="0" required
                                class="form-control" /></div>
                        <div>3_2_d_5_4<input type="text" name="3_2_d_5_4" id="3_2_d_5_4"
                                onkeyup="fnmulty('3_2_d_3_4','3_2_d_5_4','3_2_d_6_4');" value="0" required
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div>3_2_d_6_1<input type="text" name="3_2_d_6_1" id="3_2_d_6_1" value="0" readonly
                                class="form-control" /></div>
                        <div>3_2_d_6_2<input type="text" name="3_2_d_6_2" id="3_2_d_6_2" value="0" readonly
                                class="form-control" /></div>
                        <div>3_2_d_6_3<input type="text" name="3_2_d_6_3" id="3_2_d_6_3" value="0" readonly
                                class="form-control" /></div>
                        <div>3_2_d_6_4<input type="text" name="3_2_d_6_4" id="3_2_d_6_4" value="0" readonly
                                class="form-control" /></div>
                    </td>
                    <td>
                        <div class="form-group">1
                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_1_1" id="3_2_d_7_1_1"
                                        value="1"> සිල්ලර වෙළඳසැල</label>
                            </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_1_2" id="3_2_d_7_1_2"
                                        value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_1_3" id="3_2_d_7_1_3"
                                        value="3"> සෙසු ගොවියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_1_4" id="3_2_d_7_1_4"
                                        value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_1_5" id="3_2_d_7_1_5"
                                        value="5"> අසල්වැසියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_1_6"
                                        onclick="eDcheckOT('3_2_d_7_1_6','3_2_d_7_1_6_oth')" id="3_2_d_7_1_6" value="6">
                                    වෙනත්, සඳහන් කරන්න</label> </div>

                            <div>3_2_d_7_1_6_oth <input type="text" name="3_2_d_7_1_6_oth" id="3_2_d_7_1_6_oth"
                                    class="form-control" /> </div>
                            <hr>
                            <div class="form-group">3
                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_3_1" id="3_2_d_7_3_1"
                                            value="1"> සිල්ලර වෙළඳසැල</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_3_2" id="3_2_d_7_3_2"
                                            value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_3_3" id="3_2_d_7_3_3"
                                            value="3"> සෙසු ගොවියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_3_4" id="3_2_d_7_3_4"
                                            value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_3_5" id="3_2_d_7_3_5"
                                            value="5"> අසල්වැසියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_3_6" id="3_2_d_7_3_6"
                                            onclick="eDcheckOT('3_2_d_7_3_6','3_2_d_7_3_6_oth')" value="6"> වෙනත්, සඳහන්
                                        කරන්න</label> </div>

                                <div>3_2_d_7_3_6_oth <input type="text" name="3_2_d_7_3_6_oth" id="3_2_d_7_3_6_oth"
                                        class="form-control" /> </div>
                    </td>
                    <td>
                        <div class="form-group">2
                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_2_1" id="3_2_d_7_2_1"
                                        value="1"> සිල්ලර වෙළඳසැල</label>
                            </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_2_2" id="3_2_d_7_2_2"
                                        value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_2_3" id="3_2_d_7_2_3"
                                        value="3"> සෙසු ගොවියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_2_4" id="3_2_d_7_2_4"
                                        value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_2_5" id="3_2_d_7_2_5"
                                        value="5"> අසල්වැසියා</label> </div>
                            <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_2_6"
                                        onclick="eDcheckOT('3_2_d_7_2_6','3_2_d_7_2_6_oth')" id="3_2_d_7_2_6"
                                        value="6">වෙනත්, සඳහන් කරන්න</label> </div>
                            <div>3_2_d_7_2_6_oth <input type="text" name="3_2_d_7_2_6_oth" id="3_2_d_7_2_6_oth"
                                    class="form-control" /> </div>
                            <hr>
                            <div class="form-group">4
                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_4_1" id="3_2_d_7_4_1"
                                            value="1"> සිල්ලර වෙළඳසැල</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_4_2" id="3_2_d_7_4_2"
                                            value="2"> ගොවිජන සංවර්ධන මධ්‍යස්ථානය</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_4_3" id="3_2_d_7_4_3"
                                            value="3"> සෙසු ගොවියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_4_4" id="3_2_d_7_4_4"
                                            value="4"> ගොවි සංගමය හෝ සමුපකාරය</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_4_5" id="3_2_d_7_4_5"
                                            value="5"> අසල්වැසියා</label> </div>
                                <div class="checkbox"><label><input type="checkbox" name="3_2_d_7_4_6" id="3_2_d_7_4_6"
                                            onclick="eDcheckOT('3_2_d_7_4_6','3_2_d_7_4_6_oth')" value="6">වෙනත්, සඳහන්
                                        කරන්න</label> </div>
                                <div>3_2_d_7_4_6_oth <input type="text" name="3_2_d_7_4_6_oth" id="3_2_d_7_4_6_oth"
                                        class="form-control" /> </div>
                    </td>
                </tr>




            </table>
        </div>


        <?php } 
            }

            if ($_GET['option'] == "update4_2") {
                $household_id = $_GET["household_id"];
                $af4_1 = $_GET["f4_1"];
                    if ($af4_1 == 2) { ?>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th colspan="4"> ඔව් නම්, කරුණාකර විස්තර සපයන්න</th>
                    </tr>
                    <tr>
                        <th>4.2. ණය ලබා ගත් මූලාශ්‍රය </th>
                        <th>4.3. ගෙවූ/නොගෙවූ</th>
                        <th>4.4. පොලී අනුපාතය</th>
                        <th>4.5. ණය මුදල</th>
                    </tr>
                    <tr>
                        <td>4_2a<input type="text" name="4_2a" id="4_2a" class="form-control" /></td>
                        <td>4_3a<div class="input-group">
                                <select class="form-control  col-6" name="4_3a" id="4_3a">
                                    <option value="1"> ගෙවූ</option>
                                    <option value="2"> නොගෙවූ</option>
                            </div>
                        </td>
                        <td>4_4a<input type="number" name="4_4a" id="4_4a" value="0" class="form-control" /></td>
                        <td>4_5a<input type="number" name="4_5a" id="4_5a" value="0" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>4_2b<input type="text" name="4_2b" id="4_2b" class="form-control" /></td>
                        <td>4_3b<div class="input-group">
                                <select class="form-control  col-6" name="4_3b" id="4_3b">
                                <option value="1"> ගෙවූ</option>
                                    <option value="2"> නොගෙවූ</option>
                            </div>
                        </td>
                        <td>4_4b<input type="number" name="4_4b" id="4_4b" value="0" class="form-control" /></td>
                        <td>4_5b<input type="number" name="4_5b" id="4_5b" value="0" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>4_2c<input type="text" name="4_2c" id="4_2c" class="form-control" /></td>
                        <td>4_3c<div class="input-group">
                                <select class="form-control  col-6" name="4_3c" id="4_3c">
                                <option value="1"> ගෙවූ</option>
                                    <option value="2"> නොගෙවූ</option>
                            </div>
                        </td>
                        <td>4_4c<input type="number" name="4_4c" id="4_4c" value="0" class="form-control" /></td>
                        <td>4_5c<input type="number" name="4_5c" id="4_5c" value="0" class="form-control" /></td>
                    </tr>

                </table>
            </div>
        </div>
        <?php }
            }

            if ($_GET['option'] == "update2_8") 
            {
               
                $a2_7 = $_GET["f2_7"];
                    if ($a2_7 == 2) { ?>

        <div class="col-md-6">
            <div class="form-group">
                <label>2.8 ඔබ සමාජිකත්වය ලබා ගෙන කොපමණ කාලයක්ද? (අවුරුදු )</label>
                <div class="row">
                    <div class="col-md-15"><input type="text" name="2_8" id="2_8" placeholder="වර්ෂය"
                            class="form-control" />
                    </div>
                </div>
            </div>
        </div>
        <?php  

                }

                        
}

if ($_GET['option'] == "update8_4") 
{ ?>
  <div class="col-md-4">
                                    <div class="input-group">
                                        <label>8_4. එසේ නොවේ නම්, හේතුව කුමක් විය හැකි යැයි ඔබ සිතන්නේද?</label>

                                        <input type="text" required name="8_4" id="8_4" class="form-control" />
                                    </div>
                                </div>
  
  <?php
}

}