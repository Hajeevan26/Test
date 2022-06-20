<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
            1.2. Household and living conditions (Put “√”)
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

                <div class="col-md-4">
                    <div class="form-group">
                        <label><u>1.2.1 Roof </u></label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a" value="1">Tile</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b" value="2">Corru.Asbestos</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c" value="3">Tin/Alu. sheets</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d" value="4">Cadjan</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_e" id="1_2_1_e" value="5" onclick="eDcheckOT('1_2_1_e','1_2_1_e_oth')">Other</label> </div>

<div class="input-group" id="1_2_1_e_ot"><input type="text" required name="1_2_1_e_oth" id="1_2_1_e_oth" class="form-control" /></div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.2 Floor </label>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_2_a" id="1_2_2_a" value="1">Tile/terraz</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_2_b" id="1_2_2_b" value="2">Cement</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_2_c" id="1_2_2_c" value="3">Earth/cow dung</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_2_d" id="1_2_2_d" value="4" onclick="eDcheckOT('1_2_2_d','1_2_2_d_oth')">Other</label> </div>

                    </div>
                    <div class="input-group" id="1_2_2_d_ot"><input type="text" placeholder="other" required name="1_2_2_d_oth" id="1_2_2_d_oth" class="form-control" /></div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.3 Walls </label>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_3_a" id="1_2_3_a"
                                    value="1">Bricks</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_3_b" id="1_2_3_b"
                                    value="2">Clay</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_3_c" id="1_2_3_c"
                                    value="3">Wood</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_3_d" id="1_2_3_d"
                                    value="4" onclick="eDcheckOT('1_2_3_d','1_2_3_d_oth')">Other</label> </div>
                    </div>
                    <div class="input-group" id="1_2_3_d_ot"><input type="text" placeholder="other" required name="1_2_3_d_oth" id="1_2_3_d_oth" class="form-control" /></div>
                </div>
            </div>
            <hr>
            <!-- 2nd row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.4 Drinking water</label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_a" id="1_2_4_a"
                                    value="1">Protected well </label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_b" id="1_2_4_b"
                                    value="2">Unprotected well</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_c" id="1_2_4_c" value="3">Tube
                                well </label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_d" id="1_2_4_d"
                                    value="4">Village tank</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_e" id="1_2_4_e"
                                    value="5">River/canal </label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_f" id="1_2_4_f"
                                    value="6">Service line</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_g" id="1_2_4_g" value="7">Rain
                                water</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_h" id="1_2_4_h"
                                    value="8"  onclick="eDcheckOT('1_2_4_h','1_2_4_h_oth')">Other</label></div>

                    </div>
                    <div class="input-group" id="1_2_4_h_ot"><input type="text" placeholder="other" required name="1_2_4_h_oth" id="1_2_4_h_oth" class="form-control" /></div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.5 Toilet </label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_5_a" id="1_2_5_a" value="1">Water
                                sealed</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_5_b" id="1_2_5_b" value="2">Flow
                                flush</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_5_c" id="1_2_5_c"
                                    value="3">Pit</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_5_d" id="1_2_5_d"
                                    value="4" onclick="eDcheckOT('1_2_5_d','1_2_5_d_oth')"  onload="eDcheckOT('1_2_5_d','1_2_5_d_oth')">Other</label></div>

                    </div>
                    <div class="input-group" id="1_2_5_d_ot"><input type="text" placeholder="other" required name="1_2_5_d_oth" id="1_2_5_d_oth" class="form-control" /></div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.6 Energy – cooking </label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_6_a" id="1_2_6_a" value="1">Fire
                                wood</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_6_b" id="1_2_6_b"
                                    value="2">Kerosene</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_6_c" id="1_2_6_c"
                                    value="3">Electricity</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_6_d" id="1_2_6_d"
                                    value="4">Gas</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_6_e" id="1_2_6_e" value="5">Crop
                                residue</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_6_f" id="1_2_6_f"
                                    value="6" onclick="eDcheckOT('1_2_6_f','1_2_6_f_oth')">Other</label></div>

                    </div>
                    <div class="input-group" id="1_2_6_f_ot"><input type="text" placeholder="other" required name="1_2_6_f_oth" id="1_2_6_f_oth" class="form-control" /></div>

                </div>

            </div>
            <!-- 3rd -->
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.7 Energy – lighting </label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_7_a" id="1_2_7_a"
                                    value="1">Electricity – Main supply</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_7_b" id="1_2_7_b"
                                    value="2">Electricity –generator</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_7_c" id="1_2_7_c"
                                    value="3">Electricity- Solar power</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_7_d" id="1_2_7_d" value="4">Lamps-
                                Kerosene/Petrol</label></div>
                     

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.8 Mobile phone</label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_8_a" id="1_2_8_a" value="1">Smart
                                phone</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_8_b" id="1_2_8_b"
                                    value="2">Non-smart phone</label></div>
                     

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.9 Internet facilities/ other connections</label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_a" id="1_2_9_a" value="1">Mobile
                                Broadband connection/ cellular</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_b" id="1_2_9_b" value="2">Cable
                                connection</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_c" id="1_2_9_c"
                                    value="3">Wireless connection/ WiFi</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_d" id="1_2_9_d" value="4">Fiber
                                connection</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_e" id="1_2_9_e" value="5">Peo
                                TV</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_f" id="1_2_9_f" value="6">Dialog
                                TV</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_g" id="1_2_9_g"
                                    value="7" onclick="eDcheckOT('1_2_9_g','1_2_9_g_oth')">Other</label></div>

                    </div>
                    <div class="input-group" id="1_2_6_g_ot"><input type="text" placeholder="other" required name="1_2_9_g_oth" id="1_2_9_g_oth" class="form-control" /></div>

                </div>
            </div>
            <hr>
            <!-- 4th -->
            <div class="row">
                <div class="col-md-4">

                    <div class="form-group">
                        <label>1.2.10 Other facilities</label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_a" id="1_2_10_a"
                                    value="1">Radio</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_b" id="1_2_10_b"
                                    value="2">Black and White TV</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_c" id="1_2_10_c" value="3">Old
                                LCD TV</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_d" id="1_2_10_d" value="4">LCD
                                TV</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_e" id="1_2_10_e" value="5">LED
                                TV</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_f" id="1_2_10_f"
                                    value="6">Desktop Computer</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_g" id="1_2_10_g"
                                    value="7">Laptop computer</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_h" id="1_2_10_h"
                                    value="8">Tablet</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_i" id="1_2_10_i"
                                    value="10">Fixed Telephone</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_j" id="1_2_10_j"
                                    value="11">Microwave oven</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_k" id="1_2_10_k"
                                    value="12">Normal oven</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_l" id="1_2_10_l"
                                    value="13">Pressure cooker</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_m" id="1_2_10_m"
                                    value="14">Toaster</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_n" id="1_2_10_n"
                                    value="15">Electric kettle</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_o" id="1_2_10_o"
                                    value="16">Ceiling fan</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_p" id="1_2_10_p"
                                    value="17">Stand fan</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_q" id="1_2_10_q"
                                    value="18">Table fan</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_r" id="1_2_10_r"
                                    value="19">Vacuum cleaner</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_s" id="1_2_10_s"
                                    value="20">Mobile Air conditioner</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_t" id="1_2_10_t"
                                    value="21">Fixed Air conditioner</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_u" id="1_2_10_u"
                                    value="22" onclick="eDcheckOT('1_2_10_u','1_2_10_u_oth')">Other</label></div>
                     
                    </div>
                    <div class="input-group" id="1_2_10_u_ot"><input type="text" placeholder="other" required name="1_2_10_u_oth" id="1_2_10_u_oth" class="form-control" /></div>


                </div>
            </div>
            <div class="card-footer">
                   
                   <button type="reset" class="btn btn-default">Reset Button</button>
                   <button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary float-right">Submit Button</button>
               </div>
            


        </div>

        

    </div>
    
</form>