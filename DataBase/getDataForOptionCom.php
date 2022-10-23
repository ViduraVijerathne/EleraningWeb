<?php 
require('Database.php');

function getGenders(){
    $rs = Database::search('SELECT * FROM `gender`');

    return $rs;
}

function getGrade(){
    $rs = Database::search('SELECT * FROM `grade`');

    return $rs;
}

function getProvince(){
    $rs = Database::search('SELECT * FROM `province`');

    return $rs;
}

function getDistric(){
    $rs = Database::search('SELECT * FROM `distric`');

    return $rs;
}

?>