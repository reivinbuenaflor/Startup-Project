<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/strtproject/controller/record.cont.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $addRecord = new Record();
    $addRecord->addUserData($_POST['firstName'],$_POST['lastName'],$_POST['middleName'],$_POST['age'],$_POST['address'],$_POST['phoneNumber'],$_POST['email'],$_POST['nationality']);
    header('location: index.php');
  }
?>
