<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/strtproject/database/dbh.db.php';

    class User extends Connect{

      protected function getUserData()
      {
        $sql = "SELECT * FROM userrecord";
        $stmt = $this->connect()->query($sql);
        
        return $stmt;
      }

      protected function setUserData($userFirstName, $userLastName, $userMiddleName, $userAge, $userAddress, $userPhonenumber, $userEmail, $userNationality)
      {
        $sql = "INSERT INTO userrecord(user_firstname,user_lastname,user_middlename,user_age,user_address,user_phonenumber,user_email,user_nationality) VALUES(?,?,?,?,?,?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userFirstName,$userLastName, $userMiddleName, $userAge, $userAddress, $userPhonenumber, $userEmail, $userNationality]);
      }

      protected function updateUserData($userFirstName, $userLastName, $userMiddleName, $userAge, $userAddress, $userPhonenumber, $userEmail, $userNationality, $id)
      {
        $sql = "UPDATE userrecord SET user_firstname = ? , user_lastname = ?, user_middlename = ? , user_age = ?, user_address = ?, user_phonenumber = ?, user_email = ?, user_nationality = ? WHERE id = '$id'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userFirstName, $userLastName, $userMiddleName, $userAge, $userAddress, $userPhonenumber, $userEmail, $userNationality]);
      }

      protected function showData($id)
      {
        $sql = "SELECT * FROM userrecord WHERE id = '$id'";
        $stmt = $this->connect()->query($sql);
        
        return $stmt;
      }

      protected function deleteData($id)
      {
        $sql = "DELETE FROM userrecord WHERE id = '$id'";

        $stmt = $this->connect()->exec($sql);
      }
    }
 ?>
