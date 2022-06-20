<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
            5. Access to extension
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">


            </div>

            <!-- 2nd row -->
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">

                        <tr>
                            <th>Extension service/Training 2021/22 Maha season</th>
                            <th>5.1 Yes/No </th>
                            <th>5.2.Who provided the service (Select the answer from the codes given below) </th>
                            <th>5.3.When did you receive it? (Select codes given below) </th>
                            <th> 5.4.Did you pay any money for the service?</th>
                            <th>5.5.If paid, how much? (Rs.) </th>
                        </tr>
                        <tr>
                            <td>a.Information on cultivation methods (Dapok, parachute etc.)</td>
                            <td>5_1_a<div class="input-group">
                                    <select class="form-control" name="5_1_a" id="5_1_a">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_a_1" id="5_2_a_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_a_2" id="5_2_a_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_a_3" id="5_2_a_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_a_4" id="5_2_a_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_a_5" id="5_2_a_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_a_6" id="5_2_a_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_a_7"
                                                id="5_2_a_7" value="7" onclick="eDcheckOT('5_2_a_7','5_2_a_7_oth')"checked >Other</label>
                                    </div>
                                    <div>5_2_a_7_oth <input type="text" name="5_2_a_7_oth" id="5_2_a_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_a_1" id="5_3_a_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_a_2" id="5_3_a_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_a_3" id="5_3_a_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_a<div class="input-group">
                                    <select class="form-control" name="5_4_a" id="5_4_a">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>5_5_a<input type="number" value="0" name="5_5_a" id="5_5_a" class="form-control" /></td>
                           
                        
                        </tr>
                        <!-- 2nd row -->
                        <tr>
                        <td>b.Information on fertilizer applications </td>
                            <td>5_1_b<div class="input-group">
                                    <select class="form-control" name="5_1_b" id="5_1_b">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_b_1" id="5_2_b_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_b_2" id="5_2_b_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_b_3" id="5_2_b_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_b_4" id="5_2_b_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_b_5" id="5_2_b_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_b_6" id="5_2_b_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_b_7" onclick="eDcheckOT('5_2_b_7','5_2_b_7_oth')"
                                                id="5_2_b_7" value="7"checked >Other</label>
                                    </div>
                                    <div>5_2_b_7_oth<input type="text" name="5_2_b_7_oth" id="5_2_b_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_b_1" id="5_3_b_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_b_2" id="5_3_b_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_b_3" id="5_3_b_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_b<div class="input-group">
                                    <select class="form-control" name="5_4_b" id="5_4_b">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>

                            <td>5_5_b<input type="number" value="0" name="5_5_b" id="5_5_b" class="form-control" /></td>
                        </tr>
                        <!-- 3nd row -->
                        <tr>
                            <td>.Information on agro-chemical applications</td>
                            <td>5_1_c<div class="input-group">
                                    <select class="form-control" name="5_1_c" id="5_1_c">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_c_1" id="5_2_c_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_c_2" id="5_2_c_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_c_3" id="5_2_c_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_c_4" id="5_2_c_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_c_5" id="5_2_c_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_c_6" id="5_2_c_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_c_7" onclick="eDcheckOT('5_2_c_7','5_2_c_7_oth')"
                                                id="5_2_c_7" value="7"checked >Other</label>
                                    </div>
                                    <div>5_2_c_7_oth<input type="text" name="5_2_c_7_oth" id="5_2_c_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_c_1" id="5_3_c_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_c_2" id="5_3_c_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_c_3" id="5_3_c_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_c<div class="input-group">
                                    <select class="form-control" name="5_4_c" id="5_4_c">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>

                            <td>5_5_c<input type="number" value="0" name="5_5_c" id="5_5_c" class="form-control" /></td>
                        </tr>
                        <!-- 4nd row -->
                        <tr>
                            <td>d.Information on other
                                agronomic practices</td>
                            <td>5_1_d<div class="input-group">
                                    <select class="form-control" name="5_1_d" id="5_1_d">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_d_1" id="5_2_d_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_d_2" id="5_2_d_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_d_3" id="5_2_d_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_d_4" id="5_2_d_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_d_5" id="5_2_d_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_d_6" id="5_2_d_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_d_7" onclick="eDcheckOT('5_2_d_7','5_2_d_7_oth')"
                                                id="5_2_d_7" value="7"checked >Other</label>
                                    </div>
                                    <div>5_2_d_7_oth <input type="text" name="5_2_d_7_oth" id="5_2_d_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_d_1" id="5_3_d_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_d_2" id="5_3_d_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_d_3" id="5_3_d_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_d<div class="input-group">
                                    <select class="form-control" name="5_4_d" id="5_4_d">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>

                            <td>5_5_d<input type="number" value="0" name="5_5_d" id="5_5_d" class="form-control" /></td>
                        </tr>
                        <!-- 5nd row -->
                        <tr>
                            <td>e.Information on irrigation
                                practices
                            </td>
                            <td>5_1_e<div class="input-group">
                                    <select class="form-control" name="5_1_e" id="5_1_e">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_e_1" id="5_2_e_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_e_2" id="5_2_e_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_e_3" id="5_2_e_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_e_4" id="5_2_e_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_e_5" id="5_2_e_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_e_6" id="5_2_e_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_e_7" onclick="eDcheckOT('5_2_e_7','5_2_e_7_oth')"
                                                id="5_2_e_7" value="7"checked >Other</label>
                                    </div>
                                    <div>5_2_e_7_oth<input type="text" name="5_2_e_7_oth" id="5_2_e_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_e_1" id="5_3_e_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_e_2" id="5_3_e_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_e_3" id="5_3_e_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_e<div class="input-group">
                                    <select class="form-control" name="5_4_e" id="5_4_e">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>

                            <td>5_5_e<input type="number" value="0" name="5_5_e" id="5_5_e" class="form-control" /></td>
                        </tr>
                        <!-- 6nd row -->
                        <tr>
                            <td>f.Information on weed
                                management
                            </td>
                            <td>5_1_f<div class="input-group">
                                    <select class="form-control" name="5_1_f" id="5_1_f">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_f_1" id="5_2_f_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_f_2" id="5_2_f_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_f_3" id="5_2_f_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_f_4" id="5_2_f_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_f_5" id="5_2_f_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_f_6" id="5_2_f_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_f_7" onclick="eDcheckOT('5_2_f_7','5_2_f_7_oth')"
                                                id="5_2_f_7" value="7"checked >Other</label>
                                    </div>
                                    <div>5_2_f_7_oth<input type="text" name="5_2_f_7_oth" id="5_2_f_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_f_1" id="5_3_f_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_f_2" id="5_3_f_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_f_3" id="5_3_f_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_f<div class="input-group">
                                    <select class="form-control" name="5_4_f" id="5_4_f">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>

                            <td>5_5_f<input type="number" value="0" name="5_5_f" id="5_5_f" class="form-control" /></td>
                        </tr>
                        <!-- 7nd row -->
                        <tr>
                            <td>g.Information on pest and
                                diseases
                            </td>
                            <td>5_1_g<div class="input-group">
                                    <select class="form-control" name="5_1_g" id="5_1_g">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_g_1" id="5_2_g_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_g_2" id="5_2_g_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_g_3" id="5_2_g_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_g_4" id="5_2_g_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_g_5" id="5_2_g_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_g_6" id="5_2_g_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_g_7" onclick="eDcheckOT('5_2_g_7','5_2_g_7_oth')"
                                                id="5_2_g_7" value="7"checked >Other</label>
                                    </div>
                                    <div>5_2_g_7_oth<input type="text" name="5_2_g_7_oth" id="5_2_g_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_g_1" id="5_3_g_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_g_2" id="5_3_g_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_g_3" id="5_3_g_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_g<div class="input-group">
                                    <select class="form-control" name="5_4_g" id="5_4_g">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>

                            <td>5_5_g<input type="number" value="0" name="5_5_g" id="5_5_g" class="form-control" /></td>
                        </tr>
                        <!-- 8nd row -->
                        <tr>
                            <td>h.Information on integrated
                                pest management methods</td>
                            <td>5_1_h<div class="input-group">
                                    <select class="form-control" name="5_1_h" id="5_1_h">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_h_1" id="5_2_h_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_h_2" id="5_2_h_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_h_3" id="5_2_h_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_h_4" id="5_2_h_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_h_5" id="5_2_h_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_h_6" id="5_2_h_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_h_7" onclick="eDcheckOT('5_2_h_7','5_2_h_7_oth')"
                                                id="5_2_h_7" value="7"checked >Other</label>
                                    </div>
                                    <div>5_2_h_7_oth<input type="text" name="5_2_h_7_oth" id="5_2_h_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_h_1" id="5_3_h_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_h_2" id="5_3_h_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_h_3" id="5_3_h_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_h<div class="input-group">
                                    <select class="form-control" name="5_4_h" id="5_4_h">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>

                            <td>5_5_h<input type="number" value="0" value="0" name="5_5_h" id="5_5_h" class="form-control" /></td>
                        </tr>
                        <!-- 9nd row -->
                        <tr>
                            <td>i.Information on organic
                                farming</td>
                            <td>5_1_i<div class="input-group">
                                    <select class="form-control" name="5_1_i" id="5_1_i">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_i_1" id="5_2_i_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_i_2" id="5_2_i_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_i_3" id="5_2_i_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_i_4" id="5_2_i_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_i_5" id="5_2_i_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_i_6" id="5_2_i_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_i_7" onclick="eDcheckOT('5_2_i_7','5_2_i_7_oth')"
                                                id="5_2_i_7" value="7"checked >Other</label>
                                    </div>
                                    <div>5_2_i_7_oth<input type="text" name="5_2_i_7_oth" id="5_2_i_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_i_1" id="5_3_i_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_i_2" id="5_3_i_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_i_3" id="5_3_i_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_i<div class="input-group">
                                    <select class="form-control" name="5_4_i" id="5_4_i">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>

                            <td>5_5_i<input type="number" value="0" value="0" name="5_5_i" id="5_5_i" class="form-control" /></td>
                        </tr>
                        <!-- 10nd row -->
                        <tr>
                            <td>j.Information on credit
                                facilities
                            </td>
                            <td>5_1_j<div class="input-group">
                                    <select class="form-control" name="5_1_j" id="5_1_j">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_j_1" id="5_2_j_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_j_2" id="5_2_j_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_j_3" id="5_2_j_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_j_4" id="5_2_j_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_j_5" id="5_2_j_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_j_6" id="5_2_j_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_j_7" onclick="eDcheckOT('5_2_j_7','5_2_j_7_oth')"
                                                id="5_2_j_7" value="7"checked >Other</label>
                                    </div>
                                    <div>5_2_j_7_oth<input type="text" name="5_2_j_7_oth" id="5_2_j_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_j_1" id="5_3_j_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_j_2" id="5_3_j_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_j_3" id="5_3_j_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_j<div class="input-group">
                                    <select class="form-control" name="5_4_j" id="5_4_j">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>

                            <td>5_5_j<input type="number" value="0" value="0" name="5_5_j" id="5_5_j" class="form-control" /></td>
                        </tr>
                        <!-- 11nd row -->
                        <tr>
                            <td>k.Information on market
                                information</td>
                            <td>5_1_k<div class="input-group">
                                    <select class="form-control" name="5_1_k" id="5_1_k">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_k_1" id="5_2_k_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_k_2" id="5_2_k_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_k_3" id="5_2_k_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_k_4" id="5_2_k_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_k_5" id="5_2_k_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_k_6" id="5_2_k_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_k_7" onclick="eDcheckOT('5_2_k_7','5_2_k_7_oth')"
                                                id="5_2_k_7" value="7"checked >Other</label>
                                    </div>
                                    <div>5_2_k_7_oth<input type="text" name="5_2_k_7_oth" id="5_2_k_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_k_1" id="5_3_k_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_k_2" id="5_3_k_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_k_3" id="5_3_k_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_k<div class="input-group">
                                    <select class="form-control" name="5_4_k" id="5_4_k">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>

                            <td>5_5_k<input type="number" value="0" name="5_5_k" id="5_5_k" class="form-control" /></td>
                        </tr>
                        <!-- 12 row -->
                        <tr>
                            <td>g.Information on smart
                                agriculture
                                practices/technologies</td>
                            <td>5_1_L<div class="input-group">
                                    <select class="form-control" name="5_1_l" id="5_1_l">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_l_1" id="5_2_l_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_l_2" id="5_2_l_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_l_3" id="5_2_l_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_l_4" id="5_2_l_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_l_5" id="5_2_l_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_l_6" id="5_2_l_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_l_7" onclick="eDcheckOT('5_2_l_7','5_2_l_7_oth')"
                                                id="5_2_l_7" value="7"checked >Other</label>
                                    </div>
                                    <div>5_2_l_7_oth<input type="text" name="5_2_l_7_oth" id="5_2_l_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_l_1" id="5_3_l_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_l_2" id="5_3_l_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_l_3" id="5_3_l_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_g<div class="input-group">
                                    <select class="form-control" name="5_4_l" id="5_4_l">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>

                            <td>5_5_l<input type="number" value="0" name="5_5_l" id="5_5_l" class="form-control" /></td>
                        </tr>
                        <!-- 13 row -->
                        <tr>
                            <td>
                                <div>If Other<input type="text" name="5_1_m" id="5_1_m" class="form-control" />
                            </td>
                            <td>5_2_m<div class="input-group">
                                    <select class="form-control" name="5_2_m" id="5_2_m">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">

                                    <div class="checkbox"><label><input type="checkbox" name="5_2_m_1" id="5_2_m_1"
                                                value="1"> Agricultural Instructors</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_m_2" id="5_2_m_2"
                                                value="2">Development officers</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_m_3" id="5_2_m_3"
                                                value="3">Officials from private firms </label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_2_m_4" id="5_2_m_4"
                                                value="4">Farmer's organizations</label></div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_m_5" id="5_2_m_5"
                                                value="5">Universities/Colleges</label> </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_m_6" id="5_2_m_6"
                                                value="6">NGO</label>
                                    </div>
                                    <div class="checkbox"> <label><input type="checkbox" name="5_2_m_7" onclick="eDcheckOT('5_2_m_7','5_2_m_7_oth')"
                                                id="5_2_m_7" value="7"checked >Other</label>
                                    </div>
                                    <div>5_2_m_7_oth<input type="text" name="5_2_m_7_oth" id="5_2_m_7_oth"
                                            class="form-control" />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_m_1" id="5_3_m_1"
                                                value="1"> Prior to the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_m_2" id="5_3_m_2"
                                                value="2">During the Maha season</label> </div>
                                    <div class="checkbox"><label><input type="checkbox" name="5_3_m_3" id="5_3_m_3"
                                                value="3">After the Maha season</label> </div>

                                </div>
                            </td>
                            <td>5_4_m<div class="input-group">
                                    <select class="form-control" name="5_4_m" id="5_4_m">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>

                            <td>5_5_m<input type="number" value="0" name="5_5_m" id="5_5_m" class="form-control" /></td>
                        </tr>
                        <!-- 2nd row -->

                    </table>
                </div>



            </div>
            <hr>
            <!-- 3rd -->
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th colspan="2">Extension facilities for organic farming </th>
                        </tr>
                        <tr>
                            <td> 5.6. Have you received any specific training/extension service on organic farming
                                practices before last Maha season? </td>
                            <td>
                                <div class="input-group">
                                    <select class="form-control" name="5_6" id="5_6">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 5.7. Have you known about organic farming practices before last Maha seson?</td>
                            <td>
                                <div class="input-group">
                                    <select class="form-control" name="5_7" id="5_7">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 5.8. Did any of the organic training/ awareness programmes influence on your
                                cultivation decisions during last Maha season?</td>
                            <td>
                                <div class="input-group">
                                    <select class="form-control" name="5_8" id="5_8">
                                        <option value="1">Highly influences</option>
                                        <option value="2">Moderately influenced</option>
                                        <option value="3">Neutral</option>
                                        <option value="4">Slightly influenced</option>
                                        <option value="5">Not at all influenced</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> 5.9. Are you satisfied with any of the above received extension facilities on organic
                                farming?</td>
                            <td>
                                <div class="input-group">
                                    <select class="form-control" name="5_9" id="5_9">
                                        <option value="1">Highly influences</option>
                                        <option value="2">Moderately influenced</option>
                                        <option value="3">Neutral</option>
                                        <option value="4">Slightly influenced</option>
                                        <option value="5">Not at all influenced</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>


            <div class="card-footer">
                <button type="reset" class="btn btn-default">Reset Button</button>
                <button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary float-right">Submit
                    Button</button>
            </div>



        </div>



    </div>

</form>