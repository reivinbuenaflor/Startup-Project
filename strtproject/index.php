<?php
    require_once 'config/adddata.cfg.php';
    require_once 'view/viewrecord.vw.php';
    $test = new ViewRecord();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
    <title></title>
  </head>
  <body>
    <div class="header">
      <h1>Header</h1>
    </div>
    <div class="container container-body">
      <div class="card">
        <div class="card-body">
          <div class="scroll">
            <button type="button" class="btn btn-primary btn-style" data-toggle="modal" data-target="#addDataModal" >Add Data</button>
            <table class="table table-hover table-sm text-center" align="center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">First Name</th>
                  <th scope="col">Middle Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Age</th>
                  <th scope="col">Address</th>
                  <th scope="col">Phone Number</th>
                  <th scope="col">Email</th>
                  <th scope="col">Nationality</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <?php $test->showUsers();?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="addDataModal" aria-labelledby="modaltitle" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modaltitle">Add Data</h5>
          </div>
          <form action="index.php" method="post">
            <div class="modal-body">
              <div class="form-group">
                <label for="userFirstName">First Name</label>
                <input type="text" class="form-control" id="userFirstName" name="firstName">
              </div>
              <div class="form-group">
                <label for="userMiddleName">Middle Name</label>
                <input type="text" class="form-control" id="userMiddleName" name="middleName">
              </div>
              <div class="form-group">
                <label for="userLastName">Last Name</label>
                <input type="text" class="form-control" id="userLastName" name="lastName">
              </div>
              <div class="form-group">
                <label for="userAge">Age</label>
                <input type="number" class="form-control" id="Age" name="age">
              </div>
              <div class="form-group">
                <label for="userAddress">Address</label>
                <input type="text" class="form-control" id="userAddress" name="address">
              </div>
              <div class="form-group">
                <label for="userPhoneNumber">Phone Number</label>
                <input type="number" class="form-control" id="userPhoneNumber" name="phoneNumber">
              </div>
              <div class="form-group">
                <label for="userEmail">Email</label>
                <input type="email" class="form-control" id="userEmail" name="email">
              </div>
              <div class="form-group">
                <label for="userNationality">Nationality</label>
                <input type="text" class="form-control" id="userNationality" name="nationality">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="footer">
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
