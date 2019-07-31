<?php
$server="localhost";
$konek="root"; 
$password=""; 
$db="loundry";
 
$konek = mysql_connect($server,$konek,$password) or die (mysql_error());
$database = mysql_select_db($db);
date_default_timezone_set("Asia/Jakarta");
 ?>