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
}
?>
     
<section class="lg:m-8 lg:mx-32 mx-[-20px] rounded bg-[#B4E380] lg:flex lg:justify-items-center place-content-center">
        <form class="mx-16 my-4" action="" method="post">
            <br>
        <h1 class="text-center mb-1 font-semibold text-[30px]">Reservation Form</h1>
        <p class="text-center  pb-2 font-semibold text-[#114232]">A home that unites families.</p>
        <div class="lg:flex lg:justify-items-center place-content-center lg:ml-[-50px] mt-[30px] lg:m-[20px] lg:mt-[49px]">
        <h2 class="text-left lg:mt-[-25px] lg:ml-[40px] font-semibold text-[#114232]">Fullname: </h2>
            <div class="lg:flex grid lg:ml-[-60px]">
                
                <input type="text" placeholder=" Firstname: " class="placeholder-[#114232] p-3 rounded bg-transparent border-[#114232] border-2" name="last_name" required>
                &nbsp;&nbsp;
                <input type="text" placeholder=" Lastname: " class="placeholder-[#114232] p-3 rounded bg-transparent border-[#114232] border-2" name="first_name" required>
                &nbsp;&nbsp;&nbsp;
            </div>
            <h2 class="lg:text-center order-last text-left lg:mt-[-25px] font-semibold text-[#114232]"> Number of Guests(including you):</h2>
            <div  class="lg:flex grid lg:ml-[-70px] order-last">
            <input type="number" placeholder="ex: 6" class="placeholder-[#114232] lg:ml-[-190px] p-2 rounded p-3 bg-transparent border-[#114232] border-2" name="number_of_guests">
            </div>
            <h2 class="lg:text-center text-left lg:mt-[-25px]  font-semibold text-[#114232]">Email:</h2>
            <div class="lg:flex grid lg:ml-[-53px]">
                <input type="email" placeholder="ex: juan123@gmail.com" class="placeholder-[#114232] p-2 rounded p-3 bg-transparent border-[#114232] border-2" name="email_address" required>
                &nbsp;&nbsp;
            </div>
        </div>
        <h2 class="lg:text-center text-left lg:mt-[49px] ml-[-20px] text-[30px] lg:ml-[10px] mt-12 font-semibold text-nowrap text-[#114232]"> Arrival Date & Time:</h2>
        <div class="first_line lg:flex lg:justify-items-center place-content-center lg:mt-8 m-2">
        <h2 class="text-center lg:mt-[-25px] font-semibold text-[#114232] " >Date:</h2>
            <div  class="lg:flex grid p-2 lg:ml-[-40px]">
            <input type="date" class="placeholder-[#114232] w-[200px] p-2 rounded bg-transparent border-[#114232] border-2" name="date" required>
            </div>
        <h2 class="text-center lg:mt-[-25px] mt-[15px] lg:ml-[110px] mt-12 font-semibold  text-[#114232]">Time:</h2>
            <div  class="lg:flex grid p-2 lg:ml-[-150px]">
            <input type="time" id="appt" name="time" class="placeholder-[#114232] bg-transparent p-2 w-[200px] border-[#114232] border-2 rounded" required>
            </div>
        </div>
        <h2 class="lg:text-center  lg:mt-[49px] ml-[-40px] text-[30px] lg:ml-[10px] mt-12 font-semibold text-nowrap text-[#114232]"> Departure Date & Time:</h2>
        <div class="first_line lg:flex lg:justify-items-center place-content-center lg:mt-8 m-2">
        <h2 class="text-center lg:mt-[-25px] mt-[15px]  lg:ml-[10px] mt-12 font-semibold text-[#114232]">Date:</h2>
            <div  class="lg:flex grid p-2 lg:ml-[-40px]">
            <input type="date" class="placeholder-[#114232] w-[200px] p-2 rounded bg-transparent border-[#114232] border-2 rounded" name="date2" required>
            </div>
            <h2 class="text-center lg:mt-[-25px] mt-[15px]  lg:ml-[110px] mt-12 font-semibold  text-[#114232]">Time:</h2>
            <div  class="lg:flex grid p-2 lg:ml-[-150px]">
            <input type="time" id="appt" name="time2" class="placeholder-[#114232] bg-transparent p-2 w-[200px] border-[#114232] border-2 rounded" required>
            </div>
        </div>
          <div class="lg:flex lg:justify-items-center grid place-content-center m-8">
            <h2 class="lg:text-left text-center lg:mt-[9px] lg:ml-[60px] mt-12 font-semibold text-[#114232]"> Bringing vehicles?</h2>
            <div  class="lg:flex grid p-2 lg:mt-0">
              <select type="number" name="vehicle" class="bg-transparent border-[#114232] p-2 border-2 rounded" required>
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
              <h2 class=" lg:mt-[-15px] mt-[1px] lg:mr-[-190px] mt-12 font-semibold text-[#114232]"> Number of Vehicles:</h2>
              <div  class="lg:flex grid p-2 lg:ml-[40px] ">
              <input type="number" placeholder="ex: 6" class="placeholder-[#114232] p-2 rounded lg:w-[200px] bg-transparent border-[#114232] border-2 rounded" name="vehicles">
              </div>
            </div>
            </div>
            <div class="lg:flex lg:justify-items-center grid place-content-center mt-8">
            <h2 class="text-right lg:mt-[-15px] mt-[15px] mt-12 font-semibold text-[#114232]">Have any Request?</h2>
            <div  class="lg:flex grid p-2 ">
            <textarea id="appt" name="request" class="bg-transparent p-1 border-[#114232] lg:ml-[-150px] lg:w-[500px] border-2 rounded" ></textarea>
            </div>
            </div>
            <div class="lg:flex lg:justify-items-center grid place-content-center m-4 p-4">
            <button href="login_success.php" class="border-solid border-[#114232] hover:bg-[#114232] border-2 p-2 mr-8 rounded" name="submit">Submit</button>
            <br>
            <button class="border-solid border-[#114232] hover:bg-[#114232] border-2 p-2 rounded">Reset</button>
            </div>
    </form>
</section>
</section>
