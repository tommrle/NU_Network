<?php

$fullname = addslashes($_POST['fullname']);
$bid = addslashes($_POST['bid']);
$classname = addslashes($_POST['class']);
$contact = addslashes($_POST['contact']);



echo '<script language="javascript">';
echo 'alert("Improper form input! Price must be an integer!")';
echo '</script>';
header( 'Location: http://liuzy.net/jquerysite.php#sellpage');

if (empty($fullname))
{
	echo "empty";
}



if(!empty($fullname) && !empty($bid))
{
	$MYSQL_server_name = "mysql21.freehostia.com";
	$MYSQL_server_username = "zhaliu0_market";
	$MYSQL_server_password = "0077049";
	$DB_name = "zhaliu0_market";

	$server = @mysqli_connect($MYSQL_server_name, $MYSQL_server_username, $MYSQL_server_password, $DB_name );

	if (!$server) {
	echo "Could not get server";
	exit();
	}

	mysqli_select_db($server,"zhaliu0_market");
		
	$query="INSERT INTO books (classname,seller,sellprice,contact) VALUES('$classname','$fullname',$bid,'$contact')";
	if(!mysqli_query($server,$query)){ 
		echo "<script type='text/javascript/>alert('Unsuccessfully entered')</script>";
		header( 'Location: http://liuzy.net/jquerysite.php#failed' );
	}
	else {
		echo "query success:  $query";
		header( 'Location: http://liuzy.net/jquerysite.php#confirmed' );
	}
}
   

?>
