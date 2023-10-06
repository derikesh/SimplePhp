<?php
$connect = mysqli_connect('localhost', 'root', '', 'carselling');

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM registration WHERE Username='$username' AND Password='$password'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['username'] = $username;
        header('Location: addcar.php'); 
    } else {
        echo "Login failed. Please check your username and password.";
    }
}
mysqli_close($connect);
?>
