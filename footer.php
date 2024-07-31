<?php 
if(isset($_POST['submit'])){
    $emailAddress =$_POST['email_address'];
    // Construct the query
    
    $query = "INSERT INTO `register` (`email_address`)
              VALUES ('$emailAddress')";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check for errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    } else {
      exit();
  }
}
?>
<footer class="md:p-8 p-4 bg-[#114232] border-black border-solid border-t-2 ">
       <div class="md:grid md:grid-cols-3 gap-4 content-normal text-center">
       <div class="grid place-content-center py-4">
        <img src="img\324109671_1105900046757367_3741203284428634886_n-removebg-preview.png" href="index.php" class="h-[150px]" alt="cristy's" />
        </div>
        <div class="grid place-content-center md:border-black md:border-solid md:border-x-2"><ul>
              <li class="py-2">
                <a class="block p-4 text-[#F7F6BB] rounded hover:bg-[#0d3025] md:border-0 md:hover:text-[#FCDC2A]" href="about.php">About</a>
              </li>
              <li class="py-2">
                <a class="block p-4 text-[#F7F6BB] rounded hover:bg-[#0d3025] md:border-0 md:hover:text-[#FCDC2A]" href="contacts.php">Contacts</a>
              </li>
              <li class="py-2">
                <a class="block p-4 text-[#F7F6BB] rounded hover:bg-[#0d3025] md:border-0 md:hover:text-[#FCDC2A]" href="services.php">Services</a>
              </li>
              <li class="py-2">
                <a class="block p-4 text-[#F7F6BB] rounded hover:bg-[#0d3025] md:border-0 md:hover:text-[#FCDC2A]" href="gallery.php">Gallery</a>
              </li>
        </ul></div>
        <div class="grid place-content-center py-4 text-[#F7F6BB]">
        <form action="login.php" method="POST">
    <p class="font-bold">Keep up with the news from us</p>
    <br>
    <input type="email" placeholder="Email: " name="email_address" class="placeholder-[#FCDC2A] p-3 w-full bg-transparent border-2 border-solid border-[#F7F6BB] hover:border-[#FCDC2A] focus:border-[#FCDC2A] focus:outline-none rounded" required>
    <br>
    <br>
    <button type="submit" class="border-transparent hover:bg-[#0d3025] p-3 rounded md:hover:text-[#FCDC2A]" name="submit">SUBSCRIBE</button>
</form>

        </div>
       </div>
       <div>
            <ul class="flex justify-between mx-[300px] pt-[60px] text-[#F7F6BB] ">
                <li class="md:hover:text-[#FCDC2A]"><a href="" aria-label=" its to button facebook">0936-936-4829</li>
                <li class="md:hover:text-[#FCDC2A]"><a href="https://www.facebook.com/profile.php?id=100088962019950" aria-label=" its to button facebook">
                <i class="bi bi-facebook"></i>Cristy's Event Place</a>
                </li>
                <li class="md:hover:text-[#FCDC2A]"><a href="#" aria-label=" its to button facebook">0927-048-6217</li>
            </ul>
        </div>
    </footer>
</body>
<!-- Add Bootstrap JS and jQuery links (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>