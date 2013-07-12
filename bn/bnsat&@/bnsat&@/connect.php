<?php
$dbhost							= "localhost";
$dbuser							= "bnsatucr_babu";
$dbpass							= "babulal2012";
$dbname							= "bnsatucr_details1";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>