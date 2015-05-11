<?php
$url=$_REQUEST['url'];
if($fp=fopen($url,"r")) while($str=fread($fp,1024)) echo $str;
?>