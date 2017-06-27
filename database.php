<?php
// Connect to MySql
$con = mysqli_connect('localhost', 'root', '', 'ajaxPhpShoutbox');
if(mysqli_connect_errno()) {
  echo 'Failed to connect: ' . mysqli_connect_error();
}
?>
