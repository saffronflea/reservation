<?php
include('header.php');

$emailAddress = isset($_GET['email_address']) ? htmlspecialchars($_GET['email_address']) : '';

// Example of setting up a result (dummy example, adjust as needed)
$result = true; // Set to false to test error handling

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
} else {
    echo("working");
}
?>

<div class="container m-24" style="margin-top: 4rem;">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <form class="form" action="process_form.php" method="post">
                <?php
                if (isset($error)) {
                    foreach ($error as $err) {
                        echo '<div class="alert alert-danger">' . htmlspecialchars($err) . '</div>';
                    }
                }
                ?>
                <div class="flex-column">
                    <h2 class="lg:text-center text-left lg:mt-[-25px] font-semibold text-[#114232]">Email:</h2>
                    <div class="lg:flex grid lg:ml-[-53px]">
                        <input type="email" placeholder="<?php echo $emailAddress; ?>" value="<?php echo $emailAddress; ?>" class="placeholder-[#114232] p-2 rounded p-3 bg-transparent border-[#114232] border-2" name="email_address" required>
                        &nbsp;&nbsp;
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

    <div class="flex-column">
      <label>Password:</label></div>
      <div class="inputForm">
	  <i class="fa-solid fa-lock" style="color:black"></i>
        <input type="password"  name="user_password" class="input" placeholder="Enter your Password" required>
		<i class="fa-solid fa-eye" style="color:black"></i>
	    </div>
    
    <button class="button-submit" name="submit">Log In</button>
    <p class="p">Don't have an account? <a href="signup.php" style="text-decoration:none;"><span class="span">Sign Up</span></a>
</form>
</div>
</div>
</div>
<?php include('footer.php'); ?>

