<?php include('header.php'); ?>
    <div class="container" style="margin-top: 0.9rem;">
	<div class="row justify-content-center">
	<div class="col-lg-5">
    <form class="form" action="" method="post">
		<img class="logo" src="./img/logo.png" alt="" style="width:40%">
		<h3 class="h-title">Online Enrollment System</h3>
        <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
    <div class="flex-column">
    <label>User Type:</label>
    <select name="user_type" class="inputForm">
      <option value=""></option>
      <option value="user">User</option>
      <option value="admin">Admin</option>
    </select>
    </div>
    <div class="flex-column">
      <label>Firstname:</label></div>
      <div class="inputForm">
	  <i class="fa-solid fa-user" style="color:black;"></i>
        <input type="text" class="input" name="firstname" placeholder="Enter your Firstname" required>
      </div>    
    <div class="flex-column">
      <label>Lastname:</label></div>
      <div class="inputForm">
	  <i class="fa-solid fa-user" style="color:black;"></i>
        <input type="text" class="input" name="lastname" placeholder="Enter your Lastname" required>
      </div>

    <div class="flex-column">
      <label>Email:</label></div>
      <div class="inputForm">
      <i class="fa-solid fa-envelope" style="color:black"></i>
        <input type="email" class="input" name="user_email" placeholder="Enter your Email" required>
      </div>
    
    <div class="flex-column">
      <label>Password: </label></div>
      <div class="inputForm">
	  <i class="fa-solid fa-lock" style="color:black;"></i>
        <input type="password" class="input" name="password" placeholder="Enter your Password" required>
      </div>

      <div class="flex-column">
      <label> Confirm Password:</label></div>
      <div class="inputForm">
	  <i class="fa-solid fa-lock" style="color:black;"></i>
        <input type="password" class="input" name="cpassword" placeholder="Confirm your Password" required>
      </div>
    <button class="button-submit" name="submit">Sign Up</button>
    <p class="p">Already have an account? <a href="login.php" style="text-decoration:none;"><span class="span">Log In</span></a>
</form>
</div>
</div>
</div>
<?php include('footer.php'); ?>