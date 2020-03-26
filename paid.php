thank you for your payment

<?php 
session_start ();
$_SESSION['donate'] = $ram;
$jam = (int)$ram;
$sam = 50;
$pam = $jam / $sam;
echo $pam;
?>