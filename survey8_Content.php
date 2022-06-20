<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
            8. Perception on organic farming
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_1.Did you observe/Was it inspected any water pollution surrounding your
                            paddy fields?</label>
                        <select class="form-control" name="8_1" id="8_1">
                            <option value="1">Yes
                            </option>
                            <option value="2">No
                            </option>
                        </select>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_2. Did you observe/ was it inspected any nearby wells polluted and water is
                            not safe to drink?
                        </label>
                        <select class="form-control" name="8_2" id="8_2">
                            <option value="1">Yes
                            </option>
                            <option value="2">No
                            </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_3. If yes, do you believe the above pollution is due to heavy usage of chemical
                            fertilizer/pesticides?

                        </label>
                        <select class="form-control" name="8_3" id="8_3">
                            <option value="1">Yes
                            </option>
                            <option value="2">No
                            </option>
                        </select>


                    </div>

                </div>
            </div>

            <!-- 2nd row -->


            <!-- 3rd -->
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_4. If not, what do you think the reason might be? </label>

                        <input type="text" required name="8_4" id="8_4" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_5.Do you or your any family member suffer from kidney diseases? </label>
                        <select class="form-control" name="8_5" id="8_5">
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>
                

            </div>
            <hr>
           
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_6.Did you notice any relationship between pesticides and kidney damage?</label>
                        <select class="form-control" name="8_6" id="8_6">
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_7.Do you believe transform into organic agriculture would decrease water
                            pollution and reduce health related concerns of the human?

                        </label>
                        <select class="form-control" name="8_7" id="8_7">
                            <option value="1">Strongly believe</option>
                            <option value="2">Moderately believe</option>
                            <option value="3">No idea</option>
                            <option value="4">Slightly believe</option>
                            <option value="5">Not at all believe</option>
                        </select>
                    </div>
                </div>
                
            </div>
            <hr>
            <div class="row">
               
              
                <div class="col-md-6">
                    <div class="input-group">
                        <label>9. Was the questionnaire completed successfully?
                        </label>
                        <select class="form-control" name="9" id="9">
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="card-footer">

                <button type="reset" class="btn btn-default">Reset Button</button>
                <button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary float-right">Finish</button>
            </div>



        </div>



    </div>

</form>