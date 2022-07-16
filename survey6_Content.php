<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
        6.	කාබනික ගොවිතැන බවට පරිවර්තනය කිරීම පිළිබඳ තීරණය
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">
                <div class="col-md-6">
                    <div class="input-group">
                        <label>6.1. ඔබ කාබනික වගාවට කැමතිද?</label>
                        <select class="form-control" name="6_1" id="6_1">
                            <option value="1">ඔව්</option>
                            <option value="2">නැත</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label>6.2. හදිසියේ සම්පූර්ණයෙන්ම කාබනික වීමට රජය ගත් ප්‍රතිපත්තිමය තීරණය ගැන ඔබ මොකද හිතන්නේ?</label>
                        <select class="form-control" name="6_2" id="6_2"  onchange="eDoth(this,5,'6_2_oth')">
                            <option value="1">එය හොඳ සහ කාලෝචිත තීරණයක්
                            </option>
                            <option value="2">දිගු කාලීන සහ උපාය මාර්ගික සැලැස්මක් තිබුණා නම් එය හොඳ තීරණයක් බවට පත් වෙනවා
                            </option>
                            <option value="3">සම්පූර්ණයෙන්ම කාබනික බවට පත්වීම සාක්ෂාත් කරගත නොහැකි බැවින් එය හොඳ තීරණයක් නොවේ
                            </option>
                            <option value="4">අස්වැන්න විශාල ලෙස පහත වැටීමට ඉඩ ඇති බැවින් එය හොඳ තීරණයක් නොවේ

                            </option>
                            <option value="5">වෙනත්

                            </option>

                        </select>
                        
                    </div>
                    <div id="6_2_ot">
                        <div class="input-group">
                            <input type="text"  name="6_2_oth" id="6_2_oth" class="form-control" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2nd row -->
<hr>

            <!-- 3rd -->

            <div class="row">

                <div class="col-md-6">
                    <div class="input-group">
                        <label>6.3. පසුගිය මහ කන්නයේ ඔබේ වගාවට රජයේ එම තීරණය බලපෑවාද?
                        </label>
                        <select class="form-control" name="6_3" id="6_3" onchange="eDoth(this,7,'6_3_oth')">
                            <option value="1">ඔව්, මම සම්පූර්ණයෙන්ම කාබනික බවට පරිවර්තනය කළා
                            </option>
                            <option value="2">ඔව්, මම එක්තරා මට්ටමක කාබනික බවට පරිවර්තනය කළා

                            </option>
                            <option value="3">නැහැ, මම තහනමට පෙර කාබනික ගොවියෙක්

                            </option>
                            <option value="4">නැත, නමුත් අනාගතයේදී කාබනික බවට පරිවර්තනය කිරීමට මම සලකා බලමි

                            </option>
                            <option value="5">නැහැ, මම කවදාවත් පරිවර්තනය කරන්නේ නැහැ

                            <!-- </option>
                            <option value="6">No, I will never convert

                            </option> -->
                            <option value="7" >වෙනත්
                            </option>
                        </select>


                    </div>
                    <div id="6_3_ot">
                        <div class="input-group">
                            <input type="text"  name="6_3_oth" id="6_3_oth" class="form-control" />
                        </div>
                    </div>
                </div>

                
            </div>
            <hr>
<div class="row">
<div class="col-md-12">
                    <div class="form-group">
                        <label><u>6.4.පසුගිය මහ කන්නයේදී ඔබට ප්‍රමාණවත් පොහොර ප්‍රමාණයක් ලැබී තිබේද?</u></label>
                        <div class="checkbox"><label><input type="checkbox" name="6_4a" id="6_4a" value="1">මේ කන්නයේ අකාබනික පොහොර හොයාගන්න බැරි වුණා</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4b" id="6_4b" value="2">මේ කන්නයේ මට කිසිම අකාබනික පොහොරක් හොයාගන්න බැරි වුණා. කෙසේ වෙතත්, මා සතුව තිබූ සමහර අකාබනික පොහොරවලින් මට කළමනාකරණය කළ හැකි විය</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4c" id="6_4c" value="3">සමහර වෙළෙන්දන්ගෙන් අකාබනික පොහොර ගන්න කලින්ට වඩා විශාල මුදලක් ගෙව්වා</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4d" id="6_4d" value="4">මම මගේම කාබනික පොහොර නිෂ්පාදනය ආරම්භ කර කුඹුරු සඳහා යොදා ගත්තා</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4e" id="6_4e"value="5">මම වෙළෙන්දන්ගෙන් කාබනික පොහොර ප්‍රමාණවත් ප්‍රමාණයක් මිලදී ගත්තා</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4f" id="6_4f" value="6">මට ප්‍රමාණවත් තරම් කාබනික පොහොර නොමිලේ ලැබුණා</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4g" id="6_4g" value="7">මට කාබනික පොහොර නොමිලේ ලැබුණත් ප්‍රමාණවත් වුණේ නැහැ</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4h" id="6_4h" value="8">පොහොර දැම්මේ නැහැ</label> </div>           
                        <div class="checkbox"><label><input type="checkbox" name="6_4i" id="6_4i" value="9" onclick="eDcheckOT('6_4i','6_4_oth')">වෙනත්</label> </div>

                    </div>
                    <div id="6_4_ot">
                        <div class="input-group">
                            <input type="text"  name="6_4_oth" id="6_4_oth" class="form-control" />
                        </div>
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