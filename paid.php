thank you for your payment

<?php 
session_start ();
$_SESSION['donate'] = $ram;
$ham = intval($ram);
$tam = 50;
$pam = $ham / $tam;
echo $pam;
echo $ram
?>