<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/strtproject/model/user.mod.php';

    class ViewRecord extends User{

      public function showUsers(){
        $result = $this->getUserData();

        while ($rows=$result->fetch()) {
          echo "<tbody>";
            echo "<tr>";
              echo "<td>".$rows['user_firstname']."</td>";
              echo "<td>".$rows['user_middlename']."</td>";
              echo "<td>".$rows['user_lastname']."</td>";
              echo "<td>".$rows['user_age']."</td>";
              echo "<td>".$rows['user_address']."</td>";
              echo "<td>".$rows['user_phonenumber']."</td>";
              echo "<td>".$rows['user_email']."</td>";
              echo "<td>".$rows['user_nationality']."</td>";
              echo "<td> <a href='index.php?action=' class='btn btn-info'>Action</a>";
            echo "</tr>";
          echo "</tbody>";
        }
      }
    }
 ?>
