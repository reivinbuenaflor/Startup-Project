<?php 
require_once '../controller/record.cont.php';

if(isset($_GET['delete']))
{
	$id = $_GET['delete'];

	$delete = new Record();

	$delete->delete($id);

	header("location: ../index.php");
}
?>