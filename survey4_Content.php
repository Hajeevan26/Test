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
                            <td>4_2a<input type="text" name="4_2a" id="4_2a" class="form-control" /></td>
                            <td>4_3a<div class="input-group"> 
                                <select class="form-control  col-6" name="4_3a" id="4_3a">
                                <option value="1">Yes</option>
                                <option value="2">No</option> </div>
                            </td>
                            <td>4_4a<input type="text" name="4_4a" id="4_4a" class="form-control" /></td>
                            <td>4_5a<input type="text" name="4_5a" id="4_5a" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>4_2b<input type="text" name="4_2b" id="4_2b" class="form-control" /></td>
                            <td>4_3b<div class="input-group"> 
                                <select class="form-control  col-6" name="4_3b" id="4_3b">
                                <option value="1">Yes</option>
                                <option value="2">No</option> </div>
                            </td>
                            <td>4_4b<input type="text" name="4_4b" id="4_4b" class="form-control" /></td>
                            <td>4_5b<input type="text" name="4_5b" id="4_5b" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>4_2c<input type="text" name="4_2c" id="4_2c" class="form-control" /></td>
                            <td>4_3c<div class="input-group"> 
                                <select class="form-control  col-6" name="4_3c" id="4_3c">
                                <option value="1">Yes</option>
                                <option value="2">No</option> </div>
                            </td>
                            <td>4_4c<input type="text" name="4_4c" id="4_4c" class="form-control" /></td>
                            <td>4_5c<input type="text" name="4_5c" id="4_5c" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>4_2d<input type="text" name="4_2d" id="4_2d" class="form-control" /></td>
                            <td>4_3d<div class="input-group"> 
                                <select class="form-control  col-6" name="4_3d" id="4_3d">
                                <option value="1">Yes</option>
                                <option value="2">No</option> </div>
                            </td>
                            <td>4_4d<input type="text" name="4_4d" id="4_4d" class="form-control" /></td>
                            <td>4_5d<input type="text" name="4_5d" id="4_5d" class="form-control" /></td>
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