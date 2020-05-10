<?php

include 'config.php';
$connection = MySQLi_connect("$host","$username","$password") or die("Server Error");
MySQLi_select_db($connection, "$database") or die("Database error");

if(isset($_POST['submit']))
{ 
	if (isset($_POST['Name'])) {
    $Name = $_POST['Name'];
	}
	if (isset($_POST['SysIP'])) {
    $SysIP = $_POST['SysIP'];
	}
}
$query =  "INSERT INTO add_person(`Name`, `SysIP`) VALUES ('$Name','$SysIP')";
$result = MySQLi_query($connection, $query);
if(!$result)
{
	die ('Error:'.MySQLi_error($connection));
}
echo "INSERTION DONE";
MySQLi_close($connection); 

?>
<html>
<div id="popup1" class="overlay">
  <div class="popup">
    <h2>Adding Person / System</h2>
    <a class="close" href="#">&times;</a>
    <div class="content">
      PERSON / SYSTEM HAS BEEN INSERTED
    </div>
  </div>
</div>