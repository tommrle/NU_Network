<?php
$q = intval($_GET['q']);

$MYSQL_server_name = "localhost";
    $MYSQL_server_username = "root";
    $MYSQL_server_password = "root";
    $DB_name = "persontest";
    
    $server = @mysql_connect($MYSQL_server_name, $MYSQL_server_username, $MYSQL_server_password);
    if (!$server) {
        echo "Could not get server";
        exit();
    }
    
    $db = @mysql_select_db($DB_name);
    if (!$db) {
        echo "Could not get database";
        exit();
    }

$sql="SELECT * FROM bid WHERE id = '".$q."'";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['Hometown'] . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
