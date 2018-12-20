<?php
session_start();
// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 
 
setcookie("USER","",time() - 60*60);
 
header("Location: login.php");