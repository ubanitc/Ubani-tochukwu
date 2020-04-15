




<?php
$to = "08104203308";
$subject = "LCD";
$txt = "Your Verification Code is 83935";
$headers = "From: https://app.multitexter.com/v2/app/sendsms". "\r\n";

// More headers
$headers .= 'From: Authorization : Bearer {4vQMOzmFqiKGa7NFbqNRlzuLJ0PAYgYqQ0eCiUq4Uz9ZAtcSdW1xX65YiQBO}' . "\r\n";
$headers .= 'Accept :application/json' . "\r\n";





$tochukwu = mail($to,$subject,$txt,$headers);


if ($tochukwu){
    echo "the email has been sent succesfully";
}else{
    echo "your email was not sent";
}




?> 


























