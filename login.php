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
          <h1>Seller Page</h1>
        </div>
      </div>
    </div>


<!-- login for seller -->

<div class="login_warp">
    
    <div class="login_form_reg">

    <h3>Seller Login</h3>


        <form id="loginForm" action="makelogin.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <button class="reg_btn" type="submit">Login</button>
         

        </form>

    </div>

</div>

<!-- ends -->


    <!-- script -->
<script src="./src/app.js"></script>

</body>
  </html>
  