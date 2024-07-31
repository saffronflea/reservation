<?php
include('connect.php');
include('header.php'); 
session_start();

$user_id = $_REQUEST["user_id"];
$select = "SELECT * FROM user WHERE user_id = '" . $user_id . "' ";
$result = mysqli_query($connection, $select);
$row = mysqli_fetch_assoc($result);

$msg = ""; // Initialize the message variable
$redirectToUser = false;

if (isset($_POST['new']) && $_POST['new'] == 1) {
    $user_firstname = $_REQUEST["firstname"];
    $user_lastname = $_REQUEST["lastname"];
    $user_email = $_REQUEST["email"];
    $user_password = md5($_REQUEST["password"]);

    
    $update = "UPDATE `user` SET `user_firstname`='$user_firstname',`user_lastname`='$user_lastname',`user_email`='$user_email',`user_password`='$user_password' WHERE user_id ='" . $user_id . "'";
    mysqli_query($connection, $update);

    $msg = "Record updated successfully"; // Set the message for successful update
    $redirectToUser = true;
}
?>
<div class="container" style="margin-top: 0.9rem;">
    <div class="row justify-content-center">
    <div class="col-lg-5">
            <form class="form" action="" method="post">
                <img class="logo" src="./img/logo.png" alt="" style="width:40%">
                <h3 class="h-title">Online Enrollment System</h3>
                <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                <input type="hidden" name="new" value="1">

                <div class="flex-column">
                    <label>Firstname:</label>
                </div>
                <div class="inputForm">
                    <i class="fa-solid fa-user" style="color:black;"></i>
                    <input type="text" class="input" name="firstname" value="<?php echo $row['user_firstname']; ?>" required>
                </div>

                <div class="flex-column">
                    <label>Lastname:</label>
                </div>
                <div class="inputForm">
                    <i class="fa-solid fa-user" style="color:black;"></i>
                    <input type="text" class="input" name="lastname" value="<?php echo $row['user_lastname']; ?>" required>
                </div>

                <div class="flex-column">
                    <label>Email:</label>
                </div>
                <div class="inputForm">
                    <i class="fa-solid fa-envelope" style="color:black"></i>
                    <input type="email" class="input" name="email" value="<?php echo $row['user_email']; ?>" required>
                </div>

                <div class="flex-column">
                    <label>Password: </label>
                </div>
                <div class="inputForm">
                    <i class="fa-solid fa-lock" style="color:black;"></i>
                    <input type="password" class="input" name="password" placeholder="Enter your Password" required>
                </div>

                <div class="flex-column">
                    <label> Confirm Password:</label>
                </div>
                <div class="inputForm">
                    <i class="fa-solid fa-lock" style="color:black;"></i>
                    <input type="password" class="input" name="cpassword" placeholder="Confirm your Password" required>
                </div>

                <button class="button-submit" name="submit">Update Record</button>
                <a href="admin_user.php" class="btn btn-secondary">Back</a>
            </form>
            <?php
        // Display the success message as a JavaScript alert and redirect after a delay
        if (!empty($msg)) {
            echo "<script>alert('$msg');</script>";
            if ($redirectToUser) {
                echo "<script>setTimeout(function(){window.location.href='admin_user.php';}, 500);</script>";
            }
        }
        ?>
        </div>
    </div>
<?php include('footer.php'); ?>