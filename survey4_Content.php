<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
        ණය/ණය පහසුකම්/සේවා
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">
                <div class="col-md-3">
                    <div class="input-group">
                        <label>4.1 පසුගිය මහ කන්නයේ වී වගාව සඳහා ඔබ ණය ලබාගෙන තිබේද?</label>
                        <select class="form-control  col-4" name="4_1" id="4_1" onchange="funb4_2()">
                            
                            <option value="1">No</option>
                            <option value="2">Yes</option>
                        </select>
                    </div>
                </div>
            </div>
<!-- 2nd row -->
<div id="divid4_2">
            

            </div>
                        <hr>

            
          
            <!-- 3rd -->
            <div class="card-footer">

                <button type="reset" class="btn btn-default">Reset Button</button>
                <button type="submit" name="btnsubmit" id="btnsubmit" class="btn btn-primary float-right">Submit
                    Button</button>
            </div>
        </div>
    </div>
</form>