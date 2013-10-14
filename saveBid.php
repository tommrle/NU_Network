<?php

$fullname = mysql_real_escape_string($_POST['fullname']);
$bid = $_POST['bid'];
$classname = "Chem101"
if(!empty($fullname) && !empty($bid))
{
	$MYSQL_server_name = "mysql121.freehostia.com:3306";
	$MYSQL_server_username = "zhaliu0";
	$MYSQL_server_password = "0077049";
	$DB_name = "zhaliu0_market";

	$server + @mysql_connect($$MYSQL_server_name, $MYSQL_server_username, $MYSQL_server_password);

	if (!$server) {
	echo "Could not get server";
	exit();
	}

	$db = @mysql_select_db($DB_name);
	if (!$db) {
	echo "Could not get database";
	exit();
	}	
	$query="INSERT INTO books (classname,seller,sellprice) VALUES('$classname','$fullname',$bid);
	if(!@mysql_query($query))
	{ echo "<script type='text/javascript/>alert('Unsuccessfully entered')</script>"; }
}
?>
