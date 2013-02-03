<?php

include("include/mytwit.inc.php");
$twitter = new myTwit();

$twitter->user = 'jeshake';
$twitter->postLimit = 1;
$twitter->myTwitHeader = false;
$twitter->initMyTwit();
echo $twitter->myTwitData;
?>
