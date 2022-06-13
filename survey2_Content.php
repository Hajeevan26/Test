<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
            1.2. Household and living conditions (Put “√”)
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

                <div class="col-md-3">
                    <div class="form-group">
                        <label>2.1 Years of experience in paddy cultivation</label>
                        <div class="row">
                            <div class="col-md-15"><input type="number" name="2_1" id="2_1" placeholder="Year"
                                    class="form-control" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>2.2 What is your sector of paddy cultivation?</label>
                        <div class="row">
                            <select class="form-control" name="2_2" id="2_2">
                                <option value="1">Commercial </option>
                                <option value="2">Domestic production </option>
                                <option value="3">Both</option>
                                <option value="4">Other</option>

                            </select>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>2.3 Years of experience in paddy cultivation</label>
                        <div class="row">
                            <div class="col-md-15"><input type="text" name="2_3" id="2_3" placeholder="Year"
                                    class="form-control" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>2.4 What was the duration of the paddy variety?</label>
                        <div class="row">
                            <div class="col-md-15"><input type="text" name="2_4" id="2_4" placeholder="Duration"
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
                        <label>2.5 When did you start sowing seeds for the Maha season?</label>
                        <div class="row">
                            <div class="col-md-15"><input type="text" name="2_5" id="2_5" placeholder="When"
                                    class="form-control" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>2.6 How did you supply paddy seeds for your cultivation  </label>
                        <div class="checkbox"><label><input type="checkbox" name="2_6a" id="2_6a" value="1">Paddy seeds were bought from a shop</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="2_6b" id="2_6b" value="2">Paddy seeds were supplied by the government</label></div>
                        <div class="checkbox"><label><input type="checkbox" name="2_6c" id="2_6c"
                                    value="3">Used own seed paddy </label></div>
                        <div class="checkbox"><label><input type="checkbox" name="2_6d" id="2_6d"
                                    value="4">Used a neighbors’ seed paddy
</label></div>
<div class="checkbox"><label><input type="checkbox" name="2_6e" id="2_6e"
                                    value="5">Seed paddy was provided by the landowner
</label></div>
<div class="checkbox"><label><input type="checkbox" name="2_6f" id="2_6f"
                                    value="6">Other
</label></div>

                    </div>
                </div>
                <div class="col-md-4">
                <div class="input-group">
                <label>2.7 </label>
                        <select class="form-control" name="2_7" id="2_7">
                            <option value="1">Yes </option>
                            <option value="2">No</option>
                           
                        </select>
                    </div>
                </div>

            </div>
            <!-- 3rd -->
            <hr>
            <div class="row">
            <div class="col-md-6">
                    <div class="form-group">
                        <label>2.8 How long did you join the farmer organization?</label>
                        <div class="row">
                            <div class="col-md-15"><input type="text" name="2_8" id="2_8" placeholder="Years"
                                    class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
           
            <div class="card-footer">

                <button type="reset" class="btn btn-default">Reset Button</button>
                <button type="submit" name="btnsave" id="btnsave" class="btn btn-primary float-right">Submit
                    Button</button>
            </div>



        </div>



    </div>

</form>