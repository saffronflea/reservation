<?php 
include('connect.php');
session_start();

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $select = "DELETE FROM `user` WHERE `user_id`='$user_id'";
    $result = mysqli_query($connection, $select);

    if ($result == TRUE) {
        echo  '<script type="text/javascript">
        alert("Record deleted successfully.");
            window.location.href="admin_user.php";
        </script>';
    }else{
        echo "Error:" . $select . "<br>" . $connection->error;
    }
}

?>