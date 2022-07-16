<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
            2. ගොවිපල තොරතුරු
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

                <div class="col-md-3">
                    <div class="form-group">
                        <label>2.1 වී වගාව  පිලිබඳ  අවුරුදු කොපමණ ගණනාවක පළපුරුද්ද පවතීද?</label>
                        <div class="row">
                            <div class="col-md-15"><input type="number" name="2_1" id="2_1" 
                                    class="form-control" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>2.2 ඔබේ වී වගාව අයත් වන අංශය කුමක්ද?</label>
                        <div class="row">
                            <select class="form-control" name="2_2" id="2_2" onchange="eDoth(this,4,'2_2_oth')" >
                                <option value="1">වාණිජමය </option>
                                <option value="2">ගෘහස්ථ නිෂ්පාදනය</option>
                                <option value="3">අංශ දෙකම</option>
                                <option value="4" SELECTED> වෙනත්</option>
                            </select>
                            <div class="input-group" id="2_2_ot"><input type="text" placeholder="වෙනත්" required
                                    name="2_2_oth" id="2_2_oth" class="form-control" /></div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>2.3 මහකන්නය 2021/22 සඳහා ඔබ වගා කළ බීජ ප්‍රභේදය කුමක්ද</label>
                        <div class="row">
                            <div class="col-md-15"><input type="text" name="2_3" id="2_3"
                                    class="form-control" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>2.4 වී ප්‍රභේදයේ කාලසීමාව කොපමණ ද?</label>
                        <div class="row">
                            <div class="col-md-15"><input type="number" name="2_4" id="2_4" placeholder="කාල සීමාව"
                                    class="form-control" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <hr>
            <!-- 2nd row -->
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>2.5 මහ කන්නයේ බීජ වැපිරීම ආරම්භ කළේ කවදාද</label>
                        <div class="row">
                            <div class="col-md-15"><input type="text" name="2_5" id="2_5" placeholder="කවදා ද"
                                    class="form-control" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>2.6 ඔබ ඔබේ වගාවට වී බීජ සපයා ගත්තේ  කෙසේද? </label>
                        <div class="checkbox"><label><input type="checkbox" name="2_6a" id="2_6a" value="1">
                        වී බීජ වෙළඳසැලෙන් මීළ දී  ගත්තා</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="2_6b" id="2_6b" value="2">
                        වී බීජ රජයෙන් ලබා දුන්නා    </label></div>
                        <div class="checkbox"><label><input type="checkbox" name="2_6c" id="2_6c" value="3">
                        තමන්ගේම බිත්තර වී පාවිච්චි කළා</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="2_6d" id="2_6d" value="4">
                        අසල්වැසියන්ගේ බිත්තර වී පාවිච්චි කළා
                            </label></div>
                        <div class="checkbox"><label><input type="checkbox" name="2_6e" id="2_6e" value="5">
                        ඉඩම් හිමියා විසින් බිත්තර වී ලබා දෙන ලදී
                            </label></div>
                        <div class="checkbox"><label><input type="checkbox" name="2_6f" id="2_6f" value="6" onclick="eDcheckOT('2_6f','2_6_f_oth')">වෙනත්
                            </label></div>

                    </div>
                    <div class="input-group" id="2_6_f_ot"><input type="text"  name="2_6_f_oth" id="2_6_f_oth" class="form-control" /></div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>2.7 ඔබ කිසියම් ගොවි සංවිධානයක සාමාජිකත්වය ලබාගෙන තිබේද?</label>
                        <select class="form-control" name="2_7" id="2_7" onchange="funb2_7();">
                           
                            <option value="1"> නැත</option>        
                            <option value="2">ඔව්</option>                                                                                                                                     	                                                                         	                                                     

                        </select>
                    </div>
                </div>

            </div>
            <!-- 3rd -->
            <hr>
            <div class="row">
                <div id="divid2_8">
                  <!--   <div class="form-group">
                        <label>2.8 ඔබ සමාජිකත්වය ලබා ගෙන කොපමණ කාලයක්ද? (අවුරුදු )</label>
                        <div class="row">
                            <div class="col-md-15"><input type="number" name="2_8" id="2_8" placeholder="වර්ෂය"
                                    class="form-control" />
                            </div>
                        </div>
                    </div> -->
                </div> 
            </div>
            <hr>

            <div class="card-footer">

                <button type="reset" class="btn btn-default">Reset Button</button>
                <button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary float-right">Submit
                    Button</button>
            </div>



        </div>



    </div>

</form>