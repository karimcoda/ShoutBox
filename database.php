<?php
//Connect To MySQL...
$con = mysqli_connect("Localhost","root","","shoutit");
//Test Connection..
if (mysqli_connect_errno()) {
	echo 'Failed To Connect To MySQL :' .mysqli_connect_error();
}
?>