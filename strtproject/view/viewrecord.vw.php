<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/strtproject/model/user.mod.php';
    class ViewRecord extends User{

      public function showUsers()
      {
        $result = $this->getUserData();

        while ($rows=$result->fetch()) 
        {
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
              echo "<td><a href='public/edit.php?edit=". $rows['id'] ."'class='btn btn-primary btn-style'> Edit </a>
                    <a href='router/delete.php?delete=". $rows['id'] ."'class='btn btn-danger btn-style'> Delete </a>";
            echo "</tr>";
          echo "</tbody>";
        }
      }
      public function getID($id)
      {
        $result = $this->showData($id);

        while($row = $result->fetch())
        {
          return $row['id'];
        }
      }

      public function getFname($id)
      {
        $result = $this->showData($id);

        while($row = $result->fetch())
        {
          return $row['user_firstname'];
        }
      }

      public function getMname($id)
      {
        $result = $this->showData($id);

        while($row = $result->fetch())
        {
          return $row['user_middlename'];
        }
      }

      public function getLname($id)
      {
        $result = $this->showData($id);

        while($row = $result->fetch())
        {
          return $row['user_lastname'];
        }
      }

      public function getAge($id)
      {
        $result = $this->showData($id);

        while($row = $result->fetch())
        {
          return $row['user_age'];
        }
      }

      public function getAddress($id)
      {
        $result = $this->showData($id);

        while($row = $result->fetch())
        {
          return $row['user_address'];
        }
      }

      public function getNumber($id)
      {
        $result = $this->showData($id);

        while($row = $result->fetch())
        {
          return $row['user_phonenumber'];
        }
      }

      public function getEmail($id)
      {
        $result = $this->showData($id);

        while($row = $result->fetch())
        {
          return $row['user_email'];
        }
      }

      public function getNationality($id)
      {
        $result = $this->showData($id);

        while($row = $result->fetch())
        {
          return $row['user_nationality'];
        }
      }
    }
 ?>
