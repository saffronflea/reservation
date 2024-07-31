<?php
include('header.php');
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
    

<!-- Button to open the modal -->
<button class="open-modal-button bg-[#114232] text-white p-2 rounded" onclick="openModal()">Open Reservation Form</button>

<!-- Modal Structure -->
<div id="reservationModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50 hidden">
    <div class="bg-[#B4E380] rounded lg:m-8 lg:mx-32 mx-4 p-4 lg:flex lg:justify-center place-content-center max-w-4xl w-full">
        <div class="relative bg-white p-6 rounded-lg w-full">
            <!-- Close button -->
            <button class="absolute top-0 right-0 p-2 text-black hover:text-red-600" onclick="closeModal()">&times;</button>
            
            <!-- Form starts here -->
            <form action="" method="post">
                <h1 class="text-center mb-1 font-semibold text-[30px]">Reservation Form</h1>
                <p class="text-center pb-2 font-semibold text-[#114232]">A home that unites families.</p>
                
                <div class="lg:flex lg:justify-center place-content-center mt-6 lg:m-4">
                    <h2 class="font-semibold text-[#114232] lg:mr-4">Fullname:</h2>
                    <div class="lg:flex grid">
                        <input type="text" placeholder=" Firstname: " class="placeholder-[#114232] p-3 rounded bg-transparent border-[#114232] border-2" name="first_name" required>
                        <input type="text" placeholder=" Lastname: " class="placeholder-[#114232] p-3 rounded bg-transparent border-[#114232] border-2 lg:ml-4" name="last_name" required>
                    </div>
                </div>
                
                <div class="lg:flex lg:justify-center place-content-center mt-4 lg:m-4">
                    <h2 class="font-semibold text-[#114232] lg:mr-4">Number of Guests (including you):</h2>
                    <input type="number" placeholder="ex: 6" class="placeholder-[#114232] p-3 rounded bg-transparent border-[#114232] border-2 w-full lg:w-auto" name="number_of_guests">
                </div>

                <div class="lg:flex lg:justify-center place-content-center mt-4 lg:m-4">
                    <h2 class="font-semibold text-[#114232] lg:mr-4">Email:</h2>
                    <input type="email" placeholder="ex: juan123@gmail.com" class="placeholder-[#114232] p-3 rounded bg-transparent border-[#114232] border-2 w-full lg:w-auto" name="email_address" required>
                </div>

                <div class="mt-6">
                    <h2 class="text-center text-[30px] font-semibold text-[#114232]">Arrival Date & Time:</h2>
                    <div class="lg:flex lg:justify-center place-content-center mt-4 lg:m-4">
                        <h2 class="font-semibold text-[#114232] lg:mr-4">Date:</h2>
                        <input type="date" class="placeholder-[#114232] p-3 rounded bg-transparent border-[#114232] border-2 w-full lg:w-auto" name="date" required>
                        <h2 class="font-semibold text-[#114232] lg:ml-4 lg:mr-4">Time:</h2>
                        <input type="time" class="placeholder-[#114232] p-3 rounded bg-transparent border-[#114232] border-2 w-full lg:w-auto" name="time" required>
                    </div>
                </div>

                <div class="mt-6">
                    <h2 class="text-center text-[30px] font-semibold text-[#114232]">Departure Date & Time:</h2>
                    <div class="lg:flex lg:justify-center place-content-center mt-4 lg:m-4">
                        <h2 class="font-semibold text-[#114232] lg:mr-4">Date:</h2>
                        <input type="date" class="placeholder-[#114232] p-3 rounded bg-transparent border-[#114232] border-2 w-full lg:w-auto" name="date2" required>
                        <h2 class="font-semibold text-[#114232] lg:ml-4 lg:mr-4">Time:</h2>
                        <input type="time" class="placeholder-[#114232] p-3 rounded bg-transparent border-[#114232] border-2 w-full lg:w-auto" name="time2" required>
                    </div>
                </div>

                <div class="mt-6 lg:flex lg:justify-center place-content-center">
                    <h2 class="font-semibold text-[#114232] lg:mr-4">Bringing vehicles?</h2>
                    <select name="vehicle" class="bg-transparent border-[#114232] p-2 border-2 rounded w-full lg:w-auto" required>
                        <option value=""></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <h2 class="font-semibold text-[#114232] lg:ml-4 lg:mr-4">Number of Vehicles:</h2>
                    <input type="number" placeholder="ex: 6" class="placeholder-[#114232] p-3 rounded bg-transparent border-[#114232] border-2 w-full lg:w-auto" name="vehicles">
                </div>

                <div class="mt-6 lg:flex lg:justify-center place-content-center">
                    <h2 class="font-semibold text-[#114232] lg:mr-4">Have any requests?</h2>
                    <textarea name="request" class="bg-transparent p-3 border-[#114232] w-full border-2 rounded"></textarea>
                </div>

                <div class="mt-8 lg:flex lg:justify-center place-content-center">
                    <button type="submit" class="border-solid border-[#114232] hover:bg-[#114232] border-2 p-2 rounded text-[#114232] hover:text-white mr-4" name="submit">Submit</button>
                    <button type="reset" class="border-solid border-[#114232] hover:bg-[#114232] border-2 p-2 rounded text-[#114232] hover:text-white">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function openModal() {
    document.getElementById('reservationModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('reservationModal').classList.add('hidden');
}
</script>
