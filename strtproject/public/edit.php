<?php require_once '../router/showeditable.rt.php';
	  require_once '../router/update.rt.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css">
	<title></title>
</head>
<body>
	<div class="header">
      <h1>Header</h1>
    </div>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Edit Data
			</div>
			<div class="card-body">
				<form action='edit.php' method="post">
					<input type="hidden" name="id" value='<?php echo $id?>'>
				  <div class="form-group">
	                <label for="userFirstName">First Name</label>
	                <input type="text" class="form-control" id="userFirstName" name="firstName" value='<?php echo $fname;?>'>
	              </div>
	              <div class="form-group">
	                <label for="userMiddleName">Middle Name</label>
	                <input type="text" class="form-control" id="userMiddleName" name="middleName" value='<?php echo $mname;?>'>
	              </div>
	              <div class="form-group">
	                <label for="userLastName">Last Name</label>
	                <input type="text" class="form-control" id="userLastName" name="lastName" value='<?php echo $lname;?>'>
	              </div>
	              <div class="form-group">
	                <label for="userAge">Age</label>
	                <input type="number" class="form-control" id="Age" name="age" value='<?php echo $age;?>'>
	              </div>
	              <div class="form-group">
	                <label for="userAddress">Address</label>
	                <input type="text" class="form-control" id="userAddress" name="address" value='<?php echo $add;?>'>
	              </div>
	              <div class="form-group">
	                <label for="userPhoneNumber">Phone Number</label>
	                <input type="number" class="form-control" id="userPhoneNumber" name="phoneNumber" value='<?php echo $num;?>'>
	              </div>
	              <div class="form-group">
	                <label for="userEmail">Email</label>
	                <input type="email" class="form-control" id="userEmail" name="email" value='<?php echo $email;?>'>
	              </div>
	              <div class="form-group">
	                <label for="userNationality">Nationality</label>
	                <input type="text" class="form-control" id="userNationality" name="nationality" value='<?php echo $nat;?>'>
	              </div>
	              <button type="submit" class="btn btn-primary" name="update">Update</button>
	              <a href="../index.php" class="btn btn-danger"> Close </a>
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>