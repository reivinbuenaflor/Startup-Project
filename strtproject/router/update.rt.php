<?php
require_once '../controller/record.cont.php';
if(isset($_POST['update']))
{
	$update = new Record();
	$update->update($_POST['firstName'],$_POST['lastName'],$_POST['middleName'],$_POST['age'],$_POST['address'],$_POST['phoneNumber'],$_POST['email'],$_POST['nationality'],$_POST['id']);

	header("location: ../index.php");
}
?>