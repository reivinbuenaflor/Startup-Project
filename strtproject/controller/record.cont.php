<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/strtproject/model/user.mod.php';

    class Record extends User{

      public function addUserData($userFirstName, $userLastName, $userMiddleName, $userAge, $userAddress, $userPhonenumber, $userEmail, $userNationality)
      {
        $this->setUserData($userFirstName, $userLastName, $userMiddleName, $userAge, $userAddress, $userPhonenumber, $userEmail, $userNationality);
      }

      public function update($userFirstName, $userLastName, $userMiddleName, $userAge, $userAddress, $userPhonenumber, $userEmail, $userNationality, $id)
      {
      	$this->updateUserData($userFirstName, $userLastName, $userMiddleName, $userAge, $userAddress, $userPhonenumber, $userEmail, $userNationality, $id);
      }

      public function delete($id)
      {
      	$this->deleteData($id);
      }
    }
?>
