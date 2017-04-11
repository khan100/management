<?php
$connect=mysqli_connect('localhost','root','','mydb');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
} 

?>
