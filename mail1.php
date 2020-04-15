




<?php
$to = "tochukwu.ubani@gmail.com";
$subject = "Bombing";
$txt = "Hope this works";
$headers = "From: support@missfinesse.com.ng";






$tochukwu = mail($to,$subject,$txt,$headers);


if ($tochukwu){
    echo "the email has been sent succesfully";
}else{
    echo "your email was not sent";
}




?> 


























