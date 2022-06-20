<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
            7. Perception on organic farming
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">
                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.1.What do you think that a country could become 100%
                            organic status suddenly?</label>
                        <select class="form-control" name="7_1" id="7_1"  onchange="eDoth(this,5,'7_1_oth')">
                            <option value="1">Yes, but it needs time
                            </option>
                            <option value="2">Yes, sudden decision might work sometimes positively
                            </option>
                            <option value="3">No idea
                            </option>
                            <option value="4">A country can never do it
                            </option>
                            <option value="5" selected >Other
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
                        <label>7.2.Do you have any experience of being organic (Fully or
                            partially)?

                        </label>
                        <select class="form-control" name="7_2" id="7_2" onchange="eDoth(this,6,'7_2_oth')">
                            <option value="1">I had cultivated paddy using organic fertilizers at least once in
                                farming life
                            </option>
                            <option value="2">I had used mixture of organic and inorganic at least once in
                                farming life

                            </option>
                            <option value="3">I had never tried organic fertilizers before

                            </option>
                            <option value="4">It was not a good decision as the yield might drop drastically

                            </option>
                            <option value="5">No, but I will consider to convert into organic in future

                            </option>
                            <option value="6" selected >Other

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
                        <label>7.3.What do you think about the harvest that would receive
                            from a fully organic paddy field?

                        </label>
                        <select class="form-control" name="7_3" id="7_3">
                            <option value="1">It will be higher than usual</option>
                            <option value="2">It will be lower than usual</option>
                            <option value="3">No difference</option>
                            <option value="4">No idea</option>
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
                        <label>7.4.Under what conditions would you like to cultivate paddy
                            using organic fertilizer? </label>
                        <div class="checkbox"><label><input type="checkbox" name="7_4_a" id="7_4_a" value="1">If I
                                received organic fertilizer under a subsidized price, I will
                                continually be doing it</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="7_4_b" id="7_4_b" value="2">If I
                                received credit facilities to produce organic fertilizer, I will
                                start doing it</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="7_4_c" id="7_4_c" value="3">If I
                                received sufficient knowledge sharing on organic farming, I
                                will start doing it</label> </div>
                        <div class="checkbox"><label><input type="checkbox" name="7_4_d" id="7_4_d" value="4">No, I
                                don’t like to do organic farming</label></div>
                                <div class="checkbox"><label><input type="checkbox" name="7_4_e" id="7_4_e" value="5" onclick="eDcheckOT('7_4_e','7_4_e_oth')" selected >Other</label></div>
                        <div> <label><input type="text" placeholder="if other" required name="7_4_e_oth" id="7_4_e_oth">
                        </div>
                       
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <label>7.5.Do you like to pay for organic fertilizer? </label>
                        <select class="form-control" name="7_5" id="7_5">
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <label>7.6.Do you like to produce organic fertilizer by your own?</label>
                        <select class="form-control" name="7_6" id="7_6">
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.7. Do you believe that the production
                            capacity of organic fertilizer is
                            enough to fulfil the farmers’
                            demand?</label>
                        <select class="form-control" name="7_7" id="7_7">
                            <option value="1">Strongly agree </option>
                            <option value="2">Agree</option>
                            <option value="3">Neutral</option>
                            <option value="4">Disagree</option>
                            <option value="5">Strongly disagree</option>
                          
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.8.Do you believe that organic fertilizer
                            can influence on crop productivity
                            than inorganic fertilizer?
                        </label>
                        <select class="form-control" name="7_8" id="7_8">
                        <option value="1">Strongly agree </option>
                            <option value="2">Agree</option>
                            <option value="3">Neutral</option>
                            <option value="4">Disagree</option>
                            <option value="5">Strongly disagree</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.9.Do you believe organic farming will
                            help to improve your health?</label>
                        <select class="form-control" name="7_9" id="7_9">
                        <option value="1">Strongly agree </option>
                            <option value="2">Agree</option>
                            <option value="3">Neutral</option>
                            <option value="4">Disagree</option>
                            <option value="5">Strongly disagree</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.10. Do you believe that the production
                            capacity of organic fertilizer is
                            enough to fulfil the farmers’
                            demand?</label>
                        <select class="form-control" name="7_10" id="7_10">
                        <option value="1">Strongly agree </option>
                            <option value="2">Agree</option>
                            <option value="3">Neutral</option>
                            <option value="4">Disagree</option>
                            <option value="5">Strongly disagree</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>7.11.Do you believe that organic fertilizer can influence on crop productivity than
                            inorganic fertilizer?
                        </label>
                        <select class="form-control" name="7_11" id="7_11">
                        <option value="1">Strongly agree </option>
                            <option value="2">Agree</option>
                            <option value="3">Neutral</option>
                            <option value="4">Disagree</option>
                            <option value="5">Strongly disagree</option>
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