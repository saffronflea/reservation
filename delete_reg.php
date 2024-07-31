<?php
include('connect.php');
session_start();

if (isset($_GET['register_id'])) {
    $register_id= $_GET['register_id'];
    $select = "DELETE FROM `register` WHERE `register_id`='$register_id'";
    $result = mysqli_query($connection, $select);

    if ($result == TRUE) {
        echo  '<script type="text/javascript">
        alert("Record deleted successfully.");
            window.location.href="admin_register.php";
        </script>';
    }else{
        echo "Error:" . $select . "<br>" . $connection->error;
    }
}

?>