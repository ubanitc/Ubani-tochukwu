thank you for your payment

<?php 
session_start ();
$ham = intval($_SESSION['donate']);
$tam = 50;
$pam = $ham / $tam;
$_SESSION['noofvotes'] =$pam;
echo $_SESSION['ricecount'];

?>