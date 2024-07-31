<?php include('header.php'); ?>
<div class="grid container mt-4 m-8 p-8 rounded bg-[#B4E380]">
    <h2 class="text-[30px] font-semibold text-[#114232]">User List</h2>
    <br>
    <table class="flex flex-col bg-transparent border-[#114232 text-[#114232] rounded">
                <thead class="lg:flex flex-col rounded bg-[#114232] text-[#F7F6BB]">
                    <tr>
                        <th class='py-2 px-4 border-b'>Last Name</th>
                        <th class='py-2 px-4 border-b'>First Name</th>
                        <th class='py-2 px-4 border-b'>Email Address</th>
                        <th class='py-2 px-4 border-b'>Number of Guests</th>
                        <th class='py-2 px-4 border-b'>Date</th>
                        <th class='py-2 px-4 border-b'>Hours and Minutes</th>
                        <th class='py-2 px-4 border-b'>Month</th>
                        <th class='py-2 px-4 border-b'>AM/PM</th>
                        <th class='py-2 px-4 border-b'>Vehicle</th>
                        <th class='py-2 px-4 border-b'>Number of Vehicles</th>
                        <th class='py-2 px-4 border-b'>Request</th>
                        <th class='py-2 px-4 border-b'>Payment</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            $select = "SELECT * FROM reserve";
            $result = mysqli_query($conn, $select);

            if (!$result){
                die("failed".mysqli_connect_errno());
            }
            else {
            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                    <td class='py-2 px-4 border-b'>{$row['Last Name']}</td>
                    <td class='py-2 px-4 border-b'>{$row['First Name']}</td>
                    <td class='py-2 px-4 border-b'>{$row['Email Address']}</td>
                    <td class='py-2 px-4 border-b'>{$row['Number of Guests']}</td>
                    <td class='py-2 px-4 border-b'>{$row['DATE']}</td>
                    <td class='py-2 px-4 border-b'>{$row['HOURS AND MINUTES']}</td>
                    <td class='py-2 px-4 border-b'>{$row['MONTH']}</td>
                    <td class='py-2 px-4 border-b'>{$row['AM_PM_2']}</td>
                    <td class='py-2 px-4 border-b'>{$row['Vehicle']}</td>
                    <td class='py-2 px-4 border-b'>{$row['Number of Vehicles']}</td>
                    <td class='py-2 px-4 border-b'>{$row['REQUEST']}</td>
                    <td class='py-2 px-4 border-b'>{$row['PAYMENT']}</td>
                  </tr>
                    <td>
                        <a class='rounded bg-[#114232] rounded p-3 text-[#F7F6BB]' href='./update.php?user_id=$row[user_id]'>Edit</a>
                        <a class='rounded bg-[#114232] rounded p-3 text-[#F7F6BB]' href='./delete.php?user_id=$row[user_id]'>Delete</a>
                    </td>
                </tr>
                ";
            };
        };
            ?>
            
        </tbody>
    </table>
    <div>
        <br>
        <br>
    <a href="signup.php" class="rounded p-3 bg-[#114232] text-[#F7F6BB]">Add Account</a>
    </div>
</div>
<?php include('footer.php'); ?>