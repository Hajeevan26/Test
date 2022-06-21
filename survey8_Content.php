<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
        8. සෞඛ්‍ය සහ පාරිසරික ගැටළු
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">

                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_1.ඔබේ කුඹුරු ආශ්‍රිත ජල දූෂණයක් ඔබ නිරීක්ෂණය කළේද/පරීක්ෂා කළේද?</label>
                        <select class="form-control" name="8_1" id="8_1">
                        <option value="1">ඔව්</option>
                            <option value="2">නැත</option>
                        </select>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_2. 8.2. අවට ළිං අපවිත්‍ර වී ඇති බව සහ ජලය පානය කිරීමට ආරක්ෂිත නොවන බව ඔබ නිරීක්‍ෂණය කළේ/ පරීක්‍ෂා කළේද
                        </label>
                        <select class="form-control" name="8_2" id="8_2">
                        <option value="1">ඔව්</option>
                            <option value="2">නැත</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_3.එසේ නම්, ඉහත දූෂණයට හේතු වී ඇත්තේ අධික ලෙස රසායනික පොහොර/පළිබෝධනාශක භාවිතය නිසා යැයි ඔබ විශ්වාස කරනවාද

                        </label>
                        <select class="form-control" name="8_3" id="8_3">
                        <option value="1">ඔව්</option>
                            <option value="2">නැත</option>
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
                        <label>8_4. එසේ නොවේ නම්, හේතුව කුමක් විය හැකි යැයි ඔබ සිතන්නේද?</label>

                        <input type="text" required name="8_4" id="8_4" class="form-control" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_5.ඔබ හෝ ඔබගේ පවුලේ කිසිවකු වකුගඩු රෝගයෙන් පෙළෙනවාද</label>
                        <select class="form-control" name="8_5" id="8_5">
                        <option value="1">ඔව්</option>
                            <option value="2">නැත</option>
                        </select>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="input-group">
                        <label>8_6.පළිබෝධනාශක සහ වකුගඩු හානි අතර සම්බන්ධයක් ඔබ දුටුවාද</label>
                        <select class="form-control" name="8_6" id="8_6">
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                </div>

            </div> -->
            <hr>
           
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_6.පළිබෝධනාශක සහ වකුගඩු හානි අතර සම්බන්ධයක් ඔබ දුටුවාද</label>
                        <select class="form-control" name="6_1" id="6_1">
                        <option value="1">ඔව්</option>
                            <option value="2">නැත</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <label>8_7.කාබනික කෘෂිකර්මාන්තයට පරිවර්තනය වීමෙන් ජල දූෂණය අඩු වන අතර මිනිසාගේ සෞඛ්‍ය සම්බන්ධ ගැටළු අවම වනු ඇතැයි ඔබ විශ්වාස කරනවාද?

                        </label>
                        <select class="form-control" name="8_7" id="8_7">
                            <option value="1">දැඩි ලෙස විශ්වාස කරමි</option>
                            <option value="2">මධ්‍යස්ථව විශ්වාස කරමි</option>
                            <option value="3">අදහසක් නැහැ</option>
                            <option value="4">තරමක් විශ්වාස කරමි</option>
                            <option value="5">කොහෙත්ම විශ්වාස නොකරමි</option>
                        </select>
                    </div>
                </div>
                
            </div>
            <hr>
            <div class="row">
               
              
                <div class="col-md-6">
                    <div class="input-group">
                        <label>9. ඔබ සමීක්ෂණය සාර්ථකව නිම කළාද?  
                        </label>
                        <select class="form-control" name="9" id="9">
                            <option value="1">ඔව්</option>
                            <option value="2">නැත</option>
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