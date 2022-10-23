<?php
function serchGenderByID($genderId){
    $grs = Database::search("SELECT * FROM  `gender` WHERE (`g_id` = '".$genderId."')");
    return $grs;

}

function serchGradeByID($gradeID){
    $grs = Database::search("SELECT * FROM  `grade` WHERE (`g_id` = '".$gradeID."')");
    return $grs;
}

function serchprovinceByID($provinceID){
    $grs = Database::search("SELECT * FROM  `province` WHERE (`p_id` = '".$provinceID."')");
    return $grs;
}
function serchDestrictByID($Destrict){
    $grs = Database::search("SELECT * FROM  `distric` WHERE (`d_id` = '".$Destrict."')");
    return $grs;
}

function CreateAccount($uname,$fname,$lname,$schoolName,$wNumber,$tNumber,$email1,$address,$password1,$gender,$province,$Destrict,$gradeID){
    $q = "INSERT INTO `student` (`email`,`u_name`,`f_name`,`l_name`,`password`,`address`,`whatsapp`,`telegram`,`distric_d_id`,`distric_province_p_id`,`grade_g_id`,`gender_g_id`)
    VALUES  ('".$email1."','".$uname."','".$fname."','".$lname."','".$password1."','".$address."','".$wNumber."','".$tNumber."','".$Destrict."','".$province."','".$gradeID."','".$gender."')";

    Database::iud($q);


}



?>