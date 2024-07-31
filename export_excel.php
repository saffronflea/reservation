<?php
require("connect.php");

$select = "SELECT * FROM register";
$result = mysqli_query($connection, $select);

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="Enrolled_data.xls"');

echo "<table border='1'>";
echo "
    <tr>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Email Address</th>
        <th>Number of Guests</th>
        <th>Date</th>
        <th>Hours and Minutes</th>
        <th>Month</th>
        <th>AM/PM</th>
        <th>Vehicle</th>
        <th>Number of Vehicles</th>
        <th>Request</th>
        <th>Payment</th>
    </tr>
";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>{$row['Last Name']}</td>";
    echo "<td>{$row['First Name']}</td>";
    echo "<td>{$row['Email Address']}</td>";
    echo "<td>{$row['Number of Guests']}</td>";
    echo "<td>{$row['DATE']}</td>";
    echo "<td>{$row['HOURS AND MINUTES']}</td>";
    echo "<td>{$row['MONTH']}</td>";
    echo "<td>{$row['AM_PM_2']}</td>";
    echo "<td>{$row['Vehicle']}</td>";
    echo "<td>{$row['Number of Vehicles']}</td>";
    echo "<td>{$row['REQUEST']}</td>";
    echo "<td>{$row['PAYMENT']}</td>";
    echo "</tr>";
}

echo "</table>";
mysqli_close($connection);
?>
