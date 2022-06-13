<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
            Paddy Sales of the last season
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">
                <div class="col-md-3">
                    <div class="input-group">
                        <label>4.1 Have you received any loans for last Maha season’s paddy cultivation?</label>
                        <select class="form-control  col-4" name="control_sample" id="control_sample">
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- 2nd row -->
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th colspan="4">If Yes</th>
                        </tr>
                        <tr>
                            <th>4.2.Source of the loan </th>
                            <th>4.3.Paid/ Unpaid</th>
                            <th>4.4.Interest rate</th>
                            <th>4.5.Amount of the loan</th>
                        </tr>
                        <tr>
                            <td>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" /></td>
                            <td>1.1.12.1 <div class="input-group"> 
                                <select class="form-control  col-6" name="control_sample" id="control_sample">
                                <option value="1">Yes</option>
                                <option value="2">No</option> </div>
                            </td>
                            <td>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" /></td>
                            <td>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" /></td>
                            <td>1.1.12.1 <div class="input-group"> 
                                <select class="form-control  col-6" name="control_sample" id="control_sample">
                                <option value="1">Yes</option>
                                <option value="2">No</option> </div>
                            </td>
                            <td>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" /></td>
                            <td>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" /></td>
                            <td>1.1.12.1 <div class="input-group"> 
                                <select class="form-control  col-6" name="control_sample" id="control_sample">
                                <option value="1">Yes</option>
                                <option value="2">No</option> </div>
                            </td>
                            <td>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" /></td>
                            <td>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" /></td>
                            <td>1.1.12.1 <div class="input-group"> 
                                <select class="form-control  col-6" name="control_sample" id="control_sample">
                                <option value="1">Yes</option>
                                <option value="2">No</option> </div>
                            </td>
                            <td>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" /></td>
                            <td>1.1.12.1 <input type="text" name="1_1_12_1" id="1_1_12_1" class="form-control" /></td>
                        </tr>
                       
                    </table>
                </div>



            </div>
            <hr>
            <!-- 3rd -->
            
            
            


            <div class="card-footer">

                <button type="reset" class="btn btn-default">Reset Button</button>
                <button type="submit" name="btnsave" id="btnsave" class="btn btn-primary float-right">Submit
                    Button</button>
            </div>



        </div>



    </div>

</form>