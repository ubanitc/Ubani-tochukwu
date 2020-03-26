thank you for your payment

<?php 
session_start ();
echo $_SESSION['donate'];
$ham = intval($_SESSION['donate']);
$tam = 50;
$pam = $ham / $tam;
echo $pam;

?>