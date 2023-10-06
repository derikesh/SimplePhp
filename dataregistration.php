<?php 

$connect = mysqli_connect('localhost','root');

if( $connect ){

    echo "connection sucess";

} else {

    echo "conntection failed";
}


mysqli_select_db( $connect , 'carselling' );

$name = $_POST['name'];
$address = $_POST['address'];
$number = $_POST['phoneNumber'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = " insert into registration ( name , address , number , email , username , password ) values ( '$name' ,'$address' ,'$number' ,'$email' ,'$username' ,'$password'  )";

mysqli_query( $connect , $query );


header( 'location:index.php' )

?>