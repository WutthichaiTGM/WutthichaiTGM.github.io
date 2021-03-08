<?php
    $ch = curl_init();
curl_setopt($ch,CURLOPT_URL,'https://www.pexels.com');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

$result = curl_exec($ch);
echo $result;

curl_close($ch)
?>
