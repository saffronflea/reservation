<?php include('header.php'); ?>
<div class="container mt-4">
    <h2>Enrolled List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>School Year</th>
                <th>Grade Level</th>
                <th>Check the Appropriate box</th>
                <th>LRN</th>
                <th>Lastname</th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Extension Name</th>
                <th>Date Of Birth</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Mother Tongue</th>
                <th>House No. and Street</th>
                <th>Barangay</th>
                <th>City/Municipality/Province/Country</th>
                <th>Zip Code</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Telephone No.</th>
                <th>Cellphone No.</th>
                <th>Last Grade Level Completed</th>
                <th>Last School Year Completed</th>
                <th>School Name</th>
                <th>School ID</th>
                <th>School Address</th>
                <th>Semester</th>
                <th>Track</th>
                <th>Strand</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $select = "SELECT * FROM reserve";
            $result = mysqli_query($conn, $select);
            while($row = $result->fetch_assoc()){
                echo "
                <tr>
                    <td>{$row['register_id']}</td>
                    <td>{$row['school_year']}</td>
                    <td>{$row['grade_level']}</td>
                    <td>{$row['appropriate_check']}</td>
                    <td>{$row['lrn']}</td>
                    <td>{$row['lastname']}</td>
                    <td>{$row['firstname']}</td>
                    <td>{$row['middlename']}</td>
                    <td>{$row['extension_name']}</td>
                    <td>{$row['birthdate']}</td>
                    <td>{$row['sex']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['mother_tongue']}</td>
                    <td>{$row['house_no._street']}</td>
                    <td>{$row['barangay']}</td>
                    <td>{$row['municipality/province/country']}</td>
                    <td>{$row['zip_code']}</td>
                    <td>{$row['father_name']}</td>
                    <td>{$row['mother_name']}</td>
                    <td>{$row['telephone_no.']}</td>
                    <td>{$row['cellphone_no.']}</td>
                    <td>{$row['grade_level_completed']}</td>
                    <td>{$row['school_year_completed']}</td>
                    <td>{$row['school_name']}</td>
                    <td>{$row['school_id']}</td>
                    <td>{$row['school_address']}</td>
                    <td>{$row['semester']}</td>
                    <td>{$row['track']}</td>
                    <td>{$row['strand']}</td>
                    <td>
                        <a class='btn btn-primary ml-4 mb-2' href='./edit_reg.php?register_id=$row[register_id]'>Edit</a>
                        <a class='btn btn-danger ml-3' href='./delete_reg.php?register_id=$row[register_id]'>Delete</a>
                    </td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>
    <a href="registration.php" class="btn btn-success">Add Register</a>

</div>
<?php include('footer.php'); ?>
