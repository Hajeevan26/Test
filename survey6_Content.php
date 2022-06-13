<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
            6. Decision on conversion into organic farming
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
                        <select class="form-control" name="6_1" id="6_1">
                            <option value="1">It was a good and timely decision
                            </option>
                            <option value="2">It would have become a good decision if it had a long term and
                                strategic plan
                            </option>
                            <option value="3">It was not a good decision since becoming fully organic cannot
                                be achieved
                            </option>
                            <option value="3">It was not a good decision as the yield might drop drastically

                            </option>
                            <option value="4">Other

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


            <!-- 3rd -->

            <div class="row">

                <div class="col-md-6">
                    <div class="input-group">
                        <label>6.3. Was that government decision influenced on your
                            cultivation on last Maha season?
                        </label>
                        <select class="form-control" name="6_3" id="6_3">
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
                            <option value="7">Other
                            </option>
                        </select>


                    </div>
                    <div id="6_3">
                        <div class="input-group">
                            <input type="text" required name="6_3_ot" id="6_3_ot" class="form-control" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label><u>1.2.1 Roof </u></label>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_a" id="1_2_1_a"
                                    value="1">Tile</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_b" id="1_2_1_b" value="2">Corru.
                                Asbestos</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_c" id="1_2_1_c"
                                    value="3">Tin/Alu. sheets</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="1_2_1_d" id="1_2_1_d"
                                    value="4">Cadjan</label></div>
                        <div class="checkbox"> <label><input type="checkbox" name="1_2_1_e" id="1_2_1_e"
                                    value="5">Other</label> </div>

                    </div>
                </div>
            </div>


            <div class="card-footer">

                <button type="reset" class="btn btn-default">Reset Button</button>
                <button type="submit" name="btnsave" id="btnsave" class="btn btn-primary float-right">Submit
                    Button</button>
            </div>



        </div>



    </div>

</form>