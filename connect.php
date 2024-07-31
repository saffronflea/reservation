<?php

    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "cpstn_dtbs");

$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$conn) {
    echo "failed to connect to MySql Server" .
    mysqli_connect_errno();
} else {
    
}