<?php
session_start();
$taikhoan = $_POST["USER"];
$matkhau = $_POST["PASS"];
$ghinho = isset($_POST["REMEMBER"])?$_POST["REMEMBER"]:"";
$loi= "";
 
if($taikhoan=="daiphong@gmail.com" && $matkhau=="123456"){
    if($ghinho!=""){
        setcookie("USER",$taikhoan,time() + 60*60);
    }else{
        $_SESSION["USER"] = $taikhoan;
    }
     
    header("Location: index.php");
}else{
    if($taikhoan !="" && $matkhau !==""){
        $loi = "1";
    }else{
        if($taikhoan==""){
            $loi = "2";
        }
         
        if($matkhau == ""){
            $loi .="-3";
        }
    }
    header("Location: login.php?loi=$loi");
}