<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/strtproject/database/dbh.db.php';

    class User extends Connect{

      protected function getUserData(){
        $sql = "SELECT * FROM userrecord";
        $stmt = $this->connect()->query($sql);
        
        return $stmt;
      }

      protected function setUserData($userFirstName, $userLastName, $userMiddleName, $userAge, $userAddress, $userPhonenumber, $userEmail, $userNationality){
        $sql = "INSERT INTO userrecord(user_firstname,user_lastname,user_middlename,user_age,user_address,user_phonenumber,user_email,user_nationality) VALUES(?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userFirstName,$userLastName, $userMiddleName, $userAge, $userAddress, $userPhonenumber, $userEmail, $userNationality]);
      }
    }
 ?>
