<?php 


$connect = mysqli_connect('localhost','root');

if( $connect ){

    echo "connection sucess";

} else {

    echo "conntection failed";
}


mysqli_select_db( $connect , 'carselling' );

$carmake = $_POST['carmake'];
$carmodel = $_POST['carmodel'];
$caryear = $_POST['caryear'];
$carmilage = $_POST['carmilage'];
$carlocation = $_POST['carlocation'];
$carprice = $_POST['carprice'];


$query = " insert into newcars ( carmake , carmodel , caryear , carmilage , carlocation , carprice ) values ( '$carmake' ,'$carmodel' ,'$caryear' ,'$carmilage' ,'$carlocation' ,'$carprice'  )";

mysqli_query( $connect , $query );


header( 'location:sellerpage.php' )

?>

?>