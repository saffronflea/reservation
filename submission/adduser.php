<?php 
require 'function.php';
include('header.php');  ?>

    <h1 class="h-title">Registration Form</h1>
    <h3 class="f-title">Personal Information</h3>
    </nav>

    <table class="row2" >
    <form method="post" enctype="multipart/form-data">
        <tr><td> Name:</td>
        <td> <input type="text" name="name" required> <br></tr></td>
        <tr><td>Birth Certificate:</td>
        <td><input type="file" name="file" required> <br></tr></td>
        <tr><td>Vaccination Card:</td>
        <td><input type="file" name="file1" required> <br></tr></td> 
        <tr><td>Report Card / form 138 :</td>
        <td><input type="file" name="file2" required> <br></tr></td>
        <tr> <td>Parent's Consent:</td>
        <td><input type="file" name="file3" required> <br></tr></td>
        <button type="submit" class="button-submit" name="submit" value="add">Add</button>
        </form>
        </table>

        
        <a href="index.php"><input type="button" class="button-c" value="Index"></a>

<br>
<?php include('footer.php'); ?>