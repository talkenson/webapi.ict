<?php 
if($_SERVER['REMOTE_ADDR']=='127.0.0.1'){
	
  $dbcon = mysql_connect("localhost", "admin", "admin");
mysql_select_db("ict_platform", $dbcon); 

}else{
	
  $dbcon = mysql_connect("sql203.unaux.com", "unaux_22292129", "nk00f6s6zwb");
mysql_select_db("unaux_22292129_ict", $dbcon); 

}
	$_SERVER['dbconnect']=$dbcon;

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET SESSION collation_connection = 'utf8_general_ci'");

?>

