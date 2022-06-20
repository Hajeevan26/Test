<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
        6.	Decision on conversion into organic farming
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">
                <div class="col-md-6">
                    <div class="input-group">
                        <label>6.1. Do you like organic farming?</label>
                        <select class="form-control" name="6_1" id="6_1">
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label>6.2. What do you think about the policy decision of the government to become fully
                            organic suddenly?</label>
                        <select class="form-control" name="6_2" id="6_2"  onchange="eDoth(this,5,'6_2_oth')">
                            <option value="1">It was a good and timely decision
                            </option>
                            <option value="2">It would have become a good decision if it had a long term and
                                strategic plan
                            </option>
                            <option value="3">It was not a good decision since becoming fully organic cannot
                                be achieved
                            </option>
                            <option value="4">It was not a good decision as the yield might drop drastically

                            </option>
                            <option value="5" selected >Other

                            </option>

                        </select>
                        
                    </div>
                    <div id="6_2_ot">
                        <div class="input-group">
                            <input type="text" required name="6_2_oth" id="6_2_oth" class="form-control" />
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
                        <label>6.3. Was that government decision influenced on your
                            cultivation on last Maha season?
                        </label>
                        <select class="form-control" name="6_3" id="6_3" onchange="eDoth(this,7,'6_3_oth')">
                            <option value="1">Yes, I totally converted into organic
                            </option>
                            <option value="2">Yes, I converted into organic at a certain level

                            </option>
                            <option value="3">No, I was an organic farmer before the ban

                            </option>
                            <option value="4">It was not a good decision as the yield might drop drastically

                            </option>
                            <option value="5">No, but I will consider to convert into organic in future

                            </option>
                            <option value="6">No, I will never convert

                            </option>
                            <option value="7" selected >Other
                            </option>
                        </select>


                    </div>
                    <div id="6_3_ot">
                        <div class="input-group">
                            <input type="text" required name="6_3_oth" id="6_3_oth" class="form-control" />
                        </div>
                    </div>
                </div>

                
            </div>
            <hr>
<div class="row">
<div class="col-md-12">
                    <div class="form-group">
                        <label><u>6.4.Have you received sufficient amounts of fertilizers during last Maha season?</u></label>
                        <div class="checkbox"><label><input type="checkbox" name="6_4a" id="6_4a" value="1">6.4.	Have you received sufficient amounts of fertilizers during last Maha season?</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4b" id="6_4b" value="2">I could not find any inorganic fertilizer during this season; however, I could manage with some inorganic fertilizers I had</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4c" id="6_4c" value="3">I paid a huge amount of money than before to buy inorganic fertilizers from some sellers</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4d" id="6_4d" value="4">I started my own organic fertilizer production and used them for paddy field</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4e" id="6_4e"value="5">I bought sufficient amounts of organic fertilizers from sellers</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4f" id="6_4f" value="6">I received organic fertilizer free of charge sufficiently</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4g" id="6_4g" value="7">I received organic fertilizer free of charge but not sufficient enough</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="6_4h" id="6_4h" value="8">Did not apply any fertilizers</label> </div>           
                        <div class="checkbox"><label><input type="checkbox" name="6_4i" id="6_4i" value="9" onclick="eDcheckOT('6_4i','6_4i_oth')" selected>Other</label> </div>

                    </div>
                    <div id="6_4_ot">
                        <div class="input-group">
                            <input type="text" required name="6_4i_oth" id="6_4i_oth" class="form-control" />
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