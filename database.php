<?php
include "connectdata.php"; 
if(isset($_POST['submit'])){
$title = $_POST['prof'];
$name = $_POST['uname'];
$lastname = $_POST['ulstname'];
$email = $_POST['mail'];
$nationality=$_POST['nation'];
$pcountry = $_POST['country'];
$phonnumber = $_POST['cnumber'];

// Reservation information

$typroom = $_POST['troom'];
$typbed = $_POST['btype'];
$melplan = $_POST['mplan'];
$datein = $_POST['Checkin'];
$dateout = $_POST['Checkout'];
// Personal information
$sql = "INSERT INTO `personalinf` (`Title`, `FirstName`, `LastName`, `Email`,`Nationality`,`Passportcountry`,`phone number`) VALUES ('$title', '$name', '$lastname', '$email','$nationality','$pcountry','$phonnumber')";
$execute = mysqli_query($conn,$sql);
// Reservation information
$sqli = "INSERT INTO `reservation info` (`Type of Room`,`Bedding Type`,`Meal plan`,`Check in`,`check out`) VALUES ('$typroom','$typbed','$melplan','$datein','$dateout')";
$exv = mysqli_query($conn,$sqli);

if($execute){
    echo "The record is inserted succesfully";
}
else{
    echo "The record is not insert.";
    mysqli_error($conn);
}
}
?>