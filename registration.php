<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
  </head>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
</style>


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap');
  </style>

  <link rel="stylesheet" href="src/style.css" />
<link rel="stylesheet" href="/src/responsive.css">


  <body>
    
    
  <?php 

include 'header.php'

?>   




    <!-- about company ,location , telephone , mail address , staffnames and picture -->

    <!-- banner image -->

    <div class="banner_wrap">
      <div class="banner_container">
        <div class="overlay"></div>

        <div class="container">
          <h1>Seller Registration</h1>
        </div>
      </div>
    </div>

    <!-- banner image ends -->

    <!-- from starts -->
<div class="whole_Wrap">

  <div class="form_container">

    <h1>Seller Registration</h1>
    <div class="form_wrap">

        <form name="registrationForm" action="dataregistration.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
    
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required><br><br>
    
            <label for="phoneNumber">Phone Number:</label>
            <input type="text" id="phoneNumber" name="phoneNumber" required><br><br>
    
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required><br><br>
    
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
    
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
    
            <button type="submit">Register</button>
        </form>

        

    </div>


    </div>

   <div class="form_over">


</div>


    <!-- form ends -->

<!-- script -->
<script src="./src/app.js"></script>

</body>
  </html>
  