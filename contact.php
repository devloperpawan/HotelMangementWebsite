<?php
include "connectdata.php";
if(isset($_POST['sbmt'])){
    $studname = $_POST['sname'];
    $phonenumber = $_POST['pnumber'];
    $email = $_POST['gmail'];

    $sql = "INSERT INTO `contact` (`Name`, `phone number`, `email`) VALUES ('$studname', '$phonenumber', '$email')";
$execute = mysqli_query($conn,$sql);
if($execute){
    echo "The record is inserted succesfully";
}

else{
    echo "The record is not insert.";
    mysqli_error($conn);
}
}
?>