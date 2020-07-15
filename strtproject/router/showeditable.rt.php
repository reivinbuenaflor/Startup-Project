<?php
require_once '../view/viewrecord.vw.php';

$id = 0;
$fname = '';
$mname = '';
$lname = '';
$age = '';
$add = '';
$num = '';
$email = '';
$nat = '';

if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$print = new ViewRecord();

	$id = $print->getId($id);
	$fname = $print->getFname($id);
	$mname = $print->getMname($id);
	$lname = $print->getLname($id);
	$age = $print->getAge($id);
	$add = $print->getAddress($id);
	$num = $print->getNumber($id);
	$email = $print->getEmail($id);
	$nat = $print->getNationality($id);
}

?>