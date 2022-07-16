<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
            1.2. ගෘහය සහ ජීවන තත්ත්වය ( “√” ලකුණ යොදන්න)
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

                <div class="col-md-4">
                    <div class="form-group">
                        <label><u>1.2.1 වහලය </u></label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a" value="1">ටයිල්</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b" value="2">ඇස්බැස්ටොස්</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c" value="3">ටින්/ඇලුමිනියම් තහඩු</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d" value="4">පොල් අතු සෙවිලි</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_e" id="1_2_1_e" value="5" onclick="eDcheckOT('1_2_1_e','1_2_1_e_oth')">වෙනත්</label> </div>

                        <div class="input-group" id="1_2_1_e_ot"><input type="text"  name="1_2_1_e_oth" id="1_2_1_e_oth" class="form-control " /></div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.2 ගෙබිම </label>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_2_a" id="1_2_2_a" value="1">ටයිල්/ටෙරාසෝ</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_2_b" id="1_2_2_b" value="2"> සිමෙන්ති</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_2_c" id="1_2_2_c" value="3"> පොලව/ගවගොම</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_2_d" id="1_2_2_d" value="4" onclick="eDcheckOT('1_2_2_d','1_2_2_d_oth')">වෙනත්</label> </div>

                    </div>
                    <div class="input-group" id="1_2_2_d_ot"><input type="text" placeholder="වෙනත්"  name="1_2_2_d_oth" id="1_2_2_d_oth" class="form-control" /></div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.3 බිත්ති </label>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_3_a" id="1_2_3_a"
                                    value="1">ගඩොල්</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_3_b" id="1_2_3_b"
                                    value="2">   මැටි</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_3_c" id="1_2_3_c"
                                    value="3">ලී	</label> </div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_3_d" id="1_2_3_d"
                                    value="4" onclick="eDcheckOT('1_2_3_d','1_2_3_d_oth')">වෙනත්</label> </div>
                    </div>
                    <div class="input-group" id="1_2_3_d_ot"><input type="text" placeholder="වෙනත්"  name="1_2_3_d_oth" id="1_2_3_d_oth" class="form-control" /></div>
                </div>
            </div>
            <hr>
            <!-- 2nd row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.4 පානීය ජලය</label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_a" id="1_2_4_a"
                                    value="1">  ආරක්ෂිත ළිඳ </label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_b" id="1_2_4_b"
                                    value="2">  අනාරක්ෂිත ළිඳ</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_c" id="1_2_4_c" value="3">නල ළිඳ</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_d" id="1_2_4_d"
                                    value="4">ග්‍රාමීය ජල ටැංකිය</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_e" id="1_2_4_e"
                                    value="5">ගඟ/ඇළ	 </label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_f" id="1_2_4_f"
                                    value="6"> සේවා ජල සැපයුම</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_g" id="1_2_4_g" value="7"> 	වැසි ජලය
                               </label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_4_h" id="1_2_4_h"
                                    value="8"  onclick="eDcheckOT('1_2_4_h','1_2_4_h_oth')">	වෙනත්</label></div>
                                  
                    </div>
                    <div class="input-group" id="1_2_4_h_ot"><input type="text" placeholder="වෙනත්"  name="1_2_4_h_oth" id="1_2_4_h_oth" class="form-control" /></div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.5 වැසිකිලි </label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_5_a" id="1_2_5_a" value="1">
                        ජලය මුද්‍රා කර ඇත</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_5_b" id="1_2_5_b" value="2">ප්‍රවාහ සෝදා හැරීම (flow flush)
                             </label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_5_c" id="1_2_5_c"
                                    value="3">	වළ	 වෙනත්</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_5_d" id="1_2_5_d"
                                    value="4" onclick="eDcheckOT('1_2_5_d','1_2_5_d_oth')"  onload="eDcheckOT('1_2_5_d','1_2_5_d_oth')">වෙනත්</label></div>
                                    	
                    </div>
                    <div class="input-group" id="1_2_5_d_ot"><input type="text" placeholder="වෙනත්"  name="1_2_5_d_oth" id="1_2_5_d_oth" class="form-control" /></div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.6 පිසිමේ බලශක්තිය  </label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_6_a" id="1_2_6_a" value="1">
                        දර</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_6_b" id="1_2_6_b"
                                    value="2">	භූමි තෙල්	</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_6_c" id="1_2_6_c"
                                    value="3"> විදුලිය</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_6_d" id="1_2_6_d"
                                    value="4">ගෑස්</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_6_e" id="1_2_6_e" value="5">
                        බෝග අවශේෂ</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_6_f" id="1_2_6_f"
                                    value="6" onclick="eDcheckOT('1_2_6_f','1_2_6_f_oth')">වෙනත්</label></div>
                                   
	

                    </div>
                    <div class="input-group" id="1_2_6_f_ot"><input type="text" placeholder="වෙනත්"  name="1_2_6_f_oth" id="1_2_6_f_oth" class="form-control" /></div>

                </div>

            </div>
            <!-- 3rd -->
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.7 බලශක්තිය-ආලෝකය</label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_7_a" id="1_2_7_a"
                                    value="1">විදුලිය- ප්‍රධාන සැපයුම</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_7_b" id="1_2_7_b"
                                    value="2">විදුලි ජනකය</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_7_c" id="1_2_7_c"
                                    value="3">සූර්ය පැනල</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_7_d" id="1_2_7_d" value="4">
                        ලාම්පු-පෙට්‍රල්/භූමී තෙල්</label></div>
                        <!-- <div class="checkbox"><label><input type="checkbox" name="1_2_7_e" id="1_2_7_e" value="5">Crop
                                residue</label></div> -->

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.8 ජංගම දුරකථන</label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_8_a" id="1_2_8_a" value="1">
                        ස්මාර්ට් දුරකථන</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_8_b" id="1_2_8_b"
                                    value="2">ස්මාර්ට් නොවන</label></div>
                        <!-- <div class="checkbox"><label><input type="checkbox" name="1_2_8_c" id="1_2_8_c"
                                    value="3">Electricity- Solar power</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_8_d" id="1_2_8_d" value="4">Lamps-
                                Kerosene/Petrol</label></div> -->

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>1.2.9 අන්තර්ජාල හා වෙනත් සබඳතා</label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_a" id="1_2_9_a" value="1">
                        ජංගම බ්‍රෝඩ්බෑන්ඩ් සම්බන්ධතාවය/ සෙලියුලර්</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_b" id="1_2_9_b" value="2">
                        කේබල් සම්බන්ධතාවය</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_c" id="1_2_9_c"
                                    value="3">රැහැන්රහිත සම්බන්ධතාවය/වයිෆයි</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_d" id="1_2_9_d" value="4">
                        ෆයිබර් සම්බන්ධතාවය</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_e" id="1_2_9_e" value="5">
                        පියෝ ටීවී</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_f" id="1_2_9_f" value="6">
                        ඩයලොග් ටීවී</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_9_g" id="1_2_9_g"
                                    value="7" onclick="eDcheckOT('1_2_9_g','1_2_9_g_oth')">	වෙනත්</label></div>
                                   			


                    </div>
                    <div class="input-group" id="1_2_6_g_ot"><input type="text" placeholder="වෙනත්"  name="1_2_9_g_oth" id="1_2_9_g_oth" class="form-control" /></div>

                </div>
            </div>
            <hr>
            <!-- 4th -->
            <div class="row">
                <div class="col-md-4">

                    <div class="form-group">
                        <label>1.2.10 වෙනත් පහසුකම්</label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_a" id="1_2_10_a"
                                    value="1"> රේඩියෝ</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_b" id="1_2_10_b"
                                    value="2">කළු සහ සුදු රූපවාහිනිය</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_c" id="1_2_10_c" value="3">
                        පැරණි LCD රූපවාහිනිය</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_d" id="1_2_10_d" value="4">
                        LCD රූපවාහිනිය</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_e" id="1_2_10_e" value="5">
                        LED රූපවාහිනි</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_f" id="1_2_10_f"
                                    value="6">                                  	
	                    ඩෙස්ක්ටොප් පරිගණකය</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_g" id="1_2_10_g"
                                    value="7">ලැප්ටොප් පරිගණකය	</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_h" id="1_2_10_h"
                                    value="8"> ටැබ්ලට්</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_i" id="1_2_10_i"
                                    value="10">ස්ථාවර දුරකථන</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_j" id="1_2_10_j"
                                    value="11">මයික්‍රෝවේව් උඳුන</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_k" id="1_2_10_k"
                                    value="12">	සමාන්‍ය උඳුන</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_l" id="1_2_10_l"
                                    value="13">	පීඩන උඳුන</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_m" id="1_2_10_m"
                                    value="14">ටෝස්ටරය</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_n" id="1_2_10_n"
                                    value="15">විදුලි කේතලය</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_o" id="1_2_10_o"
                                    value="16">සීලිං පංකා</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_p" id="1_2_10_p"
                                    value="17">	ස්ටෑන්ඩ් ෆෑන්</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_q" id="1_2_10_q"
                                    value="18">මේස පංකාව</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_r" id="1_2_10_r"
                                    value="19">රික්ත ශෝධකය(වැකියුම් ක්ලීනර්)</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_s" id="1_2_10_s"
                                    value="20">ජංගම වායු සමීකරණ</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_t" id="1_2_10_t"
                                    value="21">	ස්ථාවර වායු සමීකරණ</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_10_u" id="1_2_10_u"
                                    value="22" onclick="eDcheckOT('1_2_10_u','1_2_10_u_oth')">වෙනත්	</label></div>
 	
	
		

           
                    </div>
                    <div class="input-group" id="1_2_10_u_ot"><input type="text" placeholder="වෙනත්"  name="1_2_10_u_oth" id="1_2_10_u_oth" class="form-control" /></div>


                </div>
            </div>
            <div class="card-footer">
                   
                   <button type="reset" class="btn btn-default">Reset Button</button>
                   <button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary float-right">Submit Button</button>
               </div>
            


        </div>

        

    </div>
    
</form>