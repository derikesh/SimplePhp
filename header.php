<?php include 'makelogin.php' ?>

<?php 



session_start(); // Start the session



?>

<header>

        <div class="nav_Container">
         <nav class="navbar">
             <a href="/index.html" class="nav-logo"><img src="./src/images/logo.svg" alt=""></a>
             <ul class="nav-menu">
                 <li class="nav-item">
                     <a href="index.php" class="nav-link">Home</a>
                 </li>
                 <li class="nav-item">
                     <a href="about.php" class="nav-link">About</a>
                 </li>


                 <?php 
                 
                 if( isset($_SESSION['username']) ) {
                    echo '<li class="nav-item">
                    <a href="addcar.php" class="nav-link">Sell Car</a>
                </li>';
                 }
                 
                 ?>
                 
                 <li class="nav-item">
                  <a href="sellerpage.php" class="nav-link">All Cars</a>
              </li>
              <?php 
              
              if (isset($_SESSION['username'])) {
                echo'';
            } else {
                echo '<li class="nav-item">
                <a href="registration.php" class="nav-link">Registration</a>
            </li>';
            }

              ?>
              
                <?php if( isset($_SESSION['username']) ) {
                        echo '<li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>';
                } else {
                    echo '
                    
                    
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>';
                }
                
                
                ?> 
                 
             </ul>
             <div class="hamburger">
                 <span class="bar"></span>
                 <span class="bar"></span>
                 <span class="bar"></span>
             </div>
         </nav>
        </div>
  
     </header>