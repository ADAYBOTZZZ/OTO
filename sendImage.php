<?php
include("./library/whatsva.php");

$whatsva = new Whatsva();

$instance_key = "IiCVefn6gJG0";
$jid = "62895361034833";
$caption = "hai";
$imageUrl = "https://ika-broadcast.com/assets/purple/assets/images/faces/face1.jpg";


$sendMessage = $whatsva->sendImageUrl($instance_key,$jid,$imageUrl,$caption);

print_r($sendMessage);