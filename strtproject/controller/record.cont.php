<?php
    include $_SERVER['DOCUMENT_ROOT'] . '/strtproject/model/user.mod.php';

    class Record extends User{

      public function addUserData($userFirstName, $userLastName, $userMiddleName, $userAge, $userAddress, $userPhonenumber, $userEmail, $userNationality){
        $this->setUserData($userFirstName, $userLastName, $userMiddleName, $userAge, $userAddress, $userPhonenumber, $userEmail, $userNationality);
      }
    }
?>
