<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
            7. කාබනික ගොවිතැන පිළිබඳ අවබෝධය
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.1.රටක් හදිසියේම 100% කාබනික තත්ත්වයට පත් විය හැකි යැයි ඔබ සිතන්නේ කුමක්ද?</label>
                        <select class="form-control" name="7_1" id="7_1"  onchange="eDoth(this,5,'7_1_oth')">
                            <option value="1">ඔව්, නමුත් කාලය අවශ්යයි
                            </option>
                            <option value="2">ඔව්, හදිසි තීරණයක් සමහර විට ධනාත්මකව ක්‍රියා කිරීමට ඉඩ තියෙනවා
                            </option>
                            <option value="3">අදහසක් නැහැ
                            </option>
                            <option value="4">රටකට ඒක කවදාවත් කරන්න බෑ
                            </option>
                            <option value="5">වෙනත්

                            </option>

                        </select>

                    </div>
                    <div id="7_1_ot">
                        <div class="input-group">
                            <input type="text" required name="7_1_oth" id="7_1_oth" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.2.ඔබට කාබනික (සම්පූර්ණ හෝ අර්ධ වශයෙන්) වීමේ අත්දැකීමක් තිබේද?

                        </label>
                        <select class="form-control" name="7_2" id="7_2" onchange="eDoth(this,6,'7_2_oth')">
                            <option value="1">මම ගොවි ජීවිතයේ එක් වරක් හෝ කාබනික පොහොර යොදා වී වගා කළෙමි
                            </option>
                            <option value="2">මම ගොවි ජීවිතයේදී අවම වශයෙන් එක් වරක්වත් කාබනික සහ අකාබනික මිශ්‍රණය භාවිතා කර ඇත්තෙමි

                            </option>
                            <option value="3">මම මීට පෙර කවදාවත් කාබනික පොහොර අත්හදා බැලුවේ නැත

                            </option>
                            <option value="4">It was not a good decision as the yield might drop drastically

                            </option>
                            <option value="5">No, but I will consider to convert into organic in future

                            </option>
                            <option value="6">වෙනත්

                            </option>

                        </select>


                    </div>
                    <div id="7_2_ot">
                        <div class="input-group">
                            <input type="text" required name="7_2_oth" id="7_2_oth" class="form-control" />
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.3.සම්පූර්ණ වශයෙන් කාබනික වු කුඹුරකින් ලැබෙන අස්වැන්න ගැන ඔබ සිතන්නේ කුමක්ද

                        </label>
                        <select class="form-control" name="7_3" id="7_3">
                            <option value="1">එය වෙනදාට වඩා වැඩි වනු ඇත
                            </option>
                            <option value="2">එය වෙනදාට වඩා අඩු වනු ඇත

                            </option>
                            <option value="3">වෙනසක් නෑ
                            </option>
                            <option value="4">අදහසක් නැහැ
                            </option>


                        </select>


                    </div>

                </div>
            </div>

            <!-- 2nd row -->


            <!-- 3rd -->
<hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>7.4.කාබනික පොහොර යොදා වී වගා කිරීමට ඔබ කැමති කුමන තත්වයන් යටතේද?</label>
                        <div class="checkbox"><label><input type="checkbox" name="7_4_a" id="7_4_a" value="1">
                        සහන මිලට කාබනික පොහොර ලැබුණොත් මම ඒක දිගටම කරනවා</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="7_4_b" id="7_4_b" value="2">
                        කාබනික පොහොර නිෂ්පාදනය කරන්න ණය පහසුකම් ලැබුණොත් මම ඒක කරන්න පටන් ගන්නවා</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="7_4_c" id="7_4_c" value="3">
                        කාබනික ගොවිතැන ගැන ප්‍රමාණවත් දැනුමක් බෙදා හදා ගත්තොත් මම ඒක කරන්න පටන් ගන්නවා</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="7_4_d" id="7_4_d" value="4">
                        නැහැ, මම කාබනික ගොවිතැන කරන්න කැමති නැහැ</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="7_4_e" id="7_4_e" value="5" onclick="eDcheckOT('7_4_e','7_4_e_oth')">වෙනත්</label></div>
                        <div> <label><input type="text" placeholder="if other" required name="7_4_e_oth" id="7_4_e_oth">
                        </div>
                       
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <label>7.5.කාබනික පොහොර සඳහා ගෙවීමට ඔබ කැමතිද?</label>
                        <select class="form-control" name="7_5" id="7_5">
                            <option value="1">ඔව්</option>
                            <option value="2">නැත</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label>7.6.කාබනික පොහොර ඔබ විසින්ම නිෂ්පාදනය කර ගැනීමට ඔබ කැමතිද?</label>
                        <select class="form-control" name="7_6" id="7_6">
                            <option value="1">ඔව්</option>
                            <option value="2">නැත</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.7. කාබනික පොහොර නිෂ්පාදන ධාරිතාව ගොවීන්ගේ ඉල්ලුම සපුරාලීමට ප්‍රමාණවත් යැයි ඔබ විශ්වාස කරනවාද?</label>
                        <select class="form-control" name="7_7" id="7_7">
                            <option value="1">තරයේ එකඟ වෙමි </option>
                            <option value="2">  එකඟ වෙමි</option>
                            <option value="3">  මධ්‍යස්ථව එකඟ වෙමි</option>
                            <option value="4">  එකඟ නො වෙමි</option>
                            <option value="5">තරයේ එකඟ නොවෙමි</option>
                          
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.8.අකාබනික පොහොරවලට වඩා කාබනික පොහොර භෝග ඵලදායිතාවයට බලපෑම් කළ හැකි බව ඔබ විශ්වාස කරනවාද?
                        </label>
                        <select class="form-control" name="7_8" id="7_8">
                        <option value="1">තරයේ එකඟ වෙමි </option>
                            <option value="2">  එකඟ වෙමි</option>
                            <option value="3">  මධ්‍යස්ථව එකඟ වෙමි</option>
                            <option value="4">  එකඟ නො වෙමි</option>
                            <option value="5">තරයේ එකඟ නොවෙමි</option>
                          
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.9.කාබනික ගොවිතැන ඔබේ සෞඛ්‍යය වැඩි දියුණු කිරීමට උපකාරී වේ යැයි ඔබ විශ්වාස කරනවාද?</label>
                        <select class="form-control" name="7_9" id="7_9">
                        <option value="1">තරයේ එකඟ වෙමි </option>
                            <option value="2">  එකඟ වෙමි</option>
                            <option value="3">  මධ්‍යස්ථව එකඟ වෙමි</option>
                            <option value="4">  එකඟ නො වෙමි</option>
                            <option value="5">තරයේ එකඟ නොවෙමි</option>
                          
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.10. වෙළඳපොලේ කාබනික පොහොරවල ගුණාත්මක භාවය සම්මත මට්ටමේ පවතින බව ඔබ විශ්වාස කරනවාද?</label>
                        <select class="form-control" name="7_10" id="7_10">
                        <option value="1">තරයේ එකඟ වෙමි </option>
                            <option value="2">  එකඟ වෙමි</option>
                            <option value="3">  මධ්‍යස්ථව එකඟ වෙමි</option>
                            <option value="4">  එකඟ නො වෙමි</option>
                            <option value="5">තරයේ එකඟ නොවෙමි</option>
                          
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.11.කාබනික පොහොර අකාබනික පොහොරවලට වඩා ඵලදායී බව ඔබ විශ්වාස කරනවාද?
                        </label>
                        <select class="form-control" name="7_11" id="7_11">
                        <option value="1">තරයේ එකඟ වෙමි </option>
                            <option value="2">  එකඟ වෙමි</option>
                            <option value="3">  මධ්‍යස්ථව එකඟ වෙමි</option>
                            <option value="4">  එකඟ නො වෙමි</option>
                            <option value="5">තරයේ එකඟ නොවෙමි</option>
                          
                        </select>
                    </div>
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