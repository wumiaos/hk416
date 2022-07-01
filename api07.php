<?php
$img=file('HK416.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>