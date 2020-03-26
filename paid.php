thank you for your payment

<?php 
session_start ();
$_SESSION['donate'] = $ram;
$sam = 50;
$pam = $ram / $sam;
echo $pam;
?>