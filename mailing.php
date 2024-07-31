<?php

if (isset($_POST['submit'])) {
    $lastName = $_POST['last_name'];
    $firstName = $_POST['first_name'];
    $emailAddress = $_POST['email_address'];
    $numberOfGuests = $_POST['number_of_guests'];
    $date = $_POST['date'];
    $time = $_POST['time']; 
    $date2 = $_POST['date2'];
    $time2 = $_POST['time2'];
    $vehicle = $_POST['vehicle'];
    $numberOfVehicles = $_POST['vehicles'];
    $request = $_POST['request'];

    // Insert data into the database, excluding the 'payment' field
    $query = "INSERT INTO `reserve` 
    (`last_name`, `first_name`, `email_address`, `number_of_guests`, `date`, `time`, `date2`, `time2`, `vehicle`, `vehicles`, `request`)
    VALUES ('$lastName', '$firstName', '$emailAddress', '$numberOfGuests', '$date', '$time', '$date2', '$time2', '$vehicle', '$numberOfVehicles', '$request')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
        // Send an email
        $subject = "Reservation Confirmation";
        $message = "Dear $firstName $lastName,\n\nThank you for your reservation. Here are the details:\n\n" .
                   "Number of Guests: $numberOfGuests\n" .
                   "Arrival Date: $date\n" .
                   "Arrival Time: $time\n" .
                   "Departure Date: $date2\n" .
                   "Departure Time: $time2\n" .
                   "Special Request: $request\n\n" .
                   "We look forward to your visit!\n\nBest Regards,\nCristy Resort";
        $headers = "From: no-reply@cristyresort.com";

        if (mail($emailAddress, $subject, $message, $headers)) {
            echo "Email sent successfully to $emailAddress.";
        } else {
            echo "Failed to send email.";
        }

        header('Location: login_success.php');
    }
}
?>

