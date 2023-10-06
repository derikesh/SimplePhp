<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
  </head>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");
  </style>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap");
  </style>

  <link rel="stylesheet" href="src/style.css" />
  <link rel="stylesheet" href="/src/responsive.css" />

  <body>
      
<?php 

include 'header.php'

?>   


    <!-- banner image -->

    <div class="banner_wrap">
      <div class="banner_container">
        <div class="overlay"></div>

        <div class="container">
          <h1>ABOUT US</h1>
        </div>
      </div>
    </div>

    <!-- banner image ends -->

    
<!-- search button -->

<div class="container_search">

<h2>Car Search</h2>

<form action="searchcar.php" method="POST">

   <div>
    <label for="model">Model:</label>
    <input type="text" id="model" name="model" required placeholder="Enter car model">
   </div>
    
   <div>
    <label for="location">Location:</label>
    <input type="text" id="location" name="location" required placeholder="Enter location">
   </div>
    
    <button type="submit">Search</button>
</form>

</div>


    <div class="car_container">

<h2 class="heading">Car for sell</h2>

<div class="cars_wrap">

<?php 


$connect = mysqli_connect( 'localhost','root','','carselling' );

if( !$connect ){
    echo "no connection betweeen database and website ";
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $model = $_POST["model"];
    $location = $_POST["location"];

    $sql = "SELECT * FROM newcars WHERE carmodel LIKE '%$model%' AND carlocation LIKE '%$location%'";

    $result = $connect->query($sql);

   
    if ($result->num_rows > 0) {       
        

        while ($row = $result->fetch_assoc()) {

            $carmodel = $row["carmodel"];
            $carmake = $row["carmake"]; 
            $carprice = $row["carprice"];
            $carlocation = $row["carlocation"];

            echo '  <div class="single_Car">
            <div class="about_Car">
                <div class="car_model"><h2>' . $carmake . '</h2></div>
                <div class="car_model"><h4>' . $carmodel . '</h4></div>
                <div class="car_price">$' . $carprice . '</div>
                <div class="car_location">' . $carlocation . '</div>
            </div>
        </div> ';
        }
        
        echo "</table>";
    } else {
        echo "No matching cars found.";
    }
}

$connect->close();


?>


</div>

</div>
<!-- script -->
<script src="./src/app.js"></script>

</body>
  </html>
  