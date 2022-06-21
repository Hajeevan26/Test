<form role="form" action="" method="post">
    <div class="card card-primary">
        <div class="card-header">
            Paddy Sales of the last season
        </div>

        <div class="card-body">
            <div class="row">
                <input type="hidden" id="household_id" name="household_id" value="<?php echo $household_id; ?>">


            </div>

            <!-- 2nd row -->
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th colspan="4">පසුගිය කන්නයේ වී අලෙවිය (මහ 2021/22)</th>
                        </tr>
                        <tr>
                            <th>3.6.5. ගැනුම්කරුගේ නම</th>
                            <th>3.6.6. විකුණන ලද ප්‍රමාණය (Kg)
                            </th>
                            <th>3.6.7. මිල / කිලෝග්‍රෑමයට </th>
                            <th>3.6.8. කුඹුරුවලින් ආදායම</th>
                        </tr>
                        <tr>
                            <td>3_6_5_a<input type="text" name="3_6_5_a" id="3_6_5_a" class="form-control" /></td>
                            <td>3_6_6_a<input type="number" name="3_6_6_a" id="3_6_6_a" value="0" onkeyup="fnmulty('3_6_6_a','3_6_7_a','3_6_8_a')" class="form-control" /></td>
                            <td>3_6_7_a<input type="number" name="3_6_7_a" id="3_6_7_a" value="0"  onkeyup="fnmulty('3_6_6_a','3_6_7_a','3_6_8_a')" class="form-control" /></td>
                            <td>3_6_8_a<input type="text" name="3_6_8_a" id="3_6_8_a" value="0"  readonly  class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>3_6_5_b<input type="text" name="3_6_5_b" id="3_6_5_b" class="form-control" /></td>
                            <td>3_6_6_b<input type="number" name="3_6_6_b" id="3_6_6_b" value="0"  onkeyup="fnmulty('3_6_6_b','3_6_7_b','3_6_8_b')" class="form-control" /></td>
                            <td>3_6_7_b<input type="number" name="3_6_7_b" id="3_6_7_b" value="0"  onkeyup="fnmulty('3_6_6_b','3_6_7_b','3_6_8_b')" class="form-control" /></td>
                            <td>3_6_8_b<input type="text" name="3_6_8_b" id="3_6_8_b" readonly  class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>3_6_5_c<input type="text" name="3_6_5_c" id="3_6_5_c" class="form-control" /></td>
                            <td>3_6_6_c<input type="number" name="3_6_6_c" id="3_6_6_c" value="0"  onkeyup="fnmulty('3_6_6_c','3_6_7_c','3_6_8_c')" class="form-control" /></td>
                            <td>3_6_7_c<input type="number" name="3_6_7_c" id="3_6_7_c" value="0"  onkeyup="fnmulty('3_6_6_c','3_6_7_c','3_6_8_c')"  class="form-control" /></td>
                            <td>3_6_8_c<input type="text" name="3_6_8_c" id="3_6_8_c" value="0"  readonly  readonly  class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>3_6_5_d<input type="text" name="3_6_5_d" id="3_6_5_d" class="form-control" /></td>
                            <td>3_6_6_d<input type="number" name="3_6_6_d" id="3_6_6_d" value="0"  onkeyup="fnmulty('3_6_6_d','3_6_7_d','3_6_8_d')"  class="form-control" /></td>
                            <td>3_6_7_d<input type="number" name="3_6_7_d" id="3_6_7_d" value="0"  onkeyup="fnmulty('3_6_6_d','3_6_7_d','3_6_8_d')" class="form-control" /></td>
                            <td>3_6_8_d<input type="text" name="3_6_8_d" id="3_6_8_d" readonly  value="0"  class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>3_6_5_e<input type="text" name="3_6_5_e" id="3_6_5_e" class="form-control" /></td>
                            <td>3_6_6_e<input type="number" name="3_6_6_e" id="3_6_6_e" value="0"  onkeyup="fnmulty('3_6_6_e','3_6_7_e','3_6_8_e')"  class="form-control" /></td>
                            <td>3_6_7_e<input type="number" name="3_6_7_e" id="3_6_7_e" value="0"  onkeyup="fnmulty('3_6_6_e','3_6_7_e','3_6_8_e')" class="form-control" /></td>
                            <td>3_6_8_e<input type="text" name="3_6_8_e" id="3_6_8_e" readonly value="0"   class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>3_6_5_f<input type="text" name="3_6_5_f" id="3_6_5_f" class="form-control" /></td>
                            <td>3_6_6_f<input type="number" name="3_6_6_f" id="3_6_6_f" value="0"  onkeyup="fnmulty('3_6_6_f','3_6_7_f','3_6_8_f')" class="form-control" /></td>
                            <td>3_6_7_f<input type="number" name="3_6_7_f" id="3_6_7_f" value="0"  onkeyup="fnmulty('3_6_6_f','3_6_7_f','3_6_8_f')" class="form-control" /></td>
                            <td>3_6_8_f<input type="text" name="3_6_8_f" id="3_6_8_f" value="0"  readonly  class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>3_6_5_g<input type="text" name="3_6_5_g" id="3_6_5_g" class="form-control" /></td>
                            <td>3_6_6_g<input type="number" name="3_6_6_g" id="3_6_6_g"  value="0" onkeyup="fnmulty('3_6_6_g','3_6_7_g','3_6_8_g')" class="form-control" /></td>
                            <td>3_6_7_g<input type="number" name="3_6_7_g" id="3_6_7_g" value="0"  onkeyup="fnmulty('3_6_6_g','3_6_7_g','3_6_8_g')" class="form-control" /></td>
                            <td>3_6_8_g<input type="text" name="3_6_8_g" id="3_6_8_g" readonly  value="0"  class="form-control" /></td>
                    </table>
                </div>



            </div>
            <hr>
            <!-- 3rd -->
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th colspan="4">පසුගිය කන්නයේ වී අලෙවිය (මහ 2020/21)</th>
                        </tr>
                        <tr>
                            <th>3.6.9. ගැනුම්කරුගේ නම</th>
                            <th>3.6.10. විකුණන ලද ප්‍රමාණය (Kg)
                            </th>
                            <th>3.6.11. මිල / කි.ග්‍රෑමයට </th>
                            <th>3.6.12. කුඹුරුවලින් ආදායම</th>
                        </tr>
                        <tr>
                            <td>3_6_9_a <input type="text" name="3_6_9_a" id="3_6_9_a" class="form-control" /></td>
                            <td>3_6_10_a<input type="number" name="3_6_10_a" id="3_6_10_a" value="0"  onkeyup="fnmulty('3_6_10_a','3_6_11_a','3_6_12_a')"  class="form-control" /></td>
                            <td>3_6_11_a<input type="number" name="3_6_11_a" id="3_6_11_a" value="0"  onkeyup="fnmulty('3_6_10_a','3_6_11_a','3_6_12_a')" class="form-control" /></td>
                            <td>3_6_12_a<input type="text" name="3_6_12_a" id="3_6_12_a" value="0"  readonly  class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>3_6_9_b <input type="text" name="3_6_9_b" id="3_6_9_b" class="form-control" /></td>
                            <td>3_6_10_b<input type="number" name="3_6_10_b" id="3_6_10_b" value="0"  onkeyup="fnmulty('3_6_10_b','3_6_11_b','3_6_12_b')" class="form-control" /></td>
                            <td>3_6_11_b<input type="number" name="3_6_11_b" id="3_6_11_b" value="0"  onkeyup="fnmulty('3_6_10_b','3_6_11_b','3_6_12_b')" class="form-control" /></td>
                            <td>3_6_12_b<input type="text" name="3_6_12_b" id="3_6_12_b"  value="0" readonly  class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>3_6_9_c<input type="text" name="3_6_9_c" id="3_6_9_c" class="form-control" /></td>
                            <td>3_6_10_c<input type="number" name="3_6_10_c" id="3_6_10_c" value="0"  onkeyup="fnmulty('3_6_10_c','3_6_11_c','3_6_12_c')" class="form-control" /></td>
                            <td>3_6_11_c<input type="number" name="3_6_11_c" id="3_6_11_c" value="0"  onkeyup="fnmulty('3_6_10_c','3_6_11_c','3_6_12_c')" class="form-control" /></td>
                            <td>3_6_12_c<input type="text" name="3_6_12_c" id="3_6_12_c" value="0"  readonly  class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>3_6_9_d<input type="text" name="3_6_9_d" id="3_6_9_d" class="form-control" /></td>
                            <td>3_6_10_d<input type="number" name="3_6_10_d" id="3_6_10_d" value="0"  onkeyup="fnmulty('3_6_10_d','3_6_11_d','3_6_12_d')" class="form-control" /></td>
                            <td>3_6_11_d<input type="number" name="3_6_11_d" id="3_6_11_d" value="0"   onkeyup="fnmulty('3_6_10_d','3_6_11_d','3_6_12_d')"class="form-control" /></td>
                            <td>3_6_12_d<input type="text" name="3_6_12_d" id="3_6_12_d" value="0"  readonly  class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>3_6_9_e<input type="text" name="3_6_9_e" id="3_6_9_e" class="form-control" /></td>
                            <td>3_6_10_e<input type="number" name="3_6_10_e" id="3_6_10_e" value="0"  onkeyup="fnmulty('3_6_10_e','3_6_11_e','3_6_12_e')" class="form-control" /></td>
                            <td>3_6_11_e<input type="number" name="3_6_11_e" id="3_6_11_e" value="0"  onkeyup="fnmulty('3_6_10_e','3_6_11_e','3_6_12_e')" class="form-control" /></td>
                            <td>3_6_12_e<input type="text" name="3_6_12_e" id="3_6_12_e" value="0"  readonly  class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>3_6_9_f<input type="text" name="3_6_9_f" id="3_6_ 9__f" class="form-control" /></td>
                            <td>3_6_10_f<input type="number" name="3_6_10_f" id="3_6_10_f" onkeyup="fnmulty('3_6_10_f','3_6_11_f','3_6_12_f')" class="form-control" /></td>
                            <td>3_6_11_f<input type="number" name="3_6_11_f" id="3_6_11_f" onkeyup="fnmulty('3_6_10_f','3_6_11_f','3_6_12_f')" class="form-control" /></td>
                            <td>3_6_12_f<input type="text" name="3_6_12_f" id="3_6_12_f" readonly  class="form-control" /></td>
                        </tr>
                        <tr>
                            <td>3_6_9_g<input type="text" name="3_6_9_g" id="3_6_9_g" class="form-control" /></td>
                            <td>3_6_10_g<input type="number" name="3_6_10_g" id="3_6_10_g" value="0"  onkeyup="fnmulty('3_6_10_g','3_6_11_g','3_6_12_g')" class="form-control" /></td>
                            <td>3_6_11_g<input type="number" name="3_6_11_g" id="3_6_11_g" value="0"  onkeyup="fnmulty('3_6_10_g','3_6_11_g','3_6_12_g')" class="form-control" /></td>
                            <td>3_6_12_g<input type="text" name="3_6_12_g" id="3_6_12_g" value="0"  readonly class="form-control" /></td>
                        </tr>
                    </table>
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