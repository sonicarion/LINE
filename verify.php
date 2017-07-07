<?php
$access_token = 'n1KiuALeq1h4AR4EoaEI3Ifu/CYEN39Px/MZP2d9D5ejgrlN+XNYUeWXPFvJiJBjuT/mpUkoTrQJ8xJaw0SmtOCJj0FDmolv1Eotw8yZlCLivmstS+uBSRXNTw/WtjS74ea/taGLfeUKNsWfkw596gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
