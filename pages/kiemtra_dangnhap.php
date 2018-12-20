<?php
session_start();
// Lấy giá trị của session
function kiemtra_dangnhap(){
    if(isset($_SESSION["USER"])){
    $user_session =$_SESSION["USER"];
    }else{
        $user_session ="";
    }
    // Lấy giá trị của cookie
    if(isset($_COOKIE["USER"])){
        $user_cookie =$_COOKIE["USER"];
    }else{
        $user_cookie ="";
    }
 
    if($user_cookie!="" || $user_session!=""){
        return true;
    }else{
        return false;
    }
}