
<?php 

require('../DataBase/getDataForOptionCom.php');
require('../DataBase/Queries.php');

$uname = $_POST['uname'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$schoolName = $_POST['schoolName'];
$wNumber = $_POST['wNumber'];
$tNumber = $_POST['tNumber'];
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$address = $_POST['address'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$gender = $_POST['gender'];
$grade = $_POST['grade'];
$province = $_POST['province'];
$Destrict = $_POST['Destrict'];

function mobileValidate($mobile){
    if (preg_match("/07[0,1,2,4,5,6,7,8][0-9]/", $mobile)) {
        return(true);
    }else{
        return(false);
    }
}

function EmailValidate($Email){
    if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        return(true);
    }else{
        return(false);
    }
}

function genderValidation($gender){ 

    $g = serchGenderByID($gender);
    $gn = $g->num_rows;

    if ($gn > 0){
        return true;
    }else{
        return false;
    }

    
}

function gradeValidation($grade){
    $g = serchGradeByID($grade);
    $gn = $g->num_rows;

    if ($gn > 0){
        return true;
    }else{
        return false;
    }

}

function provinceValidation($province){
    $g = serchprovinceByID($province);
    $gn = $g->num_rows;

    if ($gn > 0){
        return true;
    }else{
        return false;
    }
}

function DestrictValidation($Destrict){
    $g = serchDestrictByID($Destrict);
    $gn = $g->num_rows;

    if ($gn > 0){
        return true;
    }else{
        return false;
    }
}

if (!isset($uname)){
    echo("501"); // username is not set
}elseif (strlen($uname) < 5){
    echo("502"); //user name is too short
}elseif (strlen($uname) > 40){
    echo("503"); //user  name is too long
}

elseif (!isset($fname)){
    echo("601"); // first name is not set
}elseif (strlen($fname) < 5){
    echo("602"); //first name is too short
}elseif (strlen($fname) > 40){
    echo("603"); //first  name is too long
}

elseif (!isset($lname)){
    echo("701"); // last name is not set
}elseif (strlen($lname) < 5){
    echo("702"); //last name is too short
}elseif (strlen($lname) > 40){
    echo("703"); //last  name is too long
}

elseif (!isset($schoolName)){
    echo("801"); // school Name is not set
}elseif (strlen($schoolName) < 5){
    echo("802"); //school Name is too short
}elseif (strlen($schoolName) > 40){
    echo("803"); //school Name is too long
}

else if (empty($wNumber)) {
    echo ("901"); //wnumber not set
} else if (strlen($wNumber) != 10) {
    echo ("902"); //wnumber must have 10 char
} else if (!mobileValidate($wNumber)){
    echo("903"); //invalid wnumber
}

else if (empty($tNumber)) {
    echo ("1001"); //tNumber not set
} else if (strlen($tNumber) != 10) {
    echo ("1002"); //tNumber must have 10 char
} else if (!mobileValidate($tNumber)){
    echo("1003"); //invalid tNumber
}

else if (empty($email1)) {
    echo ("1101"); //email1 not set
} else if (strlen($email1) > 90) {
    echo ("1102"); //email1 length Error
} else if (!EmailValidate($email1)){
    echo("1103"); //email1 invalid
}elseif ($email1 != $email2){
    echo("1104"); //email1 and email2  must to be same
}

else if (empty($address)) {
    echo ("1201"); //address not set
}

else if (empty($password1)) {
    echo ("1301");
} else if (strlen($password1) < 5 || strlen($password1) > 20) {
    echo ("1302");
}elseif ($password1 != $password2){
    echo("1303"); 
}

elseif(empty($gender)){
    echo("1401");
}elseif ($gender == 0){
    echo("1402");
}elseif (!genderValidation($gender)){
    echo("1403");
}

elseif(empty($grade)){
    echo("1501");
}elseif ($grade == 0){
    echo("1502");
}elseif (!gradeValidation($grade)){
    echo("1503");
}

elseif(empty($province)){
    echo("1601");
}elseif ($province == 0){
    echo("1602");
}elseif (!provinceValidation($province)){
    echo("1603");
}

elseif(empty($Destrict)){
    echo("1701");
}elseif ($Destrict == 0){
    echo("1702");
}elseif (!DestrictValidation($Destrict)){
    echo("1703");
}else{
    CreateAccount($uname,$fname,$lname,$schoolName,$wNumber,$tNumber,$email1,$address,$password1,$gender,$province,$Destrict,$grade);
}


?>