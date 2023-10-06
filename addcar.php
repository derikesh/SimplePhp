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



<!-- add section starts -->


    <div class="add_section_Wrap">

        <div class="add_container">
          
            <div class="form_wrap_add">

              <form name="registrationForm" action="newcar.php" method="post">

                 <div>
                  <label for="name">Make:</label>
                  <input type="text" id="name" name="carmake" required>
          
                 </div>


                  <div>
                    <label for="model">Model:</label>
                  <input type="text" id="model" name="carmodel" required>
                  </div>
          
                 <div>
                  <label for="year">Year:</label>
                  <input type="text" id="year" name="caryear" required>
                 </div>
          
                  <div>
                    <label for="Mileage">Mileage:</label>
                  <input type="number" id="Mileage" name="carmilage" required>
                  </div>
          
                  <div>
                    <label for="Location">Location:</label>
                  <input type="text" id="Location" name="carlocation" required>
                  </div>
          
                 <div>
                  <label for="price">Price:</label>
                  <input type="number" id="price" name="carprice" required>
                 </div>
          
                  <div>
                    <button type="submit">Add Car</button>
                  </div>
              </form>
      
              
      
          </div>



          


        </div>

    </div>


<!-- add car ends -->



    <!-- script -->
    <script src="./src/app.js"></script>

</body>
  </html>
  