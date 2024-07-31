<?php
include('connect.php');
session_start();

$register_id = $_REQUEST["register_id"];
$select = "SELECT * FROM register WHERE register_id = '" . $register_id . "' ";
$result = mysqli_query($connection, $select);
$row = mysqli_fetch_assoc($result);

// Initialize the message variable and redirect flag
$msg = "";
$redirectToRegister = false;

if (isset($_POST['new']) && $_POST['new'] == 1) {
   $school_year = $_REQUEST['school_year'];
   $grade_level = $_REQUEST['grade_level'];
   $appropriate = implode($_REQUEST['appropriate']);
   $lrn = $_REQUEST['lrn'];
   $lastname = $_REQUEST['lastname'];
   $firstname = $_REQUEST['firstname'];
   $middlename = $_REQUEST['middlename'];
   $extension = $_REQUEST['extension'];
   $birthdate = $_REQUEST['birthdate'];
   $sex = $_REQUEST['sex'];
   $age = $_REQUEST['age'];
   $mother_tongue = $_REQUEST['tongue'];
   $house_no_street = $_REQUEST['house_no_street'];
   $barangay = $_REQUEST['barangay'];
   $city = $_REQUEST['city'];
   $zipcode = $_REQUEST['zipcode'];
   $fathername = $_REQUEST['father'];
   $mothername = $_REQUEST['mother'];
   $telephone = $_REQUEST['telephone'];
   $cellphone = $_REQUEST['cellphone'];
   $grade_completed = $_REQUEST['grade_completed'];
   $year_completed = $_REQUEST['year_completed'];
   $school_name = $_REQUEST['schoolname'];
   $school_id = $_REQUEST['school_id'];
   $school_address = $_REQUEST['school_address'];
   $semester = implode($_REQUEST['sem']);
   $track = $_REQUEST['track'];
   $strand = $_REQUEST['strand'];

    $update = "UPDATE `register` SET `school_year`='$school_year',`grade_level`='$grade_level',`appropriate_check`='$appropriate',`LRN`='$lrn',`lastname`='$lastname',`firstname`='$firstname',`middlename`='$middlename',`extension_name`='$extension',`birthdate`='$birthdate',`sex`='$sex',`age`='$age',`mother_tongue`='$mother_tongue',`house_no._street`='$house_no_street',`barangay`='$barangay',`municipality/province/country`='$city',`zip_code`='$zipcode',`father_name`='$fathername',`mother_name`='$mothername',`telephone_no.`='$telephone',`cellphone_no.`='$cellphone',`grade_level_completed`='$grade_completed',`school_year_completed`='$year_completed',`school_name`='$school_name',`school_id`='$school_id',`school_address`='$school_address',`semester`='$semester',`track`='$track',`strand`='$strand' WHERE register_id ='" .
    $register_id . "'";
    mysqli_query($connection, $update);

    // Set a success message and flag for redirection
    $msg = "Record updated successfully!";
    $redirectToRegister = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta title="Cristy's and Villa Cristeta's Event Place" property= "og:title" >
    <meta name="description" content= "Rice farm workshops are an important part of new generational agricultural education. And was selected to contribute to the development of rural culture. We use traditional solutions, disinfectants, pesticides, water, and other post-storage conditions. Farm workers will increase their income by attending workshops. It is a joint venture with agricultural experts, fellow farmers, and scholars involved in intellectual agricultural trading and receives funding from the government itself. The group aims to support agriculture and food, increase income, and strengthen local communities. this seminar should help our farmers to reach their dreams.">
    <meta name = "author" content= "Ashley Nicole B. Dominguez, Scarlet S. Medina, Mariane D. Quaimbao">
    <meta name="keywords" content= "Rice, Cultivation, Growing, Projects, Government"/>
    <meta property="og:url" content= "">
    <link rel="shortcut icon" href="img\324109671_1105900046757367_3741203284428634886_n-removebg-preview.png" type="image/x-icon">
   <title>Cristy's and Villa Cristeta's Event Place</title>
    <!--bootstrap for icon-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--tailwind-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--css-->
    <link rel="stylesheet" href="css\style.css">
</head>
<body style="background-color: #87A922!important;">
<section class="sticky top-0 ">
      <nav class="border-gray-200 bg-[#114232]">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-2">
          <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
              <img src="img\324109671_1105900046757367_3741203284428634886_n-removebg-preview.png" href="index.php" class="h-[90px]" alt="cristy's" />
          </a>
          <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
          <div class="ml-[-90px]">
          <span class=" hidden lg:block text-2xl text-[#1D5B79] font-semibold whitespace-nowrap ">Cristy's and Villa Cristeta's Event Place</span>
          </div>
          <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
              <li>
                <a class="block p-4  text-[#F7F6BB] rounded hover:bg-[#0d3025] md:border-0 md:hover:text-[#FCDC2A]" aria-current="page" href="index.php">Home</a>
              </li>
              <li>
                <a class="block p-4  text-[#F7F6BB] rounded hover:bg-[#0d3025] md:border-0 md:hover:text-[#FCDC2A]" href="about.php">About</a>
              </li>
              <li>
                <a class="block p-4  text-[#F7F6BB] rounded hover:bg-[#0d3025] md:border-0 md:hover:text-[#FCDC2A]" href="contacts.php">Contacts</a>
              </li>
              <li>
                <a class="block p-4  text-[#F7F6BB] rounded hover:bg-[#0d3025] md:border-0 md:hover:text-[#FCDC2A]" href="services.php">Services</a>
              </li>
              <li>
                <a class="block p-4  text-[#F7F6BB] rounded hover:bg-[#0d3025] md:border-0 md:hover:text-[#FCDC2A]" href="gallery.php">Gallery</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <form action="" method="post">
    <input type="hidden" name="new" value="1">
    <h1 class="h-title">UPDATE ENROLLMENT FORM</h1>
    <div class="first_line">
    <label >School Year:</label>
    <input type="text" class="inputForm" name="school_year" value="<?php echo $row['school_year'];?>">
    <label>Check the Appropriate box only:</label>
<input type="checkbox" class="checkForm" name="appropriate[]" value="Returning(balik-aral)" <?php echo (in_array('Returning(balik-aral)', explode(',', $row['appropriate_check']))) ? 'checked' : ''; ?>><label>Returning(balik-aral)</label>
<input type="checkbox" class="checkForm" name="appropriate[]" value="No Lrn" <?php echo (in_array('No Lrn', explode(',', $row['appropriate_check']))) ? 'checked' : ''; ?>><label>No Lrn:</label>
<input type="checkbox" class="checkForm" name="appropriate[]" value="With Lrn" <?php echo (in_array('With Lrn', explode(',', $row['appropriate_check']))) ? 'checked' : ''; ?>><label>With Lrn:</label>


    
</div>
    <div class="first_line">
    <label>Grade Level:</label>
   <select name="grade_level" class="selectForm">
  <option value=""></option>
  <option value="11" <?php echo ($row['grade_level'] == '11') ? 'selected' : ''; ?>>11</option>
  <option value="12" <?php echo ($row['grade_level'] == '12') ? 'selected' : ''; ?>>12</option>
  </select>
</div>
    <h5 class="f-title">STUDENT INFORMATION</h5>
    <div class="first_line">
    <div>
    <label>LRN:</label>
    <input type="number" class="inputForm" name="lrn" value="<?php echo $row['lrn']; ?>" required>
</div>
<div class="first_line">
    <label>Lastname:</label>
    <input type="text" class="inputForm" name="lastname" value="<?php echo $row['lastname']; ?>" required>
    <label>Firstname:</label>
    <input type="text" class="inputForm" name="firstname" value="<?php echo $row['firstname']; ?>" required>
    <label>Middlename:</label>
    <input type="text" class="inputForm" name="middlename" value="<?php echo $row['middlename']; ?>" required>
</div>
<div class="first_line">
    <label>Extension name:</label>
    <select name="extension" class="selectForm">
        <option value=""></option>
        <option value="Jr." <?php echo ($row['extension_name'] == 'Jr.') ? 'selected' : ''; ?>>Jr.</option>
        <option value="III" <?php echo ($row['extension_name'] == 'III') ? 'selected' : ''; ?>>III</option>
        <option value="IV" <?php echo ($row['extension_name'] == 'IV') ? 'selected' : ''; ?>>IV</option>
    </select>
</div>
<div class="first_line">
    <label>Date of Birth:</label>
    <input type="date" class="selectForm" name="birthdate" value="<?php echo $row['birthdate']; ?>" required>

    <label>Gender:</label>
    <select name="sex" class="selectForm" required>
        <option value=""></option>
        <option value="Male" <?php echo ($row['sex'] == 'Male') ? 'selected' : ''; ?>>Male</option>
        <option value="Female" <?php echo ($row['sex'] == 'Female') ? 'selected' : ''; ?>>Female</option>
    </select>

    <label>Age:</label>
    <input type="number" class="selectForm" name="age" value="<?php echo $row['age']; ?>" required>

    <label>Mother Tongue:</label>
    <input type="text" class="inputForm" name="tongue" value="<?php echo $row['mother_tongue']; ?>" required>
</div>

<div class="first_line">
    <h5 class="f-title1">ADDRESS</h5>
    <label>House Number and Street:</label>
    <input type="text" class="inputForm" name="house_no_street" value="<?php echo $row['house_no._street']; ?>" required>
    <label>Barangay:</label>
    <input type="text" class="inputForm" name="barangay" value="<?php echo $row['barangay']; ?>" required>
</div>
<div class="first_line">
    <label>City/Municipality/Province/Country:</label>
    <input type="text" class="inputForm1" name="city" value="<?php echo $row['municipality/province/country']; ?>" required>
    <label>Zip Code:</label>
    <input type="number" class="selectForm" name="zipcode" value="<?php echo $row['zip_code']; ?>" required>
</div>
<div class="first_line">
    <h5 class="f-title1">PARENT'S/GUARDIAN'S INFORMATION</h5>
    <label>Father's Name:</label>
    <input type="text" class="inputForm" name="father" value="<?php echo $row['father_name']; ?>" required>
    <label>Mother's Name:</label>
    <input type="text" class="inputForm" name="mother" value="<?php echo $row['mother_name']; ?>" required>
</div>
<div class="first_line">
    <label>Telephone No.:</label>
    <input type="number" class="inputForm" name="telephone" value="<?php echo $row['telephone_no.']; ?>">
    <label>Contact No.:</label>
    <input type="number" class="inputForm" name="cellphone" value="<?php echo $row['cellphone_no.']; ?>">
</div>
<h5 class="f-title">For Returning Learners(Balik-Aral) and Those Who Shall Transfer/Move In</h5>
<div class="first_line">
    <label>Last Grade Level Completed:</label>
    <input type="number" class="inputForm" name="grade_completed" value="<?php echo $row['grade_level_completed']; ?>">
    <label>Last School Year Completed:</label>
    <input type="text" class="inputForm" name="year_completed" value="<?php echo $row['school_year_completed']; ?>">
</div>
<div class="first_line">
    <label>School Name:</label>
    <input type="text" class="inputForm" name="schoolname" value="<?php echo $row['school_name']; ?>">
    <label>School ID:</label>
    <input type="number" class="selectForm" name="school_id" value="<?php echo $row['school_id']; ?>">
</div>
<div class="first_line">
    <label>School Address:</label>
    <input type="text" class="inputForm1" name="school_address" value="<?php echo $row['school_address']; ?>">
</div>

<h5 class="f-title">For Learners in Senior High School</h5>
<div class="first_line">
    <label class="sem-align">Semester:</label>
    <input type="checkbox" class="checkForm" name="sem[]" value="1st Sem" <?php echo (in_array('1st Sem', explode(',', $row['semester']))) ? 'checked' : ''; ?>><label>1st Sem</label>
    <input type="checkbox" class="checkForm" name="sem[]" value="2nd Sem" <?php echo (in_array('2nd Sem', explode(',', $row['semester']))) ? 'checked' : ''; ?>><label>2nd Sem</label>
</div>
<div class="first_line">
    <label>Track:</label>
    <input type="text" class="inputForm" name="track" value="<?php echo $row['track']; ?>">
    <label>Strand (if any):</label>
    <input type="text" class="inputForm" name="strand" value="<?php echo $row['strand']; ?>">
</div>
<div class="button_line">
<button class="button-submit" name="submit">Submit</button>
</div>
</form>
        <?php
        // Display the success message as a JavaScript alert and redirect after a delay
        if (!empty($msg)) {
            echo "<script>alert('$msg');</script>";
            if ($redirectToRegister) {
                echo "<script>setTimeout(function(){window.location.href='admin_register.php';}, 500);</script>";
            }
        }
        ?>
    </div>
</div>
<?php include('footer.php'); ?>
