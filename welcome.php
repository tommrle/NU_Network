<?php

$file=fopen("welcome.txt","a+");
fputs($file,"\n");
fputs($file,$_POST["event_name"]."\n" );
fputs($file,$_POST["event_description"]."\n");
fputs($file,$_POST["contact_number"]."\n");

fclose($file);

?>

<head>
<script>

  window.location.assign("index.php")
</script>
</head>