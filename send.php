<?php
    mail('sayora.ventures@gmail.com','From Foxolabs', 'Name : '.$_POST['name']."\n Email : ".$_POST['email']."\n Number : ".$_POST['mobile_number']."\n Company : ".$_POST['company']."\n Idea : ".$_POST['idea']);
?>
<p>Mail has sent, close this window</p>