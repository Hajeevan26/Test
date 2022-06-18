
  
        <table class="table table-bordered table-hover">
            <tr>
                <th>1.1.2. Name of the household member</th>
                <th>1.1.3. Relationship to the head of the household</th>
                <th>1.1.4. Gender</th>
                <th>1.1.5. Age (as at last birthday)</th>
                <th>1.1.6. Ethnicity</th>
                <th>1.1.7. Religion</th>
                <th>1.1.8. Marital Status</th>
                <th>1.1.9. Level of education</th>
                <th>1.1.10. Current Activity</th>
                <th>1.1.11. Employment Status</th>
                <th>1.1.12. Income of the family member</th>
                <th>1.1.13. Household income</th>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="checkbox" checked />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-15">1.1.2.1 <input type="text" name="1_1_2_1" id="1_1_2_1" placeholder="Name" required
                                class="form-control" />
                        </div>
                    </div>
                </td>
                <td> 1.1.3.1 <div class="input-group">
                        <select class="form-control" name="1_1_3_1" id="1_1_3_1" onchange="eDoth(this,9,'1_1_3_1_oth')" >
                            <option value="1">Head of the household </option>
                            <option value="2">Wife / Husband </option>
                            <option value="3">Son / Daughter </option>
                            <option value="4">Parents</option>
                            <option value="5">Wife / Husband </option>
                            <option value="6">Son / Daughter </option>
                            <option value="7">Parents</option>
                            <option value="9">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_3_1_ot">
                        <input type="text" required name="1_1_3_1_oth" id="1_1_3_1_oth" class="form-control" />
                    </div>
                </td>

                <td>1.1.4.1
                    <div class="input-group">
                        <select class="form-control" name="1_1_4_1" id="1_1_4_1">
                            <option value="1">Male </option>
                            <option value="2">Female</option>

                        </select>
                    </div>
                </td>
                <td>
                    <div>1.1.5.1 <input type="text" name="1_1_5_1" id="1_1_5_1" placeholder="Age"  required
                            class="form-control col-md-8" />
                </td>
                <td> 1.1.6.1 <div class="input-group">
                        <select class="form-control " name="1_1_6_1" id="1_1_6_1" onchange="eDoth(this,7,'1_1_6_1_oth')">
                            <option value="1">Sinhala</option>
                            <option value="2">Sri Lanka Tami</option>
                            <option value="3">India Tamil </option>
                            <option value="4">Sri Lanka Moor</option>
                            <option value="5">Malay</option>
                            <option value="6">Burgher</option>

                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_6_1_ot">
                        <input type="text" required name="1_1_6_1_oth" id="1_1_6_1_oth" class="form-control" />
                    </div>
                </td>

                <td> 1.1.7.1 <div class="input-group">
                        <select class="form-control" name="1_1_7_1" id="1_1_7_1"onchange="eDoth(this,5,'1_1_7_1_oth')">
                            <option value="1">Buddhist</option>
                            <option value="2">Hindu</option>
                            <option value="3">Islam</option>
                            <option value="4">Roman Catholic / Other Christian</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_7_1_ot">
                        <input type="text" required name="1_1_7_1_oth" id="1_1_7_1_oth" class="form-control" />
                    </div>
                </td>
                <td> 1.1.8.1 <div class="input-group">
                        <select class="form-control" name="1_1_8_1" id="1_1_8_1">
                            <option value="1">Never married</option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="4">Divorced</option>
                            <option value="5">Separated</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.8.1 <div class="input-group">
                        <select class="form-control" name="1_1_9_1" id="1_1_9_1">
                            <option value="1">Studying in Grade 1</option>
                            <option value="2">Passed Grade 1 </option>
                            <option value="3">Passed Grade 2 </option>
                            <option value="4">Passed Grade 3</option>
                            <option value="5">Passed Grade 4</option>
                            <option value="6">Passed Grade 5 </option>
                            <option value="7">Passed Grade 6 </option>
                            <option value="8">Passed Grade 7</option>
                            <option value="9">Passed Grade 8</option>
                            <option value="10">Passed Grade 9 </option>
                            <option value="11">Passed Grade 10 </option>
                            <option value="12">Passed G.C.E.(O/L) or equivalent</option>
                            <option value="13">Passed G.C.E.(A/L) or equivalent</option>
                            <option value="14">Passed GAQ / GSQ</option>
                            <option value="15">Passed post Graduate / Diploma</option>
                            <option value="16">PHD </option>
                            <option value="17">Special Education learning / learnt</option>
                            <option value="18">No Schooling</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.10.1 <div class="input-group">
                        <select class="form-control" name="1_1_10_1" id="1_1_10_1" onchange="eDoth(this,6,'1_1_10_1_oth')">
                            <option value="1">Employed</option>
                            <option value="2">Looking for a job</option>
                            <option value="3">Student</option>
                            <option value="4">Household work</option>
                            <option value="5">Unable/Too old to work</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_10_1_ot">
                        <input type="text" required name="1_1_10_1_oth" id="1_1_10_1_oth" class="form-control" />
                    </div>
                </td>
                <td> 1.1.11.1 <div class="input-group">
                        <select class="form-control" name="1_1_11_1" id="1_1_11_1" onchange="eDoth(this,10,'1_1_11_1_oth')">
                            <option value="1">Government Employee</option>
                            <option value="2">Semi-government Employee </option>
                            <option value="3">Private sector employee</option>
                            <option value="4">Employer</option>
                            <option value="5">Farmer</option>
                            <option value="6">Fisher</option>
                            <option value="7">Other own account worker</option>
                            <option value="8">Casual laborer</option>
                            <option value="9">Contributing family worker</option>
                            <option value="10">other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_11_1_ot">
                        <input type="text" required name="1_1_11_1_oth" id="1_1_11_1_oth" class="form-control" />
                    </div>
                </td>
                <td>
                    <div>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" required class="form-control" />
                </td>
                <td>
                    <div>1.1.13.1 <input type="text" name="1_1_13_1" id="1_1_13_1" required class="form-control" />
                </td>
            </tr>
            <!-- 2nd row -->

            <tr>
                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="checkbox" checked />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">1.1.2.2 <input type="text" name="1_1_2_2" id="1_1_2_2" placeholder="Name" required
                                class="form-control" />
                        </div>
                    </div>

                </td>
                <td> 1.1.3.2 <div class="input-group">
                        <select class="form-control" name="1_1_3_2" id="1_1_3_2" onchange="eDoth(this,9,'1_1_3_2_oth')">
                            <option value="1">Head of the household </option>
                            <option value="2">Wife / Husband </option>
                            <option value="3">Son / Daughter </option>
                            <option value="4">Parents</option>
                            <option value="5">Wife / Husband </option>
                            <option value="6">Son / Daughter </option>
                            <option value="7">Parents</option>
                            <option value="9">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_3_2_ot">
                        <input type="text" required name="1_1_3_2_oth" id="1_1_3_2_oth" class="form-control" />
                    </div>
                </td>

                <td>1.1.4.2
                    <div class="input-group">
                        <select class="form-control" name="1_1_4_2" id="1_1_4_2">
                            <option value="1">Male </option>
                            <option value="2">Female</option>

                        </select>
                    </div>
                </td>
                <td>
                    <div>1.1.5.2 <input type="text" name="1_1_5_2" id="1_1_5_2" placeholder="Age" required required
                            class="form-control" />
                </td>
                <td> 1.1.6.2 <div class="input-group">
                        <select class="form-control" name="1_1_6_2" id="1_1_6_2" onchange="eDoth(this,7,'1_1_6_2_oth')">
                            <option value="1">Sinhala</option>
                            <option value="2">Sri Lanka Tami</option>
                            <option value="3">India Tamil </option>
                            <option value="4">Sri Lanka Moor</option>
                            <option value="5">Malay</option>
                            <option value="6">Burgher</option>
                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_6_2_ot">
                        <input type="text" required name="1_1_6_2_oth" id="1_1_6_2_oth" class="form-control" />
                    </div>
                </td>

                <td> 1.1.7.2 <div class="input-group">
                        <select class="form-control" name="1_1_7_2" id="1_1_7_2" onchange="eDoth(this,5,'1_1_7_2_oth')">
                            <option value="1">Buddhist</option>
                            <option value="2">Hindu</option>
                            <option value="3">Islam</option>
                            <option value="4">Roman Catholic / Other Christian</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_7_2_ot">
                        <input type="text" required name="1_1_7_2_oth" id="1_1_7_2_oth" class="form-control" />
                    </div>
                </td>
                <td> 1.1.8.2 <div class="input-group">
                        <select class="form-control" name="1_1_8_2" id="1_1_8_2">
                            <option value="1">Never married</option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="4">Divorced</option>
                            <option value="5">Separated</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.8.2 <div class="input-group">
                        <select class="form-control" name="1_1_9_2" id="1_1_9_2">
                            <option value="1">Studying in Grade 1</option>
                            <option value="2">Passed Grade 1 </option>
                            <option value="3">Passed Grade 2 </option>
                            <option value="4">Passed Grade 3</option>
                            <option value="5">Passed Grade 4</option>
                            <option value="6">Passed Grade 5 </option>
                            <option value="7">Passed Grade 6 </option>
                            <option value="8">Passed Grade 7</option>
                            <option value="9">Passed Grade 8</option>
                            <option value="10">Passed Grade 9 </option>
                            <option value="11">Passed Grade 10 </option>
                            <option value="12">Passed G.C.E.(O/L) or equivalent</option>
                            <option value="13">Passed G.C.E.(A/L) or equivalent</option>
                            <option value="14">Passed GAQ / GSQ</option>
                            <option value="15">Passed post Graduate / Diploma</option>
                            <option value="16">PHD </option>
                            <option value="17">Special Education learning / learnt</option>
                            <option value="18">No Schooling</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.10.2 <div class="input-group">
                        <select class="form-control" name="1_1_10_2" id="1_1_10_2" onchange="eDoth(this,6,'1_1_10_2_oth')">
                            <option value="1">Employed</option>
                            <option value="2">Looking for a job</option>
                            <option value="3">Student</option>
                            <option value="4">Household work</option>
                            <option value="5">Unable/Too old to work</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_10_2_ot">
                        <input type="text" required name="1_1_10_2_oth" id="1_1_10_2_oth" class="form-control" />
                    </div>
                </td>
                <td> 1.1.11.2 <div class="input-group">
                        <select class="form-control" name="1_1_11_2" id="1_1_11_2" onchange="eDoth(this,10,'1_1_11_2_oth')">
                            <option value="1">Government Employee</option>
                            <option value="2">Semi-government Employee </option>
                            <option value="3">Private sector employee</option>
                            <option value="4">Employer</option>
                            <option value="5">Farmer</option>
                            <option value="6">Fisher</option>
                            <option value="7">Other own account worker</option>
                            <option value="8">Casual laborer</option>
                            <option value="9">Contributing family worker</option>
                            <option value="10">other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_11_2_ot">
                        <input type="text" required name="1_1_11_2_oth" id="1_1_11_2_oth" class="form-control" />
                    </div>
                </td>
                <td>
                    <div>1.1.12.2 <input type="text" name="1_1_12_2" id="1_1_12_2"  required class="form-control" />
                </td>
                <td>
                    <div>1.1.13.2 <input type="text" name="1_1_13_2" id="1_1_13_2"  required class="form-control" />
                </td>
            </tr>
            <!--  3rd row -->
            <tr>

                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="checkbox" checked />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">1.1.2.3 <input type="text" name="1_1_2_3" id="1_1_2_3" placeholder="Name" required
                                class="form-control" />
                        </div>
                    </div>

                </td>
                <td> 1.1.3.3 <div class="input-group">
                        <select class="form-control" name="1_1_3_3" id="1_1_3_3" onchange="eDoth(this,9,'1_1_3_3_oth')">
                            <option value="1">Head of the household </option>
                            <option value="2">Wife / Husband </option>
                            <option value="3">Son / Daughter </option>
                            <option value="4">Parents</option>
                            <option value="5">Wife / Husband </option>
                            <option value="6">Son / Daughter </option>
                            <option value="7">Parents</option>
                            <option value="9">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_3_3_ot">
                        <input type="text" required name="1_1_3_3_oth" id="1_1_3_3_oth" class="form-control" />
                    </div>
                </td>

                <td>1.1.4.3
                    <div class="input-group">
                        <select class="form-control" name="1_1_4_3" id="1_1_4_3">
                            <option value="1">Male </option>
                            <option value="2">Female</option>
                        </select>
                    </div>
                </td>
                <td>
                    <div>1.1.5.3 <input type="text" name="1_1_5_3" id="1_1_5_3" placeholder="Age" required required
                            class="form-control" />
                </td>
                <td> 1.1.6.3 <div class="input-group">
                        <select class="form-control" name="1_1_6_3" id="1_1_6_3" onchange="eDoth(this,7,'1_1_6_3_oth')">
                            <option value="1">Sinhala</option>
                            <option value="2">Sri Lanka Tami</option>
                            <option value="3">India Tamil </option>
                            <option value="4">Sri Lanka Moor</option>
                            <option value="5">Malay</option>
                            <option value="6">Burgher</option>
                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_6_3_ot">
                        <input type="text" required name="1_1_6_3_oth" id="1_1_6_3_oth" class="form-control" />
                    </div>
                </td>

                <td> 1.1.7.3 <div class="input-group">
                        <select class="form-control" name="1_1_7_3" id="1_1_7_3" onchange="eDoth(this,5,'1_1_7_3_oth')">
                            <option value="1">Buddhist</option>
                            <option value="2">Hindu</option>
                            <option value="3">Islam</option>
                            <option value="4">Roman Catholic / Other Christian</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_7_3_ot">
                        <input type="text" required name="1_1_7_3_oth" id="1_1_7_3_oth" class="form-control" />
                    </div>
                </td>
                <td> 1.1.8.3 <div class="input-group">
                        <select class="form-control" name="1_1_8_3" id="1_1_8_3">
                            <option value="1">Never married</option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="4">Divorced</option>
                            <option value="5">Separated</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.8.3 <div class="input-group">
                        <select class="form-control" name="1_1_9_3" id="1_1_9_3">
                            <option value="1">Studying in Grade 1</option>
                            <option value="2">Passed Grade 1 </option>
                            <option value="3">Passed Grade 2 </option>
                            <option value="4">Passed Grade 3</option>
                            <option value="5">Passed Grade 4</option>
                            <option value="6">Passed Grade 5 </option>
                            <option value="7">Passed Grade 6 </option>
                            <option value="8">Passed Grade 7</option>
                            <option value="9">Passed Grade 8</option>
                            <option value="10">Passed Grade 9 </option>
                            <option value="11">Passed Grade 10 </option>
                            <option value="12">Passed G.C.E.(O/L) or equivalent</option>
                            <option value="13">Passed G.C.E.(A/L) or equivalent</option>
                            <option value="14">Passed GAQ / GSQ</option>
                            <option value="15">Passed post Graduate / Diploma</option>
                            <option value="16">PHD </option>
                            <option value="17">Special Education learning / learnt</option>
                            <option value="18">No Schooling</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.10.3 <div class="input-group">
                        <select class="form-control" name="1_1_10_3" id="1_1_10_3"  onchange="eDoth(this,6,'1_1_10_3_oth')">
                            <option value="1">Employed</option>
                            <option value="2">Looking for a job</option>
                            <option value="3">Student</option>
                            <option value="4">Household work</option>
                            <option value="5">Unable/Too old to work</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_10_3_ot">
                        <input type="text" required name="1_1_10_3_oth" id="1_1_10_3_oth" class="form-control" />
                    </div>
                </td>
                <td> 1.1.11.3 <div class="input-group">
                        <select class="form-control" name="1_1_11_3" id="1_1_11_3" onchange="eDoth(this,10,'1_1_11_3_oth')">
                            <option value="1">Government Employee</option>
                            <option value="2">Semi-government Employee </option>
                            <option value="3">Private sector employee</option>
                            <option value="4">Employer</option>
                            <option value="5">Farmer</option>
                            <option value="6">Fisher</option>
                            <option value="7">Other own account worker</option>
                            <option value="8">Casual laborer</option>
                            <option value="9">Contributing family worker</option>
                            <option value="10">other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_11_3_ot">
                        <input type="text" required name="1_1_11_3_oth" id="1_1_11_3_oth" class="form-control" />
                    </div>
                </td>
                <td>
                    <div>1.1.12.3 <input type="text" name="1_1_12_3" id="1_1_12_3"  required class="form-control" />
                </td>
                <td>
                    <div>1.1.13.3 <input type="text" name="1_1_13_3" id="1_1_13_3"  required class="form-control" />
                </td>
            </tr>

            <!-- 4th row -->
            <tr>

                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="checkbox" checked />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">1.1.2.4 <input type="text" name="1_1_2_4" id="1_1_2_4" placeholder="Name" required
                                class="form-control" />
                        </div>
                    </div>

                </td>
                <td> 1.1.3.4 <div class="input-group">
                        <select class="form-control" name="1_1_3_4" id="1_1_3_4" onchange="eDoth(this,9,'1_1_3_4_oth')">
                            <option value="1">Head of the household </option>
                            <option value="2">Wife / Husband </option>
                            <option value="3">Son / Daughter </option>
                            <option value="4">Parents</option>
                            <option value="5">Wife / Husband </option>
                            <option value="6">Son / Daughter </option>
                            <option value="7">Parents</option>
                            <option value="9">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_3_4_ot">
                        <input type="text" required name="1_1_3_4_oth" id="1_1_3_4_oth" class="form-control" />
                    </div>
                </td>

                <td>1.1.4.4
                    <div class="input-group">
                        <select class="form-control" name="1_1_4_4" id="1_1_4_4">
                            <option value="1">Male </option>
                            <option value="2">Female</option>

                        </select>
                    </div>
                </td>
                <td>
                    <div>1.1.5.4 <input type="text" name="1_1_5_4" id="1_1_5_4" placeholder="Age" required required
                            class="form-control" />
                </td>
                <td> 1.1.6.4 <div class="input-group">
                        <select class="form-control" name="1_1_6_4" id="1_1_6_4" onchange="eDoth(this,7,'1_1_6_4_oth')">
                            <option value="1">Sinhala</option>
                            <option value="2">Sri Lanka Tami</option>
                            <option value="3">India Tamil </option>
                            <option value="4">Sri Lanka Moor</option>
                            <option value="5">Malay</option>
                            <option value="6">Burgher</option>
                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_6_4_ot">
                        <input type="text" required name="1_1_6_4_oth" id="1_1_6_4_oth" class="form-control" />
                    </div>
                </td>

                <td> 1.1.7.4 <div class="input-group">
                        <select class="form-control" name="1_1_7_4" id="1_1_7_4"onchange="eDoth(this,7,'1_1_7_4_oth')">>
                            <option value="1">Buddhist</option>
                            <option value="2">Hindu</option>
                            <option value="3">Islam</option>
                            <option value="4">Roman Catholic / Other Christian</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_7_4_ot">
                        <input type="text" required name="1_1_7_4_oth" id="1_1_7_4_oth" class="form-control" />
                    </div>
                </td>
                <td> 1.1.8.4 <div class="input-group">
                        <select class="form-control" name="1_1_8_4" id="1_1_8_4">
                            <option value="1">Never married</option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="4">Divorced</option>
                            <option value="5">Separated</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.8.4 <div class="input-group">
                        <select class="form-control" name="1_1_9_4" id="1_1_9_4">
                            <option value="1">Studying in Grade 1</option>
                            <option value="2">Passed Grade 1 </option>
                            <option value="3">Passed Grade 2 </option>
                            <option value="4">Passed Grade 3</option>
                            <option value="5">Passed Grade 4</option>
                            <option value="6">Passed Grade 5 </option>
                            <option value="7">Passed Grade 6 </option>
                            <option value="8">Passed Grade 7</option>
                            <option value="9">Passed Grade 8</option>
                            <option value="10">Passed Grade 9 </option>
                            <option value="11">Passed Grade 10 </option>
                            <option value="12">Passed G.C.E.(O/L) or equivalent</option>
                            <option value="13">Passed G.C.E.(A/L) or equivalent</option>
                            <option value="14">Passed GAQ / GSQ</option>
                            <option value="15">Passed post Graduate / Diploma</option>
                            <option value="16">PHD </option>
                            <option value="17">Special Education learning / learnt</option>
                            <option value="18">No Schooling</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.10.4 <div class="input-group">
                        <select class="form-control" name="1_1_10_4" id="1_1_10_4" onchange="eDoth(this,6,'1_1_10_4_oth')">>
                            <option value="1">Employed</option>
                            <option value="2">Looking for a job</option>
                            <option value="3">Student</option>
                            <option value="4">Household work</option>
                            <option value="5">Unable/Too old to work</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_10_4_ot">
                        <input type="text" required name="1_1_10_4_oth" id="1_1_10_4_oth" class="form-control" />
                    </div>
                </td>
                <td> 1.1.11.4 <div class="input-group">
                        <select class="form-control" name="1_1_11_4" id="1_1_11_4"onchange="eDoth(this,10,'1_1_11_4_oth')">>
                            <option value="1">Government Employee</option>
                            <option value="2">Semi-government Employee </option>
                            <option value="3">Private sector employee</option>
                            <option value="4">Employer</option>
                            <option value="5">Farmer</option>
                            <option value="6">Fisher</option>
                            <option value="7">Other own account worker</option>
                            <option value="8">Casual laborer</option>
                            <option value="9">Contributing family worker</option>
                            <option value="10">other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_11_4_ot">
                        <input type="text" required name="1_1_11_4_oth" id="1_1_11_4_oth" class="form-control" />
                    </div>
                </td>
                <td>
                    <div>1.1.12.4 <input type="text" name="1_1_12_4" id="1_1_12_4"  required class="form-control" />
                </td>
                <td>
                    <div>1.1.13.4 <input type="text" name="1_1_13_4" id="1_1_13_4"  required class="form-control" />
                </td>
            </tr>
            <!-- 5th -->
            <tr>

                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="checkbox" checked />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">1.1.2.5 <input type="text" name="1_1_2_5" id="1_1_2_5" placeholder="Name" required
                                class="form-control" />
                        </div>
                    </div>

                </td>
                <td> 1.1.3.5 <div class="input-group">
                        <select class="form-control" name="1_1_3_5" id="1_1_3_5" onchange="eDoth(this,9,'1_1_3_5_oth')">
                            <option value="1">Head of the household </option>
                            <option value="2">Wife / Husband </option>
                            <option value="3">Son / Daughter </option>
                            <option value="4">Parents</option>
                            <option value="5">Wife / Husband </option>
                            <option value="6">Son / Daughter </option>
                            <option value="7">Parents</option>
                            <option value="9">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_3_5_ot">
                        <input type="text" required name="1_1_3_5_oth" id="1_1_3_5_oth" class="form-control" />
                    </div>

                </td>

                <td>1.1.4.3
                    <div class="input-group">
                        <select class="form-control" name="1_1_4_5" id="1_1_4_5">
                            <option value="1">Male </option>
                            <option value="2">Female</option>

                        </select>
                    </div>
                </td>
                <td>
                    <div>1.1.5.5 <input type="text" name="1_1_5_5" id="1_1_5_5" placeholder="Age" required required
                            class="form-control" />
                </td>
                <td> 1.1.6.5 <div class="input-group">
                        <select class="form-control" name="1_1_6_5" id="1_1_6_5" onchange="eDoth(this,7,'1_1_6_5_oth')">
                            <option value="1">Sinhala</option>
                            <option value="2">Sri Lanka Tami</option>
                            <option value="3">India Tamil </option>
                            <option value="4">Sri Lanka Moor</option>
                            <option value="5">Malay</option>
                            <option value="6">Burgher</option>
                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_6_5_ot">
                        <input type="text" required name="1_1_6_5_oth" id="1_1_6_5_oth" class="form-control" />
                    </div>
                </td>

                <td> 1.1.7.5 <div class="input-group">
                        <select class="form-control" name="1_1_7_5" id="1_1_7_5" onchange="eDoth(this,5,'1_1_7_5_oth')">
                            <option value="1">Buddhist</option>
                            <option value="2">Hindu</option>
                            <option value="3">Islam</option>
                            <option value="4">Roman Catholic / Other Christian</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_7_5_ot">
                        <input type="text" required name="1_1_7_5_oth" id="1_1_7_5_oth" class="form-control" />
                    </div>
                </td>
                <td> 1.1.8.5 <div class="input-group">
                        <select class="form-control" name="1_1_8_5" id="1_1_8_5">
                            <option value="1">Never married</option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="4">Divorced</option>
                            <option value="5">Separated</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.8.5 <div class="input-group">
                        <select class="form-control" name="1_1_9_5" id="1_1_9_5">
                            <option value="1">Studying in Grade 1</option>
                            <option value="2">Passed Grade 1 </option>
                            <option value="3">Passed Grade 2 </option>
                            <option value="4">Passed Grade 3</option>
                            <option value="5">Passed Grade 4</option>
                            <option value="6">Passed Grade 5 </option>
                            <option value="7">Passed Grade 6 </option>
                            <option value="8">Passed Grade 7</option>
                            <option value="9">Passed Grade 8</option>
                            <option value="10">Passed Grade 9 </option>
                            <option value="11">Passed Grade 10 </option>
                            <option value="12">Passed G.C.E.(O/L) or equivalent</option>
                            <option value="13">Passed G.C.E.(A/L) or equivalent</option>
                            <option value="14">Passed GAQ / GSQ</option>
                            <option value="15">Passed post Graduate / Diploma</option>
                            <option value="16">PHD </option>
                            <option value="17">Special Education learning / learnt</option>
                            <option value="18">No Schooling</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.10.5 <div class="input-group">
                        <select class="form-control" name="1_1_10_5" id="1_1_10_5" onchange="eDoth(this,6,'1_1_10_5_oth')">
                            <option value="1">Employed</option>
                            <option value="2">Looking for a job</option>
                            <option value="3">Student</option>
                            <option value="4">Household work</option>
                            <option value="5">Unable/Too old to work</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_10_5_ot">
                        <input type="text" required name="1_1_10_5_oth" id="1_1_10_5_oth" class="form-control" />
                    </div>
                </td>
                <td> 1.1.11.5 <div class="input-group">
                        <select class="form-control" name="1_1_11_5" id="1_1_11_5" onchange="eDoth(this,10,'1_1_11_5_oth')">
                            <option value="1">Government Employee</option>
                            <option value="2">Semi-government Employee </option>
                            <option value="3">Private sector employee</option>
                            <option value="4">Employer</option>
                            <option value="5">Farmer</option>
                            <option value="6">Fisher</option>
                            <option value="7">Other own account worker</option>
                            <option value="8">Casual laborer</option>
                            <option value="9">Contributing family worker</option>
                            <option value="10">other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_11_5_ot">
                        <input type="text" required name="1_1_11_5_oth" id="1_1_11_5_oth" class="form-control" />
                    </div>
                </td>
                <td>
                    <div>1.1.12.5 <input type="text" name="1_1_12_5" id="1_1_12_5"  required class="form-control" />
                </td>
                <td>
                    <div>1.1.13.5 <input type="text" name="1_1_13_5" id="1_1_13_5"  required class="form-control" />
                </td>
            </tr>
            <!-- 6th -->
            <tr>

                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="checkbox" checked />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">1.1.2.6 <input type="text" name="1_1_2_6" id="1_1_2_6" placeholder="Name" required
                                class="form-control" />
                        </div>
                    </div>

                </td>
                <td> 1.1.3.6 <div class="input-group">
                        <select class="form-control" name="1_1_3_6" id="1_1_3_6" onchange="eDoth(this,9,'1_1_3_6_oth')">
                            <option value="1">Head of the household </option>
                            <option value="2">Wife / Husband </option>
                            <option value="3">Son / Daughter </option>
                            <option value="4">Parents</option>
                            <option value="5">Wife / Husband </option>
                            <option value="6">Son / Daughter </option>
                            <option value="7">Parents</option>
                            <option value="9">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_3_6_ot">
                        <input type="text" required name="1_1_3_6_oth" id="1_1_3_6_oth" class="form-control" />
                    </div>
                </td>

                <td>1.1.4.6
                    <div class="input-group">
                        <select class="form-control" name="1_1_4_6" id="1_1_4_6">
                            <option value="1">Male </option>
                            <option value="2">Female</option>

                        </select>
                    </div>
                </td>
                <td>
                    <div>1.1.5.3 <input type="text" name="1_1_5_6" id="1_1_5_6" placeholder="Age" required required
                            class="form-control" />
                </td>
                <td> 1.1.6.6 <div class="input-group">
                        <select class="form-control" name="1_1_6_6" id="1_1_6_6" onchange="eDoth(this,7,'1_1_6_6_oth')">
                            <option value="1">Sinhala</option>
                            <option value="2">Sri Lanka Tami</option>
                            <option value="3">India Tamil </option>
                            <option value="4">Sri Lanka Moor</option>
                            <option value="5">Malay</option>
                            <option value="6">Burgher</option>
                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_6_6_ot">
                        <input type="text" required name="1_1_6_6_oth" id="1_1_6_6_oth" class="form-control" />
                    </div>
                </td>

                <td> 1.1.7.6 <div class="input-group">
                        <select class="form-control" name="1_1_7_6" id="1_1_7_6" onchange="eDoth(this,5,'1_1_7_6_oth')">
                            <option value="1">Buddhist</option>
                            <option value="2">Hindu</option>
                            <option value="3">Islam</option>
                            <option value="4">Roman Catholic / Other Christian</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_7_6_ot">
                        <input type="text" required name="1_1_7_6_oth" id="1_1_7_6_oth" class="form-control" />
                    </div>
                </td>
                <td> 1.1.8.3 <div class="input-group">
                        <select class="form-control" name="1_1_8_6" id="1_1_8_6">
                            <option value="1">Never married</option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="4">Divorced</option>
                            <option value="5">Separated</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.8.6 <div class="input-group">
                        <select class="form-control" name="1_1_9_6" id="1_1_9_6">
                            <option value="1">Studying in Grade 1</option>
                            <option value="2">Passed Grade 1 </option>
                            <option value="3">Passed Grade 2 </option>
                            <option value="4">Passed Grade 3</option>
                            <option value="5">Passed Grade 4</option>
                            <option value="6">Passed Grade 5 </option>
                            <option value="7">Passed Grade 6 </option>
                            <option value="8">Passed Grade 7</option>
                            <option value="9">Passed Grade 8</option>
                            <option value="10">Passed Grade 9 </option>
                            <option value="11">Passed Grade 10 </option>
                            <option value="12">Passed G.C.E.(O/L) or equivalent</option>
                            <option value="13">Passed G.C.E.(A/L) or equivalent</option>
                            <option value="14">Passed GAQ / GSQ</option>
                            <option value="15">Passed post Graduate / Diploma</option>
                            <option value="16">PHD </option>
                            <option value="17">Special Education learning / learnt</option>
                            <option value="18">No Schooling</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.10.6 <div class="input-group">
                        <select class="form-control" name="1_1_10_6" id="1_1_10_6" onchange="eDoth(this,6,'1_1_10_6_oth')">
                            <option value="1">Employed</option>
                            <option value="2">Looking for a job</option>
                            <option value="3">Student</option>
                            <option value="4">Household work</option>
                            <option value="5">Unable/Too old to work</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_10_6_ot">
                        <input type="text" required name="1_1_10_6_oth" id="1_1_10_6_oth" class="form-control" />
                    </div>
                </td>
                <td> 1.1.11.6 <div class="input-group">
                        <select class="form-control" name="1_1_11_6" id="1_1_11_6" onchange="eDoth(this,10,'1_1_11_6_oth')">
                            <option value="1">Government Employee</option>
                            <option value="2">Semi-government Employee </option>
                            <option value="3">Private sector employee</option>
                            <option value="4">Employer</option>
                            <option value="5">Farmer</option>
                            <option value="6">Fisher</option>
                            <option value="7">Other own account worker</option>
                            <option value="8">Casual laborer</option>
                            <option value="9">Contributing family worker</option>
                            <option value="10">other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_11_6_ot">
                        <input type="text" required name="1_1_11_6_oth" id="1_1_11_6_oth" class="form-control" />
                 </div>
                </td>
                <td>
                    <div>1.1.12.6 <input type="text" name="1_1_12_6" id="1_1_12_6"  required class="form-control" />
                </td>
                <td>
                    <div>1.1.13.6 <input type="text" name="1_1_13_6" id="1_1_13_6"  required class="form-control" />
                </td>
            </tr>
            <!--7th -->
            <tr>

                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="checkbox" checked />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">1.1.2.7 <input type="text" name="1_1_2_7" id="1_1_2_7" placeholder="Name" required
                                class="form-control" />
                        </div>
                    </div>

                </td>
                <td> 1.1.3.7 <div class="input-group">
                        <select class="form-control" name="1_1_3_7" id="1_1_3_7" onchange="eDoth(this,9,'1_1_3_7_oth')">
                            <option value="1">Head of the household </option>
                            <option value="2">Wife / Husband </option>
                            <option value="3">Son / Daughter </option>
                            <option value="4">Parents</option>
                            <option value="5">Wife / Husband </option>
                            <option value="6">Son / Daughter </option>
                            <option value="7">Parents</option>
                            <option value="9">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_3_7_ot">
                        <input type="text" required name="1_1_3_7_oth" id="1_1_3_7_oth" class="form-control" />
                </div>
                </td>

                <td>1.1.4.7
                    <div class="input-group">
                        <select class="form-control" name="1_1_4_7" id="1_1_4_7">
                            <option value="1">Male </option>
                            <option value="2">Female</option>

                        </select>
                    </div>
                </td>
                <td>
                    <div>1.1.5.7 <input type="text" name="1_1_5_7" id="1_1_5_7" placeholder="Age" required required
                            class="form-control" />
                </td>
                <td> 1.1.6.7 <div class="input-group">
                        <select class="form-control" name="1_1_6_7" id="1_1_6_7" onchange="eDoth(this,7,'1_1_6_7_oth')">
                            <option value="1">Sinhala</option>
                            <option value="2">Sri Lanka Tami</option>
                            <option value="3">India Tamil </option>
                            <option value="4">Sri Lanka Moor</option>
                            <option value="5">Malay</option>
                            <option value="6">Burgher</option>

                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_6_7_ot">
                        <input type="text" required name="1_1_6_7_oth" id="1_1_6_7_oth" class="form-control" />
                </div>
                </td>

                <td> 1.1.7.7 <div class="input-group">
                        <select class="form-control" name="1_1_7_7" id="1_1_7_7" onchange="eDoth(this,5,'1_1_7_7_oth')">
                            <option value="1">Buddhist</option>
                            <option value="2">Hindu</option>
                            <option value="3">Islam</option>
                            <option value="4">Roman Catholic / Other Christian</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_7_7_ot">
                        <input type="text" required name="1_1_7_7_oth" id="1_1_7_7_oth" class="form-control" />
                </div>
                </td>
                <td> 1.1.8.3 <div class="input-group">
                        <select class="form-control" name="1_1_8_7" id="1_1_8_7">
                            <option value="1">Never married</option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="4">Divorced</option>
                            <option value="5">Separated</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.8.7 <div class="input-group">
                        <select class="form-control" name="1_1_9_7" id="1_1_9_7">
                            <option value="1">Studying in Grade 1</option>
                            <option value="2">Passed Grade 1 </option>
                            <option value="3">Passed Grade 2 </option>
                            <option value="4">Passed Grade 3</option>
                            <option value="5">Passed Grade 4</option>
                            <option value="6">Passed Grade 5 </option>
                            <option value="7">Passed Grade 6 </option>
                            <option value="8">Passed Grade 7</option>
                            <option value="9">Passed Grade 8</option>
                            <option value="10">Passed Grade 9 </option>
                            <option value="11">Passed Grade 10 </option>
                            <option value="12">Passed G.C.E.(O/L) or equivalent</option>
                            <option value="13">Passed G.C.E.(A/L) or equivalent</option>
                            <option value="14">Passed GAQ / GSQ</option>
                            <option value="15">Passed post Graduate / Diploma</option>
                            <option value="16">PHD </option>
                            <option value="17">Special Education learning / learnt</option>
                            <option value="18">No Schooling</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.10.7 <div class="input-group">
                        <select class="form-control" name="1_1_10_7" id="1_1_10_7" onchange="eDoth(this,6,'1_1_10_7_oth')">
                            <option value="1">Employed</option>
                            <option value="2">Looking for a job</option>
                            <option value="3">Student</option>
                            <option value="4">Household work</option>
                            <option value="5">Unable/Too old to work</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_10_7_ot">
                        <input type="text" required name="1_1_10_7_oth" id="1_1_10_7_oth" class="form-control" />
                </div>
                </td>
                <td> 1.1.11.7 <div class="input-group">
                        <select class="form-control" name="1_1_11_7" id="1_1_11_7" onchange="eDoth(this,10,'1_1_11_7_oth')">
                            <option value="1">Government Employee</option>
                            <option value="2">Semi-government Employee </option>
                            <option value="3">Private sector employee</option>
                            <option value="4">Employer</option>
                            <option value="5">Farmer</option>
                            <option value="6">Fisher</option>
                            <option value="7">Other own account worker</option>
                            <option value="8">Casual laborer</option>
                            <option value="9">Contributing family worker</option>
                            <option value="10">other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_11_7_ot">
                        <input type="text" required name="1_1_11_7_oth" id="1_1_11_7_oth" class="form-control" />
                </div>
                </td>
                <td>
                    <div>1.1.12.7 <input type="text" name="1_1_12_7" id="1_1_12_7"  required class="form-control" />
                </td>
                <td>
                    <div>1.1.13.7 <input type="text" name="1_1_13_7" id="1_1_13_7"  required class="form-control" />
                </td>
            </tr>
            <!-- 8th -->
            <tr>

                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="checkbox" checked />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">1.1.2.8 <input type="text" name="1_1_2_8" id="1_1_2_8" placeholder="Name" required
                                class="form-control" />
                        </div>
                    </div>

                </td>
                <td> 1.1.3.8 <div class="input-group">
                        <select class="form-control" name="1_1_3_8" id="1_1_3_8" onchange="eDoth(this,9,'1_1_3_8_oth')">
                            <option value="1">Head of the household </option>
                            <option value="2">Wife / Husband </option>
                            <option value="3">Son / Daughter </option>
                            <option value="4">Parents</option>
                            <option value="5">Wife / Husband </option>
                            <option value="6">Son / Daughter </option>
                            <option value="7">Parents</option>
                            <option value="9">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_3_8_ot">
                        <input type="text" required name="1_1_3_8_oth" id="1_1_3_8_oth" class="form-control" />
                </div>
                </td>

                <td>1.1.4.8
                    <div class="input-group">
                        <select class="form-control" name="1_1_4_8" id="1_1_4_8">
                            <option value="1">Male </option>
                            <option value="2">Female</option>

                        </select>
                    </div>
                </td>
                <td>
                    <div>1.1.5.8 <input type="text" name="1_1_5_8" id="1_1_5_8" placeholder="Age"  required
                            class="form-control" />
                </td>
                <td> 1.1.6.8 <div class="input-group">
                        <select class="form-control" name="1_1_6_8" id="1_1_6_8" onchange="eDoth(this,7,'1_1_6_8_oth')">
                            <option value="1">Sinhala</option>
                            <option value="2">Sri Lanka Tami</option>
                            <option value="3">India Tamil </option>
                            <option value="4">Sri Lanka Moor</option>
                            <option value="5">Malay</option>
                            <option value="6">Burgher</option>
                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_6_8_ot">
                        <input type="text" required name="1_1_6_8_oth" id="1_1_6_8_oth" class="form-control" />
                </div>
                </td>

                <td> 1.1.7.8 <div class="input-group">
                        <select class="form-control" name="1_1_7_8" id="1_1_7_8" onchange="eDoth(this,5,'1_1_7_8_oth')">
                            <option value="1">Buddhist</option>
                            <option value="2">Hindu</option>
                            <option value="3">Islam</option>
                            <option value="4">Roman Catholic / Other Christian</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_7_8_ot">
                        <input type="text" required name="1_1_7_8_oth" id="1_1_7_8_oth" class="form-control" />
                </div>
                </td>
                <td> 1.1.8.8 <div class="input-group">
                        <select class="form-control" name="1_1_8_8" id="1_1_8_8">
                            <option value="1">Never married</option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="4">Divorced</option>
                            <option value="5">Separated</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_8_8_ot">
                        <input type="text" required name="1_1_8_8_oth" id="1_1_8_8_oth" class="form-control" />
                </td>
                <td> 1.1.9.8 <div class="input-group">
                        <select class="form-control" name="1_1_9_8" id="1_1_9_8">
                            <option value="1">Studying in Grade 1</option>
                            <option value="2">Passed Grade 1 </option>
                            <option value="3">Passed Grade 2 </option>
                            <option value="4">Passed Grade 3</option>
                            <option value="5">Passed Grade 4</option>
                            <option value="6">Passed Grade 5 </option>
                            <option value="7">Passed Grade 6 </option>
                            <option value="8">Passed Grade 7</option>
                            <option value="9">Passed Grade 8</option>
                            <option value="10">Passed Grade 9 </option>
                            <option value="11">Passed Grade 10 </option>
                            <option value="12">Passed G.C.E.(O/L) or equivalent</option>
                            <option value="13">Passed G.C.E.(A/L) or equivalent</option>
                            <option value="14">Passed GAQ / GSQ</option>
                            <option value="15">Passed post Graduate / Diploma</option>
                            <option value="16">PHD </option>
                            <option value="17">Special Education learning / learnt</option>
                            <option value="18">No Schooling</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.10.8 <div class="input-group">
                        <select class="form-control" name="1_1_10_8" id="1_1_10_8" onchange="eDoth(this,6,'1_1_10_8_oth')">
                            <option value="1">Employed</option>
                            <option value="2">Looking for a job</option>
                            <option value="3">Student</option>
                            <option value="4">Household work</option>
                            <option value="5">Unable/Too old to work</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_10_8_ot">
                        <input type="text" required name="1_1_10_8_oth" id="1_1_10_8_oth" class="form-control" />
                </div>
                </td>
                <td> 1.1.11.8 <div class="input-group">
                        <select class="form-control" name="1_1_11_8" id="1_1_11_8" onchange="eDoth(this,10,'1_1_11_8_oth')">
                            <option value="1">Government Employee</option>
                            <option value="2">Semi-government Employee </option>
                            <option value="3">Private sector employee</option>
                            <option value="4">Employer</option>
                            <option value="5">Farmer</option>
                            <option value="6">Fisher</option>
                            <option value="7">Other own account worker</option>
                            <option value="8">Casual laborer</option>
                            <option value="9">Contributing family worker</option>
                            <option value="10">other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_11_8_ot">
                        <input type="text" required name="1_1_3_8_oth" id="1_1_11_8_oth" class="form-control" />
                </div>
                </td>
                <td>
                    <div>1.1.12.8 <input type="text" name="1_1_12_8" id="1_1_12_8"  required class="form-control" />
                </td>
                <td>
                    <div>1.1.13.8 <input type="text" name="1_1_13_8" id="1_1_13_8"  required class="form-control" />
                </td>
            </tr>
            <!-- 9th -->
            <tr>

                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="checkbox" checked />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">1.1.2.9 <input type="text" name="1_1_2_9" id="1_1_2_9" placeholder="Name" required
                                class="form-control" />
                        </div>
                    </div>

                </td>
                <td> 1.1.3.9 <div class="input-group">
                        <select class="form-control" name="1_1_3_9" id="1_1_3_9" onchange="eDoth(this,9,'1_1_3_9_oth')">
                            <option value="1">Head of the household </option>
                            <option value="2">Wife / Husband </option>
                            <option value="3">Son / Daughter </option>
                            <option value="4">Parents</option>
                            <option value="5">Wife / Husband </option>
                            <option value="6">Son / Daughter </option>
                            <option value="7">Parents</option>
                            <option value="9">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_3_9_ot">
                        <input type="text" required name="1_1_3_9_oth" id="1_1_3_9_oth" class="form-control" />
                </div>
                </td>

                <td>1.1.4.9
                    <div class="input-group">
                        <select class="form-control" name="1_1_4_9" id="1_1_4_9">
                            <option value="1">Male </option>
                            <option value="2">Female</option>

                        </select>
                    </div>
                </td>
                <td>
                    <div>1.1.5.9 <input type="text" name="1_1_5_9" id="1_1_5_9" placeholder="Age"  required
                            class="form-control" />
                </td>
                <td> 1.1.6.9 <div class="input-group">
                        <select class="form-control" name="1_1_6_9" id="1_1_6_9" onchange="eDoth(this,7,'1_1_6_9_oth')">
                            <option value="1">Sinhala</option>
                            <option value="2">Sri Lanka Tami</option>
                            <option value="3">India Tamil </option>
                            <option value="4">Sri Lanka Moor</option>
                            <option value="5">Malay</option>
                            <option value="6">Burgher</option>
                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_6_9_ot">
                        <input type="text" required name="1_1_6_9_oth" id="1_1_6_9_oth" class="form-control" />
                </div>
                </td>

                <td> 1.1.7.9 <div class="input-group">
                        <select class="form-control" name="1_1_7_9" id="1_1_7_9" onchange="eDoth(this,5,'1_1_7_9_oth')">
                            <option value="1">Buddhist</option>
                            <option value="2">Hindu</option>
                            <option value="3">Islam</option>
                            <option value="4">Roman Catholic / Other Christian</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_7_9_ot">
                        <input type="text" required name="1_1_7_9_oth" id="1_1_7_9_oth" class="form-control" />
                </div>
                </td>
                <td> 1.1.8.9 <div class="input-group">
                        <select class="form-control" name="1_1_8_9" id="1_1_8_9">
                            <option value="1">Never married</option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="4">Divorced</option>
                            <option value="5">Separated</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.9.9 <div class="input-group">
                        <select class="form-control" name="1_1_9_9" id="1_1_9_9">
                            <option value="1">Studying in Grade 1</option>
                            <option value="2">Passed Grade 1 </option>
                            <option value="3">Passed Grade 2 </option>
                            <option value="4">Passed Grade 3</option>
                            <option value="5">Passed Grade 4</option>
                            <option value="6">Passed Grade 5 </option>
                            <option value="7">Passed Grade 6 </option>
                            <option value="8">Passed Grade 7</option>
                            <option value="9">Passed Grade 8</option>
                            <option value="10">Passed Grade 9 </option>
                            <option value="11">Passed Grade 10 </option>
                            <option value="12">Passed G.C.E.(O/L) or equivalent</option>
                            <option value="13">Passed G.C.E.(A/L) or equivalent</option>
                            <option value="14">Passed GAQ / GSQ</option>
                            <option value="15">Passed post Graduate / Diploma</option>
                            <option value="16">PHD </option>
                            <option value="17">Special Education learning / learnt</option>
                            <option value="18">No Schooling</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.10.9 <div class="input-group">
                        <select class="form-control" name="1_1_10_9" id="1_1_10_9" onchange="eDoth(this,6,'1_1_10_9_oth')">
                            <option value="1">Employed</option>
                            <option value="2">Looking for a job</option>
                            <option value="3">Student</option>
                            <option value="4">Household work</option>
                            <option value="5">Unable/Too old to work</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_10_9_ot">
                        <input type="text" required name="1_1_10_9_oth" id="1_1_10_9_oth" class="form-control" />
                </div>
                </td>
                <td> 1.1.11.9 <div class="input-group">
                        <select class="form-control" name="1_1_11_9" id="1_1_11_9" onchange="eDoth(this,10,'1_1_11_9_oth')">
                            <option value="1">Government Employee</option>
                            <option value="2">Semi-government Employee </option>
                            <option value="3">Private sector employee</option>
                            <option value="4">Employer</option>
                            <option value="5">Farmer</option>
                            <option value="6">Fisher</option>
                            <option value="7">Other own account worker</option>
                            <option value="8">Casual laborer</option>
                            <option value="9">Contributing family worker</option>
                            <option value="10">other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_11_9_ot">
                        <input type="text" required name="1_1_11_9_oth" id="1_1_11_9_oth" class="form-control" />
                </div>
                </td>
                <td>
                    <div>1.1.12.9 <input type="text" name="1_1_12_9" id="1_1_12_9"  required class="form-control" />
                </td>
                <td>
                    <div>1.1.13.9 <input type="text" name="1_1_13_9" id="1_1_13_9"  required class="form-control" />
                </td>
            </tr>
            <!-- 10th  -->
            <tr>

                <td>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="checkbox" checked />
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">1.1.2.10x <input type="text" name="1_1_2_10x" id="1_1_2_10x" placeholder="Name" required
                                class="form-control" />
                        </div>
                    </div>

                </td>
                <td> 1.1.3.10x <div class="input-group">
                        <select class="form-control" name="1_1_3_10x" id="1_1_3_10x" onchange="eDoth(this,9,'1_1_3_10_oth')">
                            <option value="1">Head of the household </option>
                            <option value="2">Wife / Husband </option>
                            <option value="3">Son / Daughter </option>
                            <option value="4">Parents</option>
                            <option value="5">Wife / Husband </option>
                            <option value="6">Son / Daughter </option>
                            <option value="7">Parents</option>
                            <option value="9">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_3_10_ot">
                        <input type="text" required name="1_1_3_10_oth" id="1_1_3_10_oth" class="form-control" />
                </div>
                </td>

                <td>1.1.4.10x
                    <div class="input-group">
                        <select class="form-control" name="1_1_4_10x" id="1_1_4_10x">
                            <option value="1">Male </option>
                            <option value="2">Female</option>

                        </select>
                    </div>
                </td>
                <td>
                    <div>1.1.5.10x <input type="text" name="1_1_5_10x" id="1_1_5_10x" placeholder="Age"  required
                            class="form-control" />
                </td>
                <td> 1.1.6.10x <div class="input-group">
                        <select class="form-control" name="1_1_6_10x" id="1_1_6_10x" onchange="eDoth(this,7,'1_1_6_10_oth')">
                            <option value="1">Sinhala</option>
                            <option value="2">Sri Lanka Tami</option>
                            <option value="3">India Tamil </option>
                            <option value="4">Sri Lanka Moor</option>
                            <option value="5">Malay</option>
                            <option value="6">Burgher</option>

                            <option value="7">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_6_3_ot">
                        <input type="text" required name="1_1_6_10_oth" id="1_1_6_10_oth" class="form-control" />
                </div>
                </td>

                <td> 1.1.7.10 <div class="input-group">
                        <select class="form-control" name="1_1_7_10x" id="1_1_7_10x" onchange="eDoth(this,5,'1_1_7_10_oth')">
                            <option value="1">Buddhist</option>
                            <option value="2">Hindu</option>
                            <option value="3">Islam</option>
                            <option value="4">Roman Catholic / Other Christian</option>
                            <option value="5">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_7_10_ot">
                        <input type="text" required name="1_1_7_10_oth" id="1_1_7_10_oth" class="form-control" />
                </div>
                </td>
                <td> 1.1.8.10x <div class="input-group">
                        <select class="form-control" name="1_1_8_10x" id="1_1_8_10x">
                            <option value="1">Never married</option>
                            <option value="2">Married</option>
                            <option value="3">Widowed</option>
                            <option value="4">Divorced</option>
                            <option value="5">Separated</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.8.10x <div class="input-group">
                        <select class="form-control" name="1_1_9_10x" id="1_1_9_10x">
                            <option value="1">Studying in Grade 1</option>
                            <option value="2">Passed Grade 1 </option>
                            <option value="3">Passed Grade 2 </option>
                            <option value="4">Passed Grade 3</option>
                            <option value="5">Passed Grade 4</option>
                            <option value="6">Passed Grade 5 </option>
                            <option value="7">Passed Grade 6 </option>
                            <option value="8">Passed Grade 7</option>
                            <option value="9">Passed Grade 8</option>
                            <option value="10">Passed Grade 9 </option>
                            <option value="11">Passed Grade 10 </option>
                            <option value="12">Passed G.C.E.(O/L) or equivalent</option>
                            <option value="13">Passed G.C.E.(A/L) or equivalent</option>
                            <option value="14">Passed GAQ / GSQ</option>
                            <option value="15">Passed post Graduate / Diploma</option>
                            <option value="16">PHD </option>
                            <option value="17">Special Education learning / learnt</option>
                            <option value="18">No Schooling</option>
                        </select>
                    </div>
                </td>
                <td> 1.1.10.10x <div class="input-group">
                        <select class="form-control" name="1_1_10_10x" id="1_1_10_10x" onchange="eDoth(this,6,'1_1_10_10_oth')">
                            <option value="1">Employed</option>
                            <option value="2">Looking for a job</option>
                            <option value="3">Student</option>
                            <option value="4">Household work</option>
                            <option value="5">Unable/Too old to work</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_10_10_ot">
                        <input type="text" required name="1_1_10_10_oth" id="1_1_10_10_oth" class="form-control" />
                </div>
                </td>
                <td> 1.1.11.10 <div class="input-group">
                        <select class="form-control" name="1_1_11_10x" id="1_1_11_10x" onchange="eDoth(this,10,'1_1_11_10_oth')">
                            <option value="1">Government Employee</option>
                            <option value="2">Semi-government Employee </option>
                            <option value="3">Private sector employee</option>
                            <option value="4">Employer</option>
                            <option value="5">Farmer</option>
                            <option value="6">Fisher</option>
                            <option value="7">Other own account worker</option>
                            <option value="8">Casual laborer</option>
                            <option value="9">Contributing family worker</option>
                            <option value="10">other</option>
                        </select>
                    </div>
                    <div class="input-group" id="1_1_11_10_ot">
                        <input type="text" required name="1_1_11_10_oth" id="1_1_11_10_oth" class="form-control" />
                </div>
                </td>
                <td>
                    <div>1.1.12.10x <input type="text" name="1_1_12_10x" id="1_1_12_10x"  required class="form-control" />
                </td>
                <td>
                    <div>1.1.13.10x <input type="text" name="1_1_13_10x" id="1_1_13_10x"  required class="form-control" />
                </td>
            </tr>
            
        </table>

        <div class="card-footer">
                   
                    <button type="reset" class="btn btn-default">Reset Button</button>
                    <button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary float-right">Submit Button</button>
                </div>


   

    <br>
</div>