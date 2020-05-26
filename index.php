<?php include('server.php') ?>

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?> 
  
<!DOCTYPE html>
<html>
<head>
	<title>Customer Management</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- notification message -->
<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
 	<!-- logged in user information -->
     <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	

    <?php endif ?>

<div class="header">
	<h2>Customer Management</h2>
</div>
<div>
  
    <form method="post" action="index.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="firstname" value="<?php echo $firstname;?>">
  	</div>
  	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lastname" value="<?php echo $lastname;?>">
  	</div>
  	<div class="input-group">
  	  <label>Position</label>
  	  <input type="text" name="position" value="<?php echo $position?>">
  	</div>
      <div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email?>">
  	</div>
  	<div class="input-group">
  	  <label>Department</label>
  	  <input type="department" name="department" value="<?php echo $department?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="save">Create Record</button>
        <button type="submit" class="btn" name="display">Display Records</button>
        <?php
        if (isset($_POST['display'])){
            header('location: display.php');
        }
        ?>
        

        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
  	</div>
  </form>
</div>

		
</body>
</html>