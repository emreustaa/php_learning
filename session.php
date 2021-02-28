<?php

session_start();

//$_SESSION['kullanici_adi'] = 'emre';
//$_SESSION['parola'] = 'emre';


unset($_SESSION['parola']);
print_r($_SESSION);
//echo $_SESSION['kullanici_adi'];

//session_destroy();
?>

