<?php
include('connection/config.php');
if (!isset($_SESSION)) {
    session_start();
}
$user_id = $_SESSION['user_id'];
//$role_id = $_SESSION['role_id'];
if (isset($_SESSION['household_id'])) {
    $household_id = $_SESSION['household_id'];
    $sqlitem = "select * from tblsurvey_question where household_id='$household_id' and interviewer_id='$user_id' and status =0 ORDER BY household_id DESC limit 1";
} else {
    $sqlitem = "select * from tblsurvey_question where status =0 ORDER BY household_id DESC limit 1";
}

date_default_timezone_set("Asia/Colombo");

//$sqlitem = "select * from tblsurvey where id='$id' and interviewer_id='$user_id' ORDER BY id DESC limit 1";
$resultitem = mysqli_query($con, $sqlitem) or die("error in select survey:" . mysqli_error($con));
$row = mysqli_fetch_assoc($resultitem);
//$a1 = $row['a1'];
$household_id = $row['household_id'];
//$type_of_migrant = $row['type_of_migrant'];
//echo $a1;

if(isset($_POST['btnsubmit']) ) {
    $sqlitem = "select * from tblsurvey_question where household_id='$household_id' and interviewer_id='$user_id' and status =0 ORDER BY household_id DESC limit 1";
    $resultitem = mysqli_query($con, $sqlitem) or die("error in select survey:" . mysqli_error($con));
    $row = mysqli_fetch_assoc($resultitem);
        
    if (isset($_POST['1_2_1_a'])) {  $a1_2_1_a = $_POST['1_2_1_a'];} else {$a1_2_1_a = 0; }
    if (isset($_POST['1_2_1_b'] )) { $a1_2_1_b = $_POST['1_2_1_b'];} else {$a1_2_1_b = 0; }
    if (isset($_POST['1_2_1_c'] )) { $a1_2_1_c = $_POST['1_2_1_c'];} else {$a1_2_1_c = 0; }
    if (isset($_POST['1_2_1_d'] )) { $a1_2_1_d = $_POST['1_2_1_d'];} else {$a1_2_1_d = 0; }
    if (isset($_POST['1_2_1_e'] )) { $a1_2_1_e = $_POST['1_2_1_e'];} else {$a1_2_1_e = 0; }
    
    if (isset($_POST['1_2_1_e_oth'] )) { $a1_2_1_e_oth = $_POST['1_2_1_e_oth'];} else {$a1_2_1_e_oth = NULL; }
    
    if (isset($_POST['1_2_2_a'])) {  $a1_2_2_a = $_POST['1_2_2_a'];} else {$a1_2_2_a = 0; }
    if (isset($_POST['1_2_2_b'] )) { $a1_2_2_b = $_POST['1_2_2_b'];} else {$a1_2_2_b = 0; }
    if (isset($_POST['1_2_2_c'] )) { $a1_2_2_c = $_POST['1_2_2_c'];} else {$a1_2_2_c = 0; }
    if (isset($_POST['1_2_2_d'] )) { $a1_2_2_d = $_POST['1_2_2_d'];} else {$a1_2_2_d = 0; }
    if (isset($_POST['1_2_2_d_oth'] )) { $a1_2_2_d_oth = $_POST['1_2_2_d_oth'];} else {$a1_2_2_d_oth = NULL; }
       
    if (isset($_POST['1_2_3_a'])) {  $a1_2_3_a = $_POST['1_2_3_a'];} else {$a1_2_3_a = 0; }
    if (isset($_POST['1_2_3_b'] )) { $a1_2_3_b = $_POST['1_2_3_b'];} else {$a1_2_3_b = 0; }
    if (isset($_POST['1_2_3_c'] )) { $a1_2_3_c = $_POST['1_2_3_c'];} else {$a1_2_3_c = 0; }
    if (isset($_POST['1_2_3_d'] )) { $a1_2_3_d = $_POST['1_2_3_d'];} else {$a1_2_3_d = 0; }

    if (isset($_POST['1_2_3_d_oth'] )) { $a1_2_3_d_oth = $_POST['1_2_3_d_oth'];} else {$a1_2_3_d_oth = NULL; }
    
    if (isset($_POST['1_2_4_a']))    {  $a1_2_4_a =       $_POST['1_2_4_a'];}       else {$a1_2_4_a = 0; }
    if (isset($_POST['1_2_4_b'] ))    { $a1_2_4_b =       $_POST['1_2_4_b'];}       else {$a1_2_4_b = 0; }
    if (isset($_POST['1_2_4_c'] ))    { $a1_2_4_c =       $_POST['1_2_4_c'];}       else {$a1_2_4_c = 0; }
    if (isset($_POST['1_2_4_d'] ))    { $a1_2_4_d =       $_POST['1_2_4_d'];}       else {$a1_2_4_d = 0; }
    if (isset($_POST['1_2_4_e'])) {     $a1_2_4_e =       $_POST['1_2_4_e'];}       else {$a1_2_4_e = 0; }
    if (isset($_POST['1_2_4_f'] )) {    $a1_2_4_f =       $_POST['1_2_4_f'];}       else {$a1_2_4_f = 0; }
    if (isset($_POST['1_2_4_g'] )) {    $a1_2_4_g =       $_POST['1_2_4_g'];}       else {$a1_2_4_g = 0; }
    if (isset($_POST['1_2_4_h'] )) {    $a1_2_4_h =       $_POST['1_2_4_h'];}       else {$a1_2_4_h = 0; }
    if (isset($_POST['1_2_4_h_oth'] )) { $a1_2_4_h_oth =    $_POST['1_2_4_h_oth'];}    else {$a1_2_4_h_oth = NULL; }
    
    if (isset($_POST['1_2_5_a']))    {  $a1_2_5_a =       $_POST['1_2_5_a'];}       else {$a1_2_5_a = 0; }
    if (isset($_POST['1_2_5_b'] ))    { $a1_2_5_b =       $_POST['1_2_5_b'];}       else {$a1_2_5_b = 0; }
    if (isset($_POST['1_2_5_c'] ))    { $a1_2_5_c =       $_POST['1_2_5_c'];}       else {$a1_2_5_c = 0; }
    if (isset($_POST['1_2_5_d'] ))    { $a1_2_5_d =       $_POST['1_2_5_d'];}       else {$a1_2_5_d = 0; }
    if (isset($_POST['1_2_5_d_oth'] )) { $a1_2_5_d_oth =    $_POST['1_2_5_d_oth'];}    else {$a1_2_5_d_oth = NULL; }
    
    if (isset($_POST['1_2_6_a']))    {  $a1_2_6_a =       $_POST['1_2_6_a'];}       else {$a1_2_6_a = 0; }
    if (isset($_POST['1_2_6_b'] ))    { $a1_2_6_b =       $_POST['1_2_6_b'];}       else {$a1_2_6_b = 0; }
    if (isset($_POST['1_2_6_c'] ))    { $a1_2_6_c =       $_POST['1_2_6_c'];}       else {$a1_2_6_c = 0; }
    if (isset($_POST['1_2_6_d'] ))    { $a1_2_6_d =       $_POST['1_2_6_d'];}       else {$a1_2_6_d = 0; }
    if (isset($_POST['1_2_6_e'])) {     $a1_2_6_e =       $_POST['1_2_6_e'];}       else {$a1_2_6_e = 0; }
    if (isset($_POST['1_2_6_f'] )) {    $a1_2_6_f =       $_POST['1_2_6_f'];}       else {$a1_2_6_f = 0; }
    if (isset($_POST['1_2_6_f_oth'] )) { $a1_2_6_f_oth =    $_POST['1_2_6_f_oth'];}    else {$a1_2_6_f_oth = NULL; }
    
    if (isset($_POST['1_2_7_a']))    {  $a1_2_7_a =       $_POST['1_2_7_a'];}       else {$a1_2_7_a = 0; }
    if (isset($_POST['1_2_7_b'] ))    { $a1_2_7_b =       $_POST['1_2_7_b'];}       else {$a1_2_7_b = 0; }
    if (isset($_POST['1_2_7_c'] ))    { $a1_2_7_c =       $_POST['1_2_7_c'];}       else {$a1_2_7_c = 0; }
    if (isset($_POST['1_2_7_d'] ))    { $a1_2_7_d =       $_POST['1_2_7_d'];}       else {$a1_2_7_d = 0; }
    if (isset($_POST['1_2_7_e'])) {     $a1_2_7_e =       $_POST['1_2_7_e'];}       else {$a1_2_7_e = 0; }
    
    if (isset($_POST['1_2_8_a']))    {  $a1_2_8_a =       $_POST['1_2_8_a'];}       else {$a1_2_8_a = 0; }
    if (isset($_POST['1_2_8_b'] ))    { $a1_2_8_b =       $_POST['1_2_8_b'];}       else {$a1_2_8_b = 0; }
    if (isset($_POST['1_2_8_c'] ))    { $a1_2_8_c =       $_POST['1_2_8_c'];}       else {$a1_2_8_c = 0; }
    if (isset($_POST['1_2_8_d'] ))    { $a1_2_8_d =       $_POST['1_2_8_d'];}       else {$a1_2_8_d = 0; }
    
       if (isset($_POST['1_2_9_a']))    {  $a1_2_9_a =       $_POST['1_2_9_a'];}       else {$a1_2_9_a = 0; }
    if (isset($_POST['1_2_9_b'] ))    { $a1_2_9_b =       $_POST['1_2_9_b'];}       else {$a1_2_9_b = 0; }
    if (isset($_POST['1_2_9_c'] ))    { $a1_2_9_c =       $_POST['1_2_9_c'];}       else {$a1_2_9_c = 0; }
    if (isset($_POST['1_2_9_d'] ))    { $a1_2_9_d =       $_POST['1_2_9_d'];}       else {$a1_2_9_d = 0; }
    if (isset($_POST['1_2_9_e'])) {     $a1_2_9_e =       $_POST['1_2_9_e'];}       else {$a1_2_9_e = 0; }
    if (isset($_POST['1_2_9_f'] )) {    $a1_2_9_f =       $_POST['1_2_9_f'];}       else {$a1_2_9_f = 0; }
    if (isset($_POST['1_2_9_g'] )) {    $a1_2_9_g =       $_POST['1_2_9_g'];}       else {$a1_2_9_g = 0; }  
    if (isset($_POST['1_2_9_g_oth'] )) { $a1_2_9_g_oth =    $_POST['1_2_9_g_oth'];}    else {$a1_2_9_g_oth = NULL; }
    
    if (isset($_POST['1_2_10_a']))    {  $a1_2_10_a =       $_POST['1_2_10_a'];}       else {$a1_2_10_a = 0; }
    if (isset($_POST['1_2_10_b'] ))    { $a1_2_10_b =       $_POST['1_2_10_b'];}       else {$a1_2_10_b = 0; }
    if (isset($_POST['1_2_10_c'] ))    { $a1_2_10_c =       $_POST['1_2_10_c'];}       else {$a1_2_10_c = 0; }
    if (isset($_POST['1_2_10_d'] ))    { $a1_2_10_d =       $_POST['1_2_10_d'];}       else {$a1_2_10_d = 0; }
    if (isset($_POST['1_2_10_e'])) {     $a1_2_10_e =       $_POST['1_2_10_e'];}       else {$a1_2_10_e = 0; }
    if (isset($_POST['1_2_10_f'] )) {    $a1_2_10_f =       $_POST['1_2_10_f'];}       else {$a1_2_10_f = 0; }
    if (isset($_POST['1_2_10_g'] )) {    $a1_2_10_g =       $_POST['1_2_10_g'];}       else {$a1_2_10_g = 0; }
    if (isset($_POST['1_2_10_h'] )) {    $a1_2_10_h =       $_POST['1_2_10_h'];}       else {$a1_2_10_h = 0; }
					
    if (isset($_POST['1_2_10_i']))    {  $a1_2_10_i =       $_POST['1_2_10_i'];}       else {$a1_2_10_i = 0; }
    if (isset($_POST['1_2_10_j'] ))    { $a1_2_10_j =       $_POST['1_2_10_j'];}       else {$a1_2_10_j = 0; }
    if (isset($_POST['1_2_10_k'] ))    { $a1_2_10_k =       $_POST['1_2_10_k'];}       else {$a1_2_10_k = 0; }
    if (isset($_POST['1_2_10_l'] ))    { $a1_2_10_l =       $_POST['1_2_10_l'];}       else {$a1_2_10_l = 0; }
    if (isset($_POST['1_2_10_m'])) {     $a1_2_10_m =       $_POST['1_2_10_m'];}       else {$a1_2_10_m = 0; }
    if (isset($_POST['1_2_10_n'] )) {    $a1_2_10_n =       $_POST['1_2_10_n'];}       else {$a1_2_10_n = 0; }
    if (isset($_POST['1_2_10_o'] )) {    $a1_2_10_o =       $_POST['1_2_10_o'];}       else {$a1_2_10_o = 0; }
    if (isset($_POST['1_2_10_p'] )) {    $a1_2_10_p =       $_POST['1_2_10_p'];}       else {$a1_2_10_p = 0; }
    if (isset($_POST['1_2_10_q'] ))    { $a1_2_10_q =       $_POST['1_2_10_q'];}       else {$a1_2_10_q = 0; }
    if (isset($_POST['1_2_10_r'])) {     $a1_2_10_r =       $_POST['1_2_10_r'];}       else {$a1_2_10_r = 0; }
    if (isset($_POST['1_2_10_s'] )) {    $a1_2_10_s =       $_POST['1_2_10_s'];}       else {$a1_2_10_s = 0; }
    if (isset($_POST['1_2_10_t'] )) {    $a1_2_10_t =       $_POST['1_2_10_t'];}       else {$a1_2_10_t = 0; }
    if (isset($_POST['1_2_10_u'] )) {    $a1_2_10_u =       $_POST['1_2_10_u'];}       else {$a1_2_10_u = 0; }
    if (isset($_POST['1_2_10_u_oth'] )) { $a1_2_10_u_oth =    $_POST['1_2_10_u_oth'];}    else {$a1_2_10_u_oth = NULL; }
    
        
    
    $sqlupdatesq = "UPDATE tblsurvey_question SET 1_2_1_a='$a1_2_1_a', 1_2_1_b='$a1_2_1_b', 1_2_1_c='$a1_2_1_c', 
    1_2_1_d='$a1_2_1_d', 1_2_1_e='$a1_2_1_e',  1_2_1_e_oth='$a1_2_1_e_oth',  1_2_2_a='$a1_2_2_a', 1_2_2_b='$a1_2_2_b', 
    1_2_2_c='$a1_2_2_c', 1_2_2_d='$a1_2_2_d', 1_2_2_d_oth='$a1_2_2_d_oth',  1_2_3_a='$a1_2_3_a', 1_2_3_b='$a1_2_3_b',
     1_2_3_c='$a1_2_3_c', 1_2_3_d='$a1_2_3_d',  1_2_3_d_oth='$a1_2_3_d_oth',  1_2_4_a='$a1_2_4_a', 1_2_4_b='$a1_2_4_b', 
     1_2_4_c='$a1_2_4_c', 1_2_4_d='$a1_2_4_d', 1_2_4_e='$a1_2_4_e', 1_2_4_f='$a1_2_4_f', 1_2_4_g='$a1_2_4_g', 
     1_2_4_h='$a1_2_4_h', 1_2_4_h_oth='$a1_2_4_h_oth',  1_2_5_a='$a1_2_5_a', 1_2_5_b='$a1_2_5_b', 1_2_5_c='$a1_2_5_c',
      1_2_5_d='$a1_2_5_d', 1_2_5_d_oth='$a1_2_5_d_oth',  1_2_6_a='$a1_2_6_a', 1_2_6_b='$a1_2_6_b', 1_2_6_c='$a1_2_6_c', 
      1_2_6_d='$a1_2_6_d', 1_2_6_e='$a1_2_6_e', 1_2_6_f='$a1_2_6_f', 1_2_6_f_oth='$a1_2_6_f_oth',  1_2_7_a='$a1_2_7_a', 
      1_2_7_b='$a1_2_7_b', 1_2_7_c='$a1_2_7_c', 1_2_7_d='$a1_2_7_d', 1_2_7_e='$a1_2_7_e', 
    1_2_8_a='$a1_2_8_a', 1_2_8_b='$a1_2_8_b', 1_2_8_c='$a1_2_8_c', 1_2_8_d='$a1_2_8_d',1_2_9_a='$a1_2_9_a', 
    1_2_9_b='$a1_2_9_b', 1_2_9_c='$a1_2_9_c', 1_2_9_d='$a1_2_9_d', 1_2_9_e='$a1_2_9_e', 1_2_9_f='$a1_2_9_f', 
      1_2_9_g='$a1_2_9_g', 1_2_9_g_oth='$a1_2_9_g_oth',  1_2_10_a='$a1_2_10_a', 1_2_10_b='$a1_2_10_b', 1_2_10_c='$a1_2_10_c',
    1_2_10_d='$a1_2_10_d', 1_2_10_e='$a1_2_10_e', 1_2_10_f='$a1_2_10_f', 1_2_10_g='$a1_2_10_g', 1_2_10_h='$a1_2_10_h',  1_2_10_j='$a1_2_10_j', 
    1_2_10_i='$a1_2_10_i', 1_2_10_k='$a1_2_10_k', 1_2_10_l='$a1_2_10_l', 1_2_10_m='$a1_2_10_m', 1_2_10_n='$a1_2_10_n', 
    1_2_10_o='$a1_2_10_o', 1_2_10_p='$a1_2_10_p', 1_2_10_q='$a1_2_10_q', 1_2_10_r='$a1_2_10_r', 1_2_10_s='$a1_2_10_s', 
    1_2_10_t='$a1_2_10_t', 1_2_10_u='$a1_2_10_u', 1_2_10_u_oth='$a1_2_10_u_oth'  where household_id= '$household_id' ";
        $resultupdatecustomer = mysqli_query($con, $sqlupdatesq) or die("error in update customer part:" . mysqli_error($con));

        if ($resultupdatecustomer == 1) 
        {
           
            echo '<script> alert("your data added successfully");window.location.href="index1.php?pg=survey2.php";</script>';
           
            // $_SESSION['id'] = $id;
           
        }
    }

?>
<div class="content">
    <div class="container-fluid">
    <?php include('survey1_2_content.php'); ?>
    </div>
</div>
</div>